<?php

namespace vendor\model;

use Vendor\Model\Database;

class Validator
{
    public static function email($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    public static function password($password)
    {
        return strlen($password) >= 8 && preg_match('/[a-z]/', $password) && preg_match('/[A-Z]/', $password) && preg_match('/\d/', $password) && preg_match('/[!@#$%^&*()_+\-=\[\]{};":\\|,.<>\/?]/', $password);
    }
    public static function name($name)
    {
        return strlen($name) >= 3 && preg_match('/^[a-zA-Z\s]+$/', $name);
    }
    public static function username($username)
    {
        $pdo = Database::connect();
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM User WHERE username = :username");
        $stmt->execute(['username' => $username]);
        return strlen($username) >= 4 && preg_match('/^[a-zA-Z0-9_]+$/', $username) && $stmt->fetchColumn() == 0;
    }
    public static function phone($phone)
    {
        return preg_match('/^\d{11}$/', $phone);
    }
    public static function address($address)
    {
        return strlen($address) >= 10 && preg_match('/^[a-zA-Z0-9\s.,]+$/', $address);
    }
}
