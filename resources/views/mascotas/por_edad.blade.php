<!DOCTYPE html>
<html>
<head>
    <title>Mascotas por Edad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="mb-4 text-center">Ordenar Mascotas por Edad</h1>

    <form method="GET" action="{{ route('mascotas.por_edad') }}" class="row g-3 mb-4">
        <div class="col-auto">
            <label for="orden" class="form-label">Orden:</label>
            <select name="orden" id="orden" class="form-select">
                <option value="asc" {{ $orden === 'asc' ? 'selected' : '' }}>Ascendente</option>
                <option value="desc" {{ $orden === 'desc' ? 'selected' : '' }}>Descendente</option>
            </select>
        </div>
        <div class="col-auto align-self-end">
            <button type="submit" class="btn btn-primary">Ordenar</button>
        </div>
    </form>

    <div class="row">
        @foreach($mascotas as $mascota)
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $mascota->nombre }}</h5>
                        <p class="card-text">
                            <strong>Edad:</strong> {{ $mascota->edad }} años<br>
                            <strong>Tipo:</strong> {{ $mascota->tipo }}<br>
                            <strong>Raza:</strong> {{ $mascota->raza }}<br>
                            <strong>Peso:</strong> {{ $mascota->peso }} kg<br>
                            <strong>Adopción:</strong> {{ $mascota->fecha_adopcion }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>
