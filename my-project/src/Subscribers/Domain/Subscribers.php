<?php

declare(strict_types=1);

namespace Core\Subscribers\Domain;

final class Subscribers
{
    private SubscribersId|null $id;
    private SubscribersEmail $email;
    private SubscribersState $state;

    public function __construct(SubscribersId|null $id,
        SubscribersEmail $email,
        SubscribersState $state
    )
    {
        $this->id = $id;
        $this->email = $email;
        $this->state = $state;
    }

    public static function create(string $email, int $state)
    {
        return new static(new SubscribersId(null),new SubscribersEmail($email), new SubscribersState($state));
    }

    #Getters
    public function id(): SubscribersId|null
    {
        return $this->id;
    }

    public function email(): SubscribersEmail
    {
        return $this->email;
    }

    public function state(): SubscribersState
    {
        return $this->state;
    }
}
