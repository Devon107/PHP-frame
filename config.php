<?php
    $host=''; 
    $user=''; 
    $pass=''; 
    $db=''; 
    $link=mysql_connect($host,$user,$pass ) or die(mysql_error()); 
    mysql_select_db($db,$link); 

    define('APP_NAME','');
    define('URL_BASE',$_SERVER[‘HTTP_HOST’]);
?>