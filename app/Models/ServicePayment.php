<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'contact',
        'service_name',
        'amount',
        'transaction_id',
        'payment_status',
    ];

}
