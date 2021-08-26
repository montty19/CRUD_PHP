<?php
              if (isset($_POST["btn_agregar"])){
                include("datos_conexion.php");
                $db_conexion = mysqli_connect($db_host,$db_usr,$db_pass,$db_nombre);
                $txt_codigo = utf8_decode( $_POST["txt_codigo"]);
                $txt_nombre = utf8_decode( $_POST["txt_nombre"]);
                $txt_apellido = utf8_decode( $_POST["txt_apellido"]);
                $txt_direccion = utf8_decode( $_POST["txt_direccion"]);
                $txt_telefono = utf8_decode( $_POST["txt_telefono"]);
                $drop_puesto = utf8_decode( $_POST["drop_puesto"]);
                $txt_fn = utf8_decode( $_POST["txt_fn"]);
                $sql = "INSERT INTO db_empresa.empleados(codigo,nombres,apellidos,direccion,telefono,fecha_nacimiento,id_puesto)
                        VALUES('". $txt_codigo ."','". $txt_nombre."','". $txt_apellido ."','". $txt_direccion ."','". $txt_telefono ."','". $txt_fn ."',". $drop_puesto .")";
                if($db_conexion->query($sql)===true){
                  $db_conexion ->close();
                  echo "Insertado Correctamente";
                  header ('location: index.php');
                }else{
                  echo "Error" . $sql ."<br>".$db_conexion ->close();
                }            
              }
?>

<?php
              if (isset($_POST["btn_modificar"])){
                include("datos_conexion.php");
                $db_conexion = mysqli_connect($db_host,$db_usr,$db_pass,$db_nombre);
                $txt_codigo = utf8_decode( $_POST["txt_codigo"]);
                $txt_nombre = utf8_decode( $_POST["txt_nombre"]);
                $txt_apellido = utf8_decode( $_POST["txt_apellido"]);
                $txt_direccion = utf8_decode( $_POST["txt_direccion"]);
                $txt_telefono = utf8_decode( $_POST["txt_telefono"]);
                $drop_puesto = utf8_decode( $_POST["drop_puesto"]);
                $txt_fn = utf8_decode( $_POST["txt_fn"]);
                $sql = ("UPDATE db_empresa.empleados SET nombres = '$txt_nombre', apellidos = '$txt_apellido',direccion = '$txt_direccion ',telefono = '$txt_telefono ',
                         fecha_nacimiento = '$txt_fn',id_puesto = $drop_puesto    WHERE codigo = '$txt_codigo'");
                if($db_conexion->query($sql)===true){
                  $db_conexion ->close();
                  echo "Modificado Corectamente";
                  header ('location: index.php');
                }else{
                  echo "Error" . $sql ."<br>".$db_conexion ->close();
                }            
              }
?>

<?php
              if (isset($_POST["btn_eliminar"])){
                include("datos_conexion.php");
                $db_conexion = mysqli_connect($db_host,$db_usr,$db_pass,$db_nombre);
                $txt_codigo = utf8_decode( $_POST["txt_codigo"]);
                $txt_nombre = utf8_decode( $_POST["txt_nombre"]);
                $txt_apellido = utf8_decode( $_POST["txt_apellido"]);
                $txt_direccion = utf8_decode( $_POST["txt_direccion"]);
                $txt_telefono = utf8_decode( $_POST["txt_telefono"]);
                $drop_puesto = utf8_decode( $_POST["drop_puesto"]);
                $txt_fn = utf8_decode( $_POST["txt_fn"]);
                $sql = ("DELETE FROM db_empresa.empleados WHERE codigo = '$txt_codigo'");
                if($db_conexion->query($sql)===true){
                  $db_conexion ->close();
                  echo "Eliminado Corectamente";
                  header ('location: index.php');
                }else{
                  echo "Error" . $sql ."<br>".$db_conexion ->close();
                }            
              }
?>

