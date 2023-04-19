<?php
session_start();
include_once "process.php";
include_once "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> 
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header">
            <div class="header-section">
                <?php
                include "header.php"
                ?>
            </div>
            <div class="header-section">
                <div class="user-item">
                    <?php
                        if ($auth) { ?>
                            <a class="user">
                                <?php echo $_SESSION['login']; ?>
                            </a> <?php
                        }
                    ?>
                </div>
                <div class="header_item headerButton">
                    <?php
                        if(!$auth) {
                    ?>      <a href="login.php">Log in</a> <?php
                            $_COOKIE['date'] = '';
                        } else {
                    ?>      <a href="logout.php">Log out</a> <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="top-bar">
            <img class="main" src="img/main.jpeg" >
        </div>
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="sale-ivent">
                    <?php 
                    if ($auth && ((time() - $_COOKIE['date']) < 86400)) { ?> 
                        <div class="container sale-time">
                            <?php
                                $timeSale = 86400 - (time() - $_COOKIE['date']);
                            ?>
                                <p class="sale">До окончания акции осталось: <?php echo date('H:i:s ', $timeSale); ?></p>
                        </div>
                        <div class="container sale-birth">
                        <?php
                        if (!$birthday) { ?>
                            
                            <p class="sale">Введите свою дату рождения</p>
                            <form class="dateOfBirth" method="post">
                                <input name="birthday" type="date" id="date">
                                <input name="submit" type="submit" value="Подтвердить">
                            </form> <?php
                        } 
                        ?>
                        
                        <?php 
                            if ($monthAndDay == date('m-d')) { ?>
                                <p class="sale" id="congratulate">Ваша скидка: 5% на весь асортитмент</p>
                            <?php 
                                }
                            ?>
                    </div>
                </div>
                <?php } ?>
               
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card">
                            <!-- Product image-->
                            <img class="card-img" src="img/shower.png">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <a class="type" href="#"><h5 class="fw-bolder">BATH</h5></a>
                                    <!-- Product price-->
                                    <p>$80.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card">
                            <!-- Product image-->
                            <img class="card-img" src="img/fire.png">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <a class="type" href="#"><h5 class="fw-bolder">AROMA</h5></a>
                                    <!-- Product price-->
                                    <p>$20.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card">
                            <!-- Product image-->
                            <img class="card-img" src="img/soap.png">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <a class="type" href="#"><h5 class="fw-bolder">FACIAL CARE</h5></a>
                                    <!-- Product price-->
                                    <p>$30.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card">
                            <!-- Product image-->
                            <img class="card-img" src="img/flower.png">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <a class="type" href="#"><h5 class="fw-bolder">FLOWERS</h5></a>
                                    <!-- Product price-->
                                    <p>$15.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card">
                            <!-- Product image-->
                            <img class="card-img" src="img/stone.png">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <a class="type" href="#"><h5 class="fw-bolder">HOT STONES</h5></a>
                                    <!-- Product price-->
                                    <p>$10.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card">
                            <!-- Product image-->
                            <img class="card-img" src="img/nail.png">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <a class="type" href="#"><h5 class="fw-bolder">MANICURE</h5></a>
                                    <!-- Product price-->
                                    <p>$50.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card">
                            <!-- Product image-->
                            <img class="card-img" src="img/brush.png">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <a class="type" href="#"><h5 class="fw-bolder">MAKE UP</h5></a>
                                    <!-- Product price-->
                                    <p>$35.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card">
                            <!-- Product image-->
                            <img class="card-img" src="img/aero.png">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <a class="type" href="#"><h5 class="fw-bolder">HAIR STYLING</h5></a>
                                    <!-- Product price-->
                                    <p>$70.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <nav class="footer">
            <?php
            include "footer.php"
            ?>
        </nav>
    </footer>
</body>
</html>