<?php

namespace EstudiantesDeLP;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comentarios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_historia', 'comentario', 'id_usuario', 'apodo_anonimo'];

    // relacion inversa de (1 histaria-N comentarios)
    public function historias(){
        return $this->belongsTo('EstudiantesDeLP\Historia', 'id_historia');
    }

    // relacion inversa de (1 usuario - N comentarios)
    public function usuarios(){
        return $this->belongsTo('EstudiantesDeLP\Usuario', 'id_usuario');
    }
}
