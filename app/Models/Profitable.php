<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profitable extends Model
{
    use HasFactory;

    protected $table = 'profitable';

    protected $fillable = ['join_class', 'month_of_class', 'one_on_one_training', 'teach_a_team'];
}
