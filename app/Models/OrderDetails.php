<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'order_code', 'product_id','product_name','product_price','product_sales_quantity','created_at'
    ];
    protected $primaryKey = "id";
    protected $table = 'order_details';

    public function product(){
        return $this->belongsTo('App\Models\Product','product_id');
    }
    use HasFactory;
}
