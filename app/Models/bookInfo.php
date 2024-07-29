<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookInfo extends Model
{
    use HasFactory;
    protected $table = "books";
    protected $fillable = [
        'title',
        'author',
        'description',
        'isbn',
        'publishedYear',
    ];
}
