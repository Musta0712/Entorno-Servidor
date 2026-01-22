<!-- Formulario de Login -->
<div class="container">
    <div class="form-container">
        <form method="POST" action="login.php">
            <h2>Iniciar Sesión</h2>
            
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" name="password" required>
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