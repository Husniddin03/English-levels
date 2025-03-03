<?php
$this->view('companent/header');
?>
<!-- Main Content -->
<main id="mainContent" class="main-content">
    <!-- Home Page -->
    <div id="homePage" class="page active">
        <div class="page-header">
            <h1>ENGLISH LEVELS <?=$user?></h1>
            <p>Click on any level to learn more</p>
        </div>

        <div class="levels-grid">
            <a href="/main/vocabulary?level=A1">
                <div class="level-card level-a1">
                    <div class="level-icon">
                        <span>A1</span>
                    </div>
                    <div class="level-info">
                        <h3>Beginner</h3>
                        <p>Basic communication, simple phrases</p>
                    </div>
                </div>
            </a>
            <a href="/main/vocabulary?level=A2">
                <div class="level-card level-a2">
                    <div class="level-icon">
                        <span>A2</span>
                    </div>
                    <div class="level-info">
                        <h3>Elementary</h3>
                        <p>Simple conversations, daily topics</p>
                    </div>
                </div>
            </a>

            <a href="/main/vocabulary?level=B1">
                <div class="level-card level-b1">
                    <div class="level-icon">
                        <span>B1</span>
                    </div>
                    <div class="level-info">
                        <h3>Intermediate</h3>
                        <p>Express opinions, discuss experiences</p>
                    </div>
                </div>
            </a>

            <a href="/main/vocabulary?level=B2">
                <div class="level-card level-b2">
                    <div class="level-icon">
                        <span>B2</span>
                    </div>
                    <div class="level-info">
                        <h3>Upper Intermediate</h3>
                        <p>Complex discussions, technical topics</p>
                    </div>
                </div>
            </a>

            <a href="/main/vocabulary?level=C1">
                <div class="level-card level-c1">
                    <div class="level-icon">
                        <span>C1</span>
                    </div>
                    <div class="level-info">
                        <h3>Advanced</h3>
                        <p>Fluent expression, academic language</p>
                    </div>
                </div>
            </a>

            <a href="/main/vocabulary?level=C2">
                <div class="level-card level-c2">
                    <div class="level-icon">
                        <span>C2</span>
                    </div>
                    <div class="level-info">
                        <h3>Mastery</h3>
                        <p>Near-native proficiency</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</main>

<?php
$this->view('companent/footer');
?>