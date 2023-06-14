<?php


namespace Core\Shared\Application;


use JsonSerializable;


class BaseDTO implements JsonSerializable
{
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
