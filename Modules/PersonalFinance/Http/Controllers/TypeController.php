<?php

namespace Modules\PersonalFinance\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\PersonalFinance\Repositories\ITypesRepository;

class TypeController extends Controller
{

    private $typeRepository;

    public function __construct(ITypesRepository $typeRepository)
    {
        $this->typeRepository = $typeRepository;
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */

    
    public function index()
    {
        $typs = $this->typeRepository->all();
        return response()->json($typs);
    }

}
