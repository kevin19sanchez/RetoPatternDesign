<?php

namespace App\Models;

interface Clima{
    public function temperatura(): float;
    public function nombreCiudad(): string;
    public function probabilidaLLuvia(): int;
    public function tipoPrecipitacion(): string;
    public function toArray(): array;
}
