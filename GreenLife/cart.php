<?php

session_start();

require_once ("php/CreateDb.php");
require_once ("php/component.php");

$db = new CreateDb("Productdb", "Producttb");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Товар будет удален!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Catalog - Green LIFE</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
     <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet" >

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

<?php
    require_once ('php/header.php');
?>

<div class="container-fluid" style="margin-top: 120px; margin-bottom: 50px;">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h6 style="font-weight: bold;">Корзина</h6>
                <hr>

                <?php

                $total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                    $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                    }else{
                        echo "<h5>Корзина пуста</h5>";
                    }

                ?>

            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
            <div class="pt-4">
                <h6>Детали покупки</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Цена (количество $count)</h6>";
                            }else{
                                echo "<h6>Цена (количество 0)</h6>";
                            }
                        ?>
                        <h6>Доставка</h6>
                        <hr>
                        <h6>Итого:</h6>
                    </div>
                    <div class="col-md-6">
                        <h6><?php echo $total; ?>₽</h6>
                        <h6 class="text-success" style="color: red;">Бесплатно</h6>
                        <hr>
                        <h6><?php
                            echo $total;
                            ?>₽</h6>
                    </div>
                </div>
            </div>

        </div>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/script.min.js"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
