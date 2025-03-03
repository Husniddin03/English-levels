<?php
$this->view('companent/header');
?>

<!-- Main Content -->
<main id="mainContent" class="main-content">
    <div class="vocabulary-container">
        <div class="vocabulary-header">
            <h1><?= $level ?> Level Vocabulary</h1>
            <?php
                if($count == 0) {
                    echo '<p>No vocabulary data available for this level</p>';
                } else {
                    echo "<p>Click on any word to hear pronunciation</p>";
                }
            ?>
        </div>

        <div class="vocabulary-grid" id="vocabularyGrid">
            <!-- Words will be loaded by JavaScript -->
        </div>

        <div class="pagination">
            <div class="level-info">
                <span class="level-badge"><?= $level ?></span>
                <span class="word-count">Total: <?= $count ?> words</span>
            </div>
            <div class="page-controls">
                <button class="page-btn prev-btn" id="prevPage">&lt;</button>
                <span class="page-indicator" id="pageIndicator">1-12 of <?= $count ?></span>
                <button class="page-btn next-btn" id="nextPage">&gt;</button>
            </div>
        </div>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        displayWords();
    });

    // Sample vocabulary data (in a real app, this would come from a server)
    const vocabularyData = <?php echo json_encode($data); ?>;

    // Current page and items per page
    let currentPage = 1;
    const itemsPerPage = 12; // Adjust as needed
    const totalItems = vocabularyData.length;
    const totalPages = Math.ceil(totalItems / itemsPerPage);

    // DOM elements
    const vocabularyGrid = document.getElementById('vocabularyGrid');
    const prevPageBtn = document.getElementById('prevPage');
    const nextPageBtn = document.getElementById('nextPage');
    const pageIndicator = document.getElementById('pageIndicator');

    // Function to display words for the current page
    function displayWords() {
        // Clear the grid
        vocabularyGrid.innerHTML = '';

        // Calculate start and end indices
        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = Math.min(startIndex + itemsPerPage, totalItems);

        // Update page indicator
        pageIndicator.textContent = `${startIndex + 1}-${endIndex} of ${totalItems}`;

        // Create and append word cards
        for (let i = startIndex; i < endIndex; i++) {
            const word = vocabularyData[i];
            const wordCard = document.createElement('div');
            wordCard.className = 'word-card';
            wordCard.innerHTML = `
      <span class="word-number">${i + 1}</span>
      <div class="word-english">${word.english}</div>
      <div class="word-uzbek">${word.uzbek}</div>
    `;

            // Add click event for speech
            wordCard.addEventListener('click', () => {
                speakText(word.english);
            });

            vocabularyGrid.appendChild(wordCard);
        }

        // Update button states
        prevPageBtn.disabled = currentPage === 1;
        nextPageBtn.disabled = currentPage === totalPages;
    }

    // Function to speak text using the Web Speech API
    function speakText(text) {
        if ('speechSynthesis' in window) {
            const utterance = new SpeechSynthesisUtterance(text);
            utterance.lang = 'en-US';
            window.speechSynthesis.speak(utterance);

            // Visual feedback
            const wordCards = document.querySelectorAll('.word-card');
            wordCards.forEach(card => {
                if (card.querySelector('.word-english').textContent === text) {
                    card.classList.add('speaking');
                    setTimeout(() => {
                        card.classList.remove('speaking');
                    }, 1500);
                }
            });
        } else {
            console.log('Text-to-speech not supported in this browser');
        }
    }

    // Event listeners for pagination
    prevPageBtn.addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            displayWords();
            // Scroll to top of grid
            vocabularyGrid.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });

    nextPageBtn.addEventListener('click', () => {
        if (currentPage < totalPages) {
            currentPage++;
            displayWords();
            // Scroll to top of grid
            vocabularyGrid.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });

    // Mobile menu functionality
    const menuToggle = document.getElementById('menuToggle');
    const sideNav = document.getElementById('sideNav');
    const overlay = document.getElementById('overlay');

    menuToggle.addEventListener('click', () => {
        sideNav.classList.toggle('open');
        overlay.classList.toggle('active');
    });

    overlay.addEventListener('click', () => {
        sideNav.classList.remove('open');
        overlay.classList.remove('active');
    });

    // Initialize the page
    document.addEventListener('DOMContentLoaded', () => {
        displayWords();
    });
</script>


<?php
$this->view('companent/footer');
?>