<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    public const TYPE_LABELS = [
        'hardskill' => 'Hard Skill',
        'softskill' => 'Soft Skill',
    ];

    protected $fillable = [
        'major_id',
        'type',
        'name',
    ];

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    public function getTypeLabelAttribute()
    {
        return self::TYPE_LABELS[$this->type] ?? $this->type;
    }
}
