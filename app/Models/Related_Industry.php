<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Related_Industry extends Model
{
    protected $fillable = [
        'major_id',
        'name',
    ];

    public function major()
    {
        return $this->belongsTo(Major::class);
    }
}
