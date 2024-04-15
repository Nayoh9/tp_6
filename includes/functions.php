<?php
include "config.php";

function parse_error($error_code)
{
    switch ($error_code) {
        case 'invalid_password_or_identifier';
        case 'error_no_results_found';
            return $error_code = "identifiant ou password invalide";
            break;
        default:
            return $error_code = "erreur inconnue";
            break;
    }
}


function disconnect_user()
{
    setcookie("user2", "", time() - 50);
}
