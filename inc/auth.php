<?php 
   require("../config/conexion.php");

   if($_POST["tipo"]==="login"){
        $query = "SELECT * FROM usuarios WHERE usu_email = ?";
        $stmt = $conn->prepare($query);
        $email = $_POST["email"];
        $stmt->bindParam(1, $email);
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if($resultado){
            $password = $_POST["password"];
            $auth = password_verify($password, $resultado["usu_password"]);
            if($auth){
                session_start();
                $_SESSION["usuario"] = [
                    "nombres" => $resultado["usu_nombres"],
                    "apellidos" => $resultado["usu_apellidos"],
                    "email" => $resultado["usu_email"],
                    "id" => $resultado["usu_id"],
                    "login" => true,
                ];
                echo 1;
            }else{
                echo 2;
            }
        }else{
            echo 3;
        }
    
   }
