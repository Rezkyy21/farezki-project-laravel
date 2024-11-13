<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class kehadiran extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'kehadiran_id'
    ];

    public function tamu(): BelongsTo
    {
        return $this->belongsTo(tamu::class);
    }
}
