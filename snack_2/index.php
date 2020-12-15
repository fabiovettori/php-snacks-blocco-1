<!-- PHP Snack 2:
Passare 3 parametri GET: name, mail e age e verificare (cercando nella documentazione i metodi che non conosciamo) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
    // valori di ingresso
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];

    // validazione dati
    $check = false;
    if (strlen($name) > 3 && (strpos($email, '.') !== false && strpos($email, '@')) && is_numeric($age)) {
        $check = true;
    };

    // se la variabile di controllo è vera allora il controllo è passato altrimenti respinto
    $output = '';
    if ($check) {
        $output = 'Accesso riuscito';
    } else {
        $output = 'Accesso negato';
    };
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP Snack 2</title>
    </head>
    <body>
        <p class="input"><?php echo $name . ' ' . $email . ' ' . $age ?> </p>
        <p class="output"><?php echo $output ?> </p>
    </body>
</html>
