<h1>Users page</h1>

<?php
/** @var $users \App\Entity\User */

foreach ($users as $user) {
?>
    <p><?= $user->getIdUser(); ?></p>
    <p><?= $user->getName(); ?></p>
    <p><?= $user->getEmail(); ?></p>
    <p><?= $user->getPassword(); ?></p>
<?php
}
?>