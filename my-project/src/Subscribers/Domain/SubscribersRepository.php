<?php

declare(strict_types=1);


namespace Core\Subscribers\Domain;


interface SubscribersRepository
{
    public function searchAll(): ?array;

    public function create(Subscribers $subscribers): void;

}
