<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;

class MascotaController extends Controller
{
    // Consulta 1: mostrar mascotas por tipo (Perro, Gato, etc.)
    public function buscarPorTipo(Request $request)
    {
        $tipo = $request->input('tipo'); // recibe el tipo del formulario

        $mascotas = Mascota::where('tipo', $tipo)->get(); // consulta con Eloquent

        return view('mascotas.por_tipo', compact('mascotas', 'tipo'));
    }

    // Consulta 2: ordenar mascotas por edad
    public function ordenarPorEdad(Request $request)
    {
        $orden = $request->input('orden', 'asc'); // por defecto ascendente

        $mascotas = Mascota::orderBy('edad', $orden)->get();

        return view('mascotas.por_edad', compact('mascotas', 'orden'));
    }

    // Consulta 3: filtrar por tipo y raza con límite
    public function filtrarPorTipoYRaza(Request $request)
    {
        $tipo = $request->input('tipo');
        $raza = $request->input('raza');
        $limite = $request->input('limite', 5); // por defecto 5 si no elige nada

        $mascotas = Mascota::where('tipo', $tipo)
                        ->where('raza', $raza)
                        ->limit($limite)
                        ->get();

        return view('mascotas.filtro', compact('mascotas', 'tipo', 'raza', 'limite'));
    }
}
