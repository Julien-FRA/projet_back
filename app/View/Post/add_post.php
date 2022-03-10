<h1>Page ajout de post</h1>

<form action="/createPost" method="POST">
    <label for="idUser">Id user :</label>
    <input type="number" name="idUser" id="idUser" class="form-control">
    <label for="title">Titre</label>
    <input type="text" name="title" id="title" class="form-control">
    <label for="content">Contenu</label>
    <input type="content" name="content" id="content" class="form-control">
    <label for="image">Image</label>
    <input type="file" name="image" id="image" class="form-control">
    <button class="btn btn-primary">Enregistrer</button>
</form>
