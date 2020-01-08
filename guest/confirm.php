<?
    if ( !$_SESSION['confirm']['code']) not_found();
    top('PASSWORD CONFIRMATION');
?>
<h1>PASSWORD CONFIRMATION</h1>
<p><input type="text" placeholder="code" id="code"></p>
<p><input type="text" placeholder="<? captcha_show()?>" id="captcha"></p>
<p><button onclick="post_query('gform', 'confirm','code.captcha')">CONFIRM</button></p>
<?
    bottom();
?>