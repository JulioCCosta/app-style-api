<?php

namespace Modules\PersonalFinance\Http\Controllers;


use Illuminate\Routing\Controller;
use Modules\PersonalFinance\Repositories\IAccountsRepository;

class AccountsController extends Controller
{
    private $accountRepository;

    public function __construct(IAccountsRepository $accountRepository)
    {
        $this->accountRepository = $accountRepository;
    }

    public function index()
    {
        $accounts = $this->accountRepository->all();
        if ($accounts->isNotEmpty()) {
            return response()->json($accounts, 200);
        }
        return response()->json('Not Found');
    }
}
