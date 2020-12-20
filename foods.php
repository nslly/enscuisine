<?php require_once('nav.php');  
?>

    <section class="foods">
        <div class="container">
            <h1 id="foods_serve"><span>Foods</span> To Serve</h1>

            <div id="table_all">

                <div id="sales_food">
                    <h1 class="foods_table_title">
                        Sales <span>Dish</span>
                    </h1>
                    <div class="table_food">
                        <?php foreach ($getData as $data) {
                            if($data['sales']) {  ?>
                                <form  method="post">
                                <?php
                                    $price = ((str_replace('%',"",$data['sales']) / 100) * $data['price']); // percentage to decimal value
                                    $total = round($data['price'] - $price);
                                    $cuisine->display_foods($data['name_img'], $data['name'],$total, $data['name'], $total, $data['name_img'],$data['sales']);
                                ?>
                                </form>
                            <?php
                            }    
                        } ?>
                    </div>
                </div>

                <div id="chicken_food">
                    <h1 class="foods_table_title">
                        Chicken <span>Dish</span>
                    </h1>
                    <div class="table_food">
                        <?php foreach ($getData as $data) {
                            if($data['category'] == "chicken") {
                                if(!$data['sales']) { ?>
                                    <form method="post">
                                    <?php
                                        $cuisine->display_foods($data['name_img'], $data['name'],$data['price'], $data['name'], $data['price'], $data['name_img'],$data['sales']);
                                    ?>
                                    </form>
                                <?php
                                }    
                            }
                        } ?>
                    </div>
                </div>

                <div id="pork_food">
                    <h1 class="foods_table_title">
                        Pork <span>Dish</span>
                    </h1>
                    <div class="table_food">
                        <?php foreach ($getData as $data) {
                            if($data['category'] == "pork") {
                                if(!$data['sales']) { ?>
                                    <form method="post">
                                    <?php
                                        $cuisine->display_foods($data['name_img'], $data['name'],$data['price'], $data['name'], $data['price'], $data['name_img'],$data['sales']);
                                    ?>
                                    </form>
                                <?php
                                }    
                            }
                        } ?>
                    </div>
                </div>

                <div id="beef_food">
                    <h1 class="foods_table_title">
                        Beef <span>Dish</span>
                    </h1>
                    <div class="table_food">
                        <?php foreach ($getData as $data) {
                            if($data['category'] == "beef") {
                                if(!$data['sales']) { ?>
                                    <form  method="post">
                                    <?php
                                        $cuisine->display_foods($data['name_img'], $data['name'],$data['price'], $data['name'], $data['price'], $data['name_img'],$data['sales']);
                                    ?>
                                    </form>
                                <?php
                                }    
                            }
                        } ?>
                    </div>
                </div>

                    <div id="seafood_food">
                        <h1 class="foods_table_title">
                            Sea Food <span>Dish
   </span>                     </h1>
                        <div class="table_food">
                            <?php foreach ($getData as $data) {
                                if($data['category'] == "seafood") {
                                    if(!$data['sales']) { ?>
                                        <form  method="post">
                                        <?php
                                            $cuisine->display_foods($data['name_img'], $data['name'],$data['price'], $data['name'], $data['price'], $data['name_img'],$data['sales']);
                                        ?>
                                        </form>
                                        
                                    <?php
                                    }    
                                }
                            } ?>
                        </div>
                    </div>

                    <div id="vegetable_food">
                        <h1 class="foods_table_title">
                            Vegetables <span>Dish
   </span>                     </h1>
                        <div class="table_food">
                            <?php foreach ($getData as $data) {
                                if($data['category'] == "vegetables") {
                                    if(!$data['sales']) { ?>
                                        <form  method="post">
                                        <?php
                                            $cuisine->display_foods($data['name_img'], $data['name'],$data['price'], $data['name'], $data['price'], $data['name_img'],$data['sales']);
                                        ?>
                                        </form>
                                    <?php
                                    }    
                                }
                            } ?>
                        </div>
                    </div>

            </div> <!-- end of all table -->
        </div>
    </section>

<?php require_once 'footer.php'; ?>