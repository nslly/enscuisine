<?php require_once('header.php'); ?>

<header class="header">
    <div class="container">
        <nav class="nav">
            <div class="logo">
                <a href="index.php"><img src="images/logo3.png" alt="logo"></a>
            </div>
            <ul class="nav-lists">

                <li class="nav-item">
                    <a href="index.php" class="nav-link"> Home</a>
                </li>            
                <li class="nav-item">
                    <a href="foods.php" class="nav-link">Foods</a>
                </li>
                <li class="nav-item">
                    <a href="#reservation" class="nav-link">Reservation</a>
                </li>       
                <li class="nav-item">
                    <a href="#maps" class="nav-link">Maps</a>
                </li>                  
            </ul>

            <div class="log-in">
                <span class="person">
                    <?php if(isset($info)) : ?>
                        <a href="add_cart.php"><i class="fas fa-shopping-cart">
                            <span>
                                <?php 
                                    if(isset($_SESSION['foods'])) {
                                    $total = count($_SESSION['foods']); 
                                    echo $total;
                                    } else {
                                        echo 0;
                                    }
                                ?>
                            </span>
                        </i></a>
                        <a href="usersetting.php"><i class="fas fa-user-circle" id="person"></i></a>
                    <?php else : ?>
                        <a href="log_in.php"><i class="fas fa-shopping-cart"></i></a>
                        <a href="log_in.php"><i class="fas fa-user-circle" id="person"></i></a>
                    <?php endif ?>
                </span>
            </div>
        </nav>
        <span class="hamburger" onclick="show()"><i class="fas fa-bars"></i></span>
    </div>
</header>

<script>
    function show() {
        let header = document.querySelector('.header');
        header.classList.toggle('active_nav');
    }
    // let hamburger = document.querySelector('.hamburger i');
    
    // hamburger.addEventListener('click', () => {
    //         header.classList.add('active_nav');

    //         remove_header();
    // });

    // function remove_header() {
    //         hamburger.addEventListener('click', () => {
    //         header.classList.remove('active_nav');
    //         })
    // }
</script>
