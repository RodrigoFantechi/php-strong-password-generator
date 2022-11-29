<?php

if (isset($_GET['numero'])) {

    if (isset($_GET['lettere'])) {
        $lettere = array_merge(range('A', 'Z'), range('a', 'z'));
    }
    if (isset($_GET['numeri'])) {
        $numeri = range('1', '9');
    }
    if (isset($_GET['simboli'])) {
        $simboli = [
            "+", "-", "&", "|", "!", "(", ")", "{", "}", "[", "]", "^",
            "~", "*", "?", ":", "\"", ",", "."
        ];
    }
    $lunghezzaStringa = $_GET['numero'];
    $ripeti = $_GET['radio'];
    $alertMessage = 'Inserimento  valido';
    $alertColor = 'alert-success';
    $password = generatePassword($lunghezzaStringa, $ripeti, $lettere, $numeri, $simboli);
} else {
    $alertMessage = 'Inserimento non valido';
    $alertColor = 'alert-danger';
}



function generatePassword($lunghezzaStringa, $ripeti,  ...$params)
{
    $password = '';
    $array = [];
    foreach ($params as  $param) {
        foreach ($param as $element) {
            array_push($array, $element);
        }
    }
    for ($i = 0; $i < $lunghezzaStringa; $i++) {
        $appoggio = $array[array_rand($array, 1)];

        if ($ripeti == 'si') {
            $password = $password . $appoggio;
        } else {
            if (str_contains($password, $appoggio)) {
                $i--;
            } else {
                 $password = $password . $appoggio;
            }
        }
    }
    return $password;
}

?>