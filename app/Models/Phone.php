<?php

namespace App\Models;

use App\Models\Photo;
use App\User;
use Illuminate\Support\Str;

class Phone extends Model
{

  public function scopeLatestPhones($query){

    return $query->latest();

  }

  public function scopeCheapPhones($query){

    return $query->where('price', '<', 500)->orderBy('price', 'desc');

  }

  public function scopeExpensivePhones($query){

    return $query->where('price', '>', 1000)->orderBy('price', 'desc');

  }

  public function scopeforgamingPhones($query){


    return $query->where([['storage_size', '>', 32],['RAMsize', '>', 3],])->orderBy('RAMsize', 'desc');

  }

  public function scopeSearchPhones($q, $query){

    return $q->where('brand', 'like', "%$query%")
                   ->orWhere('model', 'like', "%$query%")
                   ->orWhere('screen_size', 'like', "$query")
                   ->orWhere('RAMsize', 'like', "$query")
                   ->orWhere('storage_size', 'like', "$query");
  }

  public function user(){
    return $this->belongsTo(User::class);
  }

  public function photos(){
    return $this->hasMany(Photo::class);
  }
}
