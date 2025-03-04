<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>English Levels</title>
    <link rel="stylesheet" href="/style/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Mobile Header -->
    <header class="mobile-header">
        <h1>English Levels</h1>
        <button id="menuToggle" class="menu-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="4" x2="20" y1="12" y2="12" />
                <line x1="4" x2="20" y1="6" y2="6" />
                <line x1="4" x2="20" y1="18" y2="18" />
            </svg>
        </button>
    </header>

    <!-- Sidebar Navigation -->
    <nav id="sideNav" class="side-nav">
        <div class="nav-header">
            <h2>English Learning</h2>
        </div>
        <ul class="nav-list">
            <li>
                <a href="/main/home">
                    <button class="nav-item" data-page="home">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                            <polyline points="9 22 9 12 15 12 15 22" />
                        </svg>
                        <span>Dashboard</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="/main/materials">
                    <button class="nav-item" data-page="materials">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                        </svg>
                        <span>Learning Materials</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="/main/index">
                    <button class="nav-item" data-page="global">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <line x1="2" x2="22" y1="12" y2="12" />
                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                        </svg>
                        <span>Dictionary</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="/main/discussion">
                    <button class="nav-item" data-page="forums">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                        </svg>
                        <span>Discussion Forums</span>
                    </button>
                </a>
            </li>

            <li>
                <a href="/main/photo">
                    <button class="nav-item" data-page="photos">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z" />
                            <circle cx="12" cy="13" r="3" />
                        </svg>
                        <span>Learning Photos</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="/main/video">
                    <button class="nav-item" data-page="tutorials">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="20" x="2" y="2" rx="2.18" ry="2.18" />
                            <line x1="7" x2="7" y1="2" y2="22" />
                            <line x1="17" x2="17" y1="2" y2="22" />
                            <line x1="2" x2="22" y1="12" y2="12" />
                            <line x1="2" x2="7" y1="7" y2="7" />
                            <line x1="2" x2="7" y1="17" y2="17" />
                            <line x1="17" x2="22" y1="17" y2="17" />
                            <line x1="17" x2="22" y1="7" y2="7" />
                        </svg>
                        <span>Video Tutorials</span>
                    </button>
                </a>
            </li>

            <li>
                <a href="/main/tools">
                    <button class="nav-item" data-page="tools">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                        <span>Tools & Resources</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="/main/map">
                    <button class="nav-item" data-page="map">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        <span>Learning Map</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="/main/documentation">
                    <button class="nav-item" data-page="docs">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 16v-4" />
                            <path d="M12 8h.01" />
                        </svg>
                        <span>Documentation</span>
                    </button>
                </a>
            </li>
        </ul>
        <div class="nav-footer">

            <?php if ($this->user('name')): ?>
                <a href="/log/getuser">
                    <button class="nav-item" data-page="signin">
                        <img src="<?= $this->user('photo') ?>" alt="User Avatar">
                        <span><?= $this->user('name') ?></span>
                    </button>
                </a>
                <a href="/log/logout" onclick="return confirmLogout(event);">
                    <button class="nav-item" data-page="signin">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                            <polyline points="10 17 15 12 10 7" />
                            <line x1="15" x2="3" y1="12" y2="12" />
                        </svg>
                        <span>Logout</span>
                    </button>
                </a>

            <?php else: ?>
                <a href="/log/signup">
                    <button class="nav-item" data-page="signin">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                            <polyline points="10 17 15 12 10 7" />
                            <line x1="15" x2="3" y1="12" y2="12" />
                        </svg>
                        <span>Sign In</span>
                    </button>
                </a>
            <?php endif; ?>

        </div>
    </nav>