<?php
$this->view('companent/header');
?>

<div class="pop-up">
    <div class="overlay" id="overlay">
        <form action="/main/quiz" method="post" class="popup">
            <h2>Quiz Settings</h2>
            <p>Customize your quiz experience</p>

            <label>Choose Level</label>
            <select id="level" name="level">
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="B1">B1</option>
                <option value="B2">B2</option>
                <option value="C1">C1</option>
                <option value="C2">C2</option>
                <option value="ALL">ALL</option>
            </select>

            <label>Time Limit (seconds)</label>
            <select name="time">
                <option value="3">3</option>
                <option value="5" selected>5</option>
                <option value="10">10</option>
                <option value="15">15</option>
            </select>
            <label for="start-question">Starting Question Number</label>
            <input type="number" name="start" list="start-questions" value="1" id="start-question" placeholder="Select starting question">
            <datalist id="start-questions">
                <option value="1">1</option>
                <option value="10">10</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </datalist>
            <label for="num-questions">Number of Questions</label>
            <input type="number" name="end" value="10" list="num-of-questions" id="num-questions" placeholder="Select number of questions">
            <datalist id="num-of-questions">
                <option value="10">10</option>
                <option value="30">30</option>
                <option value="50">50</option>
                <option value="100">100</option>
                <option value="150">150</option>
            </datalist>
            <button class="pop-button" type="submit">Start Quiz</button>
            <br>
            <div class="pop-button" onclick="closePopup()" style="background: red;">Cancel</div>
        </form>
    </div>
</div>

<!-- Main Content -->
<main id="mainContent" class="main-content">
    <!-- Home Page -->
    <div id="homePage" class="page active">
        <div class="page-header">
            <h1>CHOOSE ENGLISH LEVELS</h1>
            <p>What level of quiz do you want to take?</p>
        </div>

        <div class="levels-grid">
            <div onclick='openPopup("A1")'>
                <div class="level-card level-a1">
                    <div class="level-icon">
                        <span>A1</span>
                    </div>
                    <div class="level-info">
                        <h3>Beginner</h3>
                        <p>Basic communication, simple phrases</p>
                    </div>
                </div>
            </div>
            <div onclick='openPopup("A2")'>
                <div class="level-card level-a2">
                    <div class="level-icon">
                        <span>A2</span>
                    </div>
                    <div class="level-info">
                        <h3>Elementary</h3>
                        <p>Simple conversations, daily topics</p>
                    </div>
                </div>
            </div>

            <div onclick='openPopup("B1")'>
                <div class="level-card level-b1">
                    <div class="level-icon">
                        <span>B1</span>
                    </div>
                    <div class="level-info">
                        <h3>Intermediate</h3>
                        <p>Express opinions, discuss experiences</p>
                    </div>
                </div>
            </div>

            <div onclick='openPopup("B2")'>
                <div class="level-card level-b2">
                    <div class="level-icon">
                        <span>B2</span>
                    </div>
                    <div class="level-info">
                        <h3>Upper Intermediate</h3>
                        <p>Complex discussions, technical topics</p>
                    </div>
                </div>
            </div>

            <div onclick='openPopup("C1")'>
                <div class="level-card level-c1">
                    <div class="level-icon">
                        <span>C1</span>
                    </div>
                    <div class="level-info">
                        <h3>Advanced</h3>
                        <p>Fluent expression, academic language</p>
                    </div>
                </div>
            </div>

            <div onclick='openPopup("C2")'>
                <div class="level-card level-c2">
                    <div class="level-icon">
                        <span>C2</span>
                    </div>
                    <div class="level-info">
                        <h3>Mastery</h3>
                        <p>Near-native proficiency</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="homePage" class="page active">
        <div class="page-header">
            <h1>QUIZ FOR ALL LEVELS</h1>
            <p>Would you like to take a quiz on all levels?</p>
        </div>

        <div class="levels-grid">
            <div onclick='openPopup("ALL")'>
                <div class="level-card level-a1">
                    <div class="level-icon">
                        <span>ALL</span>
                    </div>
                    <div class="level-info">
                        <h3>All Levels</h3>
                        <p>Near-native proficiency</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
$this->view('companent/footer');
?>