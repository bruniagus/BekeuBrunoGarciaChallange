<?php

declare(strict_types=1);

namespace Core\Subscribers\Domain;

use Exception;


final class SubscribersId
{
    private $value;

    public function __construct(int|null $value)
    {
        $this->value = $value;
    }

    public function value(): int|null
    {
        return $this->value;
    }
}
