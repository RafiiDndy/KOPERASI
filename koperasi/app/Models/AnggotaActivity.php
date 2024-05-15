<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaActivity extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','activity','total_harga'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
