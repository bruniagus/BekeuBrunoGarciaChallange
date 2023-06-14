<?php

declare(strict_types=1);

namespace Core\States\Infrastructure\Database\Repository;

use Core\States\Domain\StatesRepository;
use App\Models\States;
use Core\States\Infrastructure\Database\StatesMapper;


final class DatabaseStatesRepository implements StatesRepository
{
    public function searchAll(): ?array
    {

        $states = States::get()->toArray();

        $aux = [];
        foreach ($states as $key => $state) {
         
            $aux[$key] = StatesMapper::map($state);
        }
        return $aux;
    }

    public function searchById($state_id)
    {
        $state = States::find($state_id)->toArray();
        return StatesMapper::map($state);
    }
}
