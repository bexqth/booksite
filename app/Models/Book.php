<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $primaryKey = 'isbn';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'title', 'author', 'isbn', 'description', 'cover_image'
    ];

    public function readingList()
    {
        return $this->hasMany(ReadingList::class, 'isbn', 'isbn');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'isbn', 'isbn');
    }
}
