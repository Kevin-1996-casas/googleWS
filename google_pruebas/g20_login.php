<?php

if(!require('g20_conexion.php')){
    echo "NO";
}

$usuario = $_GET['usuario'];
$password = $_GET['password'];
//echo $usuario."->".$password;
//WHERE id = 42
//SELECT pa.codigo FROM g20_pacientes as pa WHERE pa.dni =72130554 and pa.pass='admin123'
//"SELECT usuario FROM g20_usuarios WHERE usuario='$usuario' AND passhash='$password'"
$enlace = mysql_connect('localhost', "root", "");

$sql0       = "SELECT activo FROM g20_pacientes WHERE correo='$usuario' AND pass='$password'";
$resultado0 = mysqli_query($conexion, $sql0);
while ($fila = mysql_fetch_assoc($resultado0)) {
    $stateActivo= $fila['activo'];
}

if($stateActivo==1){
    $sql       = "SELECT pa.codigo FROM g20_pacientes as pa WHERE pa.correo ='$usuario' AND pa.pass='$password'";
    $resultado = mysqli_query($conexion, $sql);


    while ($fila = mysql_fetch_assoc($resultado)) {
        $codigouser= $fila['codigo'];
    }

    //$resultado   =  mysqli_query($conexion, "INSERT INTO $tabla_db1 (doc,nombre,direccion,telefono) values ('$doc','$nombre','$dir','$tel')");
        

    //$resultado = mysql_query($sql, $enlace);

    if (!$resultado) {
        echo(json_encode(array("status" =>"0")));
        //echo "Error de BD, no se pudo consultar la base de datos\n";
        //echo "Error MySQL: " . mysql_error();
        exit;
    }else{
        //echo(json_encode(array("status" =>$codigoo)));
        echo(json_encode(array("status" =>$codigouser)));
    }
}else{
    echo(json_encode(array("status" =>"3")));
}

/*while ($fila = mysql_fetch_assoc($resultado)) {
    echo $fila['usuario'];
}*/

//mysql_free_result($resultado);


?>