<?php
try {
        $dsn = "mysql:host=172.17.0.3:3306;dbname=php";//en host se usa la ip de contenedor sql y su puerto interno
        $dbh = new PDO($dsn, "root", "root");
    } catch (PDOException $e){
        echo $e->getMessage();
    }

    //insetar usuario
    $consula = $dbh->prepare("INSERT INTO usuarios(nombre,email,password) VALUES (?,?,?)");

    //bindear values
    $consula->bindValue(1,"Monica");
    $consula->bindValue(2,"monica@gamil.com");
    $consula->bindValue(3,"123445");

    //ejecutar consulta
    $consula->execute();
?>