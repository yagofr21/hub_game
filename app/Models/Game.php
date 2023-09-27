<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'Data_de_lancamento',
        'category',
        'descripition',
    ];

    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
