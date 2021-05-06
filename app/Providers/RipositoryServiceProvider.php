<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\RepositoryInterface;
use App\Services\BookService;
use App\Repositories\BookRepository;
use App\Services\UserService;
use App\Repositories\UserRepository;

class RipositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(BookService::class)
          ->needs(RepositoryInterface::class)
          ->give(BookRepository::class);

          $this->app->when(UserService::class)
          ->needs(RepositoryInterface::class)
          ->give(UserRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
