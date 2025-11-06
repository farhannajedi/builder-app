<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'opd_id',
        'news_category_id',
        'title',
        'slug',
        'content',
        'images',
        'published_at'
    ];

    protected $casts = [
        'published_at' => 'date',
        'images' => 'array',
    ];

    // ─── RELATIONS ──────────────────────────────
    public function opd()
    {
        return $this->belongsTo(Opd::class);
    }

    public function category()
    {
        return $this->belongsTo(News_Category::class, 'category_id');
    }
}
