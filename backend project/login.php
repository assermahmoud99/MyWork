<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
$conn=mysqli_connect("localhost","root","","task");
if(!$conn)
{
    echo mysqli_connect_error();
    exit;
}
$email=mysqli_escape_string($conn,$_POST['email']);
$pass=$_POST['pass'];
$query = "SELECT * FROM `users` WHERE `email` = '".$email."' and `password`='".$pass."' LIMIT 1";
$res=mysqli_query($conn,$query);
if($row=mysqli_fetch_assoc($res))
{
    $_SESSION['id']=$row['id'];
    $_SESSION['email']=$row['email'];
    header("location:list.php");
    exit;
}
else
{
    $err="invalid email or password";
}
}
$tit="login";
include "./header.php";
?>
<body>
    <?php if(isset($err)) echo $err;?>
<form method="POST">
<label style="width: 60;display: inline-block;">email</label>
<input type="text" placeholder="email" name="email">
<br>
<label style="width: 60;display: inline-block;">password</label>
<input type="password" placeholder="password" name="pass">
<br>
<button type="submit">submit</button>
</form>
</body>
</html>