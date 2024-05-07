<?php

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