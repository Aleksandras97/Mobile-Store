<?php

namespace App\Models;

use App\Models\Phone;

class Photo extends Model
{

  //Photo belongs to one phone
  public function phone(){
    return $this->belongsTo(Phone::class);
  }
}
