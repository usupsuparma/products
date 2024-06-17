<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductImageModel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'product_images';

    protected $fillable = [
        'product_id',
        'path'
    ];
}
