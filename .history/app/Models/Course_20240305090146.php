<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'price',
        'description',
        'instructor'
    ];

    public function getThumbnailImage()
    {
        $isUrl = str_contains($this->image, 'http');
        return ($isUrl) ? $this->image : Storage::disk('public')->url($this->image);
    }

    public function getExcerpt()
    {
        return Str::limit(strip_tags($this->body), 150);
    }
}
