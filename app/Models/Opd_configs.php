<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Opd_configs extends Model
{
    use HasFactory;

    protected $fillable = [
        'opd_id',
        'template_id',
        'theme_color',
        'banner_image',
        'favicon',
        'homepage_layout',
        'extra_settings'
    ];

    protected $casts = [
        'extra_setting' => 'array',
    ];

    // ─── RELATION ──────────────────────────────
    public function opd()
    {
        return $this->belongsTo(Opd::class);
    }

    public function template()
    {
        return $this->belongsTo(Templates::class);
    }
}
