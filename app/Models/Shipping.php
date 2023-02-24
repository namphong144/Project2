<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'shipping_name', 'shipping_address','shipping_number','email','notes','shipping_method','created_at'
    ];
    protected $primaryKey = "shipping_id";
    protected $table = 'shipping';
    use HasFactory;
}
