<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "sldevcodelogin";

$get = mysqli_connect($host , $user , $password);
mysqli_select_db($get , $db);

if(isset($_POST['user'])){
    $uname = mysqli_real_escape_string($get , $_POST['user']);
    $password1 = $_POST['pass'];

    $sql = "select * from users where username='".$uname."' AND password='".$password1."' limit 1";

    $result = mysqli_query($get , $sql);

    if(mysqli_num_rows($result) == 1){
        echo "You Have Successfully Loging to SL Devcode Youtube Channel....!!!";
        exit();
    }

    else{
        echo "Please Check Your Password and Try Again...!!!";
        exit();
    }
}

?>
