<?php include "header.php" ?>

<div class="row mt-5 d-flex justify-content-center">
    <form class="col-md-3" method="POST" action="connexion.php">

        <label for="">Nom d'utilisateur/E-mail</label>
        <input class="form-control" type="text" id="identifier" name="identifier">

        <label class="text-left" for="">Mot de passe</label>
        <input class="form-control" type="password" id="password" name="password">

        <div class="col-md-12 text-center mt-2  ">
            <button class="col-md-6 btn btn-primary " type=" submit">Button</button>
        </div>

    </form>
</div>

<?php include "footer.php" ?>