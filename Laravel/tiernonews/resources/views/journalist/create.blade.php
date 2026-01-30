<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a new Journalist</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column; /* Apila Header y Contenido */
        }

        /* Header Estilo */
        .navbar {
            padding: 1.5rem 0;
        }
        .navbar-brand {
            font-size: 1.8rem;
            letter-spacing: -1px;
        }
        .nav-link {
            font-size: 1rem;
            transition: all 0.3s;
            margin-left: 15px;
        }
        .nav-link:hover {
            color: #0dcaf0 !important;
            transform: translateY(-2px);
        }

        /* Contenedor del Formulario */
        .main-content {
            flex-grow: 1; /* Ocupa el espacio restante */
            display: flex;
            align-items: center; /* Centra el formulario verticalmente */
            justify-content: center;
            padding: 40px 0;
        }

        .card {
            border: none;
            border-radius: 25px;
            overflow: hidden;
            width: 100%;
            max-width: 500px;
        }

        .btn-gradient {
            background: linear-gradient(to right, #667eea, #764ba2);
            border: none;
            color: white;
            padding: 12px;
            font-weight: bold;
            transition: opacity 0.3s;
        }
        .btn-gradient:hover {
            opacity: 0.9;
            color: white;
        }
    </style>
</head>
<body>
@include("components.header")
<main class="main-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-8 col-lg-6">
                <div class="card shadow-lg">
                    <div class="card-body p-4 p-md-5">
                        <div class="text-center mb-4">
                            <div class="bg-light d-inline-block p-3 rounded-circle mb-3">
                                <i class="fa-solid fa-pen-nib fa-2x text-primary"></i>
                            </div>
                            <h2 class="fw-bold">Nueva Cuenta</h2>
                            <p class="text-muted">Únete a nuestra red de periodistas</p>
                        </div>

                        <form action="{{ route('journalist.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label small fw-bold">Nombre</label>
                                    <input name="name" type="text" class="form-control" placeholder="Ej. Adrián">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label small fw-bold">Apellidos</label>
                                    <input name="surname" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Email</label>
                                <input name="email" type="email" class="form-control" placeholder="adri.musta@com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Contraseña</label>
                                <input name="password" type="password" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label class="form-label small fw-bold">Confirmar Contraseña</label>
                                <input name="password2" type="password" class="form-control">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-gradient btn-lg">Crear Perfil <i class="fa-solid fa-arrow-right ms-2"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-white text-center py-3 border-0">
                        <small class="text-muted">¿Ya tienes cuenta? <a href="#" class="text-primary fw-bold text-decoration-none">Inicia sesión</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>