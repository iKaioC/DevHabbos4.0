<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habbo extends Model
{
    use HasFactory;

    protected $table = 'habbos';

    protected $fillable = [
        'name',
        'slug',
        'emulator',
        'cms',
        'language',
        'url',
        'description',
        'price'
    ];
}
