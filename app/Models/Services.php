<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'opd_id',
        'name',
        'description',
    ];

    // ─── RELATION ──────────────────────────────
    public function opd()
    {
        return $this->belongsTo(Opd::class);
    }
}
