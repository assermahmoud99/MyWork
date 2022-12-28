<?php
$error_fields=array();
if(!(isset($_POST['name'])&&!empty($_POST["name"])))
$error_fields[]="name";
if(!(isset($_POST['email'])&&filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)))
$error_fields[]="email";
if(!(isset($_POST['name'])&&strlen($_POST["pass"])>5))
$error_fields[]="pass";
if($error_fields)
{
    header("location:singup.php?error_fields=".implode(",",$error_fields));
    exit;
}
$conn=mysqli_connect("localhost","root","","task");
if(!$conn)
{
    echo mysqli_connect_error();
    exit;
}
$name= mysqli_escape_string($conn,$_POST["name"]);
$email= mysqli_escape_string($conn,$_POST["email"]);
$pass= mysqli_escape_string($conn,$_POST["pass"]);
$query="INSERT INTO `users` (`userName`,`email`,`password`) VALUES ('".$name."','".$email."','".$pass."')";
if(mysqli_query($conn,$query))
{
    echo "thank you ! , your info has been saved";
}
else
{
    echo $query;
    echo mysqli_error($conn);
}
mysqli_close($conn);


?>