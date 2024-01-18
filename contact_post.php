<!--  -->
<?php

session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

if(!$name) {
    $_SESSION['name_error'] = "Name missing";
    header('location: contact.php');
}
if(!$email) {
    $_SESSION['email_error'] = "Email missing";
    header('location: contact.php');
}

echo $name.'<br/>';
echo $email.'<br/>';
echo $msg.'<br/>';

?>
