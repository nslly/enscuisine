
<?php 
    
    require_once("includes/classes.php");
    $cuisine = new Doing();
    $register = $cuisine->register();
    require_once('nav.php'); 
?>



<section class="form-login">
        <div class="container">
            <div class="form_container">
                <form  method="post" id="login-form">
                    <div class="reg_input">
                        <label for="fname">First Name:</label>
                        <input type="text" name="fname" placeholder="Enter Your first name">
                    </div>
                    <div class="reg_input">
                        <label for="lname">Last Name:</label>
                        <input type="text" name="lname" placeholder="Enter Your last name">
                    </div>
                    <div class="reg_input">
                        <label for="regemail">Email:</label>
                        <input type="email" name="regemail" placeholder="Enter Your Email">
                    </div>
                    <div class="reg_input">
                        <label for="regpassword">Password:</label>
                        <input type="password" name="regpassword" placeholder="Enter Your Password">
                    </div>
                    <div class="reg_input">
                        <label for="regrepassword">Retype Your Password:</label>
                        <input type="password" name="regrepassword" placeholder="Confirm Password">
                    </div>
                    <div class="submit-btn">
                        <button type="submit" class="sbmitreg" name="sbmitreg">Submit</button>
                    </div>
                </form>
            </div>
        </div>  
    </section>



<?php require_once("footer.php"); ?>