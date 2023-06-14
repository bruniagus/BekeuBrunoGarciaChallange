<?php


namespace Core\Subscribers\Infrastructure\Database;

use Core\Subscribers\Domain\Subscribers;

class SubscribersMapper extends \Core\Shared\Infrastructure\Mapper
{
    protected static function getClassToMap()
    {
        return Subscribers::class;
    }

    protected static function mapping(): ?array
    {
        return [
            "id" => "id",
            "email" => "email",
            "state" => "state_id"
        ];
    }
}
