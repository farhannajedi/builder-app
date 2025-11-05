<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Opd extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'address',
        'phone',
        'email',
    ];

    // ─── RELATIONS ──────────────────────────────
    public function template()
    {
        return $this->belongsTo(Templates::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function newsCategories()
    {
        return $this->hasMany(News_Category::class);
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function services()
    {
        return $this->hasMany(Services::class);
    }

    public function galeries()
    {
        return $this->hasMany(Galeries::class);
    }

    public function opdConfig()
    {
        return $this->hasOne(Opd_Configs::class);
    }
}
