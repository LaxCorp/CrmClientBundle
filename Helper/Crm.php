<?php

namespace LaxCorp\CrmClientBundle\Helper;

use Doctrine\Common\Annotations\Reader;
use JMS\Serializer\Annotation;
use JMS\Serializer\Serializer;
use LaxCorp\CrmClientBundle\Exception\CrmClientException;
use LaxCorp\CrmClientBundle\Exception\CrmException;
use LaxCorp\CrmClientBundle\Model\CrmModelInterface;
use Salaros\Vtiger\VTWSCLib\WSException;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

/**
 * @inheritdoc
 */
abstract class Crm
{

    /**
     * @var Api
     */
    public $api;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @var Reader
     */
    private $reader;

    /**
     * @var EngineInterface
     */
    private $templating;

    /**
     * @inheritdoc
     */
    public function __construct(Api $api, Serializer $serializer, Reader $reader, EngineInterface $templating)
    {
        $this->api        = $api;
        $this->serializer = $serializer;
        $this->reader     = $reader;
        $this->templating = $templating;
    }

    /**
     * @inheritdoc
     */
    public function getApiClient()
    {
        return $this->api->getClient();
    }

    /**
     * @param array $data
     *
     * @return bool
     */
    public function isApiSource(array $data)
    {
        return (array_key_exists('source', $data) && $this->api->getSourceName() === $data['source'])
            ? true : false;
    }

    /**
     * @param CrmModelInterface $obj
     *
     * @throws CrmClientException
     */
    public function create(CrmModelInterface &$obj)
    {
        try {
            $data = $this->getApiClient()->entities->createOne($obj::MODULE, $this->toArray($obj));
        } catch (WSException $e) {
            throw new CrmClientException($e);
        }

        $obj = $this->fromArray($data, get_class($obj));
    }

    /**
     * @inheritdoc
     */
    public function update(CrmModelInterface &$obj)
    {
        try {
            $data = $this->getApiClient()->entities->updateOne($obj::MODULE, $obj->getId(), $this->toArray($obj));
        } catch (WSException $e) {
            throw new CrmClientException($e);
        }

        $obj = $this->fromArray($data, get_class($obj));
    }

    /**
     * @inheritdoc
     */
    public function delete(CrmModelInterface &$obj)
    {
        if ($this->deleteById($obj::MODULE, $obj->getId())) {
            unset($obj);

            return true;
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function deleteById(string $module, string $id)
    {
        $result = [];

        try {
            $result = $this->getApiClient()->entities->deleteOne($module, $id);
        } catch (\Exception $e) {
        }

        if (!isset($result['status']) || $result['status'] !== 'successful') {
            return false;
        }

        return true;
    }

    /**
     * @inheritdoc
     */
    public function findOne(string $class, array $params, array $select = [])
    {
        $data = $this->getApiClient()->entities->findOne(
            $this->getModuleName($class),
            $this->prepareParams($class, $params),
            $select
        );

        return $this->fromArray($data, $class);
    }

    /**
     * @inheritdoc
     */
    public function findMany(string $class, array $params, array $select = [], int $limit = 0)
    {
        $datas = $this->findManyArray($class, $params, $select, $limit);

        $result = [];

        if (is_iterable($datas)) {
            foreach ($datas as $data) {
                $result[] = $this->fromArray($data, $class);
            }
        }

        return $result;
    }

    /**
     * @inheritdoc
     */
    public function findManyArray(string $class, array $params, array $select = [], int $limit = 0)
    {
        try {
            $datas = $this->getApiClient()->entities->findMany(
                $this->getModuleName($class),
                $this->prepareParams($class, $params),
                $select,
                $limit
            );
        } catch (WSException $e) {
            throw new CrmClientException($e);
        }

        return $datas;
    }

    /**
     * @inheritdoc
     */
    protected function prepareParams(string $class, array $parameters): array
    {
        $apiParameters = [];
        foreach ($parameters as $name => $value) {
            $apiParameters[$this->getSerializedName($class, $name)] = $value;
        }

        return $apiParameters;
    }

    /**
     * @inheritdoc
     */
    protected function getSerializedName(string $class, string $name): string
    {
        $property = $this->getReflectionClass($class)->getProperty($name);

        return $this->reader->getPropertyAnnotation($property, Annotation\SerializedName::class)->name;
    }

    /**
     * @inheritdoc
     */
    protected function fromArray(?array $data, string $class)
    {
        if ($data === null) {
            return null;
        }

        return $this->serializer->fromArray($data, $class);
    }

    /**
     * @inheritdoc
     */
    protected function toArray(?object $obj): array
    {
        if ($obj === null) {
            return [];
        }

        return $this->serializer->toArray($obj);
    }

    /**
     * @inheritdoc
     */
    public function toId(?string $xId): int
    {
        if (null === $xId) {
            return null;
        }

        $ids = explode('x', $xId);

        return intval($ids[1]);
    }

    /**
     * @inheritdoc
     */
    protected function render($name, array $parameters = [])
    {
        return $this->templating->render($name, $parameters);
    }

    /**
     * @inheritdoc
     */
    private function getReflectionClass(string $class): \ReflectionClass
    {
        try {
            return new \ReflectionClass($class);
        } catch (\ReflectionException $exception) {
            throw new CrmException($exception);
        }
    }

    /**
     * @inheritdoc
     */
    private function getModuleName(string $class): string
    {
        return $this->getReflectionClass($class)->getConstant('MODULE');
    }

}