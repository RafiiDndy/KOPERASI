<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShuAnggota extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','withdrawn'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
