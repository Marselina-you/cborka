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
     <div class="edit__title title_padding darkBlue fontSans size32px"><a href="" class="">Управление категориями</a></div>
      <div class="edit__title title_padding darkBlue fontSans size32px"><a href="" class="orange">Управление заказами</a></div>

</div>
<div class="cart-orders d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column">
<div class="wrap-cart-order col-xl-3 col-lg-4  bottom_padding10">
    <div class="cart-order">
        <div class="cart-order_padding">
        <div class="cart-order__name d-flex align-items-center"><div class="cart-order__name_padding brownDark size20px">Заказ №</div><div class="brownDark size22px font-weight-bold cart-order__name_padding">132</div></div>
        <div class="cart-order__name d-flex align-items-center"><div class="brownDark size20px cart-order__name_padding">Дата заказа</div><div class="brownDark size22px font-weight-bold cart-order__name_padding">17.09.21</div></div>
      
        <div class="cart-order__name d-flex align-items-center"><div class="cart-order__name_padding brownDark size20px">Заказчик:</div><div class="brownDark size22px font-weight-bold cart-order__name_padding">35(Пёс)</div></div>
            <div class="cart-order__name d-flex align-items-center"><div class="cart-order__name_padding brownDark size20px">Телефон: </div><div class="brownDark size22px font-weight-bold cart-order__name_padding">8-940-88-88</div></div>
            <div class="cart-order__name d-flex">
                <div class="cart-order__name_padding brownDark size20px align-items-center">Статус:</div>
                <div class="brownDark size22px font-weight-bold cart-order__name_padding">доставлено</div>
            </div>
            <div class="cart-order__name_padding d-flex justify-content-center"><button type="button" class="btn btn-danger"><a href="" class="table-order__del white">Удалить</a></button></div>
           
</div>
    </div>
    </div>
<div class="wrap-cart-order col-xl-3 bottom_padding10">
    <div class="cart-order">
        <div class="cart-order_padding">
        <div class="cart-order__name d-flex"><div class="cart-order__name_padding brownDark size20px">Заказ №</div><div class="brownDark size22px font-weight-bold cart-order__name_padding">132</div></div>
        <div class="cart-order__name d-flex"><div class="brownDark size20px cart-order__name_padding">Дата заказа</div><div class="brownDark size22px font-weight-bold cart-order__name_padding">17.09.21</div></div>
      
        <div class="cart-order__name d-flex"><div class="cart-order__name_padding brownDark size20px">Заказчик:</div><div class="brownDark size22px font-weight-bold cart-order__name_padding">35(Пёс)</div></div>
            <div class="cart-order__name d-flex"><div class="cart-order__name_padding brownDark size20px">Телефон: </div><div class="brownDark size22px font-weight-bold cart-order__name_padding">8-940-88-88</div></div>
            <div class="cart-order__name d-flex">
                <div class="cart-order__name_padding brownDark size20px">Статус:</div>
                <div class="brownDark size22px font-weight-bold cart-order__name_padding">доставлено</div>
            </div>
            <div class="cart-order__name_padding d-flex justify-content-center"><button type="button" class="btn btn-danger"><a href="" class="table-order__del white">Удалить</a></button></div>
           
</div></div>
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