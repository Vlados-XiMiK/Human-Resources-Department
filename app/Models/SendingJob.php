<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendingJob extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'surname', 'title', 'number', 'main_file'];
    protected $table = 'sending_jobs';

}
