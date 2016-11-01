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
$sql_select = "SELECT SUM(CONVERT(BIGINT, o1.object_id) + CONVERT(BIGINT, o2.object_id) + CONVERT(BIGINT, o3.object_id) + CONVERT(BIGINT, o4.object_id)) FROM sys.objects o1 CROSS JOIN sys.objects o2 CROSS JOIN sys.objects o3 CROSS JOIN sys.objects o4";
echo "Generando carga a la base de datos";
for($i = 0; $i < 10; $i++) {	
	$stmt = $conn->query($sql_select);
	$registrants = $stmt->fetchAll();

}
termine
?>