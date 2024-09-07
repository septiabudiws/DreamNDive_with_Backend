<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table='kategori';
    protected $guarded=[];

    public function portofolio(){
        return $this->hasMany(Portofolio::class, 'kategori_id', 'id');
    }
}
