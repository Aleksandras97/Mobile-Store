<?php

use Illuminate\Database\Seeder;
use App\Models\Phone;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Phone::truncate();


      Phone::create([
          'brand' => "Xiaomi",
          'model' => "Redmi Note 8T",
          'screen_size' => 97.4,
          'RAMsize' => 4,
          'storage_size' => 32,
          'color' => "Starscape Blue",
          'price' => 158.99,
          'cover_image' => "Redmi Note 8T_1587846003.jpg",
          'user_id' => "1",
        ]);

        Phone::create([
          'brand' => "Apple",
          'model' => "iPad Pro 12.9",
          'screen_size' => 515.3,
          'RAMsize' => 6,
          'storage_size' => 128,
          'color' => "Space Gray",
          'price' => 799.0,
          'cover_image' => "Apple iPad Pro 12.9_1587719025.png",
          'user_id' => "1",
        ]);

        Phone::create([
          'brand' => "Apple",
          'model' => "iPhone 11 Pro Max",
          'screen_size' => 102.9,
          'RAMsize' => 4,
          'storage_size' => 64,
          'color' => "Space Gray",
          'price' => 1199.99,
          'cover_image' => "Apple_iPhone_11_Pro_Max_L_1_1587719147.jpg",
          'user_id' => "1",
        ]);

        Phone::create([
          'brand' => "Google",
          'model' => "Pixel 3",
          'screen_size' => 76.7,
          'RAMsize' => 4,
          'storage_size' => 64,
          'color' => "Clearly White",
          'price' => 449.94,
          'cover_image' => "Google Pixel 3_1587719351.jpg",
          'user_id' => "1",
        ]);

        Phone::create([
          'brand' => "Nokia",
          'model' => "5.3",
          'screen_size' => 103.6,
          'RAMsize' => 3,
          'storage_size' => 64,
          'color' => "Sand",
          'price' => 209.0,
          'cover_image' => "nokia-5-3_1587719464.jpg",
          'user_id' => "1",
        ]);

        Phone::create([
          'brand' => "OnePlus",
          'model' => "8 Pro",
          'screen_size' => 111.7,
          'RAMsize' => 8,
          'storage_size' => 128,
          'color' => "Ultramarine Blue",
          'price' => 899.0,
          'cover_image' => "oneplus-8-pro-official-renders-1_1587719662.jpg",
          'user_id' => "2",
        ]);

        Phone::create([
          'brand' => "Cat",
          'model' => "S42",
          'screen_size' => 78.1,
          'RAMsize' => 3,
          'storage_size' => 32,
          'color' => "Black",
          'price' => 300.0,
          'cover_image' => "Cat S42_1587719731.jpg",
          'user_id' => "2",
        ]);

        Phone::create([
          'brand' => "Samsung",
          'model' => "Galaxy A71 5G",
          'screen_size' => 101.6,
          'RAMsize' => 6,
          'storage_size' => 128,
          'color' => "Prism Cube Black",
          'price' => 1000.0,
          'cover_image' => "Samsung Galaxy A71 5G_1587719894.jpg",
          'user_id' => "2",
        ]);

        Phone::create([
          'brand' => "Samsung",
          'model' => "Galaxy S20 Ultra 5G",
          'screen_size' => 114.0,
          'RAMsize' => 12,
          'storage_size' => 128,
          'color' => "Cosmic Black",
          'price' => 1319.0,
          'cover_image' => "Samsung Galaxy S20 Ultra 5G_1587719985.jpg",
          'user_id' => "2",
        ]);

        Phone::create([
          'brand' => "Samsung",
          'model' => "Galaxy Z Flip",
          'screen_size' => 101.6,
          'RAMsize' => 8,
          'storage_size' => 256,
          'color' => "Mirror Black",
          'price' => 1290.0,
          'cover_image' => "Samsung Galaxy Z Flip_1587720073.webp",
          'user_id' => "2",
        ]);

        Phone::create([
          'brand' => "Samsung",
          'model' => "Galaxy S20",
          'screen_size' => 93.8,
          'RAMsize' => 8,
          'storage_size' => 128,
          'color' => "Cloud Blue",
          'price' => 739.0,
          'cover_image' => "samsung-galaxy-s20-8gb-128gb-dual_1587720182.jpg",
          'user_id' => "2",
        ]);

        Phone::create([
          'brand' => "HTC",
          'model' => "Wildfire R70",
          'screen_size' => 104.7,
          'RAMsize' => 2,
          'storage_size' => 32,
          'color' => "Aurora Blue",
          'price' => 200.0,
          'cover_image' => "137832-v1-htc-wildfire-r70-mobile-phone-large-1-500x500_1587928873.jpg",
          'user_id' => "2",
        ]);
    }
}
