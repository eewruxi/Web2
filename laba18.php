<?php
//1 задание
echo '1 задание';
echo '<br>';
function printNumbers()
{
    $i = 0;
    do {

        if ($i == 0) {
            echo $i . " - это ноль.";
        }
        else {
            if($i % 2 == 0) {
                echo $i . " - чётное число.";
            } else{
                echo $i . " - это нечётное число.";
            }
        }
        $i++;
        echo '<br>';
    } while ($i <= 10);
}
printNumbers();

//2 задание
echo '<br><br>';
echo '2 задание';
echo '<br>';

$regions = array(
    'Московская область' => array('Москва', 'Зеленоград', 'Клин'),
    'Ленинградская область' => array('Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'),
    'Рязанская область' => array('Рязань', 'Ряжск', 'Скопин', 'Касимов')
);

foreach ($regions as $key => $value)
{
    echo $key . ":" . "<br>";
    if (is_array($value)) {
        foreach ($value as $new_key => $new_value) {
            echo $new_value. ", ";
        }
    }
    echo "<br>";
}

echo '<br><br>';
echo '3 задание';
echo '<br>';
function translit($string)
{
    $array = array(
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ё' => 'yo',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'й' => 'y',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'h',
        'ц' => 'ts',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'sch',
        'ъ' => '',
        'ы' => 'y',
        'ь' => '',
        'э' => 'e',
        'ю' => 'yu',
        'я' => 'ya'
    );

    return strtr($string, $array); //функция преобразует заданные символы или заменяет подстроки
}
echo "Транслитерация = ";
$word = translit("Транслитерация");

echo $word;

echo '<br><br>';
echo '4 задание';
echo '<br>';
function getMenu($menuArray)
{
    $res = "";
    if (!empty($menuArray)) foreach ($menuArray as $item)
    {
        $content = is_array($item) ? "<ul>".getMenu($item)."</ul>" : $item;
        $res = $res."<li>$content</li>";
    }
    return $res;
}
$menu_items = array(
    array(
        'title' => 'Главная',
        'url' => '/home'
    ),
    array(
        'title' => 'Услуги',
        'url' => '/services',
        'submenu' => array(
            array(
                'title' => 'Услуга 1',
                'url' => '/services/service1'
            ),
            array(
                'title' => 'Услуга 2',
                'url' => '/services/service2'
            ),
            array(
                'title' => 'Услуга 3',
                'url' => '/services/service3'
            )
        )
    )
);

function display_menu($menu_items) {
    echo "<ul>";
    foreach ($menu_items as $item) {
        echo "<li><a href='" . $item['url'] . "'>" . $item['title'] . "</a>";
        if (isset($item['submenu'])) {
            display_menu($item['submenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}

?>
    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>

    <body>
    <div>
        <header>
            <?php display_menu($menu_items); ?>
        </header>
    </div>
    </body>

    </html>

<?php
echo '<br><br>';
echo '5 задание';
echo '<br>';

echo '<br><br>';
echo '6 задание';
echo '<br>';

$regions = array(
    'Московская область' => array('Москва', 'Зеленоград', 'Клин'),
    'Ленинградская область' => array('Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'),
    'Рязанская область' => array('Рязань', 'Ряжск', 'Скопин', 'Касимов')
);

foreach ($regions as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $new_key => $new_value) if ('К' == mb_substr($new_value, 0,1)) {
            echo '<br>'. $new_value;
        }
    }
}
echo '<br>';

