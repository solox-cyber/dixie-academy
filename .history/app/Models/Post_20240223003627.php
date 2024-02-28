<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory;

    public function scopePublished($query){
       $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeFeatured($query){
        $query->where('featured', true);
     }

     public function getExcerpt(){

     }
     public function getReadingTime(){
       return round(str_word_count($this->body)/250);
     }
}
