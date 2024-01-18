<?php 

// $letter = "u";
// if ($letter == "a") {
//     echo "This Is Vowel";
// }
// elseif ($letter == "e") {
//     echo "This Is Vowel";
// }
// elseif ($letter == "i") {
//     echo "This Is Vowel";
// }
// elseif ($letter == "o") {
//     echo "This Is Vowel";
// }
// elseif ($letter == "u") {
//     echo "This Is Vowel";
// }
// else {
//     echo "This Is Consonant";
// }

// if ($letter == "a" || $letter == "e" || $letter == "i" || $letter == "o" || $letter == "u") {
//     echo "This Is Vowel";
// }
// else {
//     echo "This Is Consonant";
// }

// function sudip() {
//     return 'He is a student';
// }
// echo sudip();

// function sudip() {
//     echo 'Student of Professional Web Development';
// }
// sudip();

// function sudip() {
//     echo 'He is a student'.' ';
//     echo 'He is a Dhakaiya';
// }
// sudip();

// function mathss() {
//     $no_one = 5;
//     $no_two = 15;
//     $total = $no_one + $no_two;
//     echo $total;
// }
// mathss();

// $sudip = 'He is a developer';
// echo strlen("$sudip");

// $sudip = 'He is a developer';
// echo str_word_count("$sudip");

// $sudip = 147852;
// echo md5("$sudip");

// $sudip = 'he is a developer';
// echo strtoupper("$sudip");

// $sudip = "SUDIPSAHA";
// echo strrev("$sudip");

// echo str_replace("world","Peter","Hello world!");

// define('SUDIP', 'lazy boy');
// echo SUDIP;

// $sudip = "smart boy";
// $sudip = "smart booy";
// echo $sudip;
// die();
// define('SUDIP', 'lazy boy');
// echo SUDIP;

// $team = ["Al-Amin", "Mojibur", "Nadim", "Dim", "Ghoman", "Rifat"];
// print_r($team);

// $team = [
//     1=>"Al-Amin", 
//     "Mojibur", 
//     "Nadim", 
//     "Dim", 
//     "Ghoman", 
//     "Rifat"
// ];
// print_r($team);

// $team = [
//     1=>"Al-Amin", 
//     4=>"Mojibur", 
//     "Nadim", 
//     "Dim", 
//     "Ghoman", 
//     "Rifat"
// ];
// print_r($team);

// $team = [
//     1=>"Al-Amin", 
//     3=>"Mojibur", 
//     "Nadim", 
//     2=>"Dim", 
//     "Ghoman", 
//     "Rifat"
// ];
// print_r($team);

// $team = [
//     "Al-Amin", "Mojibur", "Nadim", "Dim", "Ghoman", "Rifat"
// ];
// print_r($team['2']);

// function add($a, $b) {
//     $result = $a + $b;
//     echo $result.'<br/>';
// }
// add(10, 25);
// add(17, 45);

// function subtract($a, $b) {
//     $result = $a - $b;
//     echo $result.'<br/>';
// }
// subtract(10, 25);
// subtract(17, 45);

// $a=array("red","green");
// array_push($a,"blue","yellow");
// print_r($a);

// $a1=array("red","green");
// $a2=array("blue","yellow");
// print_r(array_replace($a1,$a2));

// $a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota","d"=>"Lambergini");
// print_r(array_reverse($a));

// $a=array("a"=>"red","b"=>"green","c"=>"blue");
// echo array_search("red",$a);

// $a=array(5,15,25);
// echo array_sum($a);

// $a=array("a"=>"red","b"=>"green","c"=>"red");
// print_r(array_unique($a));

// $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
// arsort($age);
// print_r($age);

// $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
// asort($age);
// print_r($age);

// $people = array("Peter", "Joe", "Glenn", "Cleveland");
// echo current($people) . "<br>";
// echo end($people);

// $people = array("Peter", "Joe", "Glenn", "Cleveland");
// if (in_array("Glenn", $people))
//   {
//   echo "Match found";
//   }
// else
//   {
//   echo "Match not found";
//   }

// $a=array("red","green","blue","yellow","brown");
// $random_keys=array_rand($a,3);
// echo $a[$random_keys[0]]."<br>";
// echo $a[$random_keys[1]]."<br>";
// echo $a[$random_keys[2]];

// for($i=1; $i<=10; $i++) {
//     echo $i." ";
// }

// for($i=1; $i<=10; $i++) {
//     echo $i."<br/>";
// }

// $i = 1;
// while($i<=10) {
//     echo $i.' ';
//     $i++;
// }

// $i = 1;
// do {
//     echo $i.'<br/>';
//     $i++;
// } while($i<=10)

// for($i=0; $i<=40; $i+=2) {
//     echo $i.'<br/>';
// }

// for($i=0; $i<=80; $i+=5) {
//     echo $i.'<br/>';
// }

// for($i=20; $i>=0; $i--) {
//     echo $i.'<br/>';
// }

// for($i=120; $i>=0; $i-=6) {
//     echo $i.'<br/>';
// }

// for($i=30; $i<=100; $i++) {
//     if($i%2 == 0) {
//         echo $i.'<br/>';
//     }
// }

// $i = 3;
// for($j=1; $j<=10; $j++) {
//     echo $i.'x'.$j.'='.$i*$j.'<br/>';
// }

// for($i=2; $i<=10; $i++) {
//     for($j=1; $j<=10; $j++) {
//         echo $i.'x'.$j.'='.$i*$j.'<br/>';
//     }
//     echo '<br/>';
// }

// $names = ['nadim', 'tanvir', 'utsob','mojibur', 'ibrahim'];
// var_dump($names);

// $names = ['nadim', 'tanvir', 10, true, 'utsob','mojibur', 'ibrahim'];
// foreach($names as $val) {
//     echo $val.'<br/>';
// }

// $word = 'this is a test sentence';
// echo substr($word, 0, 6);

// $num = 10.2587;
// $formattedNum = number_format($num, 2);
// echo $formattedNum;

$names = ['nadim', 'tanvir', 'utsob','mojibur', 'ibrahim'];
foreach($names as $key=>$val) {
    echo ($key+1).'.'.$val.'<br/>';
}

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChessBoard</title>
</head>
<body bgcolor="#ddd">
    <table border="0" cellpadding="0" cellspacing="0" align="center">       
<?php

?>
for($row = 1; $row<=8; $row++) {
    echo '<tr>';
    for($col = 1; $col<=8; $col++) {
        $total = $row + $col;
        if($total%2 == 0) {
            echo '<td bgcolor="#000" width="30" height="30"></td>';
        }
        else {
            echo '<td bgcolor="#fff" width="30" height="30"></td>';
        }
    }
    echo '</tr>';
}
    </table>
</body>
</html> -->
