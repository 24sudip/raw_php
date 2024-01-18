<?php

session_start();

$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$country = $_POST['country'];
$after_hash = password_hash($password, PASSWORD_DEFAULT);
$upper = preg_match('@[A-Z]@', $password);
$lower = preg_match('@[a-z]@', $password);
$number = preg_match('@[0-9]@', $password);
$special = preg_match('@[#,$,%,&,*]@', $password);

if (empty($user_name)) {
    $_SESSION['name_err'] = 'Please Enter Your Name';
    header('location:register.php');
} 
else if (empty($email)) {
    $_SESSION['email_err'] = 'Please Enter Your Email';
    header('location:register.php');
} 
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['email_err'] = 'Please Enter Valid Email';
    header('location:register.php');
} 
else if (empty($password)) {
    $_SESSION['password_err'] = 'Please Enter Your Password';
    header('location:register.php');
}
else if (!$upper || !$lower || !$number || !$special || strlen($password) < 8) {
    $_SESSION['password_err'] = 'Password Must Include Upper, Lower, Number and Special Characters Also Minimum 8 Characters';
    header('location:register.php');
}
else if (empty($dob)) {
    $_SESSION['dob_err'] = 'Date of birth is missing';
    header('location:register.php');
}
else if (empty($country)) {
    $_SESSION['country_err'] = 'Please Select Your Country';
    header('location:register.php');
}
else {
    echo $user_name.'<br/>';
    echo $email.'<br/>';
    echo $after_hash.'<br/>';
    echo $dob.'<br/>';
    echo $country;
}

?>
