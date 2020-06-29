
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Green LIFE</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
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
    
    <main class="page login-page" style="margin-top: 50px;">
        <section class="clean-block clean-form dark">
            <div class="container">
                
                <div class="block-heading"><h2>Регистрация</h2></div>
                <form action="loginBD.php" method="POST" style="border-top: 2px solid #AEEABE;">

                     <div class="form-group col-md-12">
                        <input type="email" name="email" class="form-control" required="required" placeholder="Введите email"  >
                    </div>
                    
                     <div class="form-group col-md-12">
                        <input type="password" name="password" class="form-control" required="required" placeholder="Введите пароль">
                    </div>

                    <div class="form-group">
                    </div><button class="btn btn-primary btn-block" type="submit" style="background-color: #AEEABE; border-color: white;color: #18201C;">Зарегистрироваться</button>
                </form>
                    
                


            </div>

        </section>
    </main>

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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>