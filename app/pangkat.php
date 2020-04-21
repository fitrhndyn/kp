<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class pangkat extends Model
{
    protected $table='golongan';

    public function pegawai()
   {
       return $this->HasOne('App\pegawai');
   }
}
