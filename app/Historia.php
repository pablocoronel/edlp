<?php

namespace EstudiantesDeLP;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Historia extends Model
{
    use SoftDeletes;

	 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'historias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo', 'nombre_portada', 'contenido', 'id_usuario_creador'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Devolver el usuario creador de cada historia.
     * N-1
     */
    public function usuarios()
    {
        return $this->belongsTo('EstudiantesDeLP\Usuario', 'id_usuario_creador');
    }

    // Devolver relacion 1 Historia - N comentarios
    public function comentarios(){
        return $this->hasMany('EstudiantesDeLP\Comentario', 'id_historia');
    }
}
