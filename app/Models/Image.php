<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public static function makeDirectory()
    {
        $subFolder = 'images/' .  date('Y/m/d');

        Storage::makeDirectory($subFolder);
        return $subFolder;
    }
}
