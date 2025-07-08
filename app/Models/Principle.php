<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Principle extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'icon',
        'description',
        'learn_more_link',
        'sort_order',
        'is_active',
    ];
}
