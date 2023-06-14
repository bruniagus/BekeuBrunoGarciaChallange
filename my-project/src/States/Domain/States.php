<?php

declare(strict_types=1);

namespace Core\States\Domain;

final class States
{
    private StatesId $id;
    private StatesCode $code;
    private StatesName $name;

    public function __construct(StatesId $id,
        StatesCode $code,
        StatesName $name
    )
    {
        $this->id = $id;
        $this->code = $code;
        $this->name = $name;
    }

    #Getters
    public function id(): StatesId
    {
        return $this->id;
    }

    public function code(): StatesCode
    {
        return $this->code;
    }

    public function name(): StatesName
    {
        return $this->name;
    }
}
