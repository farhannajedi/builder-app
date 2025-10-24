<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News_category extends Model
{
    protected $fillable = [
        'opd_id',
        'title',
        'slug'
    ];

    // ─── RELATIONS ──────────────────────────────
    public function opd()
    {
        return $this->belongsTo(Opd::class);
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
