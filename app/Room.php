<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    return $this->belongsTo(Hotel::class)
}
