<?php

namespace App\Models;

use App\Models\Photo;
use App\User;
use Illuminate\Support\Str;

class Phone extends Model
{

  public static function latestPhones(){

    return static::orderBy('created_at', 'desc')->paginate(3);

  }

  public static function cheapPhones(){

    return static::where('price', '<', 500)->orderBy('price', 'desc')->paginate(3);

  }

  public static function expensivePhones(){

    return static::where('price', '>', 1000)->orderBy('price', 'desc')->paginate(3);

  }

  public static function forgamingPhones(){


    return static::where([['storage_size', '>', 32],['RAMsize', '>', 3],])->orderBy('RAMsize', 'desc')->paginate(3);

  }

  public function user(){
    return $this->belongsTo(User::class);
  }

  public function photos(){
    return $this->hasMany(Photo::class);
  }
}
