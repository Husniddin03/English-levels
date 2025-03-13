<?php
$this->view('companent/header');
?>

<div class="reading">
  <div id="app">
    <header>
      <h1>CEFR Reading Practice (B1 → C1+)</h1>
      <p class="subtitle">CEFR imtihoniga tayyorgarlik ko'rish uchun o'qish ko'nikmalari</p>
      <div class="level-indicators">
        <span class="level">B1</span>
        <span class="level">B2</span>
        <span class="level">C1</span>
        <span class="level">C1+</span>
      </div>
    </header>

    <div class="materials-grid">
      <div class="material-card" data-category="academic">
        <h2>Academic Texts | Akademik Matnlar</h2>
        <ul>
          <li>Research Papers | Ilmiy Maqolalar</li>
          <li>Academic Journals | Akademik Jurnallar</li>
          <li>Case Studies | Keys Stadi</li>
        </ul>
        <div class="level-tag">B2-C1</div>
        <button class="learn-more">Learn More | Batafsil</button>
      </div>

      <div class="material-card" data-category="business">
        <h2>Business Materials | Biznes Materiallar</h2>
        <ul>
          <li>Reports | Hisobotlar</li>
          <li>Proposals | Takliflar</li>
          <li>Business News | Biznes Yangiliklari</li>
        </ul>
        <div class="level-tag">B2-C1</div>
        <button class="learn-more">Learn More | Batafsil</button>
      </div>

      <div class="material-card" data-category="media">
        <h2>Media & News | OAV va Yangiliklar</h2>
        <ul>
          <li>News Articles | Yangilik Maqolalari</li>
          <li>Editorial Pieces | Muharrir Maqolalari</li>
          <li>Magazine Features | Jurnal Maqolalari</li>
        </ul>
        <div class="level-tag">B1-C1</div>
        <button class="learn-more">Learn More | Batafsil</button>
      </div>

      <div class="material-card" data-category="literature">
        <h2>Literature | Adabiyot</h2>
        <ul>
          <li>Contemporary Fiction | Zamonaviy Adabiyot</li>
          <li>Literary Analysis | Adabiy Tahlil</li>
          <li>Critical Reviews | Tanqidiy Sharhlar</li>
        </ul>
        <div class="level-tag">B2-C1+</div>
        <button class="learn-more">Learn More | Batafsil</button>
      </div>
    </div>

    <div id="modal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h2 id="modal-title"></h2>
        <div id="modal-body"></div>
      </div>
    </div>
  </div>
  <script type="module" src="/main.js"></script>
</div>

<script src="/style/js/reading.js"></script>
<?php
$this->view('companent/footer');
?>