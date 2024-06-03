<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'TB_Productos';
    protected $primaryKey = 'ID_Producto';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'ID_Producto',
        'Categoria',
        'Etiqueta',
        'Descripcion',
        'Medidas',
        'Material',
        'Nombre',
        'Extras'
    ];

    public function detallesVenta()
    {
        return $this->hasMany(DetalleVenta::class, 'ID_Producto', 'ID_Producto');
    }

}
