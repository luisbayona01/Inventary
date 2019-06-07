<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{ public $timestamps = false;
  protected $table = 'productos';  // tabla productos
  protected $primaryKey = 'idproductos';
  protected $fillable = ['name','stock','fechavencimiento','nlote','valor']; // campos de  la tabla






   
}
