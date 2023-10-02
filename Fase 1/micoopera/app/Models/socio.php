<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class socio extends Model
{
    use HasFactory;

    protected $table = 'socios';
    protected $primaryKey = 'id_socio';
    protected $fillable = ['id_cliente','detalle', 'estado'];
    public $timestamps = false;

}
