<?php

namespace App\Services;

use App\Models\Clima;
use App\Models\Clima\OperWeather;
use App\Models\Clima\WeatherAPI;
use Exception;

class ClimaFactory{

    public static function crear(string $tipoApi): Clima{

        return match (strtolower($tipoApi)){
            'operweather' => new OperWeather(),
            'weatherapi' => new WeatherAPI(),
            default => throw new Exception("Api no se reconoce")
        };
    }
}
