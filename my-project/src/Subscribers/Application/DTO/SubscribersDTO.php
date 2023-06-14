<?php

declare(strict_types=1);

namespace Core\Subscribers\Application\DTO;

use Core\Shared\Application\BaseDTO;
use Core\Subscribers\Domain\Subscribers;
use Core\States\Domain\States;

final class SubscribersDTO extends BaseDTO
{
    public function __invoke(Subscribers $subscribers,States $states)
    {
        return [
            "id" => $subscribers->id()->value(),
            "email" => $subscribers->email()->value(),
            "state_code" => $states->code()->value(),
            "state_name" => $states->name()->value(),
        ];
    }
}
