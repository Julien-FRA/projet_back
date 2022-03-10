<h1>Posts page</h1>

<table>
    <thead>
        <th>Nom</th>
        <th>ID Post</th>
        <th>ID User</th>
        <th>Date</th>
        <th>Image</th>
        <th>Contenu</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php
        /** @var $posts \App\Entity\Post */

        foreach ($posts as $post) {
        ?>
            <tr>
                <td><?= $post->getTitle(); ?></td>
                <td>Id du post : <?= $post->getIdPost(); ?></td>
                <td>Id du user : <?= $post->getIdUser(); ?></td>
                <td>Date de publication du post : <?= $post->getCreatedAt(); ?></td>
                <td><?= $post->getImage(); ?></td>
                <td><?= $post->getContent(); ?></td>
                <td>
                    <a href="/showPost/<?= $post->getIdPost(); ?>">Voir</a>
                    <a href="/editPost/<?= $post->getIdPost(); ?>">Editer</a>
                    <a href="/deletePost/<?= $post->getIdPost(); ?>">Supprimer</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<a class="btn btn-primay" href="/addPost">Ajouter</a>