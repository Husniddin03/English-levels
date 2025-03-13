let score = 0;
const scoreElement = document.getElementById('score');

function handleImageSelection(exerciseContainer) {
  const images = exerciseContainer.querySelectorAll('.image-option');
  const feedback = exerciseContainer.querySelector('.feedback');
  const nextButton = exerciseContainer.querySelector('.next-button');
  let hasSelected = false;

  images.forEach(image => {
    image.addEventListener('click', () => {
      if (hasSelected) return;

      hasSelected = true;
      const isCorrect = image.dataset.correct === 'true';

      // Remove any previous selection
      images.forEach(img => img.classList.remove('selected', 'correct', 'incorrect'));

      // Add appropriate class
      image.classList.add(isCorrect ? 'correct' : 'incorrect');

      // Show correct answer
      images.forEach(img => {
        if (img.dataset.correct === 'true') {
          img.classList.add('correct');
        }
      });

      // Update feedback
      feedback.textContent = isCorrect ? 'Correct! Well done!' : 'Incorrect. Try again!';
      feedback.className = `feedback ${isCorrect ? 'correct' : 'incorrect'}`;

      // Update score
      if (isCorrect) {
        score++;
        scoreElement.textContent = score;
      }

      // Show next button
      nextButton.classList.add('show');
    });
  });
}

// Add event listeners for audio playback
document.querySelectorAll('audio').forEach(audio => {
  audio.addEventListener('play', function() {
    // Pause all other audio elements when one starts playing
    document.querySelectorAll('audio').forEach(other => {
      if (other !== audio) {
        other.pause();
      }
    });
  });
});

// Initialize exercises
document.querySelectorAll('.exercise').forEach(exercise => {
  handleImageSelection(exercise);
});


