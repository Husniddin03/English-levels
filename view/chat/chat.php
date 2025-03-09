<?php
$this->view('companent/header');
?>

<div class="chat">
    <div class="app-container">
        <div class="users-sidebar" id="usersSidebar">
            <div class="sidebar-header">
                <h2>Suhbatlar</h2>
                <button class="new-chat-btn">
                    <i class="fas fa-edit"></i>
                </button>
            </div>
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Qidirish...">
            </div>
            <div class="users-list" id="usersList">
                <!-- Users will be added here dynamically -->
            </div>
            <button class="toggle-sidebar" id="toggleSidebar">
                <i class="fas fa-chevron-left"></i>
            </button>
        </div>

        <div class="chat-container">
            <div class="chat-header">
                <div class="mobile-sidebar-toggle" id="mobileSidebarToggle">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="user-profile">
                    <div class="avatar">
                        <img src="<?= $this->user('photo') ?>" alt="User Avatar">
                        <span class="status-dot"></span>
                    </div>
                    <div class="user-info">
                        <h2>Draft for you</h2>
                        <span class="status">Online</span>
                    </div>
                </div>
                <div class="header-actions">
                    <button class="action-btn">
                        <i class="fas fa-phone"></i>
                    </button>
                    <button class="action-btn">
                        <i class="fas fa-video"></i>
                    </button>
                    <button class="action-btn">
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                </div>
            </div>

            <div class="chat-messages" id="chatMessages">
                <!-- Messages will be added here dynamically -->
            </div>

            <div class="chat-input">
                <button class="attachment-btn">
                    <i class="fas fa-paperclip"></i>
                </button>
                <div class="input-wrapper">
                    <input type="text" id="messageInput" placeholder="Xabar yozish...">
                    <button type="submit" class="emoji-btn">
                        <i class="far fa-smile"></i>
                    </button>
                </div>
                <button id="sendButton">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </div>
</div>
<script>
    const users = <?php echo json_encode($data); ?>;

    const currentUserId = <?php echo json_encode($this->user('id')) ?>;
</script>
<?php
$this->view('companent/footer');
?>