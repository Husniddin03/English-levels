<?php
$this->view('companent/header');
?>

<div class="listening">
  <div class="container">
    <header>
      <h1>Image Listening Practice</h1>
      <p class="subtitle">Listen to the description and select the correct image</p>
    </header>

    <div class="exercise">
      <div class="exercise-header">
        <h2 class="exercise-title">Exercise 1</h2>
        <div class="score">Score: <span id="score">0</span></div>
      </div>

      <div class="audio-section">
        <audio id="description" controls>
          <source src="https://www.eslfast.com/robot/audio/objects/description1.mp3" type="audio/mpeg">
          Your browser does not support the audio element.
        </audio>
      </div>

      <div class="images-grid">
        <div class="image-option" data-correct="true">
          <img src="https://images.unsplash.com/photo-1517705008128-361805f42e86?w=500&q=80" alt="Coffee cup on table">
        </div>
        <div class="image-option">
          <img src="https://images.unsplash.com/photo-1551107696-a4b0c5a0d9a2?w=500&q=80" alt="Tea set">
        </div>
        <div class="image-option">
          <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=500&q=80" alt="Orange juice">
        </div>
      </div>

      <div id="feedback" class="feedback"></div>
      <button id="nextButton" class="next-button">Next Exercise</button>
    </div>

    <div class="exercise">
      <div class="exercise-header">
        <h2 class="exercise-title">Exercise 2</h2>
      </div>

      <div class="audio-section">
        <audio id="description2" controls>
          <source src="https://www.eslfast.com/robot/audio/objects/description2.mp3" type="audio/mpeg">
          Your browser does not support the audio element.
        </audio>
      </div>

      <div class="images-grid">
        <div class="image-option">
          <img src="https://images.unsplash.com/photo-1533090161767-e6ffed986c88?w=500&q=80" alt="Modern living room">
        </div>
        <div class="image-option" data-correct="true">
          <img src="https://images.unsplash.com/photo-1554995207-c18c203602cb?w=500&q=80" alt="Kitchen">
        </div>
        <div class="image-option">
          <img src="https://images.unsplash.com/photo-1560448204-603b3fc33ddc?w=500&q=80" alt="Bedroom">
        </div>
      </div>

      <div id="feedback2" class="feedback"></div>
      <button id="nextButton2" class="next-button">Next Exercise</button>
    </div>

    <footer>
      <p>Practice regularly to improve your listening comprehension! <a href="https://englishpracticetest.net/practice-english-listening-test-for-a2-listening-for-daily-conversations-test-1/">Source</a></p>
    </footer>
  </div>
</div>

<script src="/style/js/listening.js"></script>
<?php
$this->view('companent/footer');
?>