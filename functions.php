<?php

if (isset($_GET['numero']) && !empty($_GET['numero'])) {

    if (isset($_GET['lettere'])) {
        $lettere = array_merge(range('A', 'Z'), range('a', 'z'));
    }
    if (isset($_GET['numeri'])) {
        $numeri = range('0', '9');
    }
    if (isset($_GET['simboli'])) {
        $simboli = [
            "+", "-", "&", "|", "!", "(", ")", "{", "}", "[", "]", "^",
            "~", "*", "?", ":", "\"", ",", "."
        ];
    }

    $alertMessage = 'Inserimento  valido';
    $alertColor = 'alert-success';
    $lunghezzaStringa = $_GET['numero'];
    $ripeti = $_GET['radio'];
    $password = generatePassword($lunghezzaStringa, $ripeti, $lettere, $numeri, $simboli);
    if ($password  == 'Inserimento non valido') {
        $alertMessage = 'Inserimento non valido';
        $alertColor = 'alert-danger';
    } elseif ($password  == 'Numero di massimo di caratteri = 100') {
        $alertMessage = 'Numero di massimo di caratteri = 100';
        $alertColor = 'alert-danger';
    }
} else {
    $alertMessage = 'Inserimento non valido';
    $alertColor = 'alert-danger';
}


function generatePassword($lunghezzaStringa, $ripeti,  ...$params)
{
    if ($lunghezzaStringa > 100) {
        return 'Numero di massimo di caratteri = 100';
    } else {


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
                    if (count($array) <= $lunghezzaStringa) {
                        return 'Inserimento non valido';
                    } else {
                        $i--;
                    }
                } else {
                    $password = $password . $appoggio;
                }
            }
        }
        return $password;
    }
}
