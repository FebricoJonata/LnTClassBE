<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'author', 'price', 'release', 'category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
