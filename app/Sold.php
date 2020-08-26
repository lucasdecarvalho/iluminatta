<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sold extends Model
{
    protected $fillable = [
        'user_id','street','number','comp','city','state','zipcode','id_shop','tid','payment_type','value','installments','cart','tracking_number','success'
    ];
}
