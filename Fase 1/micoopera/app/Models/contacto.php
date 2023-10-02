<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{
    use HasFactory;

    protected $table = 'contactos';
    protected $primaryKey = 'ID_CONTACTO';
    protected $fillable = ['id_usuario', 'cod_cliente','id_producto', 'fecha_probable', 'detalle', 'fecha_contacto'];
    public $timestamps = false;



}
