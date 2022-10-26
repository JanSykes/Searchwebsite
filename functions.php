<?php

function check_login($con)
{
 if(isset($_SESSION['user_id']))
 {
     $id = $_SESSION['user_id'];
     $query = "select * from Accdetails where user_id = '$id' limit 1 ";

     $results = mysqli_query($con, $query);
     if($results && mysqli_num_rows($results)>0)
     {
         $user_data = mysqli_fetch_assoc($results);
         return $user_data;
     }
 }
}
function random_number($numblength)
{
    $text = "";
    if ($numblength < 1)
    {
        $numblength = 1;
    }
    $num = rand(1, $numblength);

    for ($i=0; $i < $num; $i++){

        $text .= rand(1,4);

    }
    return $text;

}