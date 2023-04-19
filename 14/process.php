<?php

include "list.php";
include "functions.php";

$birthday = $_POST['birthday'] ?? null;
if ($birthday = $_POST['birthday'] ?? null) {
    $toDelite = 5;
    $monthAndDay = mb_substr($birthday, $toDelite);
} else {
    $monthAndDay = '';
}


if (null !== $username || null !== $password) {
    if (existsUser($username) === true) {
        if (checkPassword($username, $password) === true) {
            // session_start(); 
   	 // Пишем в сессию информацию о том, что мы авторизовались:
            $_SESSION['auth'] = true; 
            // Пишем в сессию логин и id пользователя
            $_SESSION['id'] = $users_hashPasw['admin']['id']; 
            $_SESSION['login'] = $username; 
            $_SESSION['message'] = '';
            
        } else {
            $_SESSION['message'] = 'password error';
            header('location: login.php');
        }
    } else {
        $_SESSION['message'] = 'user does not exist';
        header('location: login.php');
    }
} 


$auth = $_SESSION['auth'] ?? null;


