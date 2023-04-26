<?php 
   require("../config/conexion.php");

   if(isset($_POST["tipo"]) && $_POST["tipo"] =="crear"){
        $query = "SELECT * FROM usuarios WHERE usu_email = ?";
        $query = "INSERT INTO usuarios (usu_nombres,usu_apellidos,usu_telefono,usu_email,usu_password,creado)
                  VALUES (?,?,?,?,?,?)
        ";
        $stmt = $conn->prepare($query);
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $telefono = $_POST["telefono"];
        $email = $_POST["email"];
        $contrasena = $_POST["contrasena"];
        $passwordHash = password_hash($contrasena, PASSWORD_DEFAULT);

        $fechaHoy = date('Y-m-d');
        $stmt->bindParam(1, $nombre);
        $stmt->bindParam(2, $apellidos);
        $stmt->bindParam(3, $telefono);
        $stmt->bindParam(4, $email);
        $stmt->bindParam(5, $passwordHash);
        $stmt->bindParam(6, $fechaHoy);
        $resultado = $stmt->execute();

        if($resultado){
            echo 1;
        }
   }

?>