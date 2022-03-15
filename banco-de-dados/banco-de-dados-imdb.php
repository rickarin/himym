<?php

    $pdo = new PDO('mysql:dbname=cantinhodaprog;host=mysql.cantinhodaprogramacao.com.br', 'cantinhoda_add5', 'Gr33nd4y');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $pdo->prepare("SELECT * FROM tbl_episodios INNER JOIN tbl_imdb ON id_episodio = tbl_episodios_id_episodios  WHERE tbl_temporada_id_temporada = :temporada ; ");
    $sql->bindValue(":temporada", 13);
    $sql->execute();
    $season1 = $sql->fetchAll(PDO::FETCH_ASSOC);

    $sql->bindValue(':temporada', 14);
    $sql->execute();
    $season2 = $sql->fetchAll(PDO::FETCH_ASSOC);

    $sql->bindValue(':temporada', 15);
    $sql->execute();
    $season3 = $sql->fetchAll(PDO::FETCH_ASSOC);

    $sql->bindValue(':temporada', 16);
    $sql->execute();
    $season4 = $sql->fetchAll(PDO::FETCH_ASSOC);

    $sql->bindValue(':temporada', 17);
    $sql->execute();
    $season5 = $sql->fetchAll(PDO::FETCH_ASSOC);

    
    $sql->bindValue(':temporada', 18);
    $sql->execute();
    $season6 = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    $sql->bindValue(':temporada', 19);
    $sql->execute();
    $season7 = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    ?>