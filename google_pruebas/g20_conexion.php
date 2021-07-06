<?php

//$conexion = new mysqli("myphpapp-318701:southamerica-east1:grupo20sistema", "root", "grupo20sistema", "grupo20sistema");
//$conexion = new mysqli("NS01.000WEBHOST.COM","id16023351_root",'aD)tb\m)~zQ~7NJ',"id16023351_grupo20sistema");
$dbName = getenv('CLOUDSQL_DB');
$dbUser = getenv('CLOUDSQL_USER');
$dbPass = getenv('CLOUDSQL_PASSWORD');
$dbDns = getenv('CLOUDSQl_DSN');
//$conexion = new mysqli('34.95.235.163', "root", "grupo20sistema", "grupo20sistema", 3306);
$conexion = new mysqli(null, $dbUser, $dbPass, $dbName, $dbDns);
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
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
  }

?>
