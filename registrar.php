<?php

include ("conexion.php");

if(isset($_POST['register'])) {
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['direction']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['comments']) >= 1 
       ) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $direction = trim($_POST['direction']);
            $phone = trim($_POST['phone']);
            $comments = trim($_POST['comments']);

            $consulta = "INSERT INTO registropersonas(nombre,email,direccion,telefono,comentarios)"
                VALUES('$name','$email','$direction','$phone','$comments')";
            $resultado = mysql_query($conex, $consulta);
            if ($resultado) {
            ?>
                <h3 class="sucess">tu registro se a completado</h3>
            <?php
            } else {
            ?>
                <h3 class="error"> ocurrio un error </h3>
            <?php
            }
        } else {
            ?>
                <h3 class="error"> llena todos los campos </h3>
            <?php
        }

}



?>
