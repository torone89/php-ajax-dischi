<?php

include __DIR__ . "/includes/data/data.php";

?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Francesco Tovani">
    <meta name="description" content="blabla">
    <title>PHP - Ajax Dischi</title>

    <!-- FRAME WORK ESTERNI -->
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- STILE DI QUESTA PAGINA -->
    <link rel="stylesheet" href="css/style.css">

    <!-- FONTAWENSOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- HEADER -->
    <header>

        <header class="container-fluid">
            <div class="logo-img">
                <img src="./img/spotify-logo.svg">
            </div>
        </header>

    </header>
    <!-- / HEADER -->

    <!-- CONTENUTO PRINCIPALE -->
    <!-- MAIN -->
    <main class="pb-2">
        <div class="container">
            <div class="row justify-content-between pt-4">
                <!-- php -->
                <?php
                foreach ($dischi as $disco) : ?>
                    <div class="card text-center col-2">
                        <div class="pt-2">
                            <img class="img-fluid" src="<?php echo $disco['poster'] ?>">
                        </div>
                        <div class='text-light'>
                            <h5 class='text-uppercase fw-bold mt-1 p-1'> <?php echo $disco['title'] ?></h5>
                            <p class='text-secondary'> <?php echo $disco['author'] ?><br>
                                <?php echo $disco['year'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </main>


</body>

</html>