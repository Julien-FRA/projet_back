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
        var_dump($users);
        return $users;

    }
}
