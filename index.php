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
    <main>
        <div class="container">
            <div>
                <h3>Задание 1</h3>
                <?php require "tables/table1.php" ?>
            </div>
            <div>
                <div>
                    <p>
                    <h3>Задание 2</h3>
                    <?php require "tables/table2_1.php" ?>
                    <p class="paragraph">таблица 1</p>
                    </p>
                </div>
            </div>
            <div>
                <div>
                    <?php require "tables/table2_2.php" ?>
                    <!-- <p class="paragraph">таблица 2</p> -->
                </div>
            </div>
            <div>
                <p class="additional"><h4>Выводы о сравнении в "PHP"</h4>
                <br>
                По итогам данного модуля я узнал и применил на практике: <i>операторы сравнения, логические операторы, и отличие строго равенства от не строгого</i>. 
                Также, мною было показно на практикe сравнение различных типов, <i>со строгим и не строгим равенством</i>: 
                <ul><i>
                    <li>null</li>
                    <li>bool</li>
                    <li>string</li>
                    <li>number</li>
                    <li>string(number)</li></i>
                </ul>
                По итогу данной работы сделан вывод:
                <br> 
                При <i><strong>НЕ</strong> Строгом равенстве</i>, при сравнении значения <strong>"true"</strong> с различными типами, выражение является верным, если мы приравниваем его к <strong>true, не пустой строке  и единице (независимо от знака)</strong>. <br>
                Выражение является ложным если мы приравниваем значение к <strong>"false", нулю , "null" и пустой строке.</strong> 
                <br>
                В отличие от значения <i>"true"</i> и <i>"false"</i>, значение <strong>'number не 0'</strong> является верным, если оно приравнивается к <strong>'true', такому же (не отрицательному числу) и строке с таким же значением.</strong>  
                Значение <strong>'number 0'</strong> является верным, если оно приравнивается к <strong>"false", '0' и "null".</strong>
                <br>
                Строка, при <i><strong>НЕ</strong> Строгом равенстве</i>, является верным выражением, при приравнивании к значениям <strong> "true" и такому же значению в строке. </strong>
                <br>
                <br>
                При <i>Строгом равенстве</i>, не зависимо от типа значения, значение будет являтся верным, только если он идентично приравниваемому.
                </p>
            </div>
        </div>
    </main>
    </body>
</html>