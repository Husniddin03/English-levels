<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="/style/css/admin.css">
</head>

<body>
    <div class="container">
        <!-- Mobile Menu Overlay -->
        <div id="overlay" class="overlay"></div>

        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <h1>Admin Panel</h1>
            </div>
            <nav class="sidebar-nav">
                <button class="nav-item active" data-section="users">Users</button>
                <button class="nav-item" data-section="reading">Reading</button>
                <button class="nav-item" data-section="listening">Listening</button>
                <button class="nav-item" data-section="writing">Writing</button>
                <button class="nav-item" data-section="speaking">Speaking</button>
                <button class="nav-item" data-section="vocabulary">Vocabulary</button>
                <button class="nav-item" data-section="grammar">Grammar</button>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="main-content" id="mainContent">
            <!-- Top Bar -->
            <div class="top-bar">
                <button id="menuButton" class="menu-button">☰</button>
                <span class="user-info"><?=$this->user('name')?></span>
            </div>

            <!-- Content Area -->
            <div class="content">
                <div class="content-header">
                    <h2 id="sectionTitle">Users</h2>
                    <button class="add-button" onclick="handleAdd()">Add New</button>
                </div>

                <!-- Table -->
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <?php
                                foreach ($data[0] as $key => $value) {
                                    echo "<th>$key</th>";
                                }
                                ?>
                            </tr>
                        </thead>
                        <tbody id="tableBody"></tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
    <script>
        let items = <?php echo json_encode($data); ?>;
    </script>
    <script src="/style/js/admin.js"></script>
</body>

</html>