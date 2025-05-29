<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    protected $guarded = ['id'];
    public function pendeta()
    {
        return $this->belongsTo(Pendeta::class, 'pendeta_id');
    }
}
