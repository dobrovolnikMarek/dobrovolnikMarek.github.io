<?
if($_POST['login_f']){
    /*message('Login');*/
    captcha_valid();
    email_valid();
    password_valid();
    //message('OK');
    if( mysqli_num_rows(mysqli_query($CONNECT, "SELECT `id` FROM `users` WHERE `email` = '$_POST[email]' AND `password` = '$_POST[password]'")))
        message('User is not register yet');
    $row = mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT * FROM `users` WHERE `email` = '$_POST[email]'"));
    
    foreach ($row as $key => $value) 
         $_SESSION[$key]= $value;
         $ip = $_SERVER['REMOTE_ADDR'];
         $info = $_SERVER['HTTP_USER_AGENT'];
         $today = date("Y-m-d H:i:s");
         mysqli_query($CONNECT, "INSERT INTO `logs` (`email`, `date`, `ip`, `info`)  VALUES ('{$_SESSION['email']}', '{$today}', '{$ip}', '{$info}')");
       go('profile');
       
}
else if($_POST['register_f']){
    captcha_valid();
    email_valid();
    password_valid();
    if( mysqli_num_rows(mysqli_query($CONNECT, "SELECT `id` FROM `users` WHERE `email` = '$_POST[email]'")))
        message('This e-mail is already in use');

    $code=random_str(5);
    $_SESSION['confirm'] = array(
        'type' => 'register',
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'code' => $code,
    );
    mail($_POST['email'], 'Регистрация', "Код подтверждения регистрации: <b>$code</b>");    
    go('confirm');
}

else if($_POST['recovery_f']){
    captcha_valid();
    email_valid();
    if( !mysqli_num_rows(mysqli_query($CONNECT, "SELECT `id` FROM `users` WHERE `email` = '$_POST[email]'")))
        message('User is not register yet');

    $code=random_str(5);

    $_SESSION['confirm'] = array(
            'type' => 'recovery',
            'email' => $_POST['email'],
            'code' => $code,
        );
    mail($_POST['email'], 'Восстановление пароля', "Код подтверждения восстановление пароля: <b>$code</b>");  
    go('confirm');
}

else if($_POST['confirm_f']){
    /*message('Confirm');*/
    if($_SESSION['confirm']['type']=='register'){
        if($_SESSION['confirm']['code'] != $_POST['code'])
                message('Wrong Code');
    mysqli_query($CONNECT, "INSERT INTO `users` (`email`, `password`) VALUES ('".$_SESSION['confirm']['email']."', '".md5($_SESSION['confirm']['password'])."')");
            unset($_SESSION['confirm']);

            go('login');
    }

    else if($_SESSION['confirm']['type']=='recovery'){
        if($_SESSION['confirm']['code'] != $_POST['code'])
                message('Wrong Code');
                $new_pswd=random_str(10);
            mysqli_query($CONNECT, 'UPDATE `users` SET `password` ="'.md5($new_pswd).'" WHERE `email`= "'.$_SESSION['confirm']['email'].'"' );
            unset($_SESSION['confirm']);

            message("Your new pass: $new_pswd");
    }
    else not_found();
}

?>