<?php


namespace App\Entity;


class User extends BaseEntity
{
    private int $idUser;
    private int $role;
    private string $email;
    private string $name;
    private string $password;
    /**
     * @return int
     */
    public function getIdUser(): int
    {
        return $this->idUser;
    }

    /**
     * @param int $idUser
     * @return User
     */
    public function setIdUser($idUser): self
    {
        $this->idUser = $idUser;
        return $this;
    }

    // /**
    //  * @return mixed
    //  */
    // public function getRole() : int
    // {
    //     return $this->role;
    // }

    // /**
    //  * @param int $role
    //  * @return User
    //  */
    // public function setRole($role): self
    // {
    //     $this->role = $role;
    //     return $this;
    // }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return User
     */
    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return User
     */
    public function setEmail($email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return User
     */
    public function setPassword($password): self
    {
        $this->password = $password;
        return $this;
    }
}