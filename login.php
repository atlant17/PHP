
<link rel="stylesheet" href="login_styles.css">

<?php
session_start();

include_once "process.php";
include_once "functions.php";

$auth = $_SESSION['auth'] ?? null;

if(!$auth) { ?>
  <html>
  <body>
      <form action="index.php" method="post">
          <input name="login" type="text" placeholder="Логин">
          <input name="password" type="password" placeholder="Пароль">
          <input name="submit" type="submit" value="Войти">
      </form>
      
        <?php 
          if($_SESSION['message']) {
            echo '<p class="message"> ' . $_SESSION['message'] . '</p>';
            unset($_SESSION['message']);
          } 
         
        ?>
  </body>
  </html>

<?php } 
setcookie(name: 'date', value: time(), expires_or_options: time() + 86400);
?>
