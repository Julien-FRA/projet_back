<h1>Page édition de post</h1>

<form action="/updatePost" method="POST">
    <label for="idUser">Id</label>
    <input type="number" name="idUser" id="idUser" class="form-control" value="<?= $post->getIdPost(); ?>">
    <label for="title">Titre</label>
    <input type="text" name="title" id="title" class="form-control" value="<?= $post->getTitle(); ?>">
    <label for="content">Contenu</label>
    <input type="content" name="content" id="content" class="form-control" value="<?= $post->getContent(); ?>">
    <label for="image">Image</label>
    <input type="file" name="image" id="image" class="form-control" value="<?= $post->getImage(); ?>">
    <button class="btn btn-primary">Enregistrer</button>
</form>

<a href="/post">Retour</a>