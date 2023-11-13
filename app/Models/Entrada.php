<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Entrada
 *
 * @property $id
 * @property $titulo
 * @property $descripcion
 * @property $asunto
 * @property $idCategoria
 * @property $url
 * @property $urlThumb
 * @property $autor
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Entrada extends Model
{
    
    static $rules = [
		'titulo' => 'required',
		'descripcion' => 'required',
		'asunto' => 'required',
		'idCategoria' => 'required',
		'url' => 'required',
		'urlThumb' => 'required',
		'autor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','descripcion','asunto','idCategoria','url','urlThumb','autor'];



}
