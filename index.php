<?
    if( $_SERVER['REQUEST_URI'] == '/') $page = 'home';
    else{
        $page = substr($_SERVER['REQUEST_URI'], 1);
        if(!preg_match('/^[A-z0-9]{3,15}$/', $page)) not_found();
    }

    $CONNECT = mysqli_connect('dobrovolnikMarek.github.io', 'root', '', 'kursach');
    if(!$CONNECT)
        exit('error');

    session_start();

    

    /*exit(var_dump($_SESSION));*/

    if( file_exists('all/'.$page.'.php')) include 'all/'.$page.'.php';

    else if( $_SESSION['id'] and file_exists('auth/'.$page.'.php')) include 'auth/'.$page.'.php';

    else if( !$_SESSION['id'] and file_exists('guest/'.$page.'.php')) include 'guest/'.$page.'.php';

    else not_found();

    function message($text){
        exit( '{"message": "'.$text.'"}');
    }

    function go($url){
        exit ('{"go": "'.$url.'"}');
    }

    function not_found(){
        exit('Error 404');
    }

    function random_str($num=30){
        return substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, $num);
    }



    function captcha_show(){
        $questions = array(
            1 => 'Студент якого курсу зробив цю курсову?',
            2 => 'Столиця України?',
            3 => 'В якому місті живе автор даної курсової?',
            4 => 'В якому році почалась Перша світова війна?',
            5 => '1612 рік - яке це століття?',
            6 => 'Кількість кліток на шаховій дошці?',
            7 => 'Одиниця вимірювання сили струму?',
        );
        $num = mt_rand(1, count($questions));
        $_SESSION['captcha'] = $num;

        echo $questions[$num];
    }

    function captcha_valid(){
        $answers= array(
            1 => '3',
            2 => 'київ',
            3 => 'вінниця',
            4 => '1914',
            5 => '17',
            6 => '64',
            7 => 'ампер',
        );
        $result =array_search(mb_strtolower($_POST['captcha']),$answers);
        if($_SESSION['captcha'] != $result)
            message('Answer is wrong');
    }

    function email_valid(){
        if( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            message('Wrong E-mail');
        }
    }

    function password_valid(){
        if(!preg_match('/^[A-z0-9]{8,30}$/', $_POST['password'])){
            message('Wrong Password. Password should contain 8-30 characters A-Z a-z 0-9');
            $_POST['password'] = md5($_POST['password']);
        }
    }

    function top($title, $page){
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>'.$title.'</title>
            <link rel="stylesheet" href="css/style.css">
            <link rel="shortcut icon" href="/img/chess-board.png" type="image/x-icon">
            <link href="https://fonts.googleapis.com/css?family=Gelasio&display=swap" rel="stylesheet">
            <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
            <script src="/script.js"></script>
        </head>
        <body>
        <div class="wrapper">
        <div class="menu">';
        echo '
            <img src="/img/chesslog.jpg" id ="logo" >
            ';
        if($_SESSION['id']){
            echo '
            <a class="selected" href="/profile">PROFILE</a>
            <a href="/ratings">RATINGS</a>
            <a href="/chessrules">RULES</a>
            <a href="/tactics">TACTICS</a>
            <a href="/play">PLAY</a>
            <!--<a href="/history">HISTORY</a>*/-->
            <a href="/exit">EXIT</a>
            ';}
        /*if (strcmp ('all/'.$page.'.php' , 'all/chessrules.php') == 0){
         echo '
        <a href="/main">Психология шахмат</a>
        <a href="/main">Психология шахмат</a>
        <a href="/login">LOGIN</a>
        <a href="/register">REGISTRATION</a>
        ';}*/
        elseif(!$_SESSION['id']){echo '
        <a class="selected" href="/main">MAIN</a>
        <a href="/play">PLAY</a>
        <a href="/ratings">RATINGS</a>
        <a href="/news">NEWS</a>
        <a href="/login">LOGIN</a>
        <a href="/register">REGISTRATION</a>
        ';}
        echo '
        </div>
        <div class="content">
        <div class="block">';
        



    }
    


    
    

    function bottom(){
        echo'
        </div>
        </div>
        </div>
        </body>
        </html>';
    }

    /*top('main');
    <div class="block">eee</div>;
    bottom();*/

    
?>

