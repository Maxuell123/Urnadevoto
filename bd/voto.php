<?php 
$voto = $_POST['votar'];
try {
    $pdo = new PDO('mysql:host=localhost;dbname=dados','root', null);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($voto == 15){
        $stmt = $pdo->prepare('INSERT INTO votos VALUES(:id, :voto )');
        $stmt->execute(array(
            ':id' => null,
            ':voto' => 'Iris'
          ));
    }
    elseif ($voto == 55){
        $stmt = $pdo->prepare('INSERT INTO votos VALUES(:id, :voto )');
        $stmt->execute(array(
            ':id' => null,
            ':voto' => 'Vanderlan'
          ));
    }
    elseif ( $voto == 25){
        $stmt = $pdo->prepare('INSERT INTO votos VALUES(:id, :voto )');
        $stmt->execute(array(
            ':id' => null,
            ':voto' => 'Maquito'
          ));
    }
    else{
        $stmt = $pdo->prepare('INSERT INTO votos VALUES(:id, :voto )');
        $stmt->execute(array(
            ':id' => null,
            ':voto' => 'Branco'
          ));
    }
    echo ("<script>window.location.assign('../pagina/resultado.php');</script>");
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

?> 