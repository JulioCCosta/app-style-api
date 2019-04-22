<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Modules\OrgnizeFinance\Repositories\Contracts\Accounts\IAccountRepository;

//use Modules\OrgnizeFinance\Repositories\Contracts\Accounts\IAccountRepository;

class AccountController extends Controller
{

    private $accountRepository;

    public function __construct(IAccountRepository $accountRepository)
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

    public function store(Request $request)
    {
        $insert = $this->accountRepository->create($request->all());
        if ($insert) {
            return response()->json('Success', 200);
        }
        return response()->json('fail', 409);
    }

    public function update($id, Request $request)
    {
        $account = $this->accountRepository->find($id);

        $update = $account->update($request->all());


        if ($update) {
            return response()->json('Success', 200);
        }
        return response()->json('fail', 409);
    }

    public function destroy($id)
    {
        $account = $this->accountRepository->find($id);
        $delete = $account->delete();

        if ($delete) {
            return response()->json('Success');
        }
        return response()->json('fail', 409);
    }
}
