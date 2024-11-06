<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class InstitutionAdmin extends Model
{
    use HasFactory;
    protected $table = 'institution_admins';
    protected $fillable = [
        'institution_id',
        'name',
        'title',
        'username',
        'password'
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
