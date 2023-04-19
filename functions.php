<?php


// function getUserList() {
//     include "list.php";
//     foreach($users as $user => $array) {
//         $hashPasw = sha1($array['password']);
//         unset($array['id']);
//         foreach($array  as  $key => $value) {
//             $value = $hashPasw;
//         }
//         $hashArray = [$user, $value];
//     } 
//     return $users;
// }

function getUserList() {
    include "list.php";
    foreach($users_hashPasw as $user => $array) {
        foreach($array  as  $key => $value) {
        }
    }
    return $users_hashPasw;
    
}

// function existsUser($login) {
//     $users = getUserList();
//     $isExist = false;
//     foreach ($users as $user => $i) {
//         if($login === $user) {
//             $isExist = true;
//             break;
//         }
//     }
//     return $isExist;
// }

function existsUser($login) {
    $users_hashPasw = getUserList();
    $isExist = false;
    foreach ($users_hashPasw as $user => $i) {
        if($login === $user) {
            $isExist = true;
            break;
        }
    }
    return $isExist;
}


// function checkPassword($login, $password) {
//     $users = getUserList();
//     $userExist = existsUser($login);
//     if ($userExist == false) {
//         return false;
//     } else {
//         if ($password === $users[$login]['password']) {
//             return true;
//         } else {
//             return false;
//         }
//     }
// }

function checkPassword($login, $password) {
    $users_hashPasw = getUserList();
    $userExist = existsUser($login);
    if ($userExist == false) {
        return false;
    } else {
        if (sha1($password) === $users_hashPasw[$login]['password']) {
            return true;
        } else {
            return false;
        }
    }
}

function getCurrentUser() {
    $users = getUserList();
    if (null !== $username && null !== $password) {
        if ($_SESSION != null) {
            return ($_SESSION['login']);
        } else {
            return null;
        }
    }
}


?>