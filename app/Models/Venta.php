<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'TB_Ventas';
    protected $primaryKey = 'ID_Venta';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'ID_Venta',
        'ID_Pedido',
        'Fecha_Venta',
        'Total'
    ];

    public function detallesVenta()
    {
        return $this->hasMany(DetalleVenta::class, 'ID_Venta', 'ID_Venta');
    }

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'ID_Pedido', 'ID_Pedido');
    }
}
