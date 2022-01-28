<h1>Liste des commentaires</h1>

<?php
/** @var $comments \App\Entity\Comment */

foreach ($comments as $comment){
  ?>
      <p><?= $comment->getContent(); ?></p>
      <p><?= $comment->getIdUser(); ?></p>
<?php
}
?>