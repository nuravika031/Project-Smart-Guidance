<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'slug',
        'profile',
        'duration',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
