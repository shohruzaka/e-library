<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Books;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'cat_name',
        'description'
    ];

    public function books()
    {
        return $this->hasMany(Books::class, 'cat_id');
    }
}
