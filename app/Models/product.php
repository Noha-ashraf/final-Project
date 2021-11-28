<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;


class product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $guarded = [];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(category::class, 'category_id');
    }
    public function carts()
    {
        return $this->hasMany(cart::class);
    }
}
