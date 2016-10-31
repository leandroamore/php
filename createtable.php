<?php
// DB connection info
$connection_string = getenv("SQLAZURECONNSTR_DbConn");
// Parse db connection string into variables
$vars_string = str_replace(";","&",$connection_string);
parse_str($vars_string);

try{
     $conn = new PDO( "sqlsrv:Server= $Server ; Database = $Database", $User, $Password);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = "CREATE TABLE registration_tbl(
    id INT NOT NULL IDENTITY(1,1) 
    PRIMARY KEY(id),
    name VARCHAR(30),
    email VARCHAR(30),
    date DATE)";
    $conn->query($sql);
}
catch(Exception $e){
    die(print_r($e));
}
echo "<h3>Table created.</h3>";
?>