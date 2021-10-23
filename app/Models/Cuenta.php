<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    //use HasFactory;
    protected $table = "t_cuentas";
    protected $primaryKey="id";
    protected $fillable=[
        'DNI','Id_Producto','Plan','Grupo','N_Sorteo','N_Sorteo2','N_Sorteo3','N_Sorteo4','C_Cuotas','P_Cuota','Entrega','Precio_Total','Vendedor','Cobrador','Vencimiento','N_Cuotas','situacion','u_fecha_p'
    ];
}
