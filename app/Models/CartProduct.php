<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CartProduct
 *
 * @property int $id_cart_product
 * @property int $id_product
 * @property int $id_cart
 * @property string $count
 * @method static \Illuminate\Database\Eloquent\Builder|CartProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CartProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CartProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|CartProduct whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartProduct whereIdCart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartProduct whereIdCartProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartProduct whereIdProduct($value)
 * @mixin \Eloquent
 */
class CartProduct extends Model
{
    use HasFactory;

    protected $fillable = ['id_product', 'id_cart', 'count'];
    public $timestamps = false;
}
