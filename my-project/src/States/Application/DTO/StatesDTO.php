<?php

declare(strict_types=1);

namespace Core\States\Application\DTO;

use Core\Shared\Application\BaseDTO;
use Core\States\Domain\States;

final class StatesDTO extends BaseDTO
{
    public function __invoke(States $states)
    {
        return [
            "id" => $states->id()->value(),
            "code" => $states->code()->value(),
            "name" => $states->name()->value(),
        ];
    }
}
