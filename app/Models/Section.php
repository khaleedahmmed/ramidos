<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = [
        'small_title',
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
