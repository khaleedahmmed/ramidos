<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
    ];

    public static function search($search)
    {
        return empty($search) ? self::query() :
            self::query()->where('name', 'LIKE', '%'.$search.'%');
    }
}
