
<h1>Home page</h1>


<?php
/** @var $posts \App\Entity\Post */

foreach ($posts as $post) {
?>
    <p>Id du post : <?= $post->getIdPost(); ?></p>
    <p>Id du user : <?= $post->getIdUser(); ?></p>
    <p>Date de publication du post : <?= $post->getCreatedAt(); ?></p>
    <h2><?= $post->getTitle(); ?></h2>
    <div><?= $post->getImage(); ?></div>
    <div><?= $post->getContent(); ?></div>
<?php
}
?>


</html>
