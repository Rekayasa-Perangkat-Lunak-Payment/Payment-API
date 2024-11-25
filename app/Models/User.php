<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

/**
 * @method \Laravel\Sanctum\NewAccessToken createToken(string $name, array $abilities = ['*'])
 */
class User extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $fillable = [
        'username',
        'email',
        'password',
        'is_deleted',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function bankAdmin()
    {
        return $this->hasOne(BankAdmin::class);
    }

    public function institutionAdmin()
    {
        return $this->hasOne(InstitutionAdmin::class);
    }
}
