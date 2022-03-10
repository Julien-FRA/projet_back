<?php

namespace App\Controller;

use App\Core\Factory\PDOFactory;
use App\Manager\UserManager;
use App\Entity\User;
use Exception;

class UserController extends BaseController
{
    /**
     * @Route(path="/user", name="userPage")
     * @return void
     */
    public function getUser()
    {
        $manager = new UserManager(PDOFactory::getInstance());

        $users = $manager->findAllUsers();

        $this->render('User/user', ['users' => $users], 'Page User');
    }

    /**
     * @Route(path="/show/{id}-{truc}", name="showOne")
     * @param int $id
     * @param string $truc
     * @return void
     */
    public function getShow(int $id, string $truc)
    {
        $this->renderJSON(['message' => $truc, 'parametre' => $id]);
    }

    /**
     * @Route(path="/show")
     * @return void
     */
    public function getShowTest()
    {
        echo 'je suis bien la bonne méthode';
    }

    // Affichage du formulaire pour l'ajout d'user
    /**
     * @Route(path="/addUser", name="addUserPage")
     * @return void
     */
    public function getAddUser()
    {
        $this->render('User/addUser', [], 'Page Add user');
    }

    // Récupération des infos du formulaire d'ajout d'user
    /**
     * @Route(path="/createUser", name="createUserPage")
     * @return void
     */
    public function postCreateUser()
    {
        $manager = new UserManager(PDOFactory::getInstance());

        if (isset($_POST)) {
            $email = $_POST['email'];
            $name = $_POST['name'];
            $password = $_POST['password'];
        }

        $post = new User(array(
            "email" => $email,
            "name" => $name,
            "password" => $password
        ));

        $create_user = $manager->addUser($post);

        if ($create_user) {
            header('Location: /user');
            exit;
        } else {
            throw new Exception('Erreur d\'ajout user');
        }
    }
}