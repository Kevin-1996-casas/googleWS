<?php
//AL SELECCIONAR LA ESPECIALIDAD ACTIVA LA LISTA CON LOS NOMBRES DE LOS ESPECIALISTAS 
if(!require('g20_conexion.php')){
    echo "NO";
}

//WHERE id = 42
$enlace = mysql_connect('localhost', "root", "");
$sql       = "SELECT  * FROM g20_especialidades";
$resultado = mysqli_query($conexion, $sql);



//$resultado   =  mysqli_query($conexion, "INSERT INTO $tabla_db1 (doc,nombre,direccion,telefono) values ('$doc','$nombre','$dir','$tel')");
      

//$resultado = mysql_query($sql, $enlace);
$health_profile_codes2=array();
if (!$resultado) {
    echo "Error de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL: " . mysql_error();
    exit;
}else{
    
    while ($fila = mysql_fetch_assoc($resultado)) {
        $tmp=array();
        $tmp['codigo']=$fila['codigo'];
        $tmp['especialidad']=$fila['especialidad'];
        
        array_push($health_profile_codes2, $tmp);
        
    }
}

//$health_profile_codes2=array();


//array_push($health_profile_codes2, $tmp);
echo(json_encode(array("Especialidades" =>$health_profile_codes2)));


//mysql_free_result($resultado);


?>