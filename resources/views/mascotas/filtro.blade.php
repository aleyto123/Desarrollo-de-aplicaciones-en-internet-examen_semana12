<!DOCTYPE html>
<html>
<head>
    <title>Filtrar Mascotas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="mb-4 text-center">Filtrar Mascotas por Tipo y Raza</h1>

    <form method="GET" action="{{ route('mascotas.filtro') }}" class="row g-3 mb-4">
        <div class="col-md-3">
            <label class="form-label">Tipo:</label>
            <select name="tipo" class="form-select">
                <option value="Perro">Perro</option>
                <option value="Gato">Gato</option>
                <option value="Pájaro">Pájaro</option>
            </select>
        </div>
        <div class="col-md-3">
            <label class="form-label">Raza:</label>
            <input type="text" name="raza" class="form-control" placeholder="Ej: Labrador">
        </div>
        <div class="col-md-2">
            <label class="form-label">Cantidad:</label>
            <input type="number" name="limite" class="form-control" value="5" min="1">
        </div>
        <div class="col-md-2 align-self-end">
            <button type="submit" class="btn btn-success">Filtrar</button>
        </div>
    </form>

    @isset($mascotas)
        <h3>Resultados: {{ count($mascotas) }}</h3>
        <div class="row">
            @forelse($mascotas as $mascota)
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $mascota->nombre }}</h5>
                            <p class="card-text">
                                <strong>Tipo:</strong> {{ $mascota->tipo }}<br>
                                <strong>Raza:</strong> {{ $mascota->raza }}<br>
                                <strong>Edad:</strong> {{ $mascota->edad }} años<br>
                                <strong>Peso:</strong> {{ $mascota->peso }} kg
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <p>No se encontraron mascotas con esos filtros.</p>
            @endforelse
        </div>
    @endisset
</div>

</body>
</html>
