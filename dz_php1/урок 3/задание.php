<?php
//1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.
$a = 0;
while ($a <= 100) {
    if (!($a % 3) && $a) {
        echo $a . " ";
    }
    $a++;
}
echo "<br>";


//2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
//0 – это ноль.
//1 – нечётное число.
//2 – чётное число.
//3 – нечётное число.
//…
//10 – чётное число.
$a = 0;
do {
    if ($a == 0) {
        echo $a . "- это ноль <br>";
    }
    elseif ($a & 1) {
        echo $a . "- нечетное число <br>";
    } else{
        echo $a . " - четное число <br>";
    }
    $a++;
} while ($a < 10);

echo "<br>";

/*3.Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений –
массивы с названиями городов из соответствующей области.
Вывести в цикле значения массива, чтобы результат был таким:
Московская область:
Москва, Зеленоград, Клин.
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт.
Рязанская область…(названия городов можно найти на maps.yandex.ru)*/

$regions = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская область" => ["Рязань", "Апрелевка"]
];
function printRegion($regions){
    $result = "";
    foreach ($regions as $region => $value) {

        $result .= $region . ": <br>";
        foreach ($value as $city) {
            $result .= $city . ", ";
        }
        $result = substr($result,0,strlen($result)-2);
        $result .= "<br>";
    }
    return $result;
}

echo printRegion($regions);
echo "<br>";

/* 4.Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские
буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).*/

function transliteration($string){
    $alphabet = [
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya'
    ];

    $result = "";
    $stringArr = preg_split('//u', $string, NULL, PREG_SPLIT_NO_EMPTY);
    foreach ($stringArr as $val){
        if ($alphabet["$val"]){
            $result .= $alphabet["$val"];
        }else{
            $result .= $val;
        }
    }
    echo $result;

};
$test = "Объявить массив, индексами которого являются буквы русского языка, а значениями соответствующие латинские
буквосочетания";

transliteration($test);
echo "<br>";

//5.Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчк

$string = "Тестовая строка. Хорошо! Хорошо! Да! Да! Да!";
function replaceSpace($string) {
    return str_replace(" ",'_', $string). "<br>";
}
echo replaceSpace($string);

echo "<br>";

//6. В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP. Необходимо представить
// пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю?
// Попробовать его реализовать.

$menuArr = [
    'Первый уровень 1',
    'Первый уровень 2' => ['Второй уровень 1', 'Второй уровень 2', 'Второй уровень 3'],
    'Первый уровень 3' => ['Второй уровень 1' => ['Третий уровень 1', 'Третий уровень 2']]
];
function menuRender($arr)
{
    if (!is_array($arr)) {
        return 'Error';
    }
    $renderArr[] = '<ul>';
    foreach ($arr as $key => $value) {
        if (is_array($value)) {
            $renderArr[] = '<li>' . $key . menuRender($value) . '</li>';
        } else {
            $renderArr[] = '<li>' . $value . '</li>';
        }
    }
    $renderArr[] = '</ul>';
    return implode($renderArr);
}
echo menuRender($menuArr);
echo '<br>';


//7. *Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. Выглядеть это должно так:

for ($i = 0; $i <=9; print $i++){}

echo "<br>";

//8. *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».

$regions = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская область" => ["Рязань", "Апрелевка"]
];

function printRegionK($regions){
    $result = "";
    foreach ($regions as $region => $value) {

        $result .= $region . ": <br>";
        foreach ($value as $city) {
            if (mb_substr($city,0,1) == "К"){
                $result .= $city . ", ";
            }
        }
        $result = substr($result,0,strlen($result)-2);
        $result .= "<br>";
    }
    return $result;
}

echo printRegionK($regions);
echo "<br>";

//9.*Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит
// транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании
// url-адресов на основе названия статьи в блогах).

function transliterationFinal($string){
    $alphabet = [
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya'
    ];

    $result = "";
    $stringArr = preg_split('//u', $string, NULL, PREG_SPLIT_NO_EMPTY);
    foreach ($stringArr as $val){
        if ($alphabet["$val"]){

            if (mb_strtoupper($val) == $val) {
                echo mb_strtoupper($val);
                $result .= mb_strtoupper($alphabet["$val"]);
            } else{
                $result .= $alphabet["$val"];
            }

        } elseif ($val == " ") {
            $result .= "_";
        }else{
            $result .= $val;
        }

    }
    echo $result;

};
$test = "Объявить массив, индексами которого являются буквы русского языка, а значениями соответствующие латинские
буквосочетания";

transliterationFinal($test);