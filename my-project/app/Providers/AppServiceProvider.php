<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Core\States\Domain\StatesRepository;
use Core\States\Infrastructure\Database\Repository\DatabaseStatesRepository;

use Core\Subscribers\Domain\SubscribersRepository;
use Core\Subscribers\Infrastructure\Database\Repository\DatabaseSubscribersRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(StatesRepository::class, DatabaseStatesRepository::class);
        $this->app->bind(SubscribersRepository::class, DatabaseSubscribersRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
