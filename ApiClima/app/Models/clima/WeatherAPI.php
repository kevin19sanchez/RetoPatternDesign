<?php

namespace App\Models\Clima;

use App\Models\Clima;

class WeatherAPI implements Clima{

    public function temperatura(): float {
        return 16.5;
    }

    public function nombreCiudad(): string {
        return "Santa Ana";
    }

    public function probabilidaLLuvia(): int {
        return 80;
    }
    public function tipoPrecipitacion(): string {
        return "Lluvia";
    }

    public function toArray(): array{
        return [
            'temperatura' => $this->temperatura() . "°",
            'nombre_ciudad' => $this->nombreCiudad(),
            'probabilida_lluvia' => $this->probabilidaLLuvia(). "%",
            'precipitacion' => $this->tipoPrecipitacion()
        ];
    }
}
