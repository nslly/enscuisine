<?php require_once('nav.php');  
?>
<main>
    <section class="hero">
        
            <div class="text-content">
                <div class="hero-main-text">
                    <h1>Good Food</h1>
                    <div class="line-1"></div>
                    <h5>is</h5>
                    <div class="line-2"></div>
                    <h4>Good Mood</h4>
                </div>
            </div>

    </section>

    <div class="chef-container">
            <div class="sub-container-chef">
                <div class="chef-picture">
                    <img src="images/chef_img.jpg" alt="chef picture">
                </div>
                <div class="chef-text">
                    <h1>The best cooks are the ones who really have <span>passion for cooking</span></h1>
                    <h4>~ Naruto Uzumaki ~</h4>
                    <h6>Head Chef</h6>
                </div>
            </div>
    </div>

    


    <div class="dishes">
            <h1 class="sec-head-title">Restaurant <span>Tables</span></h1>
            <div class="sub-container-dishes">

                <div class="dishes-container dish-1">
                    <img src="images/classic.jpg" alt="classic tables">
                    <div class="dish-context">
                        <h2>Classic</h2>
                        <p>"You don't need a silver fork to eat good food."</p>
                    </div>
                </div>

                <div class="dishes-container dish-2">
                    <img src="images/standard.jpg" alt="Standard tables">
                    <div class="dish-context">
                        <h2>Standard</h2>
                        <p>One cannot think well, love well, sleep well, if one has not dined well.</p>
                    </div>
                </div>

                <div class="dishes-container dish-3">
                    <img src="images/vip.jpg" alt="VIP tables">
                    <div class="dish-context">
                        <h2>VIP</h2>
                        <p>Food tastes better when you eat it with your family.</p>
                    </div>
                </div>

            </div>
        
    </div>



    <section class="reviews" id="reviews">
        <div class="container">
            <h1 class="reviews-text sec-head-title">Reviews</h1>
            <div class="reviews-container">
                <div class="reviews-img-text">
                    <div class="reviews-img-container">
                        <img src="images/reviews1.jpg" alt="reviews-img-profile">
                    </div>
                    <div class="reviews-comment">
                        <p class="comment-rev">
                        <span><i class="fas fa-quote-left"></i></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum cupiditate aut consequatur fugiat sunt molestiae autem commodi architecto, doloribus esse!<span><i class="fas fa-quote-right"></i></span>
                        </p>
                    </div>
                </div>
                <div class="reviews-img-text">
                    <div class="reviews-img-container">
                        <img src="images/reviews2.jpg" alt="reviews-img-profile">
                    </div>
                    <div class="reviews-comment">
                        <p class="comment-rev">
                        <span><i class="fas fa-quote-left"></i></span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias doloremque nemo, eveniet veritatis sunt perspiciatis vel quidem nisi unde qui nulla voluptatum tempora facilis eaque!<span><i class="fas fa-quote-right"></i></span>
                        </p>
                    </div>
                </div>
                <div class="reviews-img-text">
                    <div class="reviews-img-container">
                        <img src="images/reviews3.jpg" alt="reviews-img-profile">
                    </div>
                    <div class="reviews-comment">
                        <p class="comment-rev">
                        <span><i class="fas fa-quote-left"></i></span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis atque ducimus illum rem sit, eveniet doloribus necessitatibus eius nihil nam eum quo veniam, ut dolore ipsa. Ducimus in distinctio sint.<span><i class="fas fa-quote-right"></i></span>
                        </p>
                    </div>
                </div>
                <div class="reviews-img-text">
                    <div class="reviews-img-container">
                        <img src="images/reviews4.jpg" alt="reviews-img-profile">
                    </div>
                    <div class="reviews-comment">
                        <p class="comment-rev">
                        <span><i class="fas fa-quote-left"></i></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum cupiditate aut consequatur fugiat sunt molestiae autem commodi architecto, doloribus esse!<span><i class="fas fa-quote-right"></i></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="reservation" id="reservation">
        <div class="container">
            <div class="reserve-container">
                <h1 class="reserve-main-text sec-head-title">
                    For <span>Reservation</span> To <span class="resto">Our Restaurant</span>
                </h1>
                    <h2>Monday - Friday</h2>
                    <h4>8:00 am to 8:00 pm</h4>
                
                <div class="reserve-button">
                    <a href="reservation.php" class="reserve-click">
                        RESERVATION
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="maps" id="maps">

            <div class="maps-container">
                <h1 class="sec-head-title">Maps</h1>
                <h5>#104 Sandatahan San Carlos, Mariveles,Bataan</h5>
                <div class="maps-iframe">
                    <iframe
                    width="100%"
                    height="500"
                    frameborder="1"
                    src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyCr5ta1PIkFswTwijqB5d3d_mpk5YRXS0c
                    &zoom=15
                    &origin=14.449662,120.520507
                    &destination=14.436072,120.487221" allowfullscreen>
                    </iframe>
                </div>
            </div>
    </section>

    
    <section class="foods">
        <div class="container">
            <h1 id="h1_foods"><span>Sales</span> For Today</h1>
            <h6>~~ The best food you'll ever taste ~~</h6>
            <div id="sale_food">
                <div class="table_food">
                    <?php foreach ($getData as $data) {
                        if($data['sales']) {  ?>
                            <form action="foods.php" method="post">
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
        </div>  <!-- Container end-->
    </section>

    
</main>

<script type="text/javascript" src="js/app.js"></script>
<?php require_once 'footer.php'; ?>