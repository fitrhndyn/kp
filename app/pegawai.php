<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{ 
   protected $table='pegawai';

   public function pangkat()
   {
       return $this->belongsTo('App\pangkat');
   }
}
