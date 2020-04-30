<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use UsesUuid;

    protected $fillable = [
        'board',
        'id'
    ];
}
