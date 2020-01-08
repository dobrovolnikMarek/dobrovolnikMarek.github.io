<?
    
    top('PROFILE' , $page);
   
?>

hello <?
   echo $_SESSION['email'];
?>
<br><br>
<h1>SETTINGS</h1>




<p><input type="password" placeholder="new password" id="password"></p>
<p><button onclick="post_query('aform', 'edit','password')">SAVE</button></p>


<?
    bottom();
?>