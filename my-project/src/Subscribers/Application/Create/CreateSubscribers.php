<?php

declare(strict_types=1);


namespace Core\Subscribers\Application\Create;


use Core\Subscribers\Domain\Subscribers;
use Core\Subscribers\Domain\SubscribersRepository;
use Core\Subscribers\Application\DTO\SubscribersRequestDTO;

final class CreateSubscribers
{
    private $repository;

    public function __construct(SubscribersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(SubscribersRequestDTO $subscribersRequestDTO )
    {

        $subscriber = Subscribers::create($subscribersRequestDTO->email,$subscribersRequestDTO->state_id);
      
        $this->repository->create($subscriber);
    }
}
