<?php

namespace controller;

use Exception;
use PDOException;
use vendor\controller\Controller;
use Vendor\Model\Database;

class MainController extends Controller
{

    public function home()
    {
        return $this->view('main/home');
    }

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

    public function quiz()
    {
        if($this->post()){
            if($this->post('level') == 'ALL'){
                $level = ['A1', 'A2', 'B1', 'B2', 'C1'];
                $data = [];
                foreach ($level as $item) {
                    $data = array_merge($data, Database::data($item));
                }
                shuffle($data);
                return $this->view('main/quiz', ["data" => array_slice($data, 0, $this->post('end')), 'time' => $this->post('time')]);
            }
            $data = Database::datalimit($this->post('level'), $this->post('start'), $this->post('end'));
            return $this->view('main/quiz', ["data" => $data, 'time' => $this->post('time')]);
        }
        return $this->redirect('main/quiztools');
    }

    public function quiztools()
    {
        return $this->view('main/quiztools');
    }

    public function tools()
    {
        return $this->view('main/tools');
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
            username VARCHAR(255) NOT NULL,
            email VARCHAR(255) UNIQUE NOT NULL,
            password VARCHAR(255) NOT NULL,
            photo VARCHAR(255) default "https://cdn-icons-png.flaticon.com/512/1053/1053244.png",
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );';
        $pdo->exec($sql);
        echo "Created";
    }
}
