<?php
$example_persons_array = [
    [
        'fullname' => 'Иванов Иван Иванович',
        'job' => 'tester',
    ],
    [
        'fullname' => 'Степанова Наталья Степановна',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Пащенко Владимир Александрович',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Громов Александр Иванович',
        'job' => 'fullstack-developer',
    ],
    [
        'fullname' => 'Славин Семён Сергеевич',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Цой Владимир Антонович',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Быстрая Юлия Сергеевна',
        'job' => 'PR-manager',
    ],
    [
        'fullname' => 'Шматко Антонина Сергеевна',
        'job' => 'HR-manager',
    ],
    [
        'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Бардо Жаклин Фёдоровна',
        'job' => 'android-developer',
    ],
    [
        'fullname' => 'Шварцнегер Арнольд Густавович',
        'job' => 'babysitter',
    ],
];
?>

<?php

    $i = 0;
    $sumMen;
    $sumWomen;
    $sumNone;
    $arrGen = [];
  
    
    foreach($example_persons_array as $key){
        // разбитие массива
        $string = $example_persons_array[$i]["fullname"];
        getPartsFromFullname($string);
        echo '<br>';
        $surname = getSurname($string);
        echo '<br>';
        $name = getName($string);
        echo '<br>';
        $patronymic = getPatronymic($string);
        echo '<br>';
        echo getFullnameFromParts($surname, $name, $patronymic);
        echo getShortName($string);
        $gensum = getGenderFromName($string);
        echo getGenderFromName($string);
        echo '<br>';
        $i++;
        if(!empty($key['fullname']) && is_array($key['fullname'])){ 
            $i += ($key['fullname']); 
        }
    }

    // разделения массива на 3 элемента
    function getPartsFromFullname($string) {
        $arrayFullname = ['surname', 'name', 'patronymic'];
        $stringPartsName = explode(' ', $string);
        $array = (array_combine($arrayFullname, $stringPartsName));
        echo '<br>';
        return $array;
    }
    // Фамилия
    function getSurname($string){
        $stringPartsName = explode(' ', $string);
        $surname = $stringPartsName[0];
        echo $surname; 
        return $surname;
    }
    // Имя
    function getName($string){
        $stringPartsName = explode(' ', $string);
        $name = $stringPartsName[1];
        echo $name; 
        return $name;
    }
    // Отчество
    function getPatronymic($string){
        $stringPartsName = explode(' ', $string);
        $patronymic = $stringPartsName[2];
        echo $patronymic; 
        return $patronymic;
    }
    // Полное ФИО
    function getFullnameFromParts($surname, $name, $patronymic){
        $fullname = $surname . ' ' . $name . ' ' . $patronymic;
        // echo $fullname;
        return $fullname;
    }
    // Фамилия И.
    function getShortName($string){
        $arr = getPartsFromFullname($string);
        $surname1 = $arr["surname"];
        $name1 = $arr["name"];
        $surname1 = mb_substr($surname1, 0, 1);
        $nameSurname = $name1 . ' ' . $surname1 . '.';
        return $nameSurname;
    }
    // Гендер
    function getGenderFromName($string){
        $gensum = 0;
        global $arrGen;
        global $i;
        $arr = getPartsFromFullname($string);
        $surname1 = $arr["surname"];
        $name1 = $arr["name"];
        $patronymic1 = $arr["patronymic"];
        if (mb_substr($surname1,-2) == 'ва'){
            $gensum--;
        }elseif(mb_substr($surname1,-1) == 'в'){
            $gensum++;
        }
        if (mb_substr($name1,-1) == 'а'){
            $gensum--;
        }elseif(mb_substr($name1,-1) == 'й'|| mb_substr($name1,-1) == 'н'){
                $gensum++;
        }
        if (mb_substr($patronymic1, -3) == 'вна'){
            $gensum--;
        } elseif(mb_substr($patronymic1, -2) == 'ич'){
                    $gensum++;
        } 
        if ($gensum > 0) {
            $gensum = 1 . ' ' . '(мужской пол)';
            global $sumMen;
            $sumMen++;
            array_push($arrGen, 1);
        } elseif ($gensum < 0) {
            $gensum = -1 . ' ' . '(женский пол)';
            global $sumWomen;
            $sumWomen++;
            array_push($arrGen, -1);
        } else {
           $gensum = 0 . ' ' . '(неопределенный пол)';
           global $sumNone;
           $sumNone++;
           array_push($arrGen, 0);
        }
        // echo $gensum;
        return $gensum;
    }   
    echo '<br>';  
// Выполнено не так как требует задание
    function getGenderDescription(){
        global $arrGen;
        global $sumMen;
        global $sumWomen;
        global $sumNone;
        $genderM = ($sumMen / count($arrGen)) * 100;
        $genderW = ($sumWomen / count($arrGen)) * 100;
        $genderN = ($sumNone / count($arrGen)) * 100;
        echo 'Гендерный состав аудитории:' . '<br>';
        echo '_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ ' . '<br>';
        echo 'Мужчины - ' . round($genderM, 1) . '%' . '<br>';
        echo 'Женщины - ' . round($genderW, 1) . '%' .'<br>';
        echo 'Не удалось определить - ' . round($genderN, 1) . '%' . '<br>';
        
    }
    echo '<br>';
    echo '<br>';
    getGenderDescription();
  
   function getPerfectPartner($surname, $name, $patronymic, $persons_array){
    $surname = mb_convert_case($surname, MB_CASE_TITLE_SIMPLE);
    $name = mb_convert_case($name, MB_CASE_TITLE_SIMPLE);
    $patronymic = mb_convert_case($patronymic, MB_CASE_TITLE_SIMPLE);
    $fullname = getFullnameFromParts($surname, $name, $patronymic);
    $gender = getGenderFromName($fullname);
    $partnerGender = $gender;
    while((int)$partnerGender + (int)$gender !== 0){
        $partnerFullname = $persons_array[array_rand($persons_array, 1)]['fullname'];
        $partnerGender = getGenderFromName($partnerFullname);
    } 
    echo 'Идеальная пара' . '<br>';
    echo '_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ ';
    echo $name . ' ' . mb_substr($surname, 0, 1) . '. ' . ' + ' .  getShortName($partnerFullname) . '<br>';
    echo '♡ Идеально на ' . rand(5000, 10000) / 100 . '% ♡';

   }
   getPerfectPartner('сеРгЕев', 'ваСИлий', 'степАНоВич', $example_persons_array);
   
?>
