<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Resources extends Model
{
    use HasFactory;

    protected $table = 'resources';

    protected $fillable = [
        'title',
        'image',
        'price',
        'description',
        'fileUploaded',
        'no_idea_forex',
    ];

    public function getThumbnailImage()
    {
        $isUrl = str_contains($this->image, 'http');
        return ($isUrl) ? $this->image : Storage::disk('public')->url($this->image);
    }
}
