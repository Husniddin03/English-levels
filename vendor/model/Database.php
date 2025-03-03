<?php

namespace Vendor\Model;

use PDO;
use PDOException;
use vendor\model\Validator;

class Database extends Validator
{
    private static string $host = "localhost";
    private static string $dbname = "translate";
    private static string $username = "root";
    private static string $password = "root";
    private static ?PDO $connection = null;

    public static function connect(): ?PDO
    {
        if (self::$connection === null) {
            try {
                self::$connection = new PDO(
                    "mysql:host=" . self::$host . ";dbname=" . self::$dbname . ";charset=utf8",
                    self::$username,
                    self::$password,
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::ATTR_PERSISTENT => true // Uzoq muddatli ulanish
                    ]
                );
            } catch (PDOException $e) {
                die("Database connection failed: " . $e->getMessage());
            }
        }
        return self::$connection;
    }
    public static function data($table)
    {
        $conn = self::connect();
        $stmt = $conn->prepare("SELECT * FROM {$table}");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public static function count($table)
{
    try {
        $conn = self::connect();

        // Jadval mavjudligini tekshirish
        $checkStmt = $conn->prepare("SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = DATABASE() AND table_name = ?");
        $checkStmt->execute([$table]);
        $tableExists = $checkStmt->fetchColumn();

        if (!$tableExists) {
            return 0; // Agar jadval mavjud bo'lmasa, 0 qaytaradi
        }

        // Agar jadval mavjud bo'lsa, uning yozuvlarini hisoblash
        $stmt = $conn->prepare("SELECT COUNT(*) as total FROM {$table}");
        $stmt->execute();
        $row = $stmt->fetch();
        
        return $row['total'] ?? 0;
    } catch (PDOException $e) {
        return 0; // Agar xatolik bo'lsa ham, 0 qaytaradi
    }
}

    public static function findOne($name, $tableName)
    {
        $pdo = self::connect();

        $query = "SELECT * FROM " . $tableName . " WHERE " . key($name) . " = :name";

        $stmt = $pdo->prepare($query);
        $stmt->execute(['name' => $name[key($name)]]);

        return $stmt->fetch();
    }
}
