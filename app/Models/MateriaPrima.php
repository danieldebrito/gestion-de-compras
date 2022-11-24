<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pedidoitem
 *
 * id			unidad

 * @property $id
 * @property $nombre
 * @property $pesoEspecifico
 * @property $unidad
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MateriaPrima extends Model {

  use HasFactory;

  protected $table = "mp";
    
    static $rules = [
    	'id' => 'required',
		'nombre' => 'required',
		'pesoEspecifico' => 'required',
		'unidad' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','nombre','pesoEspecifico','unidad'];
  }
