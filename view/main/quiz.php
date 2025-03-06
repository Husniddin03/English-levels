<?php
$this->view('companent/header');
?>

<div class="quiz">
    <div class="quiz-container" id="quizContainer">
        <div id="quizContent">
            <div class="quiz-header">
                <button class="nav-button" id="backButton">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6" />
                    </svg>
                </button>
                <span class="question-number" id="questionNumber">Savol 1/<?=count($data)?></span>
                <button class="nav-button" id="bookmarkButton">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z" />
                    </svg>
                </button>
            </div>

            <div class="timer-container">
                <div class="timer-bar">
                    <div class="timer-progress" id="timerProgress"></div>
                </div>
                <div class="timer-text" id="timerText">00:<?=$time?></div>
            </div>

            <div class="question-box">
                <h2 class="question-text" id="questionText"></h2>
            </div>

            <div class="options-container" id="optionsContainer"></div>

            <div class="footer">
                <button class="footer-button">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z" />
                        <path d="M12 7v5l3 3" />
                    </svg>
                    <span id="scoreText">0/<?=count($data)?></span>
                </button>
                <button class="footer-button">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <polyline points="12 6 12 12 16 14" />
                    </svg>
                    <span>Add Time</span>
                </button>
                <button class="footer-button">
                    <span>Skip</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    const questions = shuffleArray(<?php echo json_encode($data) ?>);

    let currentQuestion = 0;
    let score = 0;
    let timeLeft = <?=$time?>;
    let timerInterval;
    let shuffledOptions = [];

    function getRandomOptions(correctAnswer, count = 3) {
        const otherWords = questions
            .filter(q => q.uzbek !== correctAnswer)
            .map(q => q.uzbek);
        const shuffled = shuffleArray(otherWords);
        return shuffled.slice(0, count);
    }

    function shuffleArray(array) {
        const shuffled = [...array];
        for (let i = shuffled.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [shuffled[i], shuffled[j]] = [shuffled[j], shuffled[i]];
        }
        return shuffled;
    }

    function startTimer() {
        clearInterval(timerInterval);
        timeLeft = <?=$time?>;
        updateTimerDisplay();

        timerInterval = setInterval(() => {
            timeLeft--;
            updateTimerDisplay();

            if (timeLeft <= 0) {
                clearInterval(timerInterval);
                handleTimeout();
            }
        }, 1000);
    }

    function updateTimerDisplay() {
        const timerProgress = document.getElementById('timerProgress');
        const timerText = document.getElementById('timerText');

        timerProgress.style.width = `${(timeLeft / <?=$time?>) * 100}%`;
        timerText.textContent = `00:${timeLeft.toString().padStart(2, '0')}`;
    }

    function handleTimeout() {
        if (currentQuestion < questions.length - 1) {
            currentQuestion++;
            loadQuestion();
        } else {
            showResult();
        }
    }

    function loadQuestion() {
        const question = questions[currentQuestion];
        document.getElementById('questionNumber').textContent = `Savol ${currentQuestion + 1}/${questions.length}`;
        document.getElementById('questionText').textContent = question.english;

        // Get random wrong options and add the correct answer
        const wrongOptions = getRandomOptions(question.uzbek);
        shuffledOptions = shuffleArray([...wrongOptions, question.uzbek]);

        const optionsContainer = document.getElementById('optionsContainer');
        optionsContainer.innerHTML = '';

        shuffledOptions.forEach((option) => {
            const button = document.createElement('button');
            button.className = 'option-button';
            button.textContent = option;
            button.onclick = () => handleAnswer(option);
            optionsContainer.appendChild(button);
        });

        startTimer();
    }

    function handleAnswer(selectedAnswer) {
        clearInterval(timerInterval);
        const question = questions[currentQuestion];
        const buttons = document.querySelectorAll('.option-button');

        buttons.forEach(button => {
            if (button.textContent === selectedAnswer) {
                if (selectedAnswer === question.uzbek) {
                    button.classList.add('correct');
                    score++;
                } else {
                    button.classList.add('incorrect');
                }
            }
            button.disabled = true;
        });

        document.getElementById('scoreText').textContent = `${score}/${questions.length}`;

        setTimeout(() => {
            if (currentQuestion < questions.length - 1) {
                currentQuestion++;
                loadQuestion();
            } else {
                showResult();
            }
        }, 1000);
    }

    function showResult() {
        const quizContainer = document.getElementById('quizContainer');
        quizContainer.innerHTML = `
                <div class="result-container">
                    <img src="<?=$this->user('photo')?>" alt="Profile" class="profile-image">
                    <h2 class="result-title">Tabriklaymiz!</h2>
                    <h2 class="result-title">Congratulations!</h2>
                    <p class="result-score">To'g'ri javoblar: ${score}/${questions.length}</p>
                    <p class="result-message">Keling, ko'proq viktorinalar o'ynab bilimingizni sinab ko'raylik!</p>
                    <a href="/main/quiztools" class="restart-button" onclick="restartQuiz()">Qayta boshlash</a>
                </div>
            `;
    }

    // Start the quiz
    loadQuestion();
</script>
<?php
$this->view('companent/footer');
?>