<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journalists</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    @include("components.header")
    <h2>Journalists</h2>
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('journalist.create') }}" class="btn btn-primary">
            Crear
        </a>
    </div>
    <p class="bg-info">Estos son las o los periodistas de mi BD</p>
    @if (@session('deleted'))
        <div class="alert alert-success" role="alert">
            {{ session('deleted') }}
        </div>
    @endif
    
    @foreach ($journalists as $j)
    <div class="card bg-success">
        <br>
        <p>Nombre: {{ $j->name }}</p>
        <p>Apellido: {{ $j->surname }}</p>
        <p>Email: {{ $j->email }}</p>
        <p>Contraseña: {{ $j->password }}</p>

        <div class="d-flex gap-2">
            <a href="{{ route('journalist.edit', $j->id) }}" class="btn btn-warning btn-sm">Editar</a>

            <form action="{{ route('journalist.destroy', $j->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar a este periodista?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
            </form>
        </div>
    </div>
    <br><br>
    @endforeach
</body>
</html>