<form method="post" action="IDsearch">
    <h1>IDENTITY SEARCH</H1>
    <input type="text" name="search" required/>
    <input type="submit" value="search"/>
</form>
<?php
if(isset($_POST['search'])){
    require "IDsearch.php";

    if(count($results) > 0){
        foreach($results as $r){
            printf("<div>%s - %s<div>", $r['name'],
             $r['email']);
        }
    } else {echo "0 Results found";}
}
?>