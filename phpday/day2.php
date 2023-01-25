<?php
    // $string = "Hello World";

    // echo $string . "<br>";

    // echo strtoupper($string) . "<br>";

    // echo strlen($string) . "<br>";

    // echo strrev($string) . "<br>";

    // echo strpos($string, "W") . "<br>";

    // echo substr($string, 2,6) . "<br>";

    // echo intval("4") . "<br>";

    // echo strval(5) . "<br>";

    // $num = 2;

    // echo $num++ . "<br>";

    // echo ++$num . "<br>";

    $array = [45,64,8,10,92,81];

    print_r($array);

    $student = [
        "name" => "Ebuka",
        "class" => "python",
        "age" => 24,
        "tel" => "08145726483"
    ];

    print_r($student) . "<br>";

    echo $student["class"] . "<br>";

    array_push($array, 74);

    array_pop($array);

    print_r($array);

    echo count($array) . "<br>";

    echo min($array) . "<br>";
    echo max($array) . "<br>";
    echo in_array(92, $array) . "<br>";

    sort($array);
    rsort($array);

    echo implode(" ", $array);

?>