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
//require_once('basket-empty.php');
?>
<main class="wrap-content">
   <div class="content-order">
   <div class="content-order__title col-xl-6 offset-xl-1 title size35px brownDark fontTahoma letter-space">Корзина</div>
   <div class="content-order-list">
      <div class="wrap-content-order-list_item">
      <div class="content-order-list_item d-flex col-xl-12 justify-content-between">
         <div class="content-order-list_item__img  col-xl-4 d-flex justify-content-center align-items-center">
            <img src="../images/page.png">
         </div>
         <div class="content-order-list_item__info col-xl-4 d-flex flex-column justify-content-center">
            <div class="content-order-list_item__info-name size29px fontSans brownDark">Пирожные. Ассорти</div>
            <div class="content-order-list_item__info-weight size24px fontSans brownSweet">500г</div>
            <div class="content-order-list_item__info-structure size24px fontSans brownSweet">Эклер (Количество: 2),</br>Корзиночка (Количество: 3),</br>Чизкейк (Количество: 3)</div>

<div class="content-order-list_item__info-deleting d-flex justify-content-between align-items-center">
  
         <div class="d-flex">  
           <div class="wrap-button-minus minus">
                        <button class="button-minus ui-n3" type="button" tabindex="0">
                           <div class="button-minus-border" tabindex="-1">
                              <svg width="24" height="24" class="ui-m9">
                                 <path d="M20 11a1 1 0 010 2H4a1 1 0 010-2h16z" fill="#5f3f33"></path>
                              </svg>
                           </div>
                        </button>
                     </div>
                     <input class="inp_price button-alcogol whitecolor button-span text-center whitecolor size14px d-flex" type="text" value='1'>
                     <div class="main-button d-flex align-items-center plus">
                        <div class="wrap-button-minus">
                           <button class="button-minus button-plus ui-n3" type="button" tabindex="0">
                              <div class="button-minus-border button-plus" tabindex="-1">
                                 <svg width="24" height="24" class="ui-m9">
                                    <path d="M13 11h7a1 1 0 010 2h-7v7a1 1 0 01-2 0v-7H4a1 1 0 010-2h7V4a1 1 0 012 0v7z" fill="#5f3f33">
                                    </path>
                                 </svg>
                                 <div class="ui-n1"></div>
                              </div>
                           </button>
                        </div>
                     </div>
                  </div>
             
             <div class="content-order-list_item__info-delete size22px burgundyLight"><a href="">удалить</a></div></div></form>
         </div>
         <div class="content-order-list_item__value  col-xl-4 size29px font-weight-bold d-flex justify-content-center align-items-center">400p</div>
      </div><div class="hr-basket"><hr class="col-xl-10 offset-xl-1"></div></div>


 <div class="wrap-content-order-list_item">
       <div class="content-order-list_item d-flex col-xl-12 justify-content-between">
         <div class="content-order-list_item__img  col-xl-4 d-flex justify-content-center align-items-center">
            <img src="../images/page6.png">
         </div>
         <div class="content-order-list_item__info col-xl-4 d-flex flex-column justify-content-center">
            <div class="content-order-list_item__info-name size29px fontSans brownDark">Баранки</div>
            <div class="content-order-list_item__info-weight size24px fontSans brownSweet">500г</div>
            <div class="content-order-list_item__info-structure size24px fontSans brownSweet">Баранки ванильные диаметр 10см</div>
<div class="content-order-list_item__info-deleting d-flex justify-content-between align-items-center">
  
         <div class="d-flex">  
           <div class="wrap-button-minus minus">
                        <button class="button-minus ui-n3" type="button" tabindex="0">
                           <div class="button-minus-border" tabindex="-1">
                              <svg width="24" height="24" class="ui-m9">
                                 <path d="M20 11a1 1 0 010 2H4a1 1 0 010-2h16z" fill="#5f3f33"></path>
                              </svg>
                           </div>
                        </button>
                     </div>
                     <input class="inp_price button-alcogol whitecolor button-span text-center whitecolor size14px d-flex" type="text" value='1'>
                     <div class="main-button d-flex align-items-center plus">
                        <div class="wrap-button-minus">
                           <button class="button-minus button-plus ui-n3" type="button" tabindex="0">
                              <div class="button-minus-border button-plus" tabindex="-1">
                                 <svg width="24" height="24" class="ui-m9">
                                    <path d="M13 11h7a1 1 0 010 2h-7v7a1 1 0 01-2 0v-7H4a1 1 0 010-2h7V4a1 1 0 012 0v7z" fill="#5f3f33">
                                    </path>
                                 </svg>
                                 <div class="ui-n1"></div>
                              </div>
                           </button>
                        </div>
                     </div>
                  </div>
               
             <div class="content-order-list_item__info-delete size22px burgundyLight"><a href="">удалить</a></div></div>
         </div>
         <div class="content-order-list_item__value size29px col-xl-4 font-weight-bold d-flex justify-content-center align-items-center">400p</div>
      </div>

  <div class="hr-basket"><hr class="col-xl-10 offset-xl-1"></div></div>

<div class="content-order-end">
<div class="content-order-end__amount d-flex col-xl-4 offset-xl-1 justify-content-between">
<div class="size29px  fontTahoma letter-space brownLight">К оплате</div>
<div class="size29px fontTahoma letter-space brownDark font-weight-bold">1200p</div></div>
<div class="content-order-end__click d-flex col-xl-4 offset-xl-1 justify-content-end">
<button class="content-order-end__click__btn btn btn-success size29px" type="button">Оформить заказ</button></div>
</div>

</div> </div>

</div>
</main>

   
<?php  require_once('footer.php'); ?>
    <script src="js/app.min.js"></script>
     <script src="js/slider.js"></script>
 </body>
 </html>