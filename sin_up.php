<?php 
$text1=$_POST['text1'];
$password1=$_POST['password1'];
$db=mysql_connect("localhost","root","");
mysql_select_db("cnx",$db);
$q="insert into connexion values('".$text."','".$password1."')";
$res=mysql_quer($q)or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
echo 'enregistre';
mysql_close();
?>
















