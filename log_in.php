

<?php
    require_once("includes/classes.php");
    $cuisine = new Doing();
    $register = $cuisine->log_in();
    
    if(isset($register)){
        $cuisine->header("index");
    }
?>


<?php require_once("nav.php"); ?>


    <section class="form-login">
        <div class="container">
            
            <div class="form_container">
                <form  method="post" id="login-form">
                    <div class="login_input">
                        <label for="email">Email:</label>
                        <input type="text" name="email" placeholder="Enter Your Email" value="">
                    </div>
                    <div class="login_input">
                        <label for="password">Password:</label>
                        <input type="password" name="password" placeholder="Enter Your Password">
                    </div>
                    <div class="submit-btn">
                        <button type="submit" class="sbmit" name="sbmit">Submit</button>
                        <a href="registration.php">Register</a>
                    </div>

                </form>
            </div>
        </div>  
    </section>



<?php
    require_once("footer.php");
?>