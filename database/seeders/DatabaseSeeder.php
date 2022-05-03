<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $images = Storage::allFiles('images');

        foreach ($images as $image) {
            Image::factory()->create([
                'file' => $image,
                'dimension' => Image::getImageDimensions($image),
            ]);
        }
    }


}
