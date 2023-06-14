<?php

declare(strict_types=1);

namespace Core\States\Domain;

use Exception;


final class StatesId
{
    private $value;

    public function __construct(int $value)
    {
        if ($value < 1) {
            throw new Exception('Indentificardor del status invalido');
        }

        $this->value = $value;
    }

    public function value(): int
    {
        return $this->value;
    }
}
