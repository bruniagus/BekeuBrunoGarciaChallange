<?php


namespace Core\States\Infrastructure\Database;

use Core\States\Domain\States;

class StatesMapper extends \Core\Shared\Infrastructure\Mapper
{
    protected static function getClassToMap()
    {
        return States::class;
    }

    protected static function mapping(): ?array
    {
        return [
            "id" => "id",
            "code" => "code",
            "name" => "name"
        ];
    }
}
