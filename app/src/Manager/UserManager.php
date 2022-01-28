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

    public function AddUser()
    {
        if (isset($_POST)){

            $idUser = strip_tags($_POST["idUser"]);
            $role = strip_tags($_POST["role"]);
            $email = strip_tags($_POST["email"]);
            $name = strip_tags($_POST["name"]);
            $password = strip_tags($_POST["password"]);

            $query = "INSERT INTO 'User' ('idUser', 'role', 'email','name', 'password') VALUES (:idUser, :role, :email, :name, :password )";
            $stmt = $this->pdo->prepare($query);

            $stmt = $this->bindValue(":idUser", $idUser, PDO::PARAM_INT);
            $stmt = $this->bindValue(":role", $role, PDO::PARAM_INT);
            $stmt = $this->bindValue(":email", $email, PDO::PARAM_STR);
            $stmt = $this->bindValue(":name", $name, PDO::PARAM_STR);
            $stmt = $this->bindValue(":password", $password, PDO::PARAM_STR);
            $_SESSION['message'] = "Post ajouté";
            $stmt->execute();
        }

    }
}
