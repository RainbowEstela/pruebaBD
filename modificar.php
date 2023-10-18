<?php
try {
        $dsn = "mysql:host=172.17.0.3:3306;dbname=php";//en host se usa la ip de contenedor sql y su puerto interno
        $dbh = new PDO($dsn, "root", "root");
    } catch (PDOException $e){
        echo $e->getMessage();
    }

    //insetar usuario
    $consula = $dbh->prepare("UPDATE usuarios SET email=?, password=? WHERE id=?");

    //bindear values
    $consula->bindValue(1,"laaura@gamil.com");
    $consula->bindValue(2,"miqotilla");
    $consula->bindValue(3,3);
    //ejecutar consulta
    $consula->execute();
?>