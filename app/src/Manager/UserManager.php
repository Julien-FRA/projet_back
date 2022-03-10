<?php

namespace App\Manager;

use App\Core\Factory\PDOFactory;
use App\Entity\User;

class UserManager extends BaseManager
{
    public function findAllUsers()
    {
        $query = 'SELECT * FROM User';
        $stmt = $this->pdo->query($query);

        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        foreach ($result as $user) {
            $users[] = new User($user);
        }

        return $users;
    }
    public function addUser($user)
    {
        //$idUser = $user->getIdUser();
        // $role = $user->getRole();
        $email = $user->getEmail();
        $name = $user->getName();
        $password = $user->getPassword();

        $query = "INSERT INTO `User` (`email`,`name`, `password`) VALUES (:email, :name, :password);";

        $stmt = $this->pdo->prepare($query);


        $stmt->bindValue(':email', $email, \PDO::FETCH_ASSOC);
        $stmt->bindValue(':name', $name, \PDO::FETCH_ASSOC);
        $stmt->bindValue(':password', $password, \PDO::FETCH_ASSOC);

        $result = $stmt->execute();

        return $result;
    }
}