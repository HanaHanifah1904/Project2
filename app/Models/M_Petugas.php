<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Petugas extends Model
{
    use HasFactory;

    protected $table = 'tb_petugas'; 
    protected $primaryKey = 'id_petugas';
    public $timestamps = false; 

    protected $fillable = ['Nama', 'No_HP', 'Alamat', 'keterangan', 'id_tim']; 

    public function tim()
    {
        return $this->belongsTo(M_Tim::class, 'id_tim', 'id_tim');
    }

}
