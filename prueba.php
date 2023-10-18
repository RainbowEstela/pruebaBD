<?php
    try {
        $dsn = "mysql:host=database-php.cgiloqufj8us.us-east-1.rds.amazonaws.com;dbname=php";//en host se usa la ip de contenedor sql y su puerto interno
        $dbh = new PDO($dsn, "admin", "adminadmin");
    } catch (PDOException $e){
        echo $e->getMessage();
    }

    //preparar la consulta
    $stmt = $dbh->prepare("SELECT * FROM usuarios");

    //especificamos el fetch medo antes de llamar a fecth
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//devuelve los datos en un array asociativo

    //ejecutamos
    $stmt->execute();

    while($row = $stmt->fetch()) {
        echo "Nombre: ". $row["nombre"] . "<br>";
        echo "Email: ". $row["email"] . "<br>";
    }

?>