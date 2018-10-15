<?php

namespace EstudiantesDeLP;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
class Usuario extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usuarios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = ['usuario', 'clave', 'email'];
    protected $fillable = ['usuario', 'password', 'email'];
//    protected $fillable = ['usuario', 'password'];

    /**
     * Devuelve todas las historias creado por cada usuario.
     * Es 1-N
     */
    public function historias()
    {
        return $this->hasMany('EstudiantesDeLP\Historia', 'id_usuario_creador');
    }

    // relacion 1 Usuario - N comentarios
    public function comentarios(){
        return $this->hasMany('EstudiantesDeLP\Comentario', 'id_usuario');
    }
}
