<?php
session_start();
$_SESSION['auth'] = false;
unset($_SESSION);
header('Location: login.php');
// unset($_COOKIE['date']);
?>