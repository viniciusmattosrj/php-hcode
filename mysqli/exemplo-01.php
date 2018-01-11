<?php

    $conn = new mysqli("localhost","root","#Dev@8481","dbphp7");

    if($conn->connect_error)
    {
        echo "Error: " . $conn->connect_error;
    }

    $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

    $stmt->bind_param("ss",$login,$pass);

    $login = "user";
    $pass = "12345";

    $stmt->execute();

    $login = "vinicius";
    $pass = "Mudar123";

    $login = "mattos";
    $pass = "123Mudar";

    $stmt->execute();