<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="SHORTCUT ICON" href="image/vote.png">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/menu.css">
        <script type="text/javascript"  src="js/script.js" defer></script>
        <title>Votar</title>
    </head>
    <body>
        
        <div class="menu">
        <a href="/"><img src="./image/vote.png" alt="vote"/></a>
            <ul>
                <li> <a href="pagina/resultado.php" class="resultadomobile" style="border-right: 1px solid #ffffff4d;padding: 0 10px;">RESULTADO</a></li>
                <li><a href="pagina/candidatos.html">CANDIDATOS</a></li>
            </ul>
        </div><!--menu-->
        <fieldset id="one">
            <img src="image/voteurna.png" alt="">
            <form action="pagina/votar.php" method="POST">
                <div class="cpf input-icon" id="cpf"> 
                    <h1>BEM VINDO!</h1>
                    <i class="fa fa-sign-in .input-icon"  aria-hidden="true"></i>
                    <input type="number" name="cpf"  placeholder="Insira seu CPF" maxlength="11" required >
                    <input type="submit" value="Iniciar">
                    <div class="text"> 
                        <p>Não sabe em quem votar? <a href="candidatos.html">Conheça os candidatos</a></p>
                    </div>
                </div><!--cpf-->
                
                <br>
            </form>
        </fieldset>

        <footer>
      <div class="socials">
        <a href="" class="socials--item"><i class="fa fa-instagram"></i></a>
        <a href="" class="socials--item"><i class="fa fa-twitter"></i></a>
        <a href="" class="socials--item"><i class="fa fa-youtube-play"></i></a>
      </div>
    </body>
</html>