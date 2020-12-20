<?php require_once('nav.php');  
?>

<section class="cart">
    <div class="container">
        <div class="container-cart">
            <div class="cart-title">
                <h2>Cart</h2>
            </div>
            <div class="table-cart">
                <table class="table-header">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody id="cart-body">
                    
                        <?php 
                        if(isset($_SESSION['foods'])) {
                            foreach($_SESSION['foods'] as $key => $value) { ?>
                                <tr>
                                    <td id="img-foods-td"><img src="images/foods/<?php echo $value['img_foods'];?>"></td>
                                    <td><?php echo $value['name_foods'];?></td>
                                    <td><?php echo $value['price'];?> Pesos</td>
                                    <td><?php echo $value['add_subtract'];?></td>
                                    <td>Available</td>
                                    <form method="POST">
                                        <input type="hidden" name="name_food" value="<?php echo $value['name_foods']; ?>">
                                    <td id="rmv-foods"><button name="delete_tr" class="btn_delete"><i class="fas fa-trash-alt"></i></button></td>
                                    </form>
                                </tr>
                                
                        <?php }
                        } ?>
                        
                    </tbody>
                </table>
                <div class="table-total">
                    <h4>Total Amount: </h4>
                    <form method="POST">
                        <?php 
                            if(isset($_SESSION['foods'])) {
                                $total = 0;
                                foreach($_SESSION['foods'] as $key => $value) {
                                    $total += $value['price'] * $value['add_subtract']; 
                                ?>
                                <input type="hidden" name="name_foods[]" value="<?php echo $value['name_foods']; ?>">
                                <?php } ?>
                                <input type="hidden" name="name" value="<?php echo $info['fullName']; ?>">
                        <h5><?php echo $total; ?> Pesos</h5>
                    <?php
                        if($total == 0) { ?>
                            <div class="button-foods-smt">
                            </div>
                    <?php  }
                        else {
                    ?>
                    <div class="button-foods-smt">
                            <input type="hidden" name="total" value="<?php echo $total; ?>">
                            <button name="btn_foods_smt">Submit</button>
                    </form>        
                        <?php }
                        } // End of if statement ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>




<?php
    require_once("footer.php");
?>