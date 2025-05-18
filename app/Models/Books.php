<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'authors', 'lang', 'pub_date', 'file_path', 'filesize', 'downloads', 'cat_id'];
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
}
