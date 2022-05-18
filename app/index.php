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

<div class="container-fluid col-xl-12 edit">
    <div class="edit__title title_padding darkBlue fontSans size29px">Управление товарами</div>
    <div class="edit__title title_padding orange fontSans size29px">Редактирование товара</div>
   
   
    
        <form class="d-flex bottom_padding col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column" enctype="multipart/form-data">
         <div class="edit-cart__img col-xl-4 col-lg-4 col-md-12 col-sm-12 col-10"><img width ="" src="../images/page.png">
          <div class="d-flex content-form__data"><input type="file" name="f">
  </div></div>
         <div class="wrap-edit-cart__content col-xl-7 col-lg-8 col-md-12 col-sm-12 col-12">
         <div class="edit-cart__content edit-cart__content_padding d-flex justify-content-between">
            <div class="edit-cart__item d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column  align-item-center col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="edit-cart__item-title edit-cart__content_padding font-weight-bold col-xl-6 col-lg-4 col-md-4 col-sm-4 brownDark size20px">Категория</div>
            <div class="edit-cart__item-input col-xl-6 col-lg-8 col-md-12 col-sm-12"><select type="text" value="Пирожные"  name="name" class="edit-cart__item-input">
            <option>Пирожные</option>
                        <option>Белая выпечка</option>
                        <option>Черный хлеб</option>
                    </select></div>
        </div>
        </div>
        <div class="edit-cart__content edit-cart__content_padding d-flex justify-content-between">
            <div class="edit-cart__item d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column  align-item-center col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="edit-cart__item-title edit-cart__content_padding font-weight-bold col-xl-6 col-lg-4 col-md-4 col-sm-4 brownDark size20px">Наименование</div>
            <div class="edit-cart__item-input col-xl-6 col-lg-8 col-md-12 col-sm-12"><input value="Ассорти из пирожных" type="text" name="name" class="edit-cart__item-input"></div>
        </div>
        </div>
        <div class="edit-cart__content edit-cart__content_padding d-flex justify-content-between">
            <div class="edit-cart__item d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column  align-item-center col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="edit-cart__item-title edit-cart__content_padding font-weight-bold col-xl-6 col-lg-4 col-md-4 col-sm-4 brownDark size20px">Цена</div>
            <div class="edit-cart__item-input col-xl-6 col-lg-8 col-md-12 col-sm-12"><input value="400" type="text" name="name" class="edit-cart__item-input"></div>
        </div>
        </div>
        <div class="edit-cart__content edit-cart__content_padding d-flex justify-content-between">
            <div class="edit-cart__item d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column  align-item-center col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="edit-cart__item-title edit-cart__content_padding font-weight-bold col-xl-6 col-lg-4 col-md-4 col-sm-4 brownDark size20px">Вес</div>
            <div class="edit-cart__item-input col-xl-6 col-lg-8 col-md-12 col-sm-12"><input value="500" type="text" name="name" class="edit-cart__item-input"></div>
        </div>
        </div>
        <div class="edit-cart__content edit-cart__content_padding d-flex justify-content-between">
            <div class="edit-cart__item d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column  align-item-center col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="edit-cart__item-title edit-cart__content_padding font-weight-bold col-xl-5 col-lg-4 col-md-4 col-sm-4 brownDark size20px">Описание</div>
            <div class="edit-cart__item-input col-xl-7 col-lg-8 col-md-12 col-sm-12"><textarea  type="text" name="name" class="edit-cart__item-input-desc">Свежайшие Пирожные с фруктами и молочным шоколадом</textarea></div>
        </div>
        </div>
        <div class="edit-cart__content edit-cart__content_padding d-flex justify-content-between">
            <div class="edit-cart__item d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column  align-item-center col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="edit-cart__item-title edit-cart__content_padding font-weight-bold col-xl-6 col-lg-4 col-md-4 col-sm-4 brownDark size20px">Ингредиент 1</div>
            <div class="edit-cart__item-input col-xl-6 col-lg-8 col-md-12 col-sm-12"><input value="Мука" type="text" name="name" class="edit-cart__item-input"></div>
        </div>
        </div>
        <div class="edit-cart__content edit-cart__content_padding d-flex justify-content-between">
            <div class="edit-cart__item d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column  align-item-center col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="edit-cart__item-title edit-cart__content_padding font-weight-bold col-xl-6 col-lg-4 col-md-4 col-sm-4 brownDark size20px">Ингредиент 2</div>
            <div class="edit-cart__item-input col-xl-6 col-lg-8 col-md-12 col-sm-12"><input value="Вода" type="text" name="name" class="edit-cart__item-input"></div>
        </div>
        </div>
        <div class="edit-cart__content edit-cart__content_padding d-flex justify-content-between">
            <div class="edit-cart__item d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column  align-item-center col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="edit-cart__item-title edit-cart__content_padding font-weight-bold col-xl-6 col-lg-4 col-md-4 col-sm-4 brownDark size20px">Ингредиент 3</div>
            <div class="edit-cart__item-input col-xl-6 col-lg-8 col-md-12 col-sm-12"><input value="Сахар" type="text" name="name" class="edit-cart__item-input"></div>
        </div>
        </div>
         <div class="edit-cart__content edit-cart__content_padding d-flex justify-content-between">
            <div class="edit-cart__item d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column  align-item-center col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="edit-cart__item-title edit-cart__content_padding font-weight-bold col-xl-6 col-lg-4 col-md-4 col-sm-4 brownDark size20px">Слоган</div>
            <div class="edit-cart__item-input col-xl-6 col-lg-8 col-md-12 col-sm-12"><input value="Успей купить" type="text" name="name" class="edit-cart__item-input"></div>
        </div>
        </div>
         <div class="edit-cart__content edit-cart__content_padding d-flex justify-content-between">
            <div class="edit-cart__item d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column  align-item-center col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="edit-cart__item-title edit-cart__content_padding font-weight-bold col-xl-6 col-lg-4 col-md-4 col-sm-4 brownDark size20px">Топ 1</div>
            <div class="edit-cart__item-input col-xl-6 col-lg-8 col-md-12 col-sm-12"><input value="Черника" type="text" name="name" class="edit-cart__item-input"></div>
        </div>
        </div>
        <div class="edit-cart__content edit-cart__content_padding d-flex justify-content-between">
            <div class="edit-cart__item d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column  align-item-center col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="edit-cart__item-title edit-cart__content_padding font-weight-bold col-xl-6 col-lg-4 col-md-4 col-sm-4 brownDark size20px">Топ 2</div>
            <div class="edit-cart__item-input col-xl-6 col-lg-8 col-md-12 col-sm-12"><input value="Шоколад" type="text" name="name" class="edit-cart__item-input"></div>
        </div>
        </div>
        <div class="edit-cart__content edit-cart__content_padding d-flex justify-content-between">
            <div class="edit-cart__item d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column  align-item-center col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="edit-cart__item-title edit-cart__content_padding font-weight-bold col-xl-6 col-lg-4 col-md-4 col-sm-4 brownDark size20px">Топ 3</div>
            <div class="edit-cart__item-input col-xl-6 col-lg-8 col-md-12 col-sm-12"><input value="Крем" type="text" name="name" class="edit-cart__item-input"></div>
        </div>
        </div>
        <div class="edit-cart__content edit-cart__content_padding d-flex justify-content-between">
            <div class="edit-cart__item d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column  align-item-center col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="edit-cart__item-title edit-cart__content_padding font-weight-bold col-xl-6 col-lg-4 col-md-2 col-sm-3 brownDark size20px">Состояние</div>
            <div class="col-xl-6 col-lg-8 col-md-12 col-sm-12 flex-column">
             <div class="d-flex">
                <input value="Черника" type="checkbox" name="name" class="">
              <div class="edit-cart__item-input">Бестселлер</div>
            </div>
             <div class="d-flex">
                <input value="Черника" type="checkbox" name="name" class="">
                <div class="edit-cart__item-input">Новинка!</div>
            </div>
             <div class="d-flex">
                <input value="Черника" type="checkbox" name="name" class="">
                <div class="edit-cart__item-input"> Бестселлер</div>
            </div>
             <div class="d-flex">
                <input value="Черника" type="checkbox" name="name" class="">
                <div class="edit-cart__item-input">  Выгодно</div>
            </div>
             <div class="d-flex">
                <input value="Черника" type="checkbox" name="name" class="">
                <div class="edit-cart__item-input"> Нет в наличии</div>
            </div>
            <div class="d-flex">
                <input value="Черника" type="checkbox" name="name" class="">
                <div class="edit-cart__item-input">Скрыть для пользователя</div>
            </div>
        </div>
        </div>
        </div>
         <div class="d-flex justify-content-end"><button class="content-order-end__click__btn btn btn-success size22px col-xl-2 col-lg-3 col-md-3
        col-sm-4 col-6" type="submit">Сохранить</button></div>
        </div>
    

           
    
    
      
         
       
    </div>

</form>
        
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