<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carier extends Model
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
