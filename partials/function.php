<?php
if (isset($_POST["email"])) {
    $user_email = $_POST["email"];
    // strpos cerca la @ e il . se sono presenti nell'indirizzo mail questa sarebbe validata, se invece non dovesse trovarli darebbe come risultato false. Perciò se la condizione desse come risultato un valore diverso da false significherebbe che la @, il . o entrmbe sono state trovate e quindi la mail avrebbe un formato non corretto
    if (strpos($user_email, "@")  && strpos($user_email, ".")) {
        $valid = "Formato mail corretto";
        session_start();
        $SESSION["verify_email"] = $user_email;
        header("Location: ./thankyou.php");
    } else {
        $invalid = "Devi inserire la @ e il .";
    }
}
?>