<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Функции</title>
</head>

<body>
    <?php
    echo cos(3.14);
    echo '<br>';
    $str = 'whale';
    echo str_replace('a', 'o', $str) . '<br>';

    function getSum(float $x, int $y)
    {
        var_dump($x);
        var_dump($y);
        return $x + $y;
    }

    echo getSum(20.5, 20);
    /* function имяфункции (аргумент1, аргумент2) {
    какое то действие
    какой-то результат
    }*/
    echo '<br>';
    $a = 10;
    $b = 20;

    $result = getSum($a, $b);
    echo '<br>';
    echo getSum($a, $b) . '<br>';

    function foo($name)
    {
        echo "Hello $name!";
    }

    foo("Ваня");
    echo '<br>';

    $userName = 'Ваня';

    function sayHay($name)
    {
        return "Hello, $name!";
    }

    echo sayHay($userName);
    echo '<br>';

    //& - ссылка на переменную вне функции
    function func(&$x)
    {
        $x = $x + 5;
    }
    $a = 3;
    func($a);
    echo $a;
    echo '<br>';

    function gaz($y)
    {
        $y = $y + 5;
    }
    $b = 3;
    gaz($b);
    echo $b;

    echo '<br>';
    function getRanSum()
    {
        echo $a = rand(10, 100);
        echo '<br>';
        echo $b = rand(101, 200);
        echo '<br>';
        echo $a + $b;
    };

    getRanSum();
    echo '<br>';

    function getMind()
    {
        echo $f = 34;
        echo '<br>';
        echo $r = 43;
        echo '<br>';
        echo $f + $r;
    }

    getMind();
    echo '<br>';
    function getDateUser()
    {
        echo "Текущая дата: " . date('d/m/y');
    }

    getDateUser();

    echo '<br>';

    function getDialog()
    {
        echo "Какая сегодня дата?" . '<br>';
        getDateUser();
    }

    getDialog();
    ?>
</body>

</html>