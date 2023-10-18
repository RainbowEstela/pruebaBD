<?php
try {
        $dsn = "mysql:host=172.17.0.3:3306;dbname=php";//en host se usa la ip de contenedor sql y su puerto interno y en dbname en nombre de la base de datos que qeremos usar
        $dbh = new PDO($dsn, "root", "root");
    } catch (PDOException $e){
        echo $e->getMessage();
    }

    //insetar usuario
    $consula = $dbh->prepare("DELETE FROM usuarios WHERE id=?");

    //bindear values
    $consula->bindValue(1,3);
    //ejecutar consulta
    $consula->execute();
?>