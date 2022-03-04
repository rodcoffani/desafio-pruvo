<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory, Rules\UsesUuid;

    protected $fillable = [
        'id',
        'title',
        'genre',
        'author',
        'year',
        'pages',
        'language',
        'edition',
        'isbn'
    ];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
}
