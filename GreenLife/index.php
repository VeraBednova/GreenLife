<?php

include "databases.php";

$result = mysqli_query($link,"SELECT * FROM `new`");

while ($products = mysqli_fetch_assoc($result)) 
{
  $new[] = $products;
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Green LIFE</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
  <style>
   .fas1 
   {   
   background-color:#bff0c5;
   padding: 10px 10px 10px 10px;  
   text-decoration: none;
   display:block;
   width: 150px;
    margin-left: auto;
    margin-right: auto;   
  
   }
   .fas1:hover
   {   
   background:#b0d8b5;  
   }
   .fas1 a
   {
    padding-right:-111%;
 
   text-decoration: none;
   color:black;  
   }
   .topbutton {
    width:100px;
    z-index: 100;
    border:2px solid #ccc;
    background:#f7f7f7;
    text-align:center;
    padding:10px;
    position:fixed;
    bottom:50px;
    right:50px;
    cursor:pointer;
    color:#333;
    font-family:verdana;
    font-size:12px;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -khtml-border-radius: 5px;
}
</style>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="margin: 1px;margin-bottom: 2px;">
        <div class="container"><a class="navbar-brand logo" href="index.php"><strong>GREEN LIFE</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="margin-right: -0;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Главная</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="catalog.php">Каталог</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="cart.php">Корзина
                        
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login.php">Вход</a></li>
                </ul>
        </div>
        </div>
    </nav>
            <!-------------------КНОПКА НАВЕРХ   ----------------------->
    <div class="but"><a href="#" title="Вернуться к началу" class="topbutton" style="text-decoration: none;">Наверх</a></div>

    <main class="page landing-page" style="background-image: url(assets/img/scenery/image1.jpg);margin-top: 11px;">
        <section class="clean-block clean-info dark" style="background-color: #f1f0ee;background-image: 
        url(assets/img/12.png);font-size: 
        19px;background-position: top;padding-bottom: 267px;background-size: auto;background-repeat: no-repeat;">
            <div class="container">
                <div class="block-heading" style="height: 0;"></div>
                <div class="row align-items-center" style="margin-right: -18px;margin-bottom: -47px;">
                    <div class="col" style="margin-top: 100px;">
                        <h3 class="text-left" style="margin-top: 50px; margin-bottom: 30px;"><strong>Экологичные вещи 
                            ручной работы</strong></h3>
                        <p>Наша цель - сделать жизнь в стиле Zero Waste доступной<br>и популярной в России.<br></p>
                    </div>
                    <div class="col-md-6">
                        <div class="getting-started-info"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block features" style="background-color: #daf4df;">
            <div class="container">
                <div class="block-heading">
                    <h3 style="color: #222;">Новинки<br></h3>
                    <p style="margin-bottom: 20px;">ALL NATURAL AND SUSTAINABLY SOURCED<br></p>
                </div>
                <div class="row justify-content-center">
                    

                  <?php  

                    foreach ($new as $products)
                    {
                        ?>
                    
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center">
                        <img class="card-img-top w-100 d-block"src="assets/img/<?php echo $products['image'] ?>" style="padding: 9px;">
                            <div class="card-body info">
                                <h4 class="card-title"><?php echo $products['title'] ?></h4>
                                <p class="card-text"><?php echo $products['description'] ?><br></p>
                                <div class="icons"><a href="#">
                                <span style="color: black;"><br><?php echo $products['price'] ?>₽<br></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                              <?php
                                    }

                                    ?>
                </div>
            </div>
            <div class="container">
                <div class="block-heading">
                    <section class="clean-block clean-info dark" style="padding: -1px;margin-bottom: 150px; margin-top: 50px; padding-top: 100px;">
                        <div class="container">
                            <div class="row align-items-center" >
                                <div class="col-md-6">
                                    <h3>О нас<br></h3>
                                    <div class="getting-started-info">
                                        <p><br><b>Green life</b> - это магазин, где продаются 100% натуральные продукты с нулевым содержанием отходов. Наша главная цель - мотивировать и вдохновлять других на то, чтобы исключить одноразовые вещи, сократить их повседневные отходы и перейти на более осознанное потребление.<br>Самое важное для нас - сделать образ жизни ZeroWaste простым и удобным для всех!<br></p>
                                    </div>
                                </div>
                                <div class="col-md-6"><img class="img-thumbnail" src="assets/img/picture_4.jpg"></div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
      
            <footer class="page-footer" style="padding-top: 37px;padding-bottom: -61px;padding-left: 
            5px;margin-right: 8px;margin-bottom: -113px;">
                <div class="container">
                    <div class="row" style=" justify-content: center">
                        <div class="col-sm-3">
                            <h5>Интернет-магазин</h5>
                            <ul>
                                <li><a href="index.php">Главная</a></li>
                                <li><a href="login.php">Регистрация</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <h5>О нас</h5>
                            <ul>
                                <li><a href="contact.php">Свяжитесь с нами</a></li>
                                
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <h5>Поддержка</h5>
                            <ul>
                                <li><a href="https://zerowastestore.com/pages/faqs" target="_blank">FAQ</a></li>
                                <li><a href="https://zerowastestore.com/pages/privacy-policy" target="_blank">Политика конфиденциальности</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clean-block add-on social-icons">
                    <div class="icons">
                    <a href="https://www.facebook.com/"><i class="fa fa-facebook" ></i></a>
                    <a href="https://www.instagram.com/zerowastestore/"><i class="fa fa-instagram"></i></a>
                    <a href="https://twitter.com/explore"><i class="fa fa-twitter"></i></a></div>
                </div>
            </footer>
        </section>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>
</html>