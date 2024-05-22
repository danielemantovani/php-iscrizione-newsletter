<?php
if (isset($_POST["email"])) {
    $user_email = $_POST["email"];
    // strpos cerca la @ e il . se sono presenti nell'indirizzo mail questa sarebbe validata, se invece non dovesse trovarli darebbe come risultato false. Perciò se la condizione desse come risultato un valore diverso da false significherebbe che la @, il . o entrmbe sono state trovate e quindi la mail avrebbe un formato non corretto
    if (strpos($user_email, "@") !== false && strpos($user_email, ".") !== false) {
        $return = "Formato mail corretto";
    } else {
        $return = "Devi inserire la @ o il .";
    }
}
?>