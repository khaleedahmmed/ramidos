<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'img',
        'body',
    ];

    public static function search($search)
    {
        return empty($search) ? self::query() :
            self::query()->where('name', 'LIKE', '%'.$search.'%');
    }
}
