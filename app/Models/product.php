<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{ 
    protected $table = 'product'; // Adjust to match your actual table name
    protected $primaryKey = 'productID'; 
    protected $fillable = ['productID', 'productName', 'productDescription',  'productPrice', 'productImageURL'];

    public function getRouteKeyName()
    {
        return 'productID'; // Adjust to match the attribute you want to use
    }
    
    
}