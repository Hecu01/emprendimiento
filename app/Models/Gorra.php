<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gorra extends Model
{
	// Instancio la tabla 'gorras para soldadores' 
   	protected $table = 'betsob_gorras';


    // Declaro los campos que usaré de la tabla 'gorras para soldadores' 
    protected $fillable = ['nombre_gorra', 'talle_gorra', 'creador_gorra', 'imagen_gorra', 'url_gorra'];

    // Relación One to Many (Uno a muchos), un registro puede tener muchas imágenes 
    public function imagenesbicicletas()
    {
        return $this->hasMany('App\Imgbicicletas');
    }
}
