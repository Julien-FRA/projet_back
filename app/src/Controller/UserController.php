<?php

namespace App\Controller;

use App\Core\Factory\PDOFactory;
use App\Manager\UserManager;

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
}
