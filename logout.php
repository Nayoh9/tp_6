<?php include 'includes/functions.php';

if ($_COOKIE["user"]) {
    setcookie("user", "", time() - 3600);
}

header("location: $not_ok_redirect");
