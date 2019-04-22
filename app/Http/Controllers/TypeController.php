<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\Type\ITypeRepository;
use Illuminate\Http\Request;
use Modules\OrgnizeFinance\Repositories\Contracts\Accounts\IAccountRepository;

class TypeController extends Controller
{
    private $typeRepository;

    public function __construct(IAccountRepository $typeRepository)
    {
        $this->typeRepository = $typeRepository;
    }

    public function index()
    {

        $typs = $this->typeRepository->all();
        return response()->json($typs);
    }
}
