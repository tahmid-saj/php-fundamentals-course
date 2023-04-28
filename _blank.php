<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    if (3 > 10) {
        echo "three is less than 10";
    } else if (4 < 5) {
        echo "4 < 5\n";
    }

    if (4 === "4" || 5 < 10) {
        echo "it is true";
    }

    $number = 4;

    if ($number < 10) {
        echo "this";
    }

    switch ($number) {
        case 34:
            echo "is 34";
            break;
        case 3:
            echo "is 3";
            break;
        case 4:
            echo "is 4";
            break;
        default:
            break;
    }

    while (4 > 10) {
        echo "hello";
    }

    for ($counter = 0; $counter < 10; $counter++) {
        echo $counter . "<br>";
    }

    $numbers = array(345, 345, 676, 345, 2657, 5784);

    foreach ($numbers as $number) {
        echo $number . "<br>";
    }

    function init() {
        say_Something();
        say_Something1();
    }

    function say_Something() {
        echo "Hello students do you like the class" . "<br>";

        calculate();
    }

    function calculate() {
        echo 456 + 345;
    }

    function say_Something1() {
        echo "Hello students say something 1" . "<br>";
    }

    init();

    function greeting($message) {
        echo $message;
    }

    greeting("Hello student");

    function calculate2($number1, $number2) {
        $sum = $number1 + $number2;

        echo $sum;
    }

    addNumbers(12, 24);

    function addNumbers($number1, $number2) {
        $sum = $number1 + $number2;

        return $sum;
    }

    $result = addNumbers(32, 12);
    echo "<br>" . $result . "<br>";
    
    $x = "outside";

    function convert() {
        global $x;
        $x = "inside";
    }

    echo $x;
    convert();

    echo $x;

    $number3 = 10;
    echo $number . "<br>";

    define("NAME", 1000);

    echo NAME;

    echo pow(2, 7);

    echo "<br>";

    echo rand(1, 1000) . "<br>";

    echo sqrt(100) . "<br>";

    echo ceil(4.6) . "<br>";

    echo floor(5.1) . "<br>";

    $string = "Hello students do you like the class";

    echo strlen($string) . "<br>";

    echo strtoupper($string) . "<br>";

    echo strtolower($string) . "<br>";

    $list = [343, 23, 323, 23, 54, 232, 453];

    echo max($list) . "<br>";

    echo min($list) . "<br>";

    sort($list);

    print_r($list);

?>

<form action="form_process.php" method="post">
    <input type="text" name="username" placeholder="Enter username">
    <input type="password" name="password" placeholder="Enter password"><br>
    <input type="submit" name="submit">


</form>


</body>
</html>