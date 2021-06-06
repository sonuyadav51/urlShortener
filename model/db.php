<?php 

    $domain = "sonuyadav.in/"; //like this: sonuyadav.in/
    $host = "sql212.epizy.com";
    $user = "localhost"; //Database username
    $pass = ""; //Database password
    $db = "urlshort"; //Database name

    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        echo "Database connection error".mysqli_connect_error();
    }
?>