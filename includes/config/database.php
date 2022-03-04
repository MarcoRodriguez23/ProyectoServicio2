<?php

    function conectarDB() : mysqli {
        $hostname="localhost";
        $username="root";
        $password="upiicsa+23";
        $database="inmobiliariagallardo";
        $db= new mysqli($hostname,$username,$password,$database);

        if(!$db){
            echo "No se conecto";
            exit;
        }
        return $db;
    }