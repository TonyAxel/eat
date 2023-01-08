<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Shop
 *
 * @property int $id_shop
 * @property string $name_shop
 * @property string $region_shop
 * @property string $sity_shop
 * @property string $street_shop
 * @property string $build_shop
 * @property string $logo_shop
 * @method static \Illuminate\Database\Eloquent\Builder|Shop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop query()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereBuildShop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereIdShop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereLogoShop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereNameShop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereRegionShop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereSityShop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereStreetShop($value)
 * @mixin \Eloquent
 */
class Shop extends Model
{
    use HasFactory;
}
