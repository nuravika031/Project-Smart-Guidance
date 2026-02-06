<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'slug',
        'profile',
        'study_duration',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function competitions()
    {
        return $this->hasMany(Competition::class);
    }
    public function cariers()
    {
        return $this->hasMany(Carier::class);
    }
    public function curiculum()
    {
        return $this->hasMany(Curiculum::class);
    }
    public function relatedIndustru()
    {
        return $this->hasMany(Related_Industry::class);
    }
}
