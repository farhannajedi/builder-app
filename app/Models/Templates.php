<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Templates extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function Opd()
    {
        return $this->hasMany(Opd::class);
    }
}
