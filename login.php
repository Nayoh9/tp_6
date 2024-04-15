<?php include "header.php" ?>

<div class="row mt-5 d-flex justify-content-center">
    <form class="col-md-3" method="POST" action="connexion.php">

        <label for="identifier">Nom d'utilisateur/E-mail</label>
        <input class="form-control" type="text" id="identifier" name="identifier" placeholder="votremail@mail.com">

        <label class="text-left" for="password">Mot de passe</label>
        <input class="form-control" type="password" id="password" name="password" placeholder="mot de passe">

        <div class="col-md-12 text-center mt-2  ">
            <button class="col-auto btn btn-primary " type="submit">Se connecter</button>
        </div>

    </form>
</div>

<?php include "footer.php" ?>