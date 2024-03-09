<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vante extends Model
{
    use HasFactory;

    protected $fillable = [
        'prix',
        'v_id',
        'a_id',
        't_id',
    ];

    public function vandeur(): BelongsTo
    {
        return $this->belongsTo(Vandeur::class);
    }

    public function acheter(): BelongsTo
    {
        return $this->belongsTo(Acheter::class);
    }

    public function terrain(): BelongsTo
    {
        return $this->belongsTo(Terrain::class);
    }
}
