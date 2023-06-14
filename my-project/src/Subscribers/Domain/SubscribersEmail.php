<?php

declare(strict_types=1);

namespace Core\Subscribers\Domain;

use Exception;

final class SubscribersEmail
{
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }
}
