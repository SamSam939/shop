<?php session_start();?>
<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Мебельный магазин</title>
      <link rel="stylesheet" href="/style/style.css" />
  </head>
  <body>
        <?php if( isset($_SESSION['valid_user']) ):?>
            <div class="greeting"> 
                <h3>Добро пожаловать, <?=$_SESSION['valid_user']?></h3>
                <a href="cabinet.php">Личный кабинет</a>
                <a href="exit.php">Выход</a>
            </div> 
        <?php else:?>
            <div class="authorization">
                <a href="/enter">Вход</a>
                <a href="/registration">Регистрация</a>
            </div>    
        <?php endif;?>
        <header>
        <div class="logo">Мебельный магазин</div>
            <nav>
            <a href="/">Главная</a>
            <a href="/shop/livingroom">Гостинная</a>
            <a href="/shop/bedroom">Спальня</a>
            <a href="/shop/kitchen">Кухня и столовая</a>
            <a href="/shop/playroom">Детская</a>
            <a href="/basket">Ваши покупки</a>
            </nav>
        </header>
       