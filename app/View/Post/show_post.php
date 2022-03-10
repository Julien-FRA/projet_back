<h1>Page simple post</h1>

<div>
    <label for="idUser">Id :</label>
    <p><?= $post->getIdPost(); ?></p>
    <label for="title">Titre :</label>
    <p><?= $post->getTitle(); ?></p>
    <label for="content">Contenu :</label>
    <p><?= $post->getContent(); ?></p>
    <label for="image">Image :</label>
    <p><?= $post->getImage(); ?></p>
</div>

<a class="btn btn-primay" href="/post">Retour</a>

