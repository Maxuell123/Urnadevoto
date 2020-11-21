<?php 

$cpf = $_POST['cpf'];
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "dados";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(empty($cpf)){
    $valida =("É necessario informar o  CPF");
    echo ("<script>alert('$valida');</script>");  
    echo ("<script>window.location.assign('../index.php');</script>");
}
else{
    $consulta = $conn->query("SELECT cpf FROM dado WHERE cpf = '$cpf'");
    $row = mysqli_fetch_row($consulta);
	if($row[0] > 0){
        $alerta =("O eleitor de CPF (".$cpf.") já votou.");
		echo ("<script>alert('$alerta');</script>");        
		echo ("<script>window.location.assign('../index.php');</script>");
	}else{
		$id = null; 
        $conn->query("INSERT into dado (cpf) values ('$cpf')");
	
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="SHORTCUT ICON" href="image/vote.png">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/menu.css">
        <script src="projeto-daniel\js/script.js"></script>
        <title>Votar</title>
    </head>
    <body style="background: #bebdbd;">
        <div class="menu">
        <a href="http://localhost/projeto-daniel/index.php"><img src="../image/vote.png" alt="vote"/></a>
            <ul>
                <li> <a href="../pagina/resultado.php">Resultado | </a></li>
                <li><a href="../pagina/candidatos.html">Candidatos</a></li>
            </ul>
        </div><!--menu-->
        <fieldset id="two">
            <img class="voteconfirme" src="../image/voteconfirme.svg" alt="">
            <form action="../bd/voto.php" method="POST">
                <div class="votar input-icon votar2" id="votar"> 
                    <h1>VOTE COM CONSCIÊNCIA!</h1>
                    <i class="fa fa-sign-in .input-icon" id="fa2"  aria-hidden="true"></i>
                    <input type="hidden" name="cpf" value="">
                    <input type="number" name="votar" id="voto" placeholder="Insira o número do candidato" maxlength="2" >
                    <input type="submit" value="Votar" onclick="votar()">

                </div><!--votar-->
                <br>
            </form>
        </fieldset>
        
    </body>
</html>

<?php

}
}

?>




