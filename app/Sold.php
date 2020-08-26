<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sold extends Model
{
    protected $fillable = [
        'userId','street','number','comp','city','state','zipcode','paymentId','merchantOrderId','tid','paymentType','value','installments','cart','trackingNumber','success'
    ];
}
