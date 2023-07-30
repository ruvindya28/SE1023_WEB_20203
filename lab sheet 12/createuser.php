<?php$conn=mysqli_connect("localhost","root","sample")


if(!&conn)
{
    die("connection failed:".mysqli_connect_error());
    
}
$id=$_RECUEST['id'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$psw=$_REQUEST['password'];
$sql="INSERT INTO STUDENTS(id,name,email,password);
VALUES("".$id."","".$name."","".$email"","".$psw."")";
i($conn->query($sql)==TRUE)
{
    echo"New user created successfully";
}
else{
    echo"Error:".$sql."<br>".$conn->error;
}
?>
