<?php

namespace App\Models;

use App\Enums\RegistroStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Registro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'dni',
        'telefono',
        'status',
        'user_id',
        'antiguedad_id',
        'tipovivienda_id',
        'residencia_id',
        'tenencia_id',
        'cantpersona_id',
        'estudiosuperior_id',
        'obra_id',
        'informe_id',
        'ingreso_id',
        'grupofamiliar_id',
        'trabajo_id',
        'ubicacion_id',
        'punto_id',
    ];

    protected $casts = [
        'status' => RegistroStatus::class,
    ];

    //relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function antiguedad(){
        return $this->belongsTo(Antiguedad::class);
    }

    public function vivienda(){
        return $this->belongsTo(Tipovivienda::class);
    }

    public function residencia(){
        return $this->belongsTo(Residencia::class);
    }

    public function tenencia(){
        return $this->belongsTo(tenencia::class);
    }

    public function Cantpersonas(){
        return $this->belongsTo(Cantpersonas::class);
    }

    public function estudiosuperior(){
        return $this->belongsTo(Estudiosuperior::class);
    }

    public function obra(){
        return $this->belongsTo(Obra::class);
    }

    public function informe(){
        return $this->belongsTo(Informe::class);
    }

    public function ingreso(){
        return $this->belongsTo(Ingreso::class);
    }
    public function Grupofamiliar(){
        return $this->belongsTo(Grupofamiliar::class);
    }
    public function trabajo(){
        return $this->belongsTo(Trabajo::class);
    }

    public function ubicacion(){
        return $this->belongsTo(Ubicacion::class);
    }

    public function puntos(){
        return $this->belongsTo(Punto::class);
    }
}
