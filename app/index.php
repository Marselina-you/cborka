<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/app.min.css">
    <title>title</title>
</head>
<body>
<?php require_once('admin_header.php');
//require_once('admin_index.php');

//require_once('header.php');
//require_once('registr.php');
//require_once('cart-empty.php');
//require_once('cart-full.php');
//require_once('cart-order-end.php');
//require_once('cart-order-form.php');
//require_once('registr-end.php');
//require_once('enter.php');
?>

<div class="edit">
    <div class="edit__title title_padding darkBlue fontSans size29px">Управление товарами</div>
    <div class="d-flex">
     <div class="edit__title title_padding darkBlue fontSans size29px"><a href="" class="darkBlue">Белая выпечка</a></div>
      <div class="edit__title title_padding darkBlue fontSans size29px"><a href="" class="darkBlue">Пирожные</a></div>
       <div class="edit__title title_padding darkBlue fontSans size29px"><a href="" class="darkBlue">Черный хлеб</a></div></div>
    
    <div class="edit-cart d-flex">
         <div class="edit-cart__img"><img src="../images/page.png"></div>
         <div class="edit-cart__content d-flex flex-column">
        <div class="edit-cart__title content-form__data font-weight-bold size26px">Ассорти из пирожных</div>
       <div class="content-form__data"><div class="edit-cart__title  size22px">ID 009876</div>
         <div class="edit__category size22px">Категория: пирожные</div></div>
        <div class="edit-cart__operations content-form__data">
        <div class="edit-cart__operation bottom_padding bottom_padding"><a href="" class="size22px darkBlue">Скрыть для пользователя</a></div>
        <div class="edit-cart__operation bottom_padding"><a href="" class="size22px darkBlue">Редактировать</a></div>
        <div class="edit-cart__operation"><a href="" class="burgundy size20px">Удалить</a></div></div>
    </div>
        
    </div>
   
</div>
            
 
    



   
<?php require_once('admin_footer.php');
//require_once('cart-full.php');
 //require_once('footer.php'); ?>
 
    <script src="js/app.min.js"></script>
     <script src="js/slider.js"></script>
 </body>
 </html>