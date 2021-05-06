<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Services\ServiceInterface;
use App\Services\BookService;
use App\Services\UserService;

class ServiceInterfaceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(BookController::class)
        ->needs(ServiceInterface::class)
        ->give(BookService::class);

        $this->app->when(UserController::class)
        ->needs(ServiceInterface::class)
        ->give(UserService::class);
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
