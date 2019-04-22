<?php

namespace Modules\PersonalFinance\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\PersonalFinance\Repositories\IAccountsRepository;

class PersonalFinanceController extends Controller
{
    private $accountRepository;
    /**
     * Display a listing of the resource.
     * @return Response
     */

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

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('personalfinance::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('personalfinance::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('personalfinance::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
