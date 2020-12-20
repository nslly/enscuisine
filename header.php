<?php require_once("includes/classes.php"); 
    
?>
<?php 
    $cuisine = new Doing();
    $info = $cuisine->get_info();
    $getData = $cuisine->getting_data();
    $cart_foods = $cuisine->get_foods_cart();
    $delete = $cuisine->delete_tr_data();
    $order = $cuisine->set_order();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <style>
        main {
            height: 100%;
        }

        main .hero {
        background:url('images/headerbg.jpg');
        position:relative;
        height:100vh;
        width:100%;
        background-repeat: no-repeat;
        background-size:cover;
        background-position:center;
        z-index: 0;
        align-items:center;
        text-align:center;
        
}
    .hero::after{
        content:'';
        position: absolute;
        left:0px;
        top:0px;
        height:inherit;
        width:100%;
        z-index: -1;
    
}

    section.form-login {
        background: url('images/loginbg.jpg');
        height:100vh;
        width:100%;
        background-repeat: no-repeat;
        background-size:cover;
        background-position:center;
        z-index: 0;
        align-items:center;
        text-align:center;
        position:relative;
            
}
    .form-login::after {
        content:'';
        position: absolute;
        left:0px;
        top:0px;
        height:inherit;
        width:100%;
        background-image: linear-gradient(140deg,rgba(255, 252, 252, 0.425),rgba(126, 126, 126, 0.527));
        z-index: -1;
}

    .user_setting {
        background: url('images/loginbg.jpg');
        height:100vh;
        width:100%;
        background-repeat: no-repeat;
        background-size:cover;
        background-position:center;
        z-index: 0;
        align-items:center;
        text-align:center;
        position:relative;
            
}
    .user_setting::after {
        content:'';
        position: absolute;
        left:0px;
        top:0px;
        height:inherit;
        width:100%;
        background-image: linear-gradient(140deg,rgba(255, 252, 252, 0.425),rgba(126, 126, 126, 0.527));
        z-index: -1;
    }

/*     FOODS SECTION     */

section.foods {
        background: url('images/foods_img.jpg');
        width:100%;
        background-repeat: no-repeat;
        background-size:cover;
        background-position:center;
        z-index: 0;
        position:relative;
}

.foods::after {
        content:'';
        position: absolute;
        left:0px;
        top:0px;
        height:inherit;
        width:100%;
        z-index: -1;
        background-image: linear-gradient(140deg,rgba(100, 100, 100, 0.425),rgba(92, 92, 92, 0.527));
}
    /* RESERVATION SECTION */
    section.reservation {
        background: url('images/reservation.jpg');
        width:100%;
        background-repeat: no-repeat;
        background-size:cover;
        background-position:center;
        z-index: 0;
        text-align:center;
        position:relative;
            
}

    section.reviews {
        background: #a9927d;
        width:100%;
        z-index: 0;
        text-align:center;
}

    section.maps {
        background: #a9927d;
        width:100%;
        text-align:center;
        position:relative;
            
}

section.reserve-sec {
        background: url("images/res.jpg");
        height:100vh;
        width:100%;
        background-repeat: no-repeat;
        background-size:cover;
        background-position:center;
        z-index: 0;
        text-align:center;
        position:relative;
            
}
    .reserve-sec::after {
        content:'';
        position: absolute;
        left:0px;
        top:0px;
        height:inherit;
        width:100%;
        background-image: linear-gradient(140deg,rgba(100, 100, 100, 0.425),rgba(92, 92, 92, 0.527));
        z-index: -1;
}

/* *********************   CART SECTION     ****************************          */

section.cart {
        background: url("images/cart.jpg");
        width:100%;
        background-repeat: no-repeat;
        background-size:cover;
        background-position:center;
        z-index: 0;
        display:flex;
        align-items:center;
        text-align:center;
        position:relative;
        color: #0a0908
            
}
    .cart::after {
        content:'';
        position: absolute;
        left:0px;
        top:0px;
        height:inherit;
        width:100%;
        background-image: linear-gradient(140deg,rgba(100, 100, 100, 0.425),rgba(92, 92, 92, 0.527));
        z-index: -1;
}






/***************************  Footer Section  ************************************ */ 

section.footer {
        background: url('images/footer.jpg');
        width:100%;
        background-repeat: no-repeat;
        background-size:cover;
        background-position:center;
        z-index: 0;
        text-align:center;
        position:relative;
            
}

    
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css" integrity="sha384-OLYO0LymqQ+uHXELyx93kblK5YIS3B2ZfLGBmsJaUyor7CpMTBsahDHByqSuWW+q" crossorigin="anonymous">
    <title>EnsCuisine</title>
</head>
<body>

