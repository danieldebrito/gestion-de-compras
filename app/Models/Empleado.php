<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pedidoitem
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $calleAndNumero
 * @property $localidad
 * @property $provincia
 * @property $cp
 * @property $cuil
 * @property $telefonoLinea
 * @property $telefonoCelular
 * @property $uid
 * @property $email
 * @property $password
 * @property $emailVerified
 * @property $estado
 * @property $role
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model {

  use HasFactory;

  protected $table = "empleados";
    
    static $rules = [
    	'id' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'calleAndNumero' => 'required',
		'localidad' => 'required',
		'provincia' => 'required',
		'cp' => 'required',
		'cuil' => 'required',
		'telefonoLinea' => 'required',
		'telefonoCelular' => 'required',
		'uid' => 'required',
		'email' => 'required',
		'password' => 'required',
		'emailVerified' => 'required',
		'estado' => 'required',
		'role' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','nombre','apellido','calleAndNumero','localidad','provincia','cp','cuil','telefonoLinea','telefonoCelular','uid','email','password','emailVerified','estado','role'];
  }
