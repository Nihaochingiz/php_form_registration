<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Авторизация и регистрация </title>
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
  <form  action="vendor/signup.php" method = "post" enctype = "multipart/form-data">
  <input type = "text" name = "full_name" placeholder = " Введите свое полное имя">
    <label>Логин</label>
    <input type = "text" name = "login" placeholder = " Введите свой логин">
    <input type = "email" name = "email" placeholder = " Введите адрес своей почты">
    <label> Изображение профиля</label>
    <input type="file" name = 'avatar'>
    <label>Пароль</label>
    <input type = "password" name = "password" placeholder = " Введите пароль">
    <label>Подтверждение пароля</label>
    <input type = "password" name = "password_confirm"   placeholder = " Подтвердите пароль">
    <button>Войти</button>
    <p>
     У вас уже есть аккаунт? <a href="/index.php">Авторизируйтесь</a>
    </p>
    <?php 

    if ($_SESSION['message']) {
      echo '<p class = "message">' . $_SESSION['message'].' </p>';
    }
      echo $_SESSION['message'];
      unset ($_SESSION['message']);
    ?>  
   
  </form>
</body>
</html>