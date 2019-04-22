<?php

namespace Modules\PersonalFinance\Services;

use App\Repositories\BaseRepository;
use Modules\PersonalFinance\Repositories\IAccountsRepository;
use App\Models\Accounts;

class AccountService  extends BaseRepository implements IAccountsRepository
{
    public function __construct(Accounts $accounts)
    {
        $this->model = $accounts;
    }
}