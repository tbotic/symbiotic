<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'excerpt',
        'price',
        'description',
        'addInfo',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function featuredImage(){
        return Image::where(['product_id' => $this->id,'featured'=>1])->first();
    }
}
