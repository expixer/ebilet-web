<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProductInventory
 *
 * @property int $id
 * @property int $product_id
 * @property int $merchant_id
 * @property int $quantity
 * @property float $price
 * @property float|null $discount
 * @property string|null $discount_type
 * @property float|null $discount_amount
 * @property string|null $discount_start_date
 * @property string|null $discount_end_date
 * @property int $status
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $product
 * @method static \Database\Factories\ProductInventoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory whereDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory whereDiscountEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory whereDiscountStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory whereMerchantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductInventory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProductInventory extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'merchant_id', 'quantity', 'price', 'discount', 'discount_type', 'discount_amount', 'discount_start_date', 'discount_end_date', 'status'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
