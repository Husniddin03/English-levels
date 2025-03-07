<?php
$this->view('companent/header');
?>

<div class="home">
  <div class="containerHome">
    <header class="homeHeader">
      <div class="logohome">HG</div>
      <nav>
        <ul>
          <li><a href="/listining/index">Listining</a></li>
          <li><a href="/reading/index">Reading</a></li>
          <li><a href="/writing/index">Writing</a></li>
          <li><a href="/speaking/index">Speaking</a></li>
        </ul>
      </nav>
      <a href="#contact-us" class="call-back-btn-home">CALL CENTER</a>
    </header>

    <main>
      <div class="hero-section-home">
        <div class="hero-content-home">
          <div class="side-text-home">
            <div class="vertical-text">AUTHOR: HUSNIDDIN </div>
          </div>
          <div class="main-content-home">
            <h1>Start learning now.</h1>
            <a href="/main/index" class="discuss-btn">START</a>
            <p class="trial-period">A high result in one month.</p>
          </div>
        </div>
        <div class="hero-image-home">
          <img src="/style/assets/img/robot.png" alt="Robot Assistant">
        </div>
      </div>

      <div class="scroll-down-home">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 20L12 4" stroke="#2E3A59" stroke-width="2" stroke-linecap="round" />
          <path d="M6 14L12 20L18 14" stroke="#2E3A59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </div>
    </main>

    <?php
    $this->view('companent/footernaw');
    ?>
  </div>
</div>

<?php
$this->view('companent/footer');
?>