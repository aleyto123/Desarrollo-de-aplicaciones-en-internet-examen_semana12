<!DOCTYPE html>
<html>
<head>
    <title>Mascotas por Tipo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="mb-4 text-center">Buscar Mascotas por Tipo</h1>

    <form method="GET" action="{{ route('mascotas.por_tipo') }}" class="row g-3 mb-5">
        <div class="col-auto">
            <label for="tipo" class="form-label">Tipo de mascota:</label>
            <select name="tipo" id="tipo" class="form-select">
                <option value="Perro">Perro</option>
                <option value="Gato">Gato</option>
                <option value="Pájaro">Pájaro</option>
            </select>
        </div>
        <div class="col-auto align-self-end">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>

    @if(isset($mascotas))
        <h2 class="mb-4">Resultados para tipo: <span class="text-primary">{{ $tipo }}</span></h2>
        <div class="row">
            @forelse($mascotas as $mascota)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $mascota->nombre }}</h5>
                            <p class="card-text">
                                <strong>Raza:</strong> {{ $mascota->raza }}<br>
                                <strong>Edad:</strong> {{ $mascota->edad }} años<br>
                                <strong>Peso:</strong> {{ $mascota->peso }} kg<br>
                                <strong>Adopción:</strong> {{ $mascota->fecha_adopcion }}
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <p>No se encontraron mascotas de este tipo.</p>
            @endforelse
        </div>
    @endif
</div>

</body>
</html>
