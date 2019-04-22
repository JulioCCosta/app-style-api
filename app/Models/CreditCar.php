<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreditCar extends Model
{
    protected $table = 'credit_car';

    protected $fillable = ['name','limit','date_close','date_maturity','conta_id'];

}
