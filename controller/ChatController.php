<?php

namespace controller;

use model\User;
use vendor\controller\Controller;
use Vendor\Model\Database;

class ChatController extends Controller
{
    public function chat()
    {

        $data = [
            [
                "id"=> 1,
                "name"=> "Aziza Karimova",
                "avatar"=> "https://ui-avatars.com/api/?name=Aziza+Karimova&background=ff6b6b&color=fff",
                "lastMessage"=> "Bugun uchrashuvni unutmang!",
                "time"=> "14:30",
                "unread"=> 2,
                "status"=> "online"
            ],
            [
                "id"=> 2,
                "name"=> "Bobur Aliyev",
                "avatar"=> "https://ui-avatars.com/api/?name=Bobur+Aliyev&background=4ecdc4&color=fff",
                "lastMessage"=> "Loyiha haqida gaplashamiz",
                "time"=> "13:15",
                "unread"=> 0,
                "status"=> "offline"
            ]
        ];
        // echo json_encode($data);
        $users = User::data('user');
        return $this->view('chat/chat', ['users' => $users, 'data' => $data]);
    }


    public function create()
    {
        $db = new Database();
        $pdo = $db->connect();
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
