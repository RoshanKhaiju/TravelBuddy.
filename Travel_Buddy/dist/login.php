
<?php
require "../includes/header2.php";
?>

    <!-- login form section start -->
    <section class="login" id="login">
        <div class="max-width">
            <h2 class="title">Login</h2>
            <div class="login-content">
                    <form action="../config/login.inc.php" method="POST">
                        <div class="field">
                            <label for="email">Email</label>
                            <br>
                            <input type="text" name="userEmail" id=""placeholder="Enter username or email..." required>
                        </div>
                        <div class="field">
                            <label for="password">Password</label>
                            <br>
                            <input type="password" name="userPassword" id=""placeholder="Enter password..." required>
                        </div>
                        <div class="button">
                            <button type="submit" name="login-submit">Login</button>
                        </div>
                        
                    </form>
                    <div class="add">New to TravelBuddy? <a href="signUp.php">Sign Up</a> with TravelBuddy.</div>
            </div>
        </div>
    </section>


<?php
require "../includes/footer.php";
?>