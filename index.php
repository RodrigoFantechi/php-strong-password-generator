<?php
include __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Password Generator</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="generator text-center p-3 mt-5">
            <div class="title py-3">
                <h1>Strong Password Generator</h1>
                <h2>Genera una password sicura</h2>
            </div>
            <div class="alert <?= $alertColor ?> text-start" role="alert">
                <strong><?= $alertMessage ?></strong>
            </div>

            <form action="index.php" method="get">
                <div class="container">
                    <div class="row text-start">
                        <div class="col-7  px-5 py-3 d-flex flex-column justify-content-between">
                            <div class="paragraphs">
                                <p class="py-3">Lunghezza password:</p>
                                <p class="py-3">Consenti ripetizioni di uno o più caratteri:</p>
                            </div>
                            <div class="results py-5 px-3" style="background-color: lightblue;">
                                <h4><?= $password ?></h4>
                            </div>
                            <div class="buttons">
                                <button type="submit" class="btn btn-primary">Invia</button>
                                <button type="submit" class="btn btn-secondary">Annulla</button>
                            </div>
                        </div>
                        <div class="col-5 px-5 py-3">
                            <div class="mb-3 py-3">
                                <input type="number" class="form-control w-50" name="numero" id="numero" aria-describedby="helpId" placeholder="Inserisci Numero">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio" id="radio" value="si" checked>
                                <label class="form-check-label" for="radio">Si</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio" id="radio2" value="no">
                                <label class="form-check-label" for="radio2">No</label>
                            </div>
                            <div class="checkbox mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="si" name="lettere" id="lettere">
                                    <label class="form-check-label" for="lettere">Lettere</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="si" name="numeri" id="numeri">
                                    <label class="form-check-label" for="numeri">Numeri</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="si" name="simboli" id="simboli">
                                    <label class="form-check-label" for="simboli">Simboli</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>