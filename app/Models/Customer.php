<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\SessionGuard;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * App\Models\Customer
 *
 * @property int $id
 * @property string $name_customer
 * @property string $sername
 * @property string $father_name
 * @property string $phone_number
 * @property string|null $region_customer
 * @property string|null $city_customer
 * @property string|null $street_customer
 * @property string|null $build_customer
 * @property string|null $password
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereBuildCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCityCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereFatherName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereNameCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereRegionCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereSername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereStreetCustomer($value)
 * @mixin \Eloquent
 */
class Customer extends Authenticatable
{
    use HasFactory, Notifiable;


    public $timestamps = false;
}
