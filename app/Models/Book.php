<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Book Model
class Book extends Model
{
    // Atribut book
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'author',
        'link',
        'category_id',
        'author_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}