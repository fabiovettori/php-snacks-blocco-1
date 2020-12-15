<!-- PHP Snack 1:
Creare un array $matches che contiene dei sotto-array, i quali rappresentano delle partite di basket.
ogni partita avrà le seguenti caratteristiche:
squadra di casa
squadra ospite
punti fatti dalla squadra di casa
punti fatti dalla squadra ospite
L'obbiettivo è stampare a schermo tutte le partite utilizzando questo schema:
[squadra di casa] - [squadra ospite] | [punti squadra di casa] - [punti squadra ospite]
ad esempio:
Olimpia Milano - Cantù | 55 - 60 -->

<?php
    $matches = [
        // schema: squadra di casa - squadra ospite - punti fatti dalla squadra di casa - punti fatti dalla squadra ospite
        ['Los Angeles Lakers', 'Warriors', 50, 60],
        ['Toronto Raptors', 'Boston Celtics', 52, 60],
        ['Houston Rockets', 'Los Angeles Clippers', 60, 48],
        ['Miami Heat', 'Denver Nuggets', 46, 60],
        ['Chigago Bulls', 'Milwaukee Bucks', 60, 59],
    ];

    $match = '';
    for ($i=0; $i < count( $matches ); $i++) {
        // stampo la stringa completa del march aggiungendo il '-' tra i vari dati del match
        $full_string = implode(' - ', $matches[$i]);

        // trovo la posizione del primo '-'
        $pos1 = strpos($full_string, '-');
        // trovo la posizione del secondo '-' utilizzando lo stesso metodo ma aggiungendo un offset alla ricera
        $pos2 = strpos($full_string, '-', ($pos1 + 1));
        // nota la poszione del secondo '-' lo vado a sostituire con n '/'
        $output = substr_replace($full_string, '/', $pos2, 1);

        // stampo il risultato nell'HTML definendo una variabile di output
        $match .= '<li>' . $output . '</li>';
    };

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP Snack 1</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2>MBA - Matches</h2>
        <ol class="match"> <?php echo $match ?> </ol>
    </body>
</html>
