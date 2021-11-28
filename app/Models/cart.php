<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(product::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
