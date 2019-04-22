<?php

namespace Modules\PersonalFinance\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\PersonalFinance\Repositories\IAccountsRepository;
use Modules\PersonalFinance\Services\AccountService;
use Modules\PersonalFinance\Repositories\ITypesRepository;
use Modules\PersonalFinance\Services\TypeService;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(
            IAccountsRepository::class,
            AccountService::class
        );

        $this->app->bind(
            ITypesRepository::class,
            TypeService::class    
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
