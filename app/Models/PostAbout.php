<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostAbout extends Model
{
    use HasFactory;
    protected $table = 'post_abouts';
    protected $guarded = false;
}
