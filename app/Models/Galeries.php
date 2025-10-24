<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Galeries extends Model
{
    use HasFactory;

    protected $fillable = [
        'opd_id',
        'title',
        'images',
        'description'
    ];

    // ─── RELATION ──────────────────────────────
    public function opd()
    {
        return $this->belongsTo(Opd::class);
    }
}
