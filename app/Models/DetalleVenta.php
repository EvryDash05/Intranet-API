<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;

    protected $table = 'TB_Detalle_Venta';
    protected $primaryKey = 'ID_Detalle_Venta';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'ID_Detalle_Venta',
        'ID_Venta',
        'ID_Producto',
        'Cantidad',
        'Precio_Unitario',
        'Subtotal'
    ];

    public function venta()
    {
        return $this->belongsTo(Venta::class, 'ID_Venta', 'ID_Venta');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'ID_Producto', 'ID_Producto');
    }

}
