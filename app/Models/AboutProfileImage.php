<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AboutProfile;
use Illuminate\Support\Facades\Storage;

class AboutProfileImage extends Model
{
    use HasFactory;
    protected $table = 'accolades';

    protected $fillable = ['image_path', 'about_profile_id'];

    public function profile()
    {
        return $this->belongsTo(AboutProfile::class, 'about_profile_id');
    }


    public function getThumbnailImage()
    {
        $isUrl = str_contains($this->image_path, 'http');
        return ($isUrl) ? $this->image_path : Storage::disk('public')->url($this->image_path);
    }
}
