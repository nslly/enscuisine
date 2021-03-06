
<?php 
    require_once("includes/classes.php");
    ob_start();
    $cuisine = new Doing();
    $reserve = $cuisine->set_reservation();
    require_once('nav.php'); 
    $id = $info['id'];
    $get_reserve = $cuisine->get_reservation($id);
    isset($get_reserve['reserve_id']) ? $cuisine->header('usersetting') : "";
?>



<?php if(isset($info)) : ?>
    <section class="reserve-sec">
        <div class="container">
            <div class="reserve_form">
                <h1 id="reservation-title">Reserve Your Table</h1>
                <form  method="post" id="reservation-form">
                    <div class="container-reserve">
                        <div class="reserve_input">
                            <label class="reserved-label">Date Of Your Reservatiaon:</label>
                            <input class="reserved-input" type="date" name="reserve_date" placeholder="00 / 00 / 00">

                            <input type="hidden" name="fullName" value="<?php echo $info['fullName'];?>">
                            <input type="hidden" name="email" value="<?php echo $info['email'];?>">
                            <input type="hidden" name="reserve_id" value="<?php echo $info['id'];?>">
                            
                        </div>
                        <div class="reserve_input">
                        <label class="reserved-label">Time Of Your Reservatiaon:</label>
                            <select name="reserve_time" id="time_res" value="<?php echo $reserve['reserve_time'] ?? "" ?>">
                                <option value="">------</option>
                                <option value="09:00 AM">09:00 AM</option>
                                <option value="10:30 AM">10:30 AM</option>
                                <option value="12:00 PM">12:00 PM</option>
                                <option value="03:00 PM">03:00 PM</option>
                                <option value="05:30 PM">05:30 PM</option>
                                <option value="07:00 PM">07:00 PM</option>
                            </select>
                        </div>
                        <div class="reserve_input">
                            <fieldset name="table">
                                <legend>Table Reservation</legend>
                                <input type="radio" id="classic" name="table" value="CLASSIC">
                                <label for="classic">Classic</label>
                                <input type="radio" id="standard" name="table" value="STANDARD">
                                <label for="standard">Standard</label>
                                <input type="radio" id="vip" name="table" value="V.I.P">
                                <label for="vip">V.I.P</label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="reserved-btn">
                        <button type="submit" class="sbmit" name="reserve_sbmit">BOOK NOW</button>
                    </div>
                    
                </form>
            </div>
        </div>  
    </section>
<?php  else : ?>
<?php  $cuisine->header('log_in');

ob_end_flush();  ?>
    <!-- <div class="container">
        <div class="reserve-log">
            <div class="res-click-con">
                <h2>You need to Log In first before you to reserve</h2>
                <a href="log_in.php" id="res_click">Click Here</a>
                
            </div>
        </div>
    </div> -->
<?php endif ?>

<?php
    require_once("footer.php");
?>