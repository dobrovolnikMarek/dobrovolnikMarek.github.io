<?
    top('REGISTRATION', $page);
   
?>
<br>
<h1>REGISTRATION</h1>
<p><input type="text" placeholder="e-mail" id="email"></p>
<p><input type="password" placeholder="password" id="password"></p>
<p><input type="text" placeholder="<? captcha_show()?>" id="captcha"></p>
<p><button onclick="post_query('gform', 'register','email.password.captcha')">REGISTRATION</button></p>
<?
    bottom();
?>