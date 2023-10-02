<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $primaryKey = 'ID_CLIENTE';
    protected $fillable = ['nombres','apellidos', 'direccion', 'dpi', 'telefono', 'correo', 'fecha_nacimiento', 'estado'];
    public $timestamps = false;

    public function Socio()
    {
        return $this->hasOne(socio::class, 'ID_CLIENTE', 'ID_CLIENTE');

    }
}
