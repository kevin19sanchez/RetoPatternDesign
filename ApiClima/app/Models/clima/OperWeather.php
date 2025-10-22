<?php

namespace App\Models\Clima;

use App\Models\Clima;

class OperWeather implements Clima{

    public function temperatura(): float {
        return 23.5;
    }

    public function nombreCiudad(): string {
        return "San Salvador";
    }

    public function probabilidaLLuvia(): int {
        return 50;
    }
    public function tipoPrecipitacion(): string {
        return "Lluvia";
    }

    public function toArray(): array{
        return [
            'temperatura' => $this->temperatura() . "°",
            'nombre_ciudad' => $this->nombreCiudad(),
            'probabilida_lluvia' => $this->probabilidaLLuvia() . "%",
            'precipitacion' => $this->tipoPrecipitacion()
        ];
    }
}

