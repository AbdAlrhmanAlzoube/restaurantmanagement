<?php

namespace App\Providers;

use App\Services\UserService;
use Illuminate\Support\ServiceProvider;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
          // ربط الـ Repository بـ Interface
          $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        
          // ربط الـ Service بـ Interface
          $this->app->bind(UserRepositoryInterface::class, UserService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
