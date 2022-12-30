<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInventory extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'merchant_id', 'quantity', 'price', 'discount', 'discount_type', 'discount_amount', 'discount_start_date', 'discount_end_date', 'status'];
}
