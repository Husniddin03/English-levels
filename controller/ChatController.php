<?php

namespace controller;

use model\User;
use PDO;
use PDOException;
use vendor\controller\Controller;
use Vendor\Model\Database;

class ChatController extends Controller
{
    public function chat()
    {

        if(!$this->user('id')){
            return $this->redirect('log/signup');
        }

        $data = [
            [
                "id" => 1,
                "name" => "Aziza Karimova",
                "avatar" => "https://ui-avatars.com/api/?name=Aziza+Karimova&background=ff6b6b&color=fff",
                "lastMessage" => "Bugun uchrashuvni unutmang!",
                "time" => "14:30",
                "unread" => 2,
                "status" => "online"
            ],
            [
                "id" => 2,
                "name" => "Bobur Aliyev",
                "avatar" => "https://ui-avatars.com/api/?name=Bobur+Aliyev&background=4ecdc4&color=fff",
                "lastMessage" => "Loyiha haqida gaplashamiz",
                "time" => "13:15",
                "unread" => 0,
                "status" => "offline"
            ]
        ];
        // echo json_encode($data);
        $users = User::data('user');
        $data = [];
        foreach ($users as $user) {
            $newArray = [];
            foreach ($user as $key => $value) {
                if ($key == 'photo') {
                    $newArray['avatar'] = $value; // Faqat 'ism' kalitini 'name' ga o'zgartiramiz
                } else {
                    $newArray[$key] = $value;
                }
            }
            $data[] = $newArray;
        }
        return $this->view('chat/chat', ['users' => $users, 'data' => $data]);
    }

    public function send()
    {
        if ($this->post()) {
            $sender_id = $this->post('sender_id');
            $receiver_id = $this->post('receiver_id');
            $message_text = trim($this->post('message_text'));

            if (!empty($message_text)) {
                try {
                    $conn = Database::connect();
                    $stmt = $conn->prepare("INSERT INTO private (sender_id, receiver_id, message_text) VALUES (:sender_id, :receiver_id, :message_text)");
                    $stmt->bindParam(":sender_id", $sender_id, PDO::PARAM_INT);
                    $stmt->bindParam(":receiver_id", $receiver_id, PDO::PARAM_INT);
                    $stmt->bindParam(":message_text", $message_text, PDO::PARAM_STR);

                    if ($stmt->execute()) {
                        echo json_encode(["status" => "success", "message" => "Xabar saqlandi", "sent_at" => date("Y-m-d H:i:s")]);
                    } else {
                        echo json_encode(["status" => "error", "message" => "Xatolik yuz berdi"]);
                    }
                } catch (PDOException $e) {
                    echo json_encode(["status" => "error", "message" => "Xatolik: " . $e->getMessage()]);
                }
            } else {
                echo json_encode(["status" => "error", "message" => "Xabar bo'sh bo'lishi mumkin emas"]);
            }
        }
        $conn = null;
    }

    public function create()
    {
        $pdo = Database::connect();
        $sql = 'CREATE TABLE private (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sender_id INT NOT NULL,
    receiver_id INT NOT NULL,
    message_text TEXT NOT NULL,
    sent_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (sender_id) REFERENCES user(id) ON DELETE CASCADE,
    FOREIGN KEY (receiver_id) REFERENCES user(id) ON DELETE CASCADE
);';
        $pdo->exec($sql);
        echo "Created";
    }
}
