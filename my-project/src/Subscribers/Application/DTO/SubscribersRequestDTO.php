<?php

declare(strict_types=1);

namespace Core\Subscribers\Application\DTO;

final class SubscribersRequestDTO
{   
    public $email;
    public $state_id;

    public function __construct($email, $state_id)
    {
        $this->email = $email;
        $this->state_id = (int) $state_id;
    }
}
