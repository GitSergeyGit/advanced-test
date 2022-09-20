<?php

namespace Hillel\Application\Traits;

trait CreatedAtTimestampTrait
{
    public $createdAt;

    public function setCreatedAt($createdAt)
    {
        if (!is_int($createdAt)) {
            throw new InvalidArgumentException('Невалідний id');
        }
        $this->createdAt = $createdAt;
    }
}