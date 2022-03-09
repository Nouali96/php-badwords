


<?php
    $variabile = "Harry Potter è un ragazzo normale, o quantomeno è convinto di esserlo, anche se a volte provoca strani fenomeni, come farsi ricrescere i capelli inesorabilmente tagliati dai perfidi zii. Vive con loro al numero 4 di Privet Drive: una strada di periferia come tante, dove non succede mai nulla fuori dall'ordinario.
    Finché un giorno, poco prima del suo undicesimo compleanno, riceve una misteriosa lettera che gli rivela la sua vera natura: Harry è un mago e la Scuola di Magia e Stregoneria di Hogwarts è pronta ad accoglierlo... ";
    $censura = '***';
    $variabile = str_replace($_GET["censura"],$censura,$variabile);
    
?>

<!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <div>
        <form method="get">
            <input name="censura" type="text" placeholder="Parola da censurare">
            <button type="submit">censura</button>
        </form>
    </div>
    <hr>
    <h1><?php echo $variabile ?></h1>
    
    
</body>
</html>