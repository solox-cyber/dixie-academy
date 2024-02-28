<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'categories_id',
        'slug',
        'image',
        'body',
        'published_at',
        'featured',
    ];

    public function scopePublished($query){
       $query->where('published_at', '<=', Carbon::now());
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
   }

    public function categories(){
        return $this->belongsToMany(Category::class), 'categories_id' => $this->;
    }

    public function scopeWithCateogry($query, string $category)
    {
        $query->whereHas('categories', function($query) use ($category) {
            $query->where('slug', $category);
        });
    }

    public function scopeFeatured($query){
        $query->where('featured', true);
     }

     public function getExcerpt(){
       return Str::limit(strip_tags($this->body),150);
     }

     public function getReadingTime(){
       return round(str_word_count($this->body)/250);
     }

     public function getThumbnailImage(){
       $isUrl = str_contains($this->image, 'http');
       return ($isUrl) ? $this->image : Storage::disk('public')->url($this->image);
     }
}

