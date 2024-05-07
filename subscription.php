<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esito iscrizione</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main>
        <section class="sub">
            <div class="container p-4">
                <?php
                //include utilities
                include __DIR__ . '/utilities.php';
                //avvio session
                session_start();
                //mail validation 
                if (mailValidation($_SESSION['email']))  {
                    ?>
                        <div class="alert alert-success" role="alert">
                            Grazie per esserti iscritto alla nostra Newsletter!
                        </div>
                    <?php
                } else {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            E-mail non valida
                        </div>
                        <div>
                            <a href="./index.php">Torna alla pagina precedente</a>
                        </div>
                    <?php
                }
                ?>

            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<style>
    a{
        color: white
    }
    .sub{
        background-color:#022140;
        color: white;
        text-align: center;
        height: 100vh;
    }

</style>