<?php

    /* DATABASE - Classe MySQLi */
    $conn = new mysqli("localhost","root","","dbphp7");

    if($con->connect_error)
    {
        echo "Error: " .$conn->connect_error;
    }
