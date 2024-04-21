<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AboutProfileImage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AboutProfile extends Model
{
    use HasFactory;
    protected $table = 'about_profile';
    protected $fillable = [
        'title',
        'image',
        'who_am_i',
        'about_dixie',
    ];

    public function images()
    {
        return $this->hasMany(AboutProfileImage::class);
    }


    public function getExcerpt_who_am_i()
    {
        return Str::limit(strip_tags($this->who_am_i), 150);
    }

    public function getExcerpt_about_dixie()
    {
        return Str::limit(strip_tags($this->about_dixie), 150);
    }

}
