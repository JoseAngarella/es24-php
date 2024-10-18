<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>



    <h1>Mail Creata</h1>
    <br>
    <h3>informazioni</h3>
    <br>

    <?php
        $email_mittente = $_POST["emal_mittente"];
        $email_destinatario = $_POST["emal_destinatario"];
        $oggetto_email = $_POST["oggetto_email"];
        $testo_email = $_POST["testo_email"];
        echo "<div><p>indirizzo email mittente: $email_mittente</p><p>indirizzo email destinatario: $email_destinatario</p>
        <p>oggetto email: $oggetto_email</p></div> <h3>corpo della mail:</h3><div style='background-color:orange;width=50% '>$testo_email
        </div><hr> <h3>statistiche corpo email:</h3><div style ='background-color:gray'><p>lunghezza del corpo della mail = ".strlen($testo_email)."caratteri</p><p>numero parole = ".str_word_count($testo_email)." parole</p></div>";

    ?>

    

    
    
</body>
</html>