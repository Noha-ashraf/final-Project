<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class category extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $table = 'category';
    protected $guarded = [];
    public $timestamps = false;
    protected $with = ['product'];
    public function product()
    {
        return $this->hasMany(product::class);
    }
}
