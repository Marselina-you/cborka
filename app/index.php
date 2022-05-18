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
//require_once('admin_index.php');
//require_once('admin_products_manage.php');
//require_once('admin_product_edit.php');
//require_once('admin_product_add.php');
//require_once('admin_newproduct_view.php');
?>
<div class="container-fluid col-xl-12">
<div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
    <div class="edit__title title_padding darkBlue fontSans size32px"><a href="" class="">Управление товарами</a></div>
     <div class="edit__title title_padding darkBlue fontSans size32px"><a href="" class="orange">Управление категориями</a></div>
      <div class="edit__title title_padding darkBlue fontSans size32px"><a href="">Управление заказами</a></div>

</div><div class="edit__title title_padding fontSans size29px"><a href="" class="orange">Добавить категорию</a></div>

     <form class="d-flex col-xl-12 flex-column">
        <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
     <div class="edit__title title_padding col-xl-4 fontSans "><div class="text-center"><a href="" class="size32px darkBlue">Белая выпечка</a></div>
 <div class="edit-cart__operation view-product-right-info_padding"><a href="" class="burgundy size20px">Удалить</a></div>
         <div class="d-flex align-items-center">
        <label for="category3" class="size20px">Изменить</label>
             <div class="edit-cart__item-input"><input type="text" name="category3" value="Белая выпечка" class="brownGrey edit-cart__item-input"></div></div></div>
      <div class="edit__title title_padding col-xl-4  fontSans"><div class="text-center"><a href="" class="size32px darkBlue">Пирожные</a></div>
   <div class="edit-cart__operation view-product-right-info_padding"><a href="" class="burgundy size20px">Удалить</a></div>
         <div class="d-flex align-items-center">
        <label for="category3" class="size20px">Изменить</label>
             <div class="edit-cart__item-input"><input type="text" name="category3" value="Пирожные" class="brownGrey edit-cart__item-input"></div></div></div>

       <div class="edit__title title_padding col-xl-4  fontSans">
        <div class="text-center"><a href="" class="darkBlue size32px">Черный хлеб</a></div>
         <div class="edit-cart__operation view-product-right-info_padding"><a href="" class="burgundy size20px">Удалить</a></div>
         <div class="d-flex align-items-center">
        <label for="category3" class="size20px">Изменить</label>
             <div class="edit-cart__item-input"><input type="text" name="category3" value="Черный хлеб" class="brownGrey edit-cart__item-input"></div></div></div>
             </div>
             <div class="d-flex edit__title title_padding justify-content-end">
             <button type="button" class=" btn btn-success col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6 size20px">Сохранить изменения</button></div>
         </form>
       </div>
</div>
   
<?php require_once('admin_footer.php');
//require_once('cart-full.php');
 //require_once('footer.php'); ?>
 
    <script src="js/app.min.js"></script>
     <script src="js/slider.js"></script>
 </body>
 </html>