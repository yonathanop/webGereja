<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendeta extends Model
{
    protected $table = 'pendeta';
    protected $guarded = ['id'];


    public function renungans()
{
    return $this->hasMany(Post::class);
}
public function jadwals()
    {
        return $this->hasMany(Jadwal::class, 'pendeta_id');
    }

}
