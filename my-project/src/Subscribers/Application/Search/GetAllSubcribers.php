<?php

declare(strict_types=1);

namespace Core\Subscribers\Application\Search;

use Core\Subscribers\Domain\SubscribersRepository;
use Core\Subscribers\Application\DTO\SubscribersDTO;
use Core\States\Application\Search\GetStateById;

final class GetAllSubcribers
{
    private $repository;
    private $state;

    public function __construct(SubscribersRepository $repository,GetStateById $state)
    {
        $this->repository = $repository;
        $this->state = $state;
    }

    public function __invoke()
    {
        $subscribers = $this->repository->searchAll();
        $DTO = new SubscribersDTO;
        $aux = array();
        foreach ($subscribers as $key => $subscriber) {
            $state = $this->state->__invoke($subscriber->state()->value());
            $aux[$key] = $DTO($subscriber,$state);
        }

        return $aux;
    }
}
