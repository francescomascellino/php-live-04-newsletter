<?php


function check_mail($email)
{
    if (str_contains($email, "@") and str_contains($email, "@")) {
        var_dump("ok");

        $alert = [
            "color" => "success",
            "message" => "Iscrizione effettuata con successo",
        ];
    } else {
        var_dump("error");

        $alert = [
            "color" => "danger",
            "message" => "Controlla l'indirizzo inserito",
        ];
    }

    return $alert;
};
