<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acheter extends Model
{
    use HasFactory;

    protected $fillable =[
        'nni',
        'first_name',
        'last_name'
    ];

    public function vantes()
    {
        return $this->hasMany(Vante::class);
    }
}
