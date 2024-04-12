<?php include "includes/functions.php" ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/tp_6.css">
    <title>tp_6</title>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <header class="row text-center align-items-center">
                <h1 class="m-0 py-4">Header</h1>
            </header>

            <?php
            if (!empty($_GET["error"])) {
                $error = $_GET["error"];

                switch ($error) {
                    case 'invalid_password_or_identifier':
                        $error;
                        break;

                    default:
                        "unknow_error";
                        break;
                }
            ?>
                <div class="col-md-12 text-center d-flex justify-content-center mt-2">
                    <div class="col-md-4 alert alert-danger">
                        <p class="m-0"><?php echo $error; ?></p>
                    </div>
                </div>


            <?php } ?>