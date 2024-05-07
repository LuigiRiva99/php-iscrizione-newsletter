<?php

    function mailValidation($user_mail) {
        
        if (str_contains($user_mail,'@') && str_contains($user_mail,'.')) {
            return true;
        }else {
            return false;
        }
    }
?>