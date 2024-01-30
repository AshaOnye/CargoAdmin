<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billings extends Model
{
    use HasFactory;
    public $timestamps = false;
   protected $fillable = ['bill_name', 'order_id', 'address', 'payment', 'price', 'total', 'order_descp', 'order_date', 'delivery_option', 'datetime'];

}
