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
<?php require_once('header.php');
//require_once('cart-empty.php');
//require_once('cart-full.php');
//require_once('cart-order-end.php');
//require_once('cart-order-form.php');
//require_once('edit-end.php');
require_once('enter.php');
?>
<div class="wrap-main-enter wrap-main_padding">
   <div class="main-enter">
      <div class="wrap-main-enter-content col-xl-6 offset-xl-1">
       
            <div class="main-enter-content__title title_padding col-xl-12  size29px fontTahoma letter-space undertitle__edit">Регистрация на сайте
            </div>
         
     
  
   <form class="main-enter-content__form form_padding  d-flex flex-column"  method="post">
      <div class="content-form__data d-flex align-items-center justify-content-between">
          <label for="email" class="required content-form__data-title size35px col-xl-4">E-mail:</label>
          <div class="wrap-content-form__data-input col-xl-8">
            <input type="text" name="email" class="content-form__data-input col-xl-12"></div>
      </div>
      <div class="content-form__data d-flex align-items-center justify-content-between">
          <label for="name" class="required content-form__data-title size35px col-xl-4">Имя:</label>
          <div class="wrap-content-form__data-input col-xl-8">
            <input type="text" name="name" class="content-form__data-input col-xl-12"></div>
      </div>
      <div class="content-form__data d-flex align-items-center justify-content-between">
         <label for="parol" class="required content-form__data-title size35px col-xl-4">Пароль:</label>
          <div class="wrap-content-form__data-input col-xl-8">
            <input type="text" required="required" name="parol" class="content-form__data-input col-xl-12"></div>
      </div>
      <div class="content-form__data d-flex align-items-center justify-content-between">
          <label for="parol2" class="required content-form__data-title size35px col-xl-4">Пароль:</label>
          <div class="wrap-content-form__data-input col-xl-8">
            <input type="text" name="parol2" class="content-form__data-input col-xl-12"></div>
      </div>
<div class="content-form__data d-flex align-items-center justify-content-end">
   <div class="col-xl-6 d-flex justify-content-end">
<button class="content-order-end__click__btn btn btn-success size29px col-xl-6" type="button">Сохранить</button></div></div>
   </form>
   
   
</div> </div> </div>


   
<?php  require_once('footer.php'); ?>
    <script src="js/app.min.js"></script>
     <script src="js/slider.js"></script>
 </body>
 </html>