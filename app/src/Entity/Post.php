<?php

namespace App\Entity;

use DateTime;
use Exception;

class Post extends BaseEntity
{
    private int $idPost;
    private int $idUser;
    private DateTime $createdAt;
    private string $title;
    private mixed $image;
    private string $content;

    /**
     * @return int
     */
    public function getIdPost(): int
    {
        return $this->idPost;
    }

    /**
     * @param int $idPost
     * @return Post
     */
    public function setIdPost(int $idPost): self
    {
        $this->idPost = $idPost;
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
     * @return Post
     */
    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt->format('d/m/y h:m:s');
    }

    /**
     * @param string $createdAt
     * @return Post
     * @throws Exception
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->createdAt = new DateTime($createdAt);
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Post
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

        /**
     * @return mixed
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     * @return Post
     */
    public function setImage(string $image): self
    {
        $this->image = $image;
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
     * @return Post
     */
    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }
}