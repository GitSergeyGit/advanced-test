<?php

namespace Hillel\Application\Traits;

trait IdentificatorTrait
{
    public $id;

    public function setId($id)
    {
        if (!is_int($id)) {
            throw new InvalidArgumentException('Невалідний id');
        }
        $this->id = $id;
    }
}