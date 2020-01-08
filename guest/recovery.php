<?
    top('PASSWORD RECOVERY');
?>


<h1>PASSWORD RECOVERY</h1>
<p><input type="text" placeholder="e-mail" id="email"></p>
<p><input type="text" placeholder="<? captcha_show()?>" id="captcha"></p>
<p><button onclick="post_query('gform', 'recovery','email.captcha')">RESTORE</button></p>
<?
    bottom();
?>