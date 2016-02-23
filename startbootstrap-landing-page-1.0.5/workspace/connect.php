<?php

$inputUser = $_POST["user"];
$inputPass = $_POST["pass"];

if ($inputUser == "Paul" && $inputPass == "123") {
    echo "Welcome to ProArc";

    header('Location: home.php');
}

else {
    echo "Incorrect password or username";

    header('Location: fail.php');
}


?>