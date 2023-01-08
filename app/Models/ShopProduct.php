<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ShopProduct
 *
 * @property int $id_shop_product
 * @property int $id_product
 * @property int $id_shop
 * @property string $cost
 * @property string|null $price_cost
 * @method static \Illuminate\Database\Eloquent\Builder|ShopProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShopProduct whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopProduct whereIdProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopProduct whereIdShop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopProduct whereIdShopProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShopProduct wherePriceCost($value)
 * @mixin \Eloquent
 */
class ShopProduct extends Model
{
    use HasFactory;
}
