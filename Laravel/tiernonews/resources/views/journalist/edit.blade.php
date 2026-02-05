<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Journalist</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 0;
        }

        .card {
            border: none;
            border-radius: 25px;
            overflow: hidden;
            max-width: 500px;
        }

        .btn-gradient {
            background: linear-gradient(to right, #667eea, #764ba2);
            border: none;
            color: white;
            padding: 12px;
            font-weight: bold;
        }
    </style>
</head>

<body>
@include("components.header")

<main class="main-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body p-5">

                        <h2 class="fw-bold text-center mb-4">Editar Periodista</h2>

                        <form action="{{ route('journalist.update', $journalist->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Nombre</label>
                                    <input name="name" type="text" class="form-control" value="{{ $journalist->name }}">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Apellidos</label>
                                    <input name="surname" type="text" class="form-control" value="{{ $journalist->surname }}">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Email</label>
                                <input name="email" type="email" class="form-control" value="{{ $journalist->email }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Contraseña</label>
                                <input name="password" type="password" class="form-control">
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">Confirmar Contraseña</label>
                                <input name="password_confirmation" type="password" class="form-control">
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-gradient btn-lg">
                                    Guardar Cambios
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html>
