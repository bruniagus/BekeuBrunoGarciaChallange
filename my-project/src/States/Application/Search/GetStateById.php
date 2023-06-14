<?php

declare(strict_types=1);

namespace Core\States\Application\Search;

use Core\States\Domain\StatesRepository;

final class GetStateById
{
    private $repository;

    public function __construct(StatesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(int $state_id)
    {
        return $this->repository->searchById($state_id);
    }
}
