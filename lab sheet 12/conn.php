<?php
$servername="locathost";
$user="root";
$password="";
$db="sample";
$conn=mysql_connect($servername,$user,$password,$db);

if(!&conn)
{
    die("connection failed:".mysqli_connect_error());
    
}
else
{
    echo"connection successfull";
}
?>
