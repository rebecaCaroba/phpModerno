<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 php</title>
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie('idioma', 'pt_BR', time() +3600);
                // Armazena o idioma português brasileiro por 1h
                session_start();
                $_SESSION["teste"]= 'Funcionou';

                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);
                echo "<img src='getimg.png' alt='GET'> " ;

                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);
                echo "<img src='postimg.png' alt='POST'><br> " ;
                
                echo "<h1>Superglobal REQUEST</h1>";
                var_dump($_REQUEST);
                
                echo "<h1>Superglobal COOKIE</h1>";
                var_dump($_COOKIE);
                $idioma = $_COOKIE['idioma'];
                echo "Seu idioma preferido é: ".$idioma; 

                echo "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>Superglobal ENV</h1>";
                var_dump($_ENV);
                // foreach(getenv() as $c => $v){
                //     echo "<br> $c -> $v";
                // }

                echo "<h1>Superglobal SERVER</h1>";
                var_dump($_SERVER);


            ?>
        </pre>
    </main>
</body>
</html>