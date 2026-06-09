<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curiculum extends Model
{
    public const TYPE_LABELS = [
        'matakuliah_dasar' => 'Matakuliah Dasar',
        'matakuliah_inti' => 'Matakuliah Inti',
        'matakuliah_pilihan' => 'Matakuliah Pilihan',
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
