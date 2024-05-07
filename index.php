<?php

//recupero mail dall'input
$email = $_POST['email'] ?? null;

function mailValidation($user_mail) {
    if ($user_mail) {
        if (str_contains($user_mail,'@') && str_contains($user_mail,'.')) {
            ?>
                <div class="alert alert-success" role="alert">
                    E-mail inserita correttamente
                </div>
            <?php
        }else {
            ?>
                <div class="alert alert-danger" role="alert">
                    E-mail non valida
                </div>
            <?php
        }
    }
}
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
    <form action="" method="POST">
        <input type="email" name="email" placeholder="Inserisci la tua email">
        <button type="submit" class="btn btn-primary">Invia</button>
        <?php
            //controllo se $email contiene @ e .
            mailValidation($email)
        ?>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>