<?php
$this->view('companent/header');
?>

<div class="profil">
    <div class="profile-container">
        <div class="profile-header">
            <div class="profile-avatar">
                <input name="photo" type="file" id="fileInput" accept="image/*" style="display: none;">
                <img id="avatar" src="<?= $this->user('photo') ?>" alt="User Avatar">
                <div class="edit-icon" onclick="document.getElementById('fileInput').click();">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                    </svg>
                </div>
            </div>
            <div class="profile-name">
                <h1><?= $this->user('name') ?></h1>
                <p><?= $this->user('email') ?></p>
            </div>
        </div>

        <div class="profile-content">
            <div class="profile-section">
                <h2>Basic Information</h2>
                <p class="section-description">Some details may be visible to other users</p>

                <div class="info-row">
                    <div class="info-label">Full name</div>
                    <div id="oldname" class="info-value"><?= $this->user('name') ?></div>

                    <form id="name" class="profil-form" action="/log/update" method="post">
                        <input name="name" class="input-value" value="<?= $this->user('name') ?>">
                        <span onclick='cancelProfile("name")' class="verified-badge">❌</span>
                        <button id="iconnameok" type="submit" class="verified-badge">✅</button>
                    </form>

                    <div id="iconname" onclick='editProfile("name")' class="edit-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                        </svg>
                    </div>
                </div>

                <div class="info-row">
                    <div class="info-label">Email</div>
                    <div id="oldemail" class="info-value"><?= $this->user('email') ?></div>
                </div>
            </div>

            <div class="profile-section">
                <h2>Password</h2>
                <p class="section-description">A secure password helps protect your account</p>

                <div class="info-row">
                    <div id="oldpassword" class="password-dots">••••••••••</div>
                    <form id="password" class="profil-form" action="/log/update" method="post">
                        <input name="password" class="input-value" placeholder="••••••••••">
                        <span onclick='cancelProfile("password")' class="verified-badge">❌</span>
                        <button type="submit" class="verified-badge">✅</button>
                    </form>

                    <div id="iconpassword" onclick='editProfile("password")' class="edit-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="profile-section">
                <h2>Overview</h2>

                <div class="stats-container">
                    <div class="stat-box">
                        <div class="stat-icon completed">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                            </svg>
                            Completed
                        </div>
                        <div class="stat-value">32 deals</div>
                        <div class="stat-details">
                            <div class="buy-stat">Buy <button class="positive">7</button></div>
                            <div class="sell-stat">Sell <button class="negative">14</button></div>
                        </div>
                    </div>

                    <div class="stat-box">
                        <div class="stat-icon reviews">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z" />
                            </svg>
                            Positive reviews
                        </div>
                        <div class="stat-value">95% (66)</div>
                        <div class="stat-details">
                            <div class="positive-stat">Positive <button class="positive">6</button></div>
                            <div class="negative-stat">Negative <button class="negative">1</button></div>
                        </div>
                    </div>

                    <div class="stat-box">
                        <div class="stat-icon rating">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            Rating
                        </div>
                        <div class="stat-value">4.96</div>
                        <div class="stat-details">
                            <div class="completion-stat">95.5% completed</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$this->view('companent/footer');
?>