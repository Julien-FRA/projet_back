<h1>Comments page</h1>

<?php
/** @var $comments \App\Entity\Comment */

foreach ($comments as $comment){
  ?>
      <p><?= $comment->getContent(); ?></p>
      <p><?= $comment->getIdUser(); ?></p>
      <p><?= $comment->getIdPost(); ?></p>
<?php
}
?>