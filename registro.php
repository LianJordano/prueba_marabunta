<?php include_once("templates/header.php"); ?>

<div class="container-auth">
    <div class="card">
        <h2 class="titulo-login">Crear Cuenta</h2>
        <form id="form-registrar">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce tu nombre">
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Introduce tus apellidos">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Introduce tu teléfono">
            </div>
            <div class="form-group">
                <label for="telefono">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Introduce tu email">
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Introduce tu contraseña">
            </div>

            <div class="form-group">
                <label for="contrasena">Valida tu contraseña:</label>
                <input type="password" class="form-control" id="v_contrasena" name="v_contrasena" placeholder="Valida tu contraseña">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
    <div class="background"></div>
</div>

<?php include_once("templates/footer.php"); ?>