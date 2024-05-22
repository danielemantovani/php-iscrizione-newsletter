<?php
if (isset($_POST["email"])) {
    $user_email = $_POST["email"];
    if (strpos($user_email, "@") !== false && strpos($user_email, ".") !== false) {
        $return = "Formato mail corretto";
    } else {
        $return = "Devi inserire la @ o il .";
    }
}
?>