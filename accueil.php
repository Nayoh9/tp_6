<?php
include "header.php";

if (empty($_COOKIE["user"])) {
    header("location: $not_ok_redirect");
}

$connected_user_cookie = $_COOKIE["user"];

try {
    $connected_user_informations = $db->prepare(
        'SELECT * FROM user WHERE user.uid = :connected_user_cookie'
    );

    $connected_user_informations->execute([
        'connected_user_cookie' => $connected_user_cookie
    ]);

    $connected_user_informations_result = $connected_user_informations->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    header("location: $not_ok_redirect?error=$error_db");
}

if (!$connected_user_informations_result["username"]) {
    header("location: $not_ok_redirect");
}

?>
<div class="row">
    <div class="col-md-12 text-center ">
        <h2 class="mt-5">hello&nbsp;<?php echo htmlspecialchars($connected_user_informations_result["username"]) ?></h2>
        <form action="logout.php" method="POST">
            <button type="submit" class="col-auto btn btn-primary">Se déconnecter</button>
        </form>
    </div>
</div>

<?php include "footer.php" ?>