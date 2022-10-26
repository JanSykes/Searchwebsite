<?php
session_start();
$DB_HOST='localhost';
$DB_USER='student';
$DB_PASS='JWSykes20831731';
$DB_NAME='login';

$con= mysqli_connect($DB_HOST, $DB_USER, 
$DB_PASS, $DB_NAME);

if( mysqli_connect_errno()){
    exit('Connection failed:'.mysqli_connect_errno());

}
if (!isset($_POST['Username'], $_POST['Password'])){
    exit('Please Fill in all fields.');
}
if ($stmt = $con -> prepare('SELECT id, Password,
 FROM Accdetails WHERE Username =?')){
     $stmt->bind_param('s', $_POST['Username']);
     $stmt->execute();

     $stmt->store_result();

    if ($stmt-> num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();

        if ($_POST['password'] === $password) {
            session_regenerate_id();
            $_SESSION['Logged in']= TRUE;
            $_SESSION['name']=$_POST['username'];
            $_SESSION['id']= $id;
            echo 'Welcome' .$_SESSION['name'];
        } else{
            echo ' Wrong Username or Password' ;
        }
    }else {
        echo 'Wrong Username or Password';
    }


    
     $stmt->close();
}
?>

<!-- https://codeshack.io/secure-login-system-php-mysql/ -->