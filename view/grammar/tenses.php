<?php
$this->view('companent/header');
?>

<main class="tenses">
    <div class="container">
        <a class="card" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gem">
                <path d="M6 3h12l4 6-10 13L2 9Z" />
                <path d="M11 3 8 9l4 13 4-13-3-6" />
                <path d="M2 9h20" />
            </svg>
            <h2>I. HOZIRGI ZAMON (PRESENT TENSES)</h2>
            <p>
                ✅ Bu zamon hozirgi vaqtdagi yoki odatda sodir bo‘ladigan harakatlarni ifodalaydi.
            </p>
        </a>
        <a class="card" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-blend">
                <circle cx="9" cy="9" r="7" />
                <circle cx="15" cy="15" r="7" />
            </svg>
            <h2>II. O‘TGAN ZAMON (PAST TENSES)</h2>
            <p>
                ✅ Bu zamon o‘tgan vaqtda sodir bo‘lgan yoki davom etgan harakatlarni ifodalaydi.
            </p>
        </a>
        <a class="card" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-marked">
                <path d="M10 2v8l3-3 3 3V2" />
                <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
            </svg>
            <h2>III. KELASI ZAMON (FUTURE TENSES)</h2>
            <p>
                ✅ Bu zamon kelajakda sodir bo‘ladigan yoki davom etadigan harakatlarni ifodalaydi.
            </p>
        </a>
    </div>
</main>

<?php
$this->view('companent/footer');
?>