
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<style>
    body{
        max-width: 80%;
        width: 1200px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>
<body>
<h1>Liste des utilisateurs</h1>
<?php
/** @var $users \App\Entity\User */

foreach ($users as $user) {
    ?>

    <p><?= $user->getIdUser(); ?></p>
    <p><?= $user->getRole(); ?></p>
    <p><?= $user->getName(); ?></p>
    <p><?= $user->getEmail(); ?></p>
    <p><?= $user->getPassword(); ?></p>
    <?php
}
?>




<div class="row justify-content-center">
    <form action="UserManager.php" method="post">
        <div class="form-group">
            <label>Nom</label>
            <input type="text" name="name" value="Nom" class="form-control">
        </div>
        <div class="form-group">
            <label>Mot de passe</label>
            <input type="password" name="password" value="" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>

                <input type="email" name="email" value="email" class="form-control">

        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="save">Save</button>
        </div>

    </form>
</div>
</body>


