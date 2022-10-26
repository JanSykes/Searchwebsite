<?php

$servername = "localhost";
$username = "JWSykes";
$password = "JWSykes20831731";
$dbname = "IDsearch";

//connection
    $con = mysqli_connect($servername, $username, $password, 
    $dbname);

    if ($con -> connect_error){
        die("connection failed:". $con -> connect_error);
    }
    echo "successfull connection";
    
    mysqli_close("$con");

?>



<!-- 