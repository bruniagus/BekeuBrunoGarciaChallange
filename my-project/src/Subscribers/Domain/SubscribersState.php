<?php

declare(strict_types=1);

namespace Core\Subscribers\Domain;

use Exception;


final class SubscribersState
{
    private $value;

    public function __construct(int $value)
    {
        if ($value < 1) {
            throw new Exception('Indentificardor del State invalido');
        }

        $this->value = $value;
    }

    public function value(): int
    {
        return $this->value;
    }
}
