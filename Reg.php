<!DOCTYPE html>
<html lang ="eng">
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/
    font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.
    js"></script>
    <title>Registration/login</title>
    
</head>
<body>

<div class="topnav">
        
        <a class="active" href="Index.html">Home</a>
        <a href="IDsearchform.html">Identity Search</a>
        <a href="login.html">Login / Sign up</a>

</div>
    
        <form action="IDsearch.php" id="form" name="form"
        onsubmit="return checkempty();" method="get">

            <div class="container">
                <h1>Register</h1>
                <hr>
                <label for="First name"><b>First name</b></label>
                <input type="text" placeholder="First name" 
                name="First" id="firstname" required>

                <label for="Last name"><b>Last name</b></label>
                <input type="text" placeholder="Last name" 
                name="Last" id="lastname" required>

                <label for="Gender"><b>Gender</b></label>
                <select name="Gender" id="gender">
                    <option value="Please select">Selection</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>


                </select>
                <input type="text" placeholder="Description" required>

                <label for="D.O.B"><b>Date of Birth</b></label>
                
                <input type="date" placeholder="DD/MM/YYYY" 
                name="Date of Birth" id="date" required>

                <input id="submit" name="submit" type="submit" 
                value="submit">
            </div>
            <br>
            <div class="container login">
                <p>Have an account?<a href="login.html">Login</a></p>
                </div>
                
        <!-- https://www.w3schools.com/howto/howto_css_register_form.asp -->
<?php

    $servername = "localhost";
    $username = "student";
    $password = "JWSykes20831731";
    $dbname = "IDsearch";


        $con = mysqli_connect($servername, $username, $password, 
         $dbname);

    if ($con->connect_error){
        die("connection failed:".$con->connect_error);
    }
        echo "You are Succesfully Registered";
        
    
        mysqli_close("$con");

?>
    <h2 href="IDsearch.php">Click here to return Return to Search.</h2>
        </form>

        
        
    </body>
</html>
<!-- https://www.cloudways.com/blog/connect-mysql-with-php/ -->
