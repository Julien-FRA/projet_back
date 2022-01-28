<?php

namespace App\Controller;

use App\Core\Factory\PDOFactory;
use App\Manager\PostManager;
use App\Entity\Post;
use Exception;

class PostController extends BaseController
{
    // Display all posts
    /**
     * @Route(path="/post", name="postPage")
     * @return void
     */
    public function getPost()
    {
        $manager = new PostManager(PDOFactory::getInstance());

        $posts = $manager->findAllPosts();

        $this->render('Post/post', ['posts' => $posts], 'Page posts');
    }

    // Affichage du formulaire pour l'ajout de posts
    /**
     * @Route(path="/addPost", name="addPostPage")
     * @return void
     */
    public function getAddPost()
    {
        $this->render('Post/add_post', [], 'Page Add posts');
    }

    // Récupération des infos du formulaire d'ajout de posts
    /**
     * @Route(path="/createPost", name="createPostPage")
     * @return void
     */
    public function postCreatePost()
    {
        $manager = new PostManager(PDOFactory::getInstance());

        if (isset($_POST)) {
            $idUser = $_POST['idUser'];
            $title = $_POST['title'];
            $image = $_POST['image'];
            $content = $_POST['content'];
        }

        $post = new Post(array(
            "idUser" => $idUser,
            "title" => $title,
            "image" => $image,
            "content" => $content,
        ));

        $create_post = $manager->addPost($post);

        if ($create_post) {
            header('Location: /post');
            exit;
        } else {
            throw new Exception('Erreur d\'ajout du post');
        }
    }

    // Affichage du formulaire pour l'edition de posts
    /**
     * @Route(path="/editPost", name="editPostPage")
     * @return void
     */
    public function getEditPost()
    {
        $this->render('Post/edit_post', [], 'Page Edit posts');
    }

    // Récupération des infos du formulaire l'edition de posts
    /**
     * @Route(path="/updatePost", name="updatePostPage")
     * @return void
     */
    public function postEditPost()
    {
        $manager = new PostManager(PDOFactory::getInstance());

        if (isset($_POST)) {
            $idUser = $_POST['idUser'];
            $title = $_POST['title'];
            $image = $_POST['image'];
            $content = $_POST['content'];
        }

        $post = new Post(array(
            "idUser" => $idUser,
            "title" => $title,
            "image" => $image,
            "content" => $content,
        ));

        $edit_post = $manager->editPost($post);

        if ($edit_post) {
            header('Location: /post');
            exit;
        } else {
            throw new Exception('Erreur d\'edition du post');
        }
    }

    // Suppression d'un post
    /**
     * @Route(path="/deletePost", name="deletePostPage")
     * @return void
     */
    public function postDeletePost()
    {
        $manager = new PostManager(PDOFactory::getInstance());

        
        $delete_post = $manager->deletePost();

        if ($delete_post) {
            header('Location: /post');
            exit;
        } else {
            throw new Exception('Erreur de supression du post');
        }
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
