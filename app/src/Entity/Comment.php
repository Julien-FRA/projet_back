<?php

namespace App\Entity;

class Comment extends BaseEntity
{
    private int $idComment;
    private int $idUser;
    private int $idPost;
    private string $content;
    
    /**
     * @return int
     */
    public function getIdComment(): int
    {
        return $this->idComment;
    }

    /**
     * @param int $idComment
     * @return Comment
     */
    public function setIdComment(int $idComment): self
    {
        $this->idComment = $idComment;
        return $this;
    }

     /**
     * @return int
     */
    public function getIdUser(): int
    {
        return $this->idUser;
    }

    /**
     * @param int $idUser
     * @return Comment
     */
    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;
        return $this;
    }

     /**
     * @return int
     */
    public function getIdPost(): int
    {
        return $this->idPost;
    }

    /**
     * @param int $idPost
     * @return Comment
     */
    public function setIdPost(int $idPost): self
    {
        $this->idPost = $idPost;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Comment
     */
    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }
  }
