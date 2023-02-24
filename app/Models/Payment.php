<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'payment_method','payment_status','created_at'
    ];
    protected $primaryKey = "id";
    protected $table = 'payment';
    use HasFactory;
}
