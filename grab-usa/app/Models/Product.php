<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function sellerInfo(){
        return $this->belongsTo(Product::class);
    }
    public function getCategory(){
        return $this->belongsTo(Category::class);
    }
    public function getCity(){
        return $this->belongsTo(City::class);
    }
    public function getCountry(){
        return $this->belongsTo(Country::class);
    }
}
