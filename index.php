<?php
$paragrafo ="La parte più difficile nella vita di un programmatore è quando si da la caccia ad un bug per una settimana, si trova il codice che genera il bug, si offende l'autore del codice ed infine ci si accorge di essere l'autore del codice maledetto.";
$lunghezzaParagrafo = strlen($paragrafo);
$parolaDaCensurare = $_GET["parolaDaCensurare"];
$parolaCensurata = str_replace($parolaDaCensurare,"***",$paragrafo);

$lunghezzaParolaCensurata = strlen($parolaCensurata);

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
<h2>
        <?php echo $paragrafo?>
</h2>
<h2>
        lunghezza paragrafo :<?php echo $lunghezzaParagrafo?> caratteri
</h2>
<h2>
        paragrafo modificato 
        <hr>
        <?php echo $parolaCensurata?>
</h2>
<h2>
        lunghezza paragrafo modificato :<?php echo $lunghezzaParolaCensurata?> caratteri
</h2>
<form action="" method="GET">
        <input type="text" name="parolaDaCensurare" placeholder="testo da censurare" value="<?php echo $parolaDaCensurare?>">
        <button>cerca</button>
</form>
</body>
</html>




