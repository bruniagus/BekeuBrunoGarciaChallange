<?php

declare(strict_types=1);

namespace Core\Subscribers\Infrastructure\Database\Repository;

use Core\Subscribers\Domain\{SubscribersRepository,Subscribers};
use App\Models\Subscriber as SubscriberModel;
use Core\Subscribers\Infrastructure\Database\SubscribersMapper;


final class DatabaseSubscribersRepository implements SubscribersRepository
{
    public function searchAll(): ?array
    {

        $states = SubscriberModel::get()->toArray();

        $aux = [];
        foreach ($states as $key => $state) {
         
            $aux[$key] = SubscribersMapper::map($state);
        }
        return $aux;
    }

    public function create(Subscribers $subscribers): void
    {
      
        if(!SubscriberModel::create([
            'email' => $subscribers->email()->value(),
            'state_id' => $subscribers->state()->value()
        ])) throw new \Exception('Error al guardar los datos.');
    }
}
