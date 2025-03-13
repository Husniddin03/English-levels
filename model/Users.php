<?php

namespace model;

use vendor\model\Database;

class Users extends Database
{

    public static $validates = true;

    public static function validate($value, $type)
    {
        if (self::$type($value)) {
            return true;
        } else {
            self::$validates = false;
            return false;
        }
    }

    public static function create($data)
    {
        $pdo = self::connect();

        $checkStmt = $pdo->prepare("SELECT COUNT(*) FROM Users WHERE email = :email");
        $checkStmt->execute(['email' => $data['email']]);
        $emailExists = $checkStmt->fetchColumn();

        if ($emailExists) {
            return 0;
        }

        $stmt = $pdo->prepare("INSERT INTO Users (name, username, email, password) VALUES (:name, :username, :email, :password)");
        $stmt->execute($data);

        return $pdo->lastInsertId();
    }


    public static function find($data)
    {
        return self::findOne($data, 'Users');
    }
}
