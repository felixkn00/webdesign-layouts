<?php
session_start();
print_r($_POST);

$con = mysqli_connect("localhost", "root", "", "cms");
$sql = mysqli_query($con, "SELECT COUNT(userID) AS `hit` FROM `user` WHERE `username` = '$_POST[username]' AND `password` = '$_POST[password]'");
$result = mysqli_fetch_array($sql);


if($result['hit'] == 1){
    $_SESSION['cms_login'] = true;
    
    if($_POST['route'] == "homw" or $_POST['route'] == "posts" or $_POST['route'] == "editPosts" or $_POST['route'] == "updatePost"){
        
        header("Location: index.php?route=".$_POST['route']);
    }
    else{
        echo 2;
        header("Location: index.php?route=home");
    }

}else{
    echo 3;
    header("Location: index.php?route=login"."&login_error_data");
}


?>