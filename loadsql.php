<?php

$connection_string = getenv("SQLAZURECONNSTR_DbConn");
// Parse db connection string into variables
$vars_string = str_replace(";","&",$connection_string);
parse_str($vars_string);

$entorno=getenv("Entorno");
try {
    $conn = new PDO( "sqlsrv:Server= $Server ; Database = $Database", $User, $Password);
	
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(Exception $e){
    die(var_dump($e));
}
$sql_select = "SELECT * FROM registration_tbl";
echo "Generando carga a la base de datos";
for($i = 0; $i < 9999; $i++) {	
	$stmt = $conn->query($sql_select);
	$registrants = $stmt->fetchAll();

}
?>