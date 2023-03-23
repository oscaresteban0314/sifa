<?php
    $user="root";//usuario de phpmyadmin
    $pass="";//password del ususario
    $server="localhost";
    $db="data";
    $con=mysqli_connect($server,$user,$pass,$db);
    mysqli_set_charset($con,"utf8");
    $SECURITY="SELECT * FROM `admin`"; 
    $resultadosec= mysqli_query($con,$SECURITY); 
    
?>