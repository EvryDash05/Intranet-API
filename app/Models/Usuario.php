<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'TB_Usuarios';
    protected $primaryKey = 'ID_Usuario';
    protected $fillable = ['ID_Usuario', 'Nombre', 'Correo', 'Contraseña'];

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'ID_Usuario', 'ID_Usuario');
    }

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'TB_usuario_roles', 'ID_Usuario', 'id_rol');
    }

}
