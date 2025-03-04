<?php

namespace controller;

use Exception;
use PDOException;
use vendor\controller\Controller;
use Vendor\Model\Database;

class MainController extends Controller
{
    public function index()
    {
        return $this->view('main/index');
    }

    public function vocabulary()
    {
        if (empty($this->user('id'))) {
            return $this->redirect('log/login');
        }

        $level = $this->get('level');
        $count = Database::count($level);

        if ($count == 0) {
            return $this->view('main/vocabulary', ["data" => null, 'level' => $level, 'count' => 0]);
        }

        $data = Database::data($level);

        return $this->view('main/vocabulary', ["data" => $data, 'level' => $level, 'count' => $count]);
    }

    public function video()
    {
        return $this->view('main/video');
    }

    public function tools()
    {
        return $this->view('main/tools');
    }

    public function photo()
    {
        return $this->view('main/photo');
    }

    public function materials()
    {
        return $this->view('main/materials');
    }

    public function documentation()
    {
        return $this->view('main/documentation');
    }

    public function global()
    {
        return $this->view('main/global');
    }

    public function map()
    {
        return $this->view('main/map');
    }

    public function discussion()
    {
        return $this->view('main/discussion');
    }





    public function createTable()
    {
        $db = new Database();
        $pdo = $db->connect();

        if ($pdo) {
            try {
                $levels = ['A1', 'A2', 'B1', 'B2', 'C1'];
                foreach ($levels as $level) {
                    // 1. Agar jadval mavjud bo‘lmasa, yaratish
                    $sql = 'CREATE TABLE IF NOT EXISTS ' . $level . ' (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    english VARCHAR(255) NOT NULL,
                    uzbek VARCHAR(255) NOT NULL
                );';
                    $pdo->exec($sql);

                    // 2. Faylni o‘qish
                    $filePath = __DIR__ . "/../style/assets/vocabulary/" . $level . ".txt";
                    if (!file_exists($filePath)) {
                        throw new Exception("Fayl topilmadi: $filePath");
                    }

                    $file = file_get_contents($filePath);
                    $words = explode("\n", trim($file));

                    // 3. Malumotlarni qo‘shish
                    $sql = "INSERT INTO " . $level . " (english, uzbek) VALUES (?, ?)";
                    $stmt = $pdo->prepare($sql);

                    foreach ($words as $word) {
                        $wordParts = explode('#', trim($word));

                        if (count($wordParts) >= 2) {
                            $stmt->execute([$wordParts[0], $wordParts[1]]);
                        } else {
                            $stmt->execute([$wordParts[0], '']);
                        }
                    }

                    echo "Jadval yaratildi va ma'lumotlar qo'shildi!\n";
                }
            } catch (PDOException $e) {
                die("Database error: " . $e->getMessage());
            } catch (Exception $e) {
                die("Error: " . $e->getMessage());
            }
        }
    }

    public function createUser()
    {
        $db = new Database();
        $pdo = $db->connect();
        $sql = 'CREATE TABLE IF NOT EXISTS User (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            email VARCHAR(255) UNIQUE NOT NULL,
            password VARCHAR(255) NOT NULL,
            photo VARCHAR(255) default "https://cdn-icons-png.flaticon.com/512/1053/1053244.png",
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );';
        $pdo->exec($sql);
        echo "Created";
    }
}
