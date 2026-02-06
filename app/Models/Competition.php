<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable = [
        'major_id',
        'type',
        'name',
    ];

    public function major()
    {
        return $this->belongsTo(Major::class);
    }
}
