<?php
session_start();
$db = mysqli_connect('localhost','root','','thecodefather_base');
if(isset($_POST['user_reg_name']) && isset($_POST['user_reg_nick']) && isset($_POST['user_reg_email']) && isset($_POST['user_reg_password']) && isset($_POST['user_reg_password_confirm'])){
    $userRegName = $_POST['user_reg_name'];
    $userRegNick = $_POST['user_reg_nick'];
    $userRegEmail = $_POST['user_reg_email'];
    $userRegPassword = $_POST['user_reg_password'];
    $userRegPasswordConfirm = $_POST['user_reg_password_confirm'];
    if($userRegPasswordConfirm != $userRegPassword){
        $_SESSION['error']['wrong_password'] = 'Գախտնաբառերը նույնը չեն';
        header('location:index.php');
    }else {
        if(strlen($userRegPasswordConfirm) < 6){
            $_SESSION['error']['short_password'] = 'Գախտնաբառը շատ կարճ է (մինիմում երկարություն 6 նիշ)';
            header('location:index.php');
        }else {
            mysqli_query($db, "INSERT INTO `users` (`name`,`nickname`,`email`,`password`) VALUES ('$userRegName','$userRegNick','$userRegEmail','$userRegPasswordConfirm')");
            $_SESSION['completed'] = 'Դուք հաջողությամբ գրանցվեցիք';
        }
    }
    header('location:index.php');
}
?>