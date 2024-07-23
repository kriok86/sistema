<?php

namespace App\Enums;

enum RegistroStatus:int
{
    case Registrado = 1;
    case Permiso_Ocupacion = 2;
    case Adjudicacion = 3;
}
