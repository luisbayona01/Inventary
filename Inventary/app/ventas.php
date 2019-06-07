<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{    public $timestamps = false;
    protected $table = 'ventas';  // tabla productos
   protected $primaryKey = 'Idventas';
   protected $fillable = ['tipouser','cantidad']; // campos de  la tabla



}
