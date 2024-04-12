    <?php
    include "includes/functions.php";

    empty($_POST) && header("location: login.php");

    $identifier = htmlentities($_POST["identifier"]);
    $password = $_POST["password"];

    try {
        $user_already_in_db = $db->prepare('SELECT * FROM user WHERE user.username = :identifier OR user.email = :identifier');
        $user_already_in_db->execute([
            'identifier' => $identifier
        ]);

        $user_already_in_db_result = $user_already_in_db->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // var_dump("erreur :" . $e->getMessage() . "<br />");
        echo $error_db;
    }

    $passwords_match = password_verify($password, $user_already_in_db_result["password"]);

    if (!$passwords_match) {
        $error = "invalid_password_or_identifier";
        header("location: login.php?error=$error");
    } else {
        setcookie("user", $user_already_in_db_result["uid"], time() + 180);
        header("location: index.php");
    }
