<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory, Rules\UsesUuid;

    protected $fillable = [
        'id',
        'name',
        'code',
        'phone_number'
    ];

    public function books()
    {
        $this->hasMany(Book::class);
    }
}
