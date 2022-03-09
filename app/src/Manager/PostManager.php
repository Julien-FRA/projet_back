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

    public function addPost($post)
    {
        $idUser = $post->getIdUser();
        $title = $post->getTitle();
        $image = $post->getImage();
        $content = $post->getContent();

        $query = "INSERT INTO `Post` (`idUser`, `title`,`image`,`content`) VALUES (:idUser, :title, :image, :content);";

        $stmt = $this->pdo->prepare($query);

        $stmt->bindValue(':idUser', $idUser, \PDO::PARAM_INT);
        $stmt->bindValue(':title', $title, \PDO::PARAM_STR);
        $stmt->bindValue(':image', $image, \PDO::PARAM_LOB);
        $stmt->bindValue(':content', $content, \PDO::PARAM_STR);

        $result = $stmt->execute();

        return $result;
    }

    public function editPost(int $id)
    {
        $query = "SELECT * FROM `Post` WHERE `idPost`=:id;";

        $stmt = $this->pdo->prepare($query);

        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);

        $result = $stmt->execute();

        $post = $stmt->fetch();

        return new Post($post);
    }

    public function updatePost($post)
    {
        // $idPost = $post->getIdPost();
        $idUser = $post->getIdUser();
        $title = $post->getTitle();
        $image = $post->getImage();
        $content = $post->getContent();

        $query = "UPDATE `Post` SET `idUser`=:idUser, `title`=:title, `image`=:image, `content`=:content WHERE `idPost`=:idPost;";

        $stmt = $this->pdo->prepare($query);

        $stmt->bindValue(':idUser', $idUser, \PDO::PARAM_INT);
        $stmt->bindValue(':title', $title, \PDO::PARAM_STR);
        $stmt->bindValue(':image', $image, \PDO::PARAM_LOB);
        $stmt->bindValue(':content', $content, \PDO::PARAM_STR);

        $result = $stmt->execute();

        return $result;
    }

    public function deletePost(int $id)
    {
        $query = "DELETE FROM Post WHERE `idPost`=:id;";

        $stmt = $this->pdo->prepare($query);

        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
        
        $result = $stmt->execute();

        return $result;     
    }
}
