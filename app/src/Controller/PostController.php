<?php

namespace App\Controller;

use App\Core\Factory\PDOFactory;
use App\Manager\PostManager;

class PostController extends BaseController
{
    /**
     * @Route(path="/post", name="postPage")
     * @return void
     */
    public function getPost()
    {
        $manager = new PostManager(PDOFactory::getInstance());

        $posts = $manager->findAllPosts();
        // $create_post = $manager->addPost();

        $this->render('Post/post', ['posts' => $posts], 'Page posts');
    }

    /**
     * @Route(path="/add_post", name="addPostPage")
     * @return void
     */
    public function getAddPost()
    {
        $manager = new PostManager(PDOFactory::getInstance());

        $create_post = $manager->addPost();

        $this->render('Post/add_post', ['posts' => $create_post], 'Page Add posts');
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