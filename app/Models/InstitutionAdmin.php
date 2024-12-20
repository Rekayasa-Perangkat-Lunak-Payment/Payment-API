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
        'user_id',
        'institution_id',
        'name',
        'title',
    ];
}
