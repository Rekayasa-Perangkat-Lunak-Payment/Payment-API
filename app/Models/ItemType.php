<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemType extends Model
{
    use HasFactory;
    protected $table = 'item_types';
    protected $fillable = [
        'institution_id',
        'name',
        'description',
        'is_deleted',
    ];
}
