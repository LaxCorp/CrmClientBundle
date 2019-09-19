<?php

namespace LaxCorp\CrmClientBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait RatingTrait
{

    /**
     * @var string|null
     *
     * @Serializer\SerializedName("rating")
     * @Serializer\Type("string")
     */
    private $rating;

    /**
     * @inheritdoc
     */
    public function getRating(): ?string
    {
        return $this->rating;
    }

    /**
     * @inheritdoc
     */
    public function setRating(?string $rating)
    {
        $this->rating = $rating;

        return $this;
    }

}