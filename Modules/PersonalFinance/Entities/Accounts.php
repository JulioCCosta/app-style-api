<?php

namespace Modules\PersonalFinance\Entities;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    protected $table = 'accounts';

    protected $fillable = ['name','saldo'];

}
