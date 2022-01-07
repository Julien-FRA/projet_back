<?php

namespace App\Manager;

use App\Core\Factory\PDOFactory;
use App\Entity\Comment;

class CommentManager extends BaseManager
{
    public function findAllComments()
    {
        $comments = [];
        $query = 'SELECT * FROM Comments';
        $stmnt = $this->pdo->query($query);
        
        $result = $stmnt->fetchAll(\PDO::FETCH_ASSOC);

        foreach ($result as $comment) {
          $comments[] = new Comment($comment);
       }
       return $comments;
       
    }
}