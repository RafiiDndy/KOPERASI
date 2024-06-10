<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $table = 'topics';

    protected $fillable = [
        'topic_cat', 'topic_subject', 'topic_message', 'topic_by'
    ];

    protected $casts = [
        'topic_date' => 'datetime'
    ];

    protected $primaryKey = 'topic_id';

}
