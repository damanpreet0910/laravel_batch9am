<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['categoryId', 'productName'];

    public function category(){
        return $this->hasOne(Category::class,'id','categoryId');
    }
}
