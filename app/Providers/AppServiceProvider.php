<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// use App\Services\BookService;
// use App\Repositories\RepositoryInterface;
// use App\Repositories\BookRepository;

// use App\Services\ProductService;
// use App\Repositories\ProductInterface;
// use App\Repositories\ProductRepository;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->register(RipositoryServiceProvider::class);
        $this->app->register(ServiceInterfaceProvider::class);

        
        // $this->app->when(BookService::class)
        //   ->needs(RepositoryInterface::class)
        //   ->give(BookRepository::class);

        //   $this->app->when(ProductService::class)
        //   ->needs(RepositoryInterface::class)
        //   ->give(ProductRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
