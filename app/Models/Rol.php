<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'TB_rol';
    protected $primaryKey = 'id_rol';
    protected $fillable = ['rol_nombre'];

    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'TB_usuario_roles', 'id_rol', 'ID_Usuario');
    }

}
