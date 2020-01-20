<?php
  $dsn = 'mysql:host:127.0.0.1;dbname=prueba;port=3306';
  $db_user = 'root';
  $db_pass = '';
  $opt = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
  try {
    $db = new PDO($dsn,$db_user,$db_pass,$opt);
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
  //preparamos
  $query = $db->prepare('');
  //ejecutamos
  $query->Execute();
  //obtenemos los resultados
  $result = $query->fetchAll(PDO::FETCH_ASSOC);

  //fetch solo nos trae el primer registro q responda a la consulta, si lo ejecutamos
  //varias veces nos trae la 2da 3ra 4ta etc
  $stmt = $db->prepare("SELECT * FROM movies WHERE id=:id AND title=:title");

  $id = 1;
  $titulo = "Avatar";

  $stmt->bindValue(':id',$id, PDO::PARAM_INT);
  $stmt->bindValue(':titulo',$titulo, PDO::PARAM_STR);

  $stmt->Execute();

  $results = $stmt->fetchAll(PDO::FETCH_ASSOC); 

 ?>
