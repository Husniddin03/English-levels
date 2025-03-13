<?php
$this->view('companent/header');
?>

<div class="writing">
    <div id="app">
        <nav class="top-nav">
            <select id="levelSelect" class="level-select">
                <option value="B1">B1 Level | B1 Daraja</option>
                <option value="B2">B2 Level | B2 Daraja</option>
                <option value="C1">C1 Level | C1 Daraja</option>
            </select>
            <select id="taskSelect" class="task-select">
                <option value="essay">Essay Writing | Insho Yozish</option>
                <option value="letter">Letter Writing | Xat Yozish</option>
                <option value="report">Report Writing | Hisobot Yozish</option>
                <option value="article">Article Writing | Maqola Yozish</option>
            </select>
        </nav>

        <main class="main-content">
            <div class="task-container">
                <div class="task-description">
                    <h2>Writing Task | Yozma Topshiriq</h2>
                    <div id="taskPrompt" class="task-prompt">
                        Select a level and task type to begin | Boshlash uchun daraja va topshiriq turini tanlang
                    </div>
                </div>

                <div class="writing-area">
                    <div class="toolbar">
                        <span class="word-count">Words | So'zlar: <span id="wordCount">0</span></span>
                        <span class="time-remaining">Time | Vaqt: <span id="timer">30:00</span></span>
                    </div>
                    <textarea id="writingInput" placeholder="Start writing here... | Bu yerda yozishni boshlang..."></textarea>
                    <button id="submitBtn" class="submit-btn">Submit for Assessment | Baholash uchun yuborish</button>
                </div>

                <div id="feedback" class="feedback-container hidden">
                    <h3>AI Assessment | Sun'iy intellekt bahosi</h3>
                    <div class="feedback-content">
                        <div class="score-grid">
                            <div class="score-item">
                                <span class="score-label">Grammar | Grammatika</span>
                                <span id="grammarScore" class="score-value">-</span>
                            </div>
                            <div class="score-item">
                                <span class="score-label">Vocabulary | So'z boyligi</span>
                                <span id="vocabScore" class="score-value">-</span>
                            </div>
                            <div class="score-item">
                                <span class="score-label">Coherence | Izchillik</span>
                                <span id="coherenceScore" class="score-value">-</span>
                            </div>
                            <div class="score-item">
                                <span class="score-label">Overall | Umumiy</span>
                                <span id="overallScore" class="score-value">-</span>
                            </div>
                        </div>
                        <div id="detailedFeedback" class="detailed-feedback"></div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script type="module" src="/main.js"></script>
</div>


<script src="/style/js/writing.js"></script>

<?php
// $this->view('companent/footer');
?>