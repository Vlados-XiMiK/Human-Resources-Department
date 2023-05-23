<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryJob extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'category_jobs';
    protected $guarded = false;
}
