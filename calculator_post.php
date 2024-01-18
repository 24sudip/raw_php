<!-- end -->
<?php

$number_one = $_POST['number_one'];
$number_two = $_POST['number_two'];

if($number_one) {
    if($number_two) {
        if(isset($_POST['add'])) {
            echo '<h1>'.($number_one + $number_two).'</h1>'.'<br/>';
            print_r($number_one + $number_two);
        }
        elseif(isset($_POST['minus'])) {
            echo '<h1>'.($number_one - $number_two).'</h1>'.'<br/>';
            print_r($number_one - $number_two);
        }
        elseif(isset($_POST['divi'])) {
            echo '<h1>'.($number_one / $number_two).'</h1>'.'<br/>';
            print_r($number_one / $number_two);
        }
        elseif(isset($_POST['multi'])) {
            echo '<h1>'.($number_one * $number_two).'</h1>'.'<br/>';
            print_r($number_one * $number_two);
        }
    }
    else {
        echo "Number-Two Missing";
    }
}
else {
    echo "Number-One Missing";
}

?>
