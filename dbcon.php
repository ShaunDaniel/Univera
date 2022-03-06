<?php
     if(!isset($_SESSION)) 
     { 
         session_start(); 
     }
     else
     {
         session_destroy();
         session_start(); 
     }
    $dbHost = "localhost";
    $dbName = "univera";
    $dbUsername = "root";
    $dbPassword = "";

    $con = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);

    if($con){
        ?>
        <script>
            alert("Connection Successful!")
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Connection UNSuccessful!")
        </script>
        <?php
    }
?>