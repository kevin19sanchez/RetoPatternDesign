<?php

namespace App\Http\Controllers;

use App\Services\ClimaFactory;
use Exception;
use Illuminate\Http\JsonResponse;

class ApiController extends Controller
{
    public function show(string $tipoApi): JsonResponse{
        try {
            $climas = ClimaFactory::crear($tipoApi);
            return response()->json($climas->toArray());
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function index(): JsonResponse{
        $tipos = ['operweather', 'weatherapi'];
        $climas = [];

        foreach ($tipos as $tipo){
            $clima = ClimaFactory::crear($tipo);
            $climas[] = $clima->toArray();
        }

        return response()->json($climas);
    }
}
