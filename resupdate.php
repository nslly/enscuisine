
<?php 
    require_once("includes/classes.php");
    ob_start();
    $cuisine = new Doing();
    require_once('nav.php'); 
    $id = $info['id'];
    $cuisine->edit_reservation($id);
    ob_end_flush();
?>

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
                            <select name="reserve_time" id="time_res">
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
                        <button type="submit" class="sbmit" name="reserve_update">EDIT</button>
                    </div>
                    
                </form>
            </div>
        </div>  
    </section>

<?php
    require_once("footer.php");
?>