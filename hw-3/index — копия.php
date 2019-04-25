<?php
echo '<h2>Домашнее задание №3</h2>';
echo '<h4>1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.</h4>';
//
// Решение
$a = 0;
$i = 0;

while ($i <= 100) {
    $a++;
    if ($a % 3 == 0) {
        echo $a, ', ';
    }
    $i++;
}
echo '<hr>';
echo '<h4>2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:<br><br>
0 – это ноль.<br>
1 – нечетное число.<br>
2 – четное число.<br>
3 – нечетное число.<br>
…
10 – четное число..</h4>';

$noll = ' это ноль';
$chet = ' четное число';
$ne_chet = ' нечетное число';
$a = 0;
$i = 0;
while ($i <= 10) {
    if ($a != 0 && $a % 2 == 0) {
        echo $a, $chet, '<br>';
    } elseif ($a % 2 != 0) {
        echo $a, $ne_chet, '<br>';
    } else {
        echo $a, $noll, '<br>';
    }
    $a++;
    $i++;
}
echo '<hr>';
echo '<h4>3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
Московская область:
Москва, Зеленоград, Клин
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт
… (названия городов можно найти на maps.yandex.ru)</h4>';
//
// Решение
$my_arrey = [
    'Московская область:' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область:' => ['Рязань', 'Караблино', 'Касимов']
];
// var_dump($my_arrey); // проверка массива
$my_array = [
    'Московская область:' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Волгоградская область:' => ['Урюпинск', 'Иловля']
];

if (!is_array($my_array)) {
    echo 'Это не массив';
}
foreach ($my_array as $key => $value) {
    $arr_Length = count($my_array[$key]);
    //проверка длины массива
    //echo $arr_Length, ' элемента в массиве. ';
    echo $key;
    echo '<br>', ' ';
    for ($i = 0; $i < $arr_Length; $i++) {
        if ($i == $arr_Length - 1) {
            echo $value[$i], ' ';
        }else{
            echo $value[$i], ', ';
        }
    }
    echo '<br>';
}
echo '<hr>';
echo '<h4>4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк.</h4>';
//
// Решение. Вариант 1, str_replace()
function my_translit($str)
{
    $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
    $lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya');
    return str_replace($rus, $lat, $str);
}
// Решение. Вариант 2, strtr()
function my_trans_lit($string) {
    $converter = array(
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
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

        'А' => 'A',   'Б' => 'B',   'В' => 'V',
        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
        'О' => 'O',   'П' => 'P',   'Р' => 'R',
        'С' => 'S',   'Т' => 'T',   'У' => 'U',
        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
        'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
    );
    return strtr($string, $converter);
}

echo 'Вариант 1: ';
echo my_translit('Привет народ');
echo '<br> Вариант 2: ';
echo my_trans_lit('Новый год к нам мчится <br>');
echo '<hr>';
echo '<h4>5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.</h4>';
//
// Решение:
//- меняет знак пробел во всей счтрке
function my_str_replace($str){
    $str = str_replace(" ", "_", $str);
    echo $str;
}
$subject = "sth sth sth";

my_str_replace($subject);
echo '<br>';
echo '<hr>';
echo '<h4>6. В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.</h4>';





