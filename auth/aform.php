<?
    if($_POST['edit_f']){
        password_valid();
        $_POST['password'] = md5($_POST['password']);
    if($_POST['password'] and md5($_POST['password']) != $_SESSION['password']){
        
        mysqli_query($CONNECT, "UPDATE `users` SET `password` = '$_POST[password]' WHERE `email` = '$_SESSION[email]'");

    }
    message('psw save');
    }
?>