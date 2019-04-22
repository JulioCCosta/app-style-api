<?php

namespace Modules\PersonalFinance\Services;

use App\Repositories\BaseRepository;
use Modules\PersonalFinance\Repositories\ITypesRepository;
use Modules\PersonalFinance\Entities\Type;

class TypeService extends BaseRepository implements ITypesRepository
{
   public function __construct(Type $type)
   {
       $this->model = $type;
   }
}