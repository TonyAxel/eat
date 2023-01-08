<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Cart
 *
 * @property int $id_cart
 * @property int $favorite_list
 * @property int $id_customer
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereFavoriteList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereIdCart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereIdCustomer($value)
 * @mixin \Eloquent
 */
class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['favorite_list', 'id_customer'];
    public $timestamps = false;
}
