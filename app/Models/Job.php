<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'jobs';
    protected $guarded = false;
    public function category_job()
    {
        return $this->belongsTo(CategoryJob::class);
    }

}
