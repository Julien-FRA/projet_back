<h1>Users page</h1>

<table>
    <thead>
        <th>ID User</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php
        /** @var $posts \App\Entity\User */

        foreach ($users as $user) {
        ?>
            <tr>
                <td>Id User :<?= $user->getIdUser(); ?></td>
                <td>Nom : <?= $user->getName(); ?></td>
                <td>Mail : <?= $user->getEmail(); ?></td>
                <td>Mdp : <?= $user->getPassword(); ?></td>
                <td>
                    <a href="">Voir</a>
                    <a href="">Editer</a>
                    <a href="">Supprimer</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<a class="btn btn-primay" href="/addUser">Ajouter</a>
</br>
</br>
<a class="btn btn-primay" href="/post">Home</a>