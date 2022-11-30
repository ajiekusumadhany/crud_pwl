<?php
    //Koneksi Database
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "dbimstore";

    $koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));
    
    // Css style $heet
    echo "<link rel='stylesheet' type='text/css' href='style.css' />";
?>