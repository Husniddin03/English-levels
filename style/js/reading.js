const modalContent = {
    academic: {
      title: "Academic Texts | Akademik Matnlar",
      content: `
            <p><strong>CEFR Level Focus: B2-C1</strong></p>
            
            <div class="exam-tips">
                <h3>Exam Preparation Tips | Imtihonga tayyorgarlik maslahatlari:</h3>
                <ul>
                    <li><strong>Research Papers | Ilmiy maqolalar:</strong>
                        <br>- Identify main arguments and supporting evidence
                        <br>- Asosiy g'oyalar va dalillarni aniqlash</li>
                    <li><strong>Academic Journals | Akademik jurnallar:</strong>
                        <br>- Focus on methodology and conclusions
                        <br>- Metodologiya va xulosalarga e'tibor qarating</li>
                    <li><strong>Case Studies | Keys stadi:</strong>
                        <br>- Analyze problems and solutions
                        <br>- Muammolar va yechimlarni tahlil qiling</li>
                </ul>
            </div>

            <div class="practice-exercises">
                <h3>Practice Activities | Mashq faoliyatlari:</h3>
                <ul>
                    <li>Summarize research findings | Tadqiqot natijalarini umumlashtiring</li>
                    <li>Compare different academic perspectives | Turli akademik qarashlarni taqqoslang</li>
                    <li>Extract key data from graphs and tables | Grafik va jadvallardan asosiy ma'lumotlarni ajrating</li>
                </ul>
            </div>
        `
    },
    business: {
      title: "Business Materials | Biznes Materiallar",
      content: `
            <p><strong>CEFR Level Focus: B2-C1</strong></p>
            
            <div class="exam-tips">
                <h3>Exam Preparation Tips | Imtihonga tayyorgarlik maslahatlari:</h3>
                <ul>
                    <li><strong>Reports | Hisobotlar:</strong>
                        <br>- Analyze financial data and trends
                        <br>- Moliyaviy ma'lumotlar va tendentsiyalarni tahlil qiling</li>
                    <li><strong>Proposals | Takliflar:</strong>
                        <br>- Identify key recommendations
                        <br>- Asosiy tavsiyalarni aniqlang</li>
                    <li><strong>Business News | Biznes yangiliklari:</strong>
                        <br>- Understand market impacts
                        <br>- Bozor ta'sirini tushunish</li>
                </ul>
            </div>

            <div class="practice-exercises">
                <h3>Practice Activities | Mashq faoliyatlari:</h3>
                <ul>
                    <li>Write executive summaries | Qisqa mazmunni yozing</li>
                    <li>Analyze business cases | Biznes holatlarni tahlil qiling</li>
                    <li>Review market reports | Bozor hisobotlarini ko'rib chiqing</li>
                </ul>
            </div>
        `
    },
    media: {
      title: "Media & News | OAV va Yangiliklar",
      content: `
            <p><strong>CEFR Level Focus: B1-C1</strong></p>
            
            <div class="exam-tips">
                <h3>Exam Preparation Tips | Imtihonga tayyorgarlik maslahatlari:</h3>
                <ul>
                    <li><strong>News Articles | Yangilik maqolalari:</strong>
                        <br>- Identify bias and perspective
                        <br>- Munosabat va nuqtai nazarni aniqlash</li>
                    <li><strong>Editorial Pieces | Muharrir maqolalari:</strong>
                        <br>- Analyze arguments and evidence
                        <br>- Dalillar va isbotlarni tahlil qiling</li>
                    <li><strong>Magazine Features | Jurnal maqolalari:</strong>
                        <br>- Understand detailed descriptions
                        <br>- Batafsil tasvirlarni tushunish</li>
                </ul>
            </div>

            <div class="practice-exercises">
                <h3>Practice Activities | Mashq faoliyatlari:</h3>
                <ul>
                    <li>Compare different news sources | Turli yangilik manbalarini taqqoslang</li>
                    <li>Analyze opinion pieces | Fikr-mulohaza maqolalarini tahlil qiling</li>
                    <li>Summarize current events | Joriy voqealarni umumlashtiring</li>
                </ul>
            </div>
        `
    },
    literature: {
      title: "Literature | Adabiyot",
      content: `
            <p><strong>CEFR Level Focus: B2-C1+</strong></p>
            
            <div class="exam-tips">
                <h3>Exam Preparation Tips | Imtihonga tayyorgarlik maslahatlari:</h3>
                <ul>
                    <li><strong>Contemporary Fiction | Zamonaviy adabiyot:</strong>
                        <br>- Analyze themes and character development
                        <br>- Mavzular va personajlar rivojini tahlil qiling</li>
                    <li><strong>Literary Analysis | Adabiy tahlil:</strong>
                        <br>- Understand literary devices
                        <br>- Adabiy vositalarni tushunish</li>
                    <li><strong>Critical Reviews | Tanqidiy sharhlar:</strong>
                        <br>- Evaluate arguments and interpretations
                        <br>- Fikrlar va talqinlarni baholang</li>
                </ul>
            </div>

            <div class="practice-exercises">
                <h3>Practice Activities | Mashq faoliyatlari:</h3>
                <ul>
                    <li>Write book reviews | Kitob sharhlarini yozing</li>
                    <li>Analyze literary passages | Adabiy parchalarni tahlil qiling</li>
                    <li>Compare different interpretations | Turli talqinlarni taqqoslang</li>
                </ul>
            </div>
        `
    }
  };

  // Modal functionality
  const modal = document.getElementById('modal');
  const modalTitle = document.getElementById('modal-title');
  const modalBody = document.getElementById('modal-body');
  const closeBtn = document.querySelector('.close');

  // Add click event listeners to all "Learn More" buttons
  document.querySelectorAll('.learn-more').forEach(button => {
    button.addEventListener('click', (e) => {
      const card = e.target.closest('.material-card');
      const category = card.dataset.category;
      const content = modalContent[category];

      modalTitle.textContent = content.title;
      modalBody.innerHTML = content.content;
      modal.style.display = 'block';
    });
  });

  // Close modal when clicking the close button
  closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
  });

  // Close modal when clicking outside
  window.addEventListener('click', (e) => {
    if (e.target === modal) {
      modal.style.display = 'none';
    }
  });

  // Add hover effect to cards
  document.querySelectorAll('.material-card').forEach(card => {
    card.addEventListener('mouseenter', () => {
      card.style.transform = 'translateY(-5px)';
    });

    card.addEventListener('mouseleave', () => {
      card.style.transform = 'translateY(0)';
    });
  });