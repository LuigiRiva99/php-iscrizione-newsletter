<?php

    function mailValidation($user_mail) {
        //controllo se $email contiene @ e .
        if (str_contains($user_mail,'@') && str_contains($user_mail,'.')) {
            return true;
        }else {
            return false;
        }
    }
?>