<?php

namespace App\Models;

use App\Models\Phone;

class Photo extends Model
{

  public function phone(){
    return $this->belongsTo(Phone::class);
  }
}
