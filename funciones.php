<?php
    include "conexion.php";

    function GuardarUsuario($email, $clave){
        try{
            global $conexion;

            $clave = password_hash($clave, PASSWORD_DEFAULT);
            $sql = "INSERT INTO usuario (Email, Clave) VALUES (?,?)";
            $resultado = $conexion->prepare($sql);
            $resultado->bindParam(1, $email, PDO::PARAM_STR);
            $resultado->bindParam(2, $clave, PDO::PARAM_STR);

            if($resultado->execute()){
                echo "<strong>Usuario registrado correctamente</strong>";
            }else{
                echo "<strong>No se pudo regitrar el usuario. Vuelva a intentarlo</strong>";
            }
            
        }catch(PDOException $ex){
            throw new PDOException($ex->getMessage());
        }
    }

    function VerificarUsuario($email, $clave){
        try{
            global $conexion;
            $sql = "SELECT * FROM usuario WHERE Email = ?";
            $resultado = $conexion->prepare($sql);
            $resultado->bindParam(1, $email, PDO::PARAM_STR);
            if($resultado->execute()){
            $datos = $resultado->fetch();
            if($datos){
                $claveCorrecta = $datos['Clave'];
                $emailCorrecto = $datos['Email'];
                if(password_verify($clave, $claveCorrecta)){
                    session_start();
                    $_SESSION['Email'] = $emailCorrecto;
                    header("location:operaciones.php");
                }else{
                    echo "Error en el ingreso. Vuelva a intentarlo";
                }
            }else{
                echo "Error, vuelva a intentarlo";
            }
            }else{
            echo "Ocurrio un error. Vuelva a intentarlo";
        }
        }catch(PDOException $ex){
            throw new PDOException($ex->getMessage());
        }
    }