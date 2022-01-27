
<?php
//разбиение строк
$getPartsFromFullname = 'Иванов Иван Иванович';
$newArr = explode(' ', $getPartsFromFullname );
$newArr['Surname'] = array_shift($newArr);
$newArr['Name'] = array_shift($newArr);
$newArr['Patronomyc'] = array_shift($newArr);
echo "<pre>";
print_r($newArr);
echo "<pre>";

//объединение строк

$getFullnameFromParts = implode(' ', $newArr);

echo $getFullnameFromParts;

//

$str1 = 'Иванов';
$str2 = 'Иван';
$str3 = 'Иванович';
$getFullnameFromParts  = $str1  . ' ' . $str2  . ' ' . $str3;
echo $getFullnameFromParts ; 


//сокращенное ФИО

$str = 'Stepanova Natalia Stepanovna';
$getPartsFromFullname = explode(' ', $str);
$surname = $getPartsFromFullname[0];
$name = $getPartsFromFullname[1];
$name_short = str_split($name)[0]. '.';
$result = $surname. ' '. $name_short;
echo $result

?>

<?php

//Функция определения пола по ФИО


function gender($name)
{
    $nameEnds = (mb_substr($name, -1, 1));
    if (mb_strtolower($name) == 'Иванов Иван Иванович' || mb_strtolower($name) == 'Степанова Наталья Степановна' || mb_strtolower($name) == 'Пащенко Владимир Александрович' ) {
        return null;
        return 'woman';
    } elseif ($nameEnds == 'а' || $nameEnds == 'вна' /*признак женского пола*/) {
        return ucfirst($name) . ' – имя женское.';
    } else ($nameEnds == 'в' || $nameEnds == 'ич' /*признак мужского пола*/); {
        return ucfirst($name) . ' – имя мужское.'; 
        return 'man';
    }
}
 
echo '<ul><li>' . gender('Иванов Иван Иванович').
     '</li><li>' . gender('Степанова Наталья Степановна').

assert(null == gender('Иванов Иван Иванович'));
assert(null == gender('Степанова Наталья Степановна'));
assert(null == gender('Пащенко Владимир Александрович'));
assert('woman' == gender('Громов Александр Иванович'));
assert('woman' == gender('Славин Семён Сергеевич'));
assert('woman' == gender('Цой Владимир Антонович'));
assert('man' == gender('Быстрая Юлия Сергеевна'));
assert('man' == gender('Шматко Антонина Сергеевна'));
assert('man' == gender('Шварцнегер Арнольд Густавович'));

?>




