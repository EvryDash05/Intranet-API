<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'TB_Pedidos';
    protected $primaryKey = 'ID_Pedido';
    protected $fillable = ['ID_Usuario', 'Fecha_Pedido', 'Estado'];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'ID_Usuario', 'ID_Usuario');
    }
    
}
