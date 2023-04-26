    <?php
    $inicio = true;
    include_once("templates/header.php");
    ?>

    <div class="container-auth">
        <div class="card">
            <h2 class="titulo-login">Iniciar Sesión</h2>
            <form id="form-login">
                <div class="form-group">
                    <label for="nombre">E-mail:</label>
                    <input type="email" class="form-control" id="email" placeholder="Introduce tu E-mail">
                </div>
                <div class="form-group">
                    <label for="apellidos">Contraseña:</label>
                    <input type="password" class="form-control" id="password" placeholder="Introduce tu contraseña">
                </div>

                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>
        <div class="background"></div>
    </div>

    <?php include_once("templates/footer.php"); ?>