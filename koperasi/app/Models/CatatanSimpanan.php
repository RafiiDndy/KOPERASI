<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanSimpanan extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','jumlah', 'jenis_simpanan', 'status', 'bukti_transfer'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
