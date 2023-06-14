<?php

declare(strict_types=1);

namespace Core\States\Application\Search;

use Core\States\Domain\StatesRepository;
use Core\States\Application\DTO\StatesDTO;


final class GetAllStates
{
    private $repository;

    public function __construct(StatesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke()
    {
        $modelos = $this->repository->searchAll();
        $DTO = new StatesDTO;
        $aux = array();
        foreach ($modelos as $key => $modelo) {
            $aux[$key] = $DTO($modelo);
        }

        return $aux;
    }
}
