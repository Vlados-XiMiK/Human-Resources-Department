<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SendingJob extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name', 'surname', 'title', 'number', 'main_file', 'deleted_at'];
    protected $table = 'sending_jobs';

}
