<?php 
    

    $domain = "sonu-url-shortener.herokuapp.com/"; 
    $host = "remotemysql.com";
    $user = "3zcZM3njR0"; //Database username
    $pass = "IWE517fJvF"; //Database password
    $db = "3zcZM3njR0"; //Database name

    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        echo "Database connection error".mysqli_connect_error();
    }
?>