<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Modules\OrgnizeFinance\Repositories\Contracts\Accounts\IAccountRepository;
use Module\OrganizeFinance\Services\AccountService;
use Modules\OrganizeFinance\Repositories\Contracts\Type\ITypeRepository;
use Module\OrganizeFinance\Services\TypeService;

class RepositoryServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   *
   * @return void
   */
  public function register()
  {
    $this->app->bind(
      IAccountRepository::class,
      AccountService::class

    );
    $this->app->bind(
      ITypeRepository::class,
      TypeService::class

    );
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
