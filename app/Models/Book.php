<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $primaryKey = 'isbn'; // Set the primary key to ISBN
    public $incrementing = false; // Disable auto-incrementing
    protected $keyType = 'string'; // Set the key type to string
    
    protected $fillable = [
        'title', 'author', 'isbn', 'description', 'cover_image'
    ];
}
