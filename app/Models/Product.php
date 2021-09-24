<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'product_img',
        'product_price',
        'product_content',
        'cate_id',
        'product_feature',
        'product_sale'
    ];
}
