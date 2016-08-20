<?php
namespace App\Clients;

use Illuminate\Support\ServiceProvider;

class ClientServiceProvider extends ServiceProvider
{
    /**
     * @var bool
     */
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(ClientRepository::class, function() {
            return new EloquentClientRepository(new EloquentClient());
        });
    }

    /**
     * @return array
     */
    public function provides()
    {
        return [
            ClientRepository::class,
        ];
    }
}
