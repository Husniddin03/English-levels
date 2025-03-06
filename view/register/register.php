<?php
$this->view('companent/header');
?>

<!-- Sign In Page -->
<div id="signinPage" class="page active">
    <div class="auth-container">
        <div class="auth-form-container">
            <input type="checkbox" id="formToggle" class="form-toggle">

            <!-- Sign Up Form -->
            <div class="signup-form">
                <h2>Sign Up</h2>
                <form action="/log/signup" method="post">
                    <div class="form-group">
                        <input name="name" type="text" placeholder="Full name" required>
                    </div>
                    <div class="form-group">
                        <input name="username" type="text" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input name="email" type="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="submit-btn">Sign Up</button>
                </form>
                <div class="form-footer">
                    <p>
                        Already have an account?
                        <label for="formToggle" class="toggle-link">Log In</label>
                    </p>
                </div>
            </div>

            <!-- Login Form -->
            <div class="login-form">
                <h2>Log In</h2>
                <form action="/log/login" method="post">
                    <div class="form-group">
                        <input name="email" type="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="submit-btn">Log In</button>
                </form>
                <div class="form-footer">
                    <p>
                        Don't have an account?
                        <label for="formToggle" class="toggle-link">Sign Up</label>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$this->view('companent/footer');
?>