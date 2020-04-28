<?php

namespace App\Models;

use App\Models\Photo;
use App\User;
use Illuminate\Support\Str;

class Phone extends Model
{

  //Phones sorted desc by created_at
  public function scopeLatestPhones($query){

    return $query->latest();

  }

  //Phones that are less then 500
  public function scopeCheapPhones($query){

    return $query->where('price', '<', 500)->orderBy('price', 'desc');

  }

  //Phones that are more that 1000
  public function scopeExpensivePhones($query){

    return $query->where('price', '>', 1000)->orderBy('price', 'desc');

  }

  //Phones with storage-size bigger then 32 and RAM size more then 3
  public function scopeforgamingPhones($query){


    return $query->where([['storage_size', '>', 32],['RAMsize', '>', 3],])->orderBy('RAMsize', 'desc');

  }

  //All phones that are like a query
  public function scopeSearchPhones($q, $query){

    return $q->where('brand', 'like', "%$query%")
                   ->orWhere('model', 'like', "%$query%")
                   ->orWhere('screen_size', 'like', "$query")
                   ->orWhere('RAMsize', 'like', "$query")
                   ->orWhere('storage_size', 'like', "$query");
  }

  // Phone belongs to one user
  public function user(){
    return $this->belongsTo(User::class);
  }

  //Phone has many photos
  public function photos(){
    return $this->hasMany(Photo::class);
  }
}
