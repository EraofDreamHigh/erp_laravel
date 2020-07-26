<?php

namespace App\Addons\Inventory\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use softDeletes;
    protected $guarded = [];
    
    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function valuation()
    {
        return $this->hasMany(stock_valuation::class,'product_id');
    }

    public function move()
    {
        return $this->hasMany(stock_move::class,'product_id');
    }
}
