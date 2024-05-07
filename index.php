<?php

//recupero mail dall'input
$email = $_POST['email'] ?? null;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iscrizione Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="app d-flex flex-column">
        <?php
        include __DIR__ . '/header.php'
        ?>
        <main>
            <section class="subsciption p-5">
                <div class="container sub_container d-flex flex-column justify-content-center align-items-center">
                    <div class="text-center">
                        <h1>Iscriviti alla nostra Newsletter!</h1>
                    </div>
                    <div class="row">
                        <div class="col m-5">
                            <form action="" method="POST" class="d-flex flex-column justify-content-center align-items-center ms_form">
                                <input type="email" name="email" placeholder="Inserisci la tua email" class="ms_mail">
                                <button type="submit" class="btn btn-primary m-3">Invia</button>
                                <?php
                                    //includo il file utilities 
                                    include __DIR__ . '/utilities.php';
                                    //controllo se $email contiene @ e .
                                    mailValidation($email)
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php
        include __DIR__ . '/footer.php'
        ?>
    </div>
    <script src="https://kit.fontawesome.com/f5e507a464.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>

<style>

.app{
    height: 100vh;
}
/* reset */
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Quicksand', sans-serif;
}

img {
	max-width: 100%;
    max-height: 100%;
}

a {
	text-decoration: none;
    color: inherit;
}

menu,
ul,
ol {
	list-style: none;
}

main{
    height:100%;
}
/* subscription section */
.subsciption{
    background-color: #022140;
    height: 100%
}

.sub_container {
    height: 100%
}

h1{
    color: white;
    font-size: 60px;
    font-weight: bold;
}

.ms_mail{
    padding: 5px;
    border-radius: 10px;
    text-align: center;
}
</style>