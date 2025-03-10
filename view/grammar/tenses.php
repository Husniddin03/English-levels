<?php
$this->view('companent/header');
?>

<main class="tenses">
    <div class="container">
        <div onclick='thems("present")' class="card">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gem">
                <path d="M6 3h12l4 6-10 13L2 9Z" />
                <path d="M11 3 8 9l4 13 4-13-3-6" />
                <path d="M2 9h20" />
            </svg>
            <h2>I. HOZIRGI ZAMON (PRESENT TENSES)</h2>
            <p>
                ✅ Bu zamon hozirgi vaqtdagi yoki odatda sodir bo‘ladigan harakatlarni ifodalaydi.
            </p>
        </div>
        <div onclick='thems("past")' class="card">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-blend">
                <circle cx="9" cy="9" r="7" />
                <circle cx="15" cy="15" r="7" />
            </svg>
            <h2>II. O‘TGAN ZAMON (PAST TENSES)</h2>
            <p>
                ✅ Bu zamon o‘tgan vaqtda sodir bo‘lgan yoki davom etgan harakatlarni ifodalaydi.
            </p>
        </div>
        <div onclick='thems("future")' class="card">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-marked">
                <path d="M10 2v8l3-3 3 3V2" />
                <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
            </svg>
            <h2>III. KELASI ZAMON (FUTURE TENSES)</h2>
            <p>
                ✅ Bu zamon kelajakda sodir bo‘ladigan yoki davom etadigan harakatlarni ifodalaydi.
            </p>
        </div>
    </div>

    <div id="present">
        <div class="thems">
            <div class="container1">
                <h1>Present Simple (Hozirgi oddiy zamon)</h1>

                <div class="formula-section">
                    <h2>Qoida:</h2>
                    <div class="formula-box">
                        Doimiy holatlar, odatlar va umumiy haqiqatlarni ifodalash uchun ishlatiladi.
                    </div>
                </div>

                <div class="formula-section">
                    <h2>Formula:</h2>
                    <div class="formula-box">
                        <p>(+) Subject + V1 (s/es) + Object</p>
                        <p>(-) Subject + do/does + not + V1 + Object</p>
                        <p>(?) Do/Does + Subject + V1 + Object?</p>
                    </div>
                </div>

                <div class="examples-section">
                    <h2>Misollar:</h2>
                    <div class="examples-list">
                        <div class="example-item">
                            <span class="number">1.</span>
                            <span class="english">The sun rises in the east.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">Quyosh sharqdan chiqadi.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">2.</span>
                            <span class="english">Water boils at 100°C.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">Suv 100°C da qaynaydi.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">3.</span>
                            <span class="english">He works in a bank.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">U bankda ishlaydi.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">4.</span>
                            <span class="english">We go to school every day.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">Biz har kuni maktabga boramiz.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">5.</span>
                            <span class="english">She does not like coffee.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">U kofe yoqtirmaydi.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">6.</span>
                            <span class="english">Do you speak English?</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">Sen inglizcha gapirasanmi?</span>
                        </div>
                        <div class="example-item">
                            <span class="number">7.</span>
                            <span class="english">My mother cooks delicious food.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">Onam mazali ovqat pishiradi.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">8.</span>
                            <span class="english">The train leaves at 7 PM.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">Poyezd soat 7 da jo'naydi.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">9.</span>
                            <span class="english">I always wake up early.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">Men har doim erta turaman.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">10.</span>
                            <span class="english">He does not watch TV.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">U televizor ko'rmaydi.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="thems">
            <div class="container1">
                <h1>Present Continuous (Hozirgi davomiy zamon)</h1>
                <div class="formula-section">
                    <h2>Qoida:</h2>
                    <div class="formula-box">
                        Hozirda sodir bo‘layotgan harakat yoki vaqtincha davom etayotgan jarayonlarni ifodalash uchun ishlatiladi.
                    </div>
                </div>
                <div class="formula-section">
                    <h2>Formula:</h2>
                    <div class="formula-box">
                        <p>(+) Subject + am/is/are + V-ing + Object</p>
                        <p>(-) Subject + am/is/are + not + V-ing + Object</p>
                        <p>(?) Am/Is/Are + Subject + V-ing + Object?</p>
                    </div>
                </div>

                <div class="examples-section">
                    <h2>Misollar:</h2>
                    <div class="examples-list">
                        <div class="example-item">
                            <span class="number">1.</span>
                            <span class="english">I am studying English now.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">Men hozir ingliz tilini o‘rganayapman.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">2.</span>
                            <span class="english">She is cooking dinner.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">U hozir kechki ovqat tayyorlayapti.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">3.</span>
                            <span class="english">They are playing football.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">Ular futbol o‘ynayapti.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">4.</span>
                            <span class="english">We are watching a movie.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">Biz kino ko‘rayapmiz.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">5.</span>
                            <span class="english">He is not listening to music.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">U musiqa eshitmayapti.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">6.</span>
                            <span class="english">Are you reading a book?</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">Sen kitob o‘qiyapsanmi?</span>
                        </div>
                        <div class="example-item">
                            <span class="number">7.</span>
                            <span class="english">The baby is sleeping now.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">Bola hozir uxlayapti.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">8.</span>
                            <span class="english">The sun is shining brightly.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">Quyosh charaqlab porlayapti.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">9.</span>
                            <span class="english">I am not feeling well.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">Men o‘zimni yaxshi his qilmayapman.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">10.</span>
                            <span class="english">Are they coming to the party?</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">Ular kechaga kelishyaptimi?</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="thems">
            <div class="container1">
                <h1>Present Perfect (Hozirgi tugallangan zamon)</h1>
                <div class="formula-section">
                    <h2>Qoida:</h2>
                    <div class="formula-box">
                        O‘tgan zamonda boshlanib, hozirgacha bog‘liq bo‘lgan harakatlarni yoki natijasi hozir seziladigan ishlarni ifodalash uchun ishlatiladi.
                    </div>
                </div>
                <div class="formula-section">
                    <h2>Formula:</h2>
                    <div class="formula-box">
                        <p>(+) Subject + have/has + V3 + Object</p>
                        <p>(-) Subject + have/has + not + V3 + Object</p>
                        <p>(?) Have/Has + Subject + V3 + Object?</p>
                    </div>
                </div>

                <div class="examples-section">
                    <h2>Misollar:</h2>
                    <div class="examples-list">
                        <div class="example-item">
                            <span class="number">1.</span>
                            <span class="english">I have finished my homework.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">Men uy vazifamni tugatdim.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">2.</span>
                            <span class="english">She has visited Paris twice.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">U Parijga ikki marta tashrif buyurgan.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">3.</span>
                            <span class="english">They have just arrived.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">Ular hozirgina yetib kelishdi.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">4.</span>
                            <span class="english">We have never seen a lion before.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">Biz ilgari hech qachon sher ko‘rmaganmiz.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">5.</span>
                            <span class="english">He has not eaten breakfast yet.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">U hali nonushta qilmagan.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">6.</span>
                            <span class="english">Have you ever been to London?</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">Sen hech qachon Londonga borganmisan?</span>
                        </div>
                        <div class="example-item">
                            <span class="number">7.</span>
                            <span class="english">My friend has already bought a new car.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">Mening do‘stim allaqachon yangi mashina sotib olgan.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">8.</span>
                            <span class="english">The train has just left.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">Poyezd hozirgina jo‘nab ketdi.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">9.</span>
                            <span class="english">I have lived in this city for five years.</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">Men bu shaharda besh yildan beri yashayman.</span>
                        </div>
                        <div class="example-item">
                            <span class="number">10.</span>
                            <span class="english">Has he finished his work?</span>
                            <span class="arrow">→</span>
                            <span class="uzbek">U ishini tugatdimi?</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="thems">
            <div class="container1">
                <h1>Present Perfect Continuous (Hozirgi tugallangan davomiy zamon)</h1>
                <div class="formula-section">
                    <h2>Qoida:</h2>
                    <div class="formula-box">
                        O‘tgan vaqtda boshlangan va hozirgacha davom etayotgan jarayonlarni ta’riflash uchun ishlatiladi.
                    </div>
                </div>
                <div class="formula-section">
                    <h2>Formula:</h2>
                    <div class="formula-box">
                        <p>(+) Subject + has/have + been + V-ing + Object</p>
                        <p>(-) Subject + has/have + not + been + V-ing + Object</p>
                        <p>(?) Has/Have + Subject + been + V-ing + Object?</p>
                    </div>
                </div>
                <div class="examples-section">
                    <h2>Misollar:</h2>
                    <div class="examples-list">
                        <div class="example-item"><span class="number">1.</span><span class="english">I have been studying for three hours.</span><span class="arrow">→</span><span class="uzbek">Men uch soatdan beri o‘qiyapman.</span></div>
                        <div class="example-item"><span class="number">2.</span><span class="english">She has been working here since 2010.</span><span class="arrow">→</span><span class="uzbek">U 2010-yildan beri shu yerda ishlaydi.</span></div>
                        <div class="example-item"><span class="number">3.</span><span class="english">They have been playing football all day.</span><span class="arrow">→</span><span class="uzbek">Ular butun kun futbol o‘ynayapti.</span></div>
                        <div class="example-item"><span class="number">4.</span><span class="english">It has been raining since morning.</span><span class="arrow">→</span><span class="uzbek">Ertalabdan beri yomg‘ir yog‘ayapti.</span></div>
                        <div class="example-item"><span class="number">5.</span><span class="english">He has been watching TV for two hours.</span><span class="arrow">→</span><span class="uzbek">U ikki soatdan beri televizor ko‘rmoqda.</span></div>
                        <div class="example-item"><span class="number">6.</span><span class="english">We have been waiting for the bus for 20 minutes.</span><span class="arrow">→</span><span class="uzbek">Biz avtobusni 20 daqiqadan beri kutayapmiz.</span></div>
                        <div class="example-item"><span class="number">7.</span><span class="english">Have you been exercising regularly?</span><span class="arrow">→</span><span class="uzbek">Sen muntazam ravishda mashq qilayapsanmi?</span></div>
                        <div class="example-item"><span class="number">8.</span><span class="english">She has not been sleeping well lately.</span><span class="arrow">→</span><span class="uzbek">U so‘nggi paytlarda yaxshi uxlamayapti.</span></div>
                        <div class="example-item"><span class="number">9.</span><span class="english">They have not been studying hard.</span><span class="arrow">→</span><span class="uzbek">Ular jiddiy o‘qishmayapti.</span></div>
                        <div class="example-item"><span class="number">10.</span><span class="english">How long have you been learning English?</span><span class="arrow">→</span><span class="uzbek">Qancha vaqtdan beri ingliz tilini o‘rganayapsan?</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="past">

        <div class="thems">
            <div class="container1">
                <h1>Past Simple (O‘tgan oddiy zamon)</h1>
                <div class="formula-section">
                    <h2>Qoida:</h2>
                    <div class="formula-box">
                        O‘tgan vaqtda sodir bo‘lgan va tugallangan harakatlarni ifodalash uchun ishlatiladi.
                    </div>
                </div>
                <div class="formula-section">
                    <h2>Formula:</h2>
                    <div class="formula-box">
                        <p>(+) Subject + V2 + Object</p>
                        <p>(-) Subject + did not + V1 + Object</p>
                        <p>(?) Did + Subject + V1 + Object?</p>
                    </div>
                </div>
                <div class="examples-section">
                    <h2>Misollar:</h2>
                    <div class="examples-list">
                        <div class="example-item"><span class="number">1.</span><span class="english">I went to the park yesterday.</span><span class="arrow">→</span><span class="uzbek">Men kecha bog‘ga bordim.</span></div>
                        <div class="example-item"><span class="number">2.</span><span class="english">She visited her grandmother last week.</span><span class="arrow">→</span><span class="uzbek">U o‘tgan hafta buvisinikiga bordi.</span></div>
                        <div class="example-item"><span class="number">3.</span><span class="english">They played football yesterday.</span><span class="arrow">→</span><span class="uzbek">Ular kecha futbol o‘ynadi.</span></div>
                        <div class="example-item"><span class="number">4.</span><span class="english">We watched a movie last night.</span><span class="arrow">→</span><span class="uzbek">Kecha kechqurun film ko‘rdik.</span></div>
                        <div class="example-item"><span class="number">5.</span><span class="english">My father worked in a factory for 10 years.</span><span class="arrow">→</span><span class="uzbek">Otam 10 yil zavodda ishlagan.</span></div>
                        <div class="example-item"><span class="number">6.</span><span class="english">He didn’t call me.</span><span class="arrow">→</span><span class="uzbek">U menga qo‘ng‘iroq qilmadi.</span></div>
                        <div class="example-item"><span class="number">7.</span><span class="english">Did you see the new movie?</span><span class="arrow">→</span><span class="uzbek">Sen yangi filmni ko‘rdingmi?</span></div>
                        <div class="example-item"><span class="number">8.</span><span class="english">The train arrived at 8 PM.</span><span class="arrow">→</span><span class="uzbek">Poyezd soat 8 da keldi.</span></div>
                        <div class="example-item"><span class="number">9.</span><span class="english">She studied English in university.</span><span class="arrow">→</span><span class="uzbek">U universitetda ingliz tilini o‘rgangan.</span></div>
                        <div class="example-item"><span class="number">10.</span><span class="english">We didn’t go to school on Sunday.</span><span class="arrow">→</span><span class="uzbek">Biz yakshanba kuni maktabga bormadik.</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="thems">
            <div class="container1">
                <h1>Past Continuous (O‘tgan davomiy zamon)</h1>
                <div class="formula-section">
                    <h2>Qoida:</h2>
                    <div class="formula-box">
                        O‘tgan vaqtda ma’lum bir paytda davom etayotgan harakatlarni ifodalash uchun ishlatiladi.
                    </div>
                </div>
                <div class="formula-section">
                    <h2>Formula:</h2>
                    <div class="formula-box">
                        <p>(+) Subject + was/were + V-ing + Object</p>
                        <p>(-) Subject + was/were + not + V-ing + Object</p>
                        <p>(?) Was/Were + Subject + V-ing + Object?</p>
                    </div>
                </div>
                <div class="examples-section">
                    <h2>Misollar:</h2>
                    <div class="examples-list">
                        <div class="example-item"><span class="number">1.</span><span class="english">I was studying when you called me.</span><span class="arrow">→</span><span class="uzbek">Sen qo‘ng‘iroq qilganingda men o‘qiyotgandim.</span></div>
                        <div class="example-item"><span class="number">2.</span><span class="english">She was cooking dinner at 7 PM.</span><span class="arrow">→</span><span class="uzbek">U soat 7 da ovqat tayyorlayotgandi.</span></div>
                        <div class="example-item"><span class="number">3.</span><span class="english">They were playing football in the park.</span><span class="arrow">→</span><span class="uzbek">Ular bog‘da futbol o‘ynayotgan edi.</span></div>
                        <div class="example-item"><span class="number">4.</span><span class="english">It was raining all morning.</span><span class="arrow">→</span><span class="uzbek">Butun tong yomg‘ir yog‘ayotgan edi.</span></div>
                        <div class="example-item"><span class="number">5.</span><span class="english">My brother was sleeping at that time.</span><span class="arrow">→</span><span class="uzbek">Ukam o‘sha paytda uxlayotgan edi.</span></div>
                        <div class="example-item"><span class="number">6.</span><span class="english">Were you watching TV when I arrived?</span><span class="arrow">→</span><span class="uzbek">Men kelganimda sen televizor ko‘rayotganmiding?</span></div>
                        <div class="example-item"><span class="number">7.</span><span class="english">He wasn’t working yesterday evening.</span><span class="arrow">→</span><span class="uzbek">U kecha kechqurun ishlamayotgan edi.</span></div>
                        <div class="example-item"><span class="number">8.</span><span class="english">We were waiting for the bus when it started raining.</span><span class="arrow">→</span><span class="uzbek">Yomg‘ir yog‘a boshlaganida biz avtobusni kutayotgan edik.</span></div>
                        <div class="example-item"><span class="number">9.</span><span class="english">She was wearing a red dress.</span><span class="arrow">→</span><span class="uzbek">U qizil ko‘ylak kiyib olgan edi.</span></div>
                        <div class="example-item"><span class="number">10.</span><span class="english">The kids were not sleeping at midnight.</span><span class="arrow">→</span><span class="uzbek">Bolalar yarim tunda uxlamayotgan edi.</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="thems">
            <div class="container1">
                <h1>Past Perfect (O‘tgan tugallangan zamon)</h1>
                <div class="formula-section">
                    <h2>Qoida:</h2>
                    <div class="formula-box">
                        O‘tgan zamondagi bir harakat ikkinchisidan oldin sodir bo‘lganini ifodalash uchun ishlatiladi.
                    </div>
                </div>
                <div class="formula-section">
                    <h2>Formula:</h2>
                    <div class="formula-box">
                        <p>(+) Subject + had + V3 + Object</p>
                        <p>(-) Subject + had not + V3 + Object</p>
                        <p>(?) Had + Subject + V3 + Object?</p>
                    </div>
                </div>
                <div class="examples-section">
                    <h2>Misollar:</h2>
                    <div class="examples-list">
                        <div class="example-item"><span class="number">1.</span><span class="english">I had finished my work before 6 PM.</span><span class="arrow">→</span><span class="uzbek">Men ishlarimni soat 6 gacha tugatgandim.</span></div>
                        <div class="example-item"><span class="number">2.</span><span class="english">She had already left when I arrived.</span><span class="arrow">→</span><span class="uzbek">Men kelganimda u allaqachon ketgan edi.</span></div>
                        <div class="example-item"><span class="number">3.</span><span class="english">They had never seen snow before.</span><span class="arrow">→</span><span class="uzbek">Ular ilgari hech qachon qor ko‘rmagan edi.</span></div>
                        <div class="example-item"><span class="number">4.</span><span class="english">The train had left before we reached the station.</span><span class="arrow">→</span><span class="uzbek">Biz stansiyaga yetib borgunimizcha poyezd ketgan edi.</span></div>
                        <div class="example-item"><span class="number">5.</span><span class="english">My father had worked in that company for 20 years.</span><span class="arrow">→</span><span class="uzbek">Otam 20 yil shu kompaniyada ishlagan edi.</span></div>
                        <div class="example-item"><span class="number">6.</span><span class="english">Had you ever traveled abroad before 2010?</span><span class="arrow">→</span><span class="uzbek">2010-yilgacha sen hech qachon chet elga chiqqanmidin?</span></div>
                        <div class="example-item"><span class="number">7.</span><span class="english">We had just finished dinner when he arrived.</span><span class="arrow">→</span><span class="uzbek">U kelganida biz endigina ovqatni tugatgan edik.</span></div>
                        <div class="example-item"><span class="number">8.</span><span class="english">She hadn’t studied enough for the exam.</span><span class="arrow">→</span><span class="uzbek">U imtihonga yetarlicha tayyorlanmagan edi.</span></div>
                        <div class="example-item"><span class="number">9.</span><span class="english">The rain had stopped before we left.</span><span class="arrow">→</span><span class="uzbek">Biz ketishimizdan oldin yomg‘ir to‘xtagan edi.</span></div>
                        <div class="example-item"><span class="number">10.</span><span class="english">He had lost his keys, so he couldn’t enter the house.</span><span class="arrow">→</span><span class="uzbek">U kalitlarini yo‘qotib qo‘ygandi, shuning uchun uydan kira olmadi.</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="thems">
            <div class="container1">
                <h1>Past Perfect Continuous (O‘tgan tugallangan davomiy zamon)</h1>
                <div class="formula-section">
                    <h2>Qoida:</h2>
                    <div class="formula-box">
                        O‘tgan vaqtda biror harakat muayyan vaqt davomida sodir bo‘lganini ifodalash uchun ishlatiladi.
                    </div>
                </div>
                <div class="formula-section">
                    <h2>Formula:</h2>
                    <div class="formula-box">
                        <p>(+) Subject + had been + V-ing + Object</p>
                        <p>(-) Subject + had not been + V-ing + Object</p>
                        <p>(?) Had + Subject + been + V-ing + Object?</p>
                    </div>
                </div>
                <div class="examples-section">
                    <h2>Misollar:</h2>
                    <div class="examples-list">
                        <div class="example-item"><span class="number">1.</span><span class="english">I had been studying for two hours before you called.</span><span class="arrow">→</span><span class="uzbek">Sen qo‘ng‘iroq qilganingda men ikki soatdan beri o‘qiyotgan edim.</span></div>
                        <div class="example-item"><span class="number">2.</span><span class="english">She had been working at the company for five years before she quit.</span><span class="arrow">→</span><span class="uzbek">U ishdan ketishidan oldin besh yil shu kompaniyada ishlagan edi.</span></div>
                        <div class="example-item"><span class="number">3.</span><span class="english">They had been playing football for an hour before it started raining.</span><span class="arrow">→</span><span class="uzbek">Yomg‘ir yog‘ishidan oldin ular bir soat futbol o‘ynagan edi.</span></div>
                        <div class="example-item"><span class="number">4.</span><span class="english">He had been waiting for the bus for 30 minutes when it finally arrived.</span><span class="arrow">→</span><span class="uzbek">Avtobus kelishidan oldin u 30 daqiqa kutgan edi.</span></div>
                        <div class="example-item"><span class="number">5.</span><span class="english">My brother had been sleeping for 10 hours when I woke him up.</span><span class="arrow">→</span><span class="uzbek">Men uni uyg‘otganimda ukam 10 soatdan beri uxlayotgan edi.</span></div>
                        <div class="example-item"><span class="number">6.</span><span class="english">Had you been studying English before you moved to the UK?</span><span class="arrow">→</span><span class="uzbek">Sen Angliyaga ko‘chib o‘tishdan oldin ingliz tilini o‘rganayotganmidin?</span></div>
                        <div class="example-item"><span class="number">7.</span><span class="english">We had been working hard before the project was canceled.</span><span class="arrow">→</span><span class="uzbek">Loyiha bekor qilinishidan oldin biz qattiq ishlayotgan edik.</span></div>
                        <div class="example-item"><span class="number">8.</span><span class="english">It had been raining for hours before the sun appeared.</span><span class="arrow">→</span><span class="uzbek">Quyosh chiqishidan oldin soatlar davomida yomg‘ir yog‘ayotgan edi.</span></div>
                        <div class="example-item"><span class="number">9.</span><span class="english">She had not been feeling well before she went to the doctor.</span><span class="arrow">→</span><span class="uzbek">U shifokorga borishidan oldin o‘zini yaxshi his qilmayotgan edi.</span></div>
                        <div class="example-item"><span class="number">10.</span><span class="english">The children had been playing outside all day.</span><span class="arrow">→</span><span class="uzbek">Bolalar butun kun tashqarida o‘ynayotgan edi.</span></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="future">

        <div class="thems">
            <div class="container1">
                <h1>Future Simple (Kelasi oddiy zamon)</h1>
                <div class="formula-section">
                    <h2>Qoida:</h2>
                    <div class="formula-box">
                        Kelajakdagi umumiy reja, taxmin yoki va’dalarni ifodalash uchun ishlatiladi.
                    </div>
                </div>
                <div class="formula-section">
                    <h2>Formula:</h2>
                    <div class="formula-box">
                        <p>(+) Subject + will + V1 + Object</p>
                        <p>(-) Subject + will not (won’t) + V1 + Object</p>
                        <p>(?) Will + Subject + V1 + Object?</p>
                    </div>
                </div>
                <div class="examples-section">
                    <h2>Misollar:</h2>
                    <div class="examples-list">
                        <div class="example-item"><span class="number">1.</span><span class="english">I will call you tomorrow.</span><span class="arrow">→</span><span class="uzbek">Men ertaga senga qo‘ng‘iroq qilaman.</span></div>
                        <div class="example-item"><span class="number">2.</span><span class="english">She will visit Paris next year.</span><span class="arrow">→</span><span class="uzbek">U kelasi yili Parijga boradi.</span></div>
                        <div class="example-item"><span class="number">3.</span><span class="english">They will play football on Saturday.</span><span class="arrow">→</span><span class="uzbek">Ular shanba kuni futbol o‘ynashadi.</span></div>
                        <div class="example-item"><span class="number">4.</span><span class="english">We will watch a new movie tonight.</span><span class="arrow">→</span><span class="uzbek">Biz bugun kechasi yangi film ko‘ramiz.</span></div>
                        <div class="example-item"><span class="number">5.</span><span class="english">He will be 30 years old next year.</span><span class="arrow">→</span><span class="uzbek">U kelasi yili 30 yoshga to‘ladi.</span></div>
                        <div class="example-item"><span class="number">6.</span><span class="english">I won’t go to the party.</span><span class="arrow">→</span><span class="uzbek">Men kechaga bormayman.</span></div>
                        <div class="example-item"><span class="number">7.</span><span class="english">Will you help me?</span><span class="arrow">→</span><span class="uzbek">Sen menga yordam berasanmi?</span></div>
                        <div class="example-item"><span class="number">8.</span><span class="english">The train will arrive at 7 PM.</span><span class="arrow">→</span><span class="uzbek">Poyezd soat 7 da keladi.</span></div>
                        <div class="example-item"><span class="number">9.</span><span class="english">She won’t like this food.</span><span class="arrow">→</span><span class="uzbek">U bu ovqatni yoqtirmaydi.</span></div>
                        <div class="example-item"><span class="number">10.</span><span class="english">What will you do tomorrow?</span><span class="arrow">→</span><span class="uzbek">Sen ertaga nima qilasan?</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="thems">
            <div class="container1">
                <h1>Future Continuous (Kelasi davomiy zamon)</h1>
                <div class="formula-section">
                    <h2>Qoida:</h2>
                    <div class="formula-box">
                        Kelajakdagi aniq bir vaqt oralig‘ida davom etayotgan bo‘ladigan harakatlarni ifodalash uchun ishlatiladi.
                    </div>
                </div>
                <div class="formula-section">
                    <h2>Formula:</h2>
                    <div class="formula-box">
                        <p>(+) Subject + will be + V-ing + Object</p>
                        <p>(-) Subject + will not (won’t) be + V-ing + Object</p>
                        <p>(?) Will + Subject + be + V-ing + Object?</p>
                    </div>
                </div>
                <div class="examples-section">
                    <h2>Misollar:</h2>
                    <div class="examples-list">
                        <div class="example-item"><span class="number">1.</span><span class="english">I will be studying at this time tomorrow.</span><span class="arrow">→</span><span class="uzbek">Men ertaga shu paytda o‘qiyotgan bo‘laman.</span></div>
                        <div class="example-item"><span class="number">2.</span><span class="english">She will be cooking dinner at 7 PM.</span><span class="arrow">→</span><span class="uzbek">U soat 7 da ovqat tayyorlayotgan bo‘ladi.</span></div>
                        <div class="example-item"><span class="number">3.</span><span class="english">They will be playing football in the evening.</span><span class="arrow">→</span><span class="uzbek">Ular kechqurun futbol o‘ynayotgan bo‘ladi.</span></div>
                        <div class="example-item"><span class="number">4.</span><span class="english">We will be traveling to London next week.</span><span class="arrow">→</span><span class="uzbek">Biz kelasi hafta Londonga sayohat qilayotgan bo‘lamiz.</span></div>
                        <div class="example-item"><span class="number">5.</span><span class="english">It will be raining tomorrow morning.</span><span class="arrow">→</span><span class="uzbek">Ertaga tongda yomg‘ir yog‘ayotgan bo‘ladi.</span></div>
                        <div class="example-item"><span class="number">6.</span><span class="english">He won’t be sleeping at midnight.</span><span class="arrow">→</span><span class="uzbek">U yarim tunda uxlamayotgan bo‘ladi.</span></div>
                        <div class="example-item"><span class="number">7.</span><span class="english">Will you be watching TV at 9 PM?</span><span class="arrow">→</span><span class="uzbek">Sen soat 9 da televizor ko‘rayotgan bo‘lasanmi?</span></div>
                        <div class="example-item"><span class="number">8.</span><span class="english">My father will be working late tomorrow.</span><span class="arrow">→</span><span class="uzbek">Otam ertaga kechgacha ishlayotgan bo‘ladi.</span></div>
                        <div class="example-item"><span class="number">9.</span><span class="english">They won’t be studying during the holiday.</span><span class="arrow">→</span><span class="uzbek">Ular ta’tilda o‘qimayotgan bo‘ladi.</span></div>
                        <div class="example-item"><span class="number">10.</span><span class="english">What will you be doing at this time next year?</span><span class="arrow">→</span><span class="uzbek">Kelasi yil shu paytda nima qilayotgan bo‘lasan?</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="thems">
            <div class="container1">
                <h1>Future Perfect (Kelasi tugallangan zamon)</h1>
                <div class="formula-section">
                    <h2>Qoida:</h2>
                    <div class="formula-box">
                        Kelajakdagi ma’lum bir vaqtgacha tugallanadigan ishlarni ifodalash uchun ishlatiladi.
                    </div>
                </div>
                <div class="formula-section">
                    <h2>Formula:</h2>
                    <div class="formula-box">
                        <p>(+) Subject + will have + V3 + Object</p>
                        <p>(-) Subject + will not (won’t) have + V3 + Object</p>
                        <p>(?) Will + Subject + have + V3 + Object?</p>
                    </div>
                </div>
                <div class="examples-section">
                    <h2>Misollar:</h2>
                    <div class="examples-list">
                        <div class="example-item"><span class="number">1.</span><span class="english">I will have finished my homework by 8 PM.</span><span class="arrow">→</span><span class="uzbek">Men soat 8 gacha uy vazifamni tugatgan bo‘laman.</span></div>
                        <div class="example-item"><span class="number">2.</span><span class="english">She will have visited London three times by next year.</span><span class="arrow">→</span><span class="uzbek">U kelasi yilgacha Londonga uch marta borgan bo‘ladi.</span></div>
                        <div class="example-item"><span class="number">3.</span><span class="english">They will have completed the project before the deadline.</span><span class="arrow">→</span><span class="uzbek">Ular muddati tugashidan oldin loyihani tugatgan bo‘ladilar.</span></div>
                        <div class="example-item"><span class="number">4.</span><span class="english">We will have eaten dinner before you arrive.</span><span class="arrow">→</span><span class="uzbek">Sen kelishidan oldin biz kechki ovqatni yeb bo‘lgan bo‘lamiz.</span></div>
                        <div class="example-item"><span class="number">5.</span><span class="english">He will have left the office by the time you call.</span><span class="arrow">→</span><span class="uzbek">Sen qo‘ng‘iroq qilganingda u ofisdan chiqib ketgan bo‘ladi.</span></div>
                        <div class="example-item"><span class="number">6.</span><span class="english">I won’t have finished my book by tomorrow.</span><span class="arrow">→</span><span class="uzbek">Men ertagacha kitobimni tugatmagan bo‘laman.</span></div>
                        <div class="example-item"><span class="number">7.</span><span class="english">Will you have learned Spanish by next year?</span><span class="arrow">→</span><span class="uzbek">Kelasi yilgacha sen ispan tilini o‘rgangan bo‘lasanmi?</span></div>
                        <div class="example-item"><span class="number">8.</span><span class="english">By 2026, she will have worked here for 10 years.</span><span class="arrow">→</span><span class="uzbek">2026-yilgacha u bu yerda 10 yil ishlagan bo‘ladi.</span></div>
                        <div class="example-item"><span class="number">9.</span><span class="english">They won’t have built the house by winter.</span><span class="arrow">→</span><span class="uzbek">Ular qishgacha uyni qurmagan bo‘ladilar.</span></div>
                        <div class="example-item"><span class="number">10.</span><span class="english">Will he have arrived by lunchtime?</span><span class="arrow">→</span><span class="uzbek">U tushlik vaqtigacha kelgan bo‘ladimi?</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="thems">
            <div class="container1">
                <h1>Future Perfect Continuous (Kelasi tugallangan davomiy zamon)</h1>
                <div class="formula-section">
                    <h2>Qoida:</h2>
                    <div class="formula-box">
                        Kelajakdagi ma’lum bir vaqt oralig‘ida davom etib kelayotgan bo‘ladigan jarayonlarni ifodalash uchun ishlatiladi.
                    </div>
                </div>
                <div class="formula-section">
                    <h2>Formula:</h2>
                    <div class="formula-box">
                        <p>(+) Subject + will have been + V-ing + Object</p>
                        <p>(-) Subject + will not (won’t) have been + V-ing + Object</p>
                        <p>(?) Will + Subject + have been + V-ing + Object?</p>
                    </div>
                </div>
                <div class="examples-section">
                    <h2>Misollar:</h2>
                    <div class="examples-list">
                        <div class="example-item"><span class="number">1.</span><span class="english">I will have been studying for five hours by the time you arrive.</span><span class="arrow">→</span><span class="uzbek">Sen kelguningcha men besh soat o‘qiyotgan bo‘laman.</span></div>
                        <div class="example-item"><span class="number">2.</span><span class="english">She will have been working in this company for 10 years by next year.</span><span class="arrow">→</span><span class="uzbek">Kelasi yilgacha u bu kompaniyada 10 yil ishlayotgan bo‘ladi.</span></div>
                        <div class="example-item"><span class="number">3.</span><span class="english">They will have been playing football for two hours before the game ends.</span><span class="arrow">→</span><span class="uzbek">O‘yin tugaguncha ular ikki soat futbol o‘ynayotgan bo‘ladilar.</span></div>
                        <div class="example-item"><span class="number">4.</span><span class="english">We will have been traveling for a month by next week.</span><span class="arrow">→</span><span class="uzbek">Kelasi haftagacha biz bir oy sayohat qilayotgan bo‘lamiz.</span></div>
                        <div class="example-item"><span class="number">5.</span><span class="english">He will have been waiting for the train for 30 minutes when it arrives.</span><span class="arrow">→</span><span class="uzbek">Poyezd kelganida u 30 daqiqa kutayotgan bo‘ladi.</span></div>
                        <div class="example-item"><span class="number">6.</span><span class="english">I won’t have been working here for long when I leave.</span><span class="arrow">→</span><span class="uzbek">Men bu yerda uzoq ishlamagan bo‘laman ketganimda.</span></div>
                        <div class="example-item"><span class="number">7.</span><span class="english">Will you have been exercising for an hour by 10 AM?</span><span class="arrow">→</span><span class="uzbek">Soat 10 gacha bir soat mashq qilayotgan bo‘lasanmi?</span></div>
                        <div class="example-item"><span class="number">8.</span><span class="english">By the end of the year, she will have been studying English for five years.</span><span class="arrow">→</span><span class="uzbek">Yil oxirigacha u besh yil ingliz tilini o‘rganayotgan bo‘ladi.</span></div>
                        <div class="example-item"><span class="number">8.</span><span class="english">They won’t have been living here for very long before they move.</span><span class="arrow">→</span><span class="uzbek">Ular bu yerda ko‘chib ketishidan oldin uzoq yashamagan bo‘ladilar.</span></div>
                        <div class="example-item"><span class="number">8.</span><span class="english">Will he have been working on the project for three months by June?</span><span class="arrow">→</span><span class="uzbek">Iyun oyigacha u loyihada uch oy ishlayotgan bo‘ladimi?</span></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</main>

<?php
$this->view('companent/footer');
?>