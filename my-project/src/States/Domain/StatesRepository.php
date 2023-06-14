<?php

namespace Core\States\Domain;

interface StatesRepository
{
    public function searchAll(): ?array;

    public function searchById(int $state_id);
}
