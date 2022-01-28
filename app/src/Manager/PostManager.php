<?php

namespace App\Manager;

use App\Core\Factory\PDOFactory;
use App\Entity\Post;

class PostManager extends BaseManager
{
    public function findAllPosts()
    {
        $query = 'SELECT * FROM Post';
        $stmnt = $this->pdo->prepare($query);

        $stmnt->execute();

        $result = $stmnt->fetchAll(\PDO::FETCH_ASSOC);

        foreach ($result as $post) {
            $posts[] = new Post($post);
        }

        return $posts;
    }

    public function addPost() {
      

        if(isset($_POST)){

            if(isset($_POST['idPost']) && !empty($_POST['idPost'])
                && isset($_POST['idUser']) && !empty($_POST['idUser'])
                && isset($_POST['createdAt']) && !empty($_POST['createdAt'])
                && isset($_POST['title']) && !empty($_POST['title'])
                && isset($_POST['image']) && !empty($_POST['image'])
                && isset($_POST['content']) && !empty($_POST['createdAt'])){
                    $idPost= strip_tags($_POST['idPost']);
                    $idUser = strip_tags($_POST['idUser']);
                    $createdAt = strip_tags($_POST['createdAt']);
                    $title = strip_tags($_POST['title']);
                    $image = strip_tags($_POST['image']);
                    $content = strip_tags($_POST['content']);
        
                    $query = "INSERT INTO `Post` (`idPost`, `idUser`, `createdAt`, `title`,`image`,`content`) VALUES (:idPost, :idUser, :createdAt, :title, :image, :content);";

                    $stmt = $this->pdo->prepare($query);
                    
                    $stmt->bindValue(':idPost', $idPost, \PDO::PARAM_INT);
                    $stmt->bindValue(':idUser', $idUser, \PDO::PARAM_INT);
                    $stmt->bindValue(':createdAt', $createdAt, \PDO::PARAM_INT);
                    $stmt->bindValue(':title', $title, \PDO::PARAM_STR);
                    $stmt->bindValue(':image', $image, \PDO::PARAM_LOB);
                    $stmt->bindValue(':content', $content, \PDO::PARAM_STR);
                    
                    $stmt->execute();

                    $_SESSION['message'] = "Post ajouté";
                    // header('Location: index.php');
                }
        }
    }

    public function editPost() {
        if(isset($_POST)){
            if(isset($_POST['idPost']) && !empty($_POST['idPost'])
                && isset($_POST['title']) && !empty($_POST['title'])
                && isset($_POST['content']) && !empty($_POST['content'])){
                $idPost = strip_tags($_GET['idPost']);
                $idUser = strip_tags($_GET['idUser']);
                $createdAt = strip_tags($_POST['createdAt']);
                $title = strip_tags($_POST['title']);
                $image = strip_tags($_POST['image']);
                $content = strip_tags($_POST['content']);
        
                $query = "UPDATE `Post` SET `idPost`=:idPost, `idUser`=:idUser, `createdAt`=:createdAt, `title`=:title, `image`=:image, `content`=:content WHERE `idPost`=:idPost;";

                $stmt = $this->pdo->prepare($query);
                
                $stmt->bindValue(':idPost', $idPost, \PDO::PARAM_INT);
                $stmt->bindValue(':idUser', $idUser, \PDO::PARAM_INT);
                $stmt->bindValue(':createdAt', $createdAt, \PDO::PARAM_INT);
                $stmt->bindValue(':title', $title, \PDO::PARAM_STR);
                $stmt->bindValue(':image', $image, \PDO::PARAM_LOB);
                $stmt->bindValue(':content', $content, \PDO::PARAM_STR);
                
                $stmt->execute();
        
                // header('Location: index.php');
            }
        }
    }

    public function deletePost() {

    }
}