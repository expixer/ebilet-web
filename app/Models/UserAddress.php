<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserAddress
 *
 * @property int $id
 * @property int $user_id
 * @property string $address_line1
 * @property string $address_line2
 * @property string $city
 * @property string $postal_code
 * @property int $country_id
 * @property string $mobile
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\UserAddressFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress whereAddressLine1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress whereAddressLine2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress whereUserId($value)
 * @mixin \Eloquent
 */
class UserAddress extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'address', 'city', 'state', 'country', 'zip_code'];
}
