<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name'
    ];
    
    public function book(){
        return $this->hasMany(Buku::class,'category_id','id');
    }

}
