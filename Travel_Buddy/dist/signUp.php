
<?php
require "../includes/header2.php";
?>

    <!-- sign up form section start -->
    <section class="signup" id="signup">
        <div class="max-width">
            <h2 class="title">Sign Up</h2>
            <div class="signup-content">
                    <form action="../config/signup.inc.php" method="POST">
                        <div class="field">
                            <label for="username">Username</label>
                            <br>
                            <input type="text" name="userName" id=""placeholder="Enter username..." required>
                        </div>
                        <div class="field">
                            <label for="email">Email</label>
                            <br>
                            <input type="email" name="userEmail" id=""placeholder="Enter email..." required>
                        </div>
                        <div class="field">
                            <label for="password">Password</label>
                            <br>
                            <input type="password" name="userPassword" id=""placeholder="Enter password..." required>
                        </div>
                        <div class="field">
                            <label for="passwordConfirmation">Password confirmation</label>
                            <br>
                            <input type="password" name="userPasswordConfirm" id=""placeholder="Re-enter password..." required>
                        </div>
                        <div class="button">
                            <button type="submit" name="signup-submit">Sign Up</button>
                        </div>
                        
                    </form>
                    <div class="add">Already have an account? <a href="login.php">Login</a> in TravelBuddy.</div>
            </div>
        </div>
    </section>


<?php
require "../includes/footer.php";
?>