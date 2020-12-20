<?php 
    require_once("nav.php");

    $id = $info['id'] ?? "";
    $user_reserved = $cuisine->get_reservation($id);
?>


<section class="user_setting">
        <div class="container">
            <div class="user_container">
                <div class="top">
                    <div class="setting_info">
                        <i class="far fa-user"></i>
                        <h1><?php echo $info['fullName'] ?? ""; ?></h1>
                    </div>
                    <div class="log_out">
                        <button id="log_out_btn">Log Out</button>
                    </div>
                </div>
                <div class="main-setting">
                    <div class="main-side">
                        <h1>Reservation</h1>
                        <table id="table_reserve">
                            <tr>
                                <th>Full Name</th>
                                <th>Date of Reservation</th>
                                <th>Time of Reservation</th>
                                <th>Reserve Table</th>
                            </tr>
                            <tr>
                                <td><?php echo $user_reserved['full_name'] ?? ""?></td>
                                <td><?php echo $user_reserved['reserve_date'] ?? ""?></td>
                                <td><?php echo $user_reserved['reserve_time'] ?? "" ?></td>
                                <td><?php echo $user_reserved['reserve_table'] ?? "" ?></td>
                            </tr>
                        </table>
                        <div class="confirm_update">
                            <a href="resupdate.php" id="resUpdate">EDIT</a>
                            <button id="reserve_confirm">CONFIRM</button>
                        </div>   
                    </div>
                </div>
            </div>
        </div>  
    </section>
<script>

// for UserSetting Log Out

let log_out_btn = document.getElementById('log_out_btn');
let reserve_confirm = document.querySelector('#reserve_confirm');

log_out_btn.addEventListener('click', () => {
    document.location = 'logout.php';
});

reserve_confirm.addEventListener('click', () => {
    alert('Your Reservation is Confirm. Thank You');
});


</script>
<?php
    require_once("footer.php");
?>