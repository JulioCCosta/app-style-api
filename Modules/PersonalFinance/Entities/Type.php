<?php

namespace Modules\PersonalFinance\Entities;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'type';

    protected $fillable = ['name'];
}
