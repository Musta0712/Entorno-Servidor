<!-- Formulario de Login -->
<div class="container">
    <div class="form-container">
            <h2>Iniciar Sesión</h2>
            <form id="loginForm" action="<?= $_SERVER["PHP_SELF"] ?>" method="post">

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" name="password" required>
            </div>

            <div class="checkbox-group">
                <input type="checkbox" id="stay-connected" name="stay-connected">
                <label for="stay-connected">Quiero seguir conectado</label>
            </div>

            <button type="submit">Iniciar Sesión</button>

            <div class="form-footer">
                <a href="form-signup.php" class="btn-link">Crear Usuario</a>
                <a href="form-login.php" class="btn-link">Inicio de Sesión</a>
                <a href="index.php" class="btn-link">Home</a>
            </div>
        </form>
    </div>
</div>