<?php

declare(strict_types=1);

namespace Core\States\Domain;

use Exception;


final class StatesCode
{
    private $value;

    public function __construct(string $value)
    {
        if (strlen($value) < 1) {
            throw new Exception('States code invalido');
        }

        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }
}
