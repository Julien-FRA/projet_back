<h1>Page édition de post</h1>

<form action="/updatePost" method="POST">
    <label for="idUser">Id</label>
    <input type="number" name="idUser" id="idUser" class="form-control" value="">
    <label for="title">Titre</label>
    <input type="text" name="title" id="title" class="form-control" value="">
    <label for="content">Contenu</label>
    <input type="content" name="content" id="content" class="form-control" value="">
    <label for="image">Image</label>
    <input type="file" name="image" id="image" class="form-control" value="">
    <button class="btn btn-primary">Enregistrer</button>
</form>