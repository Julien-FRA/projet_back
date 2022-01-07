<?php

namespace App\Controller;

use App\Core\Factory\PDOFactory;
use App\Manager\UserManager;

class UserController extends BaseController
{
    /**
     * @Route(path="/", name="homePage")
     * @return void
     */
    public function getHome()
    {
        $manager = new UserManager(PDOFactory::getInstance());

        $users = $manager->findAllUsers();

        $this->render('Frontend/home', ['users' => $users], 'le titre de la page');
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