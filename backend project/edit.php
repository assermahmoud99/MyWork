<?php
$tit= "edit";
include "./header.php";
$error_fields = array();
$error_arr = array();
$conn=mysqli_connect("localhost","root","","task");
if(!$conn)
{
    echo mysqli_connect_error();
    exit;
}
$id=filter_input(INPUT_GET,"id",FILTER_SANITIZE_NUMBER_INT);
$select="SELECT * FROM `users` WHERE `users` . `id`=".$id." LIMIT 1";
$res = mysqli_query($conn,$select);
$row = mysqli_fetch_assoc($res);
if($_SERVER['REQUEST_METHOD']=='POST')
{

if(!(isset($_POST['name'])&&!empty($_POST["name"])))
$error_fields[]="name";
if(!(isset($_POST['email'])&&filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)))
$error_fields[]="email";
if(!(isset($_POST['name'])&&strlen($_POST["pass"])>5))
$error_fields[]="pass";
if(!$error_fields)
{
    $id=filter_input(INPUT_POST,'id',FILTER_SANITIZE_NUMBER_INT);
    $name= mysqli_escape_string($conn,$_POST["name"]);
    $email= mysqli_escape_string($conn,$_POST["email"]);
    $pass= mysqli_escape_string($conn,$_POST["pass"]);
    $query="UPDATE `users` SET `userName` ='".$name."',`email` = '".$email."',`password` ='".$pass."' WHERE `users` .`id` = ".$id;
    if(mysqli_query($conn,$query))
    {
        header("location: list.php");
        exit;
    }
    else
    {
        echo mysqli_error($conn);
    }
}
} 
?>
<body>
<form  method="POST">
    <input type="hidden" name="id" value="<?=(isset($row['id']))?$row['id']:''?>">
<label style="width: 60;display: inline-block;" >name</label>
<input type="text" placeholder="name" name="name" value="<?=(isset($row['userName']))?$row['userName']:''?>">
<?php if(in_array("name",$error_arr))
echo "* please enter yor name"; 
?>
<br>
<label style="width: 60;display: inline-block;">email</label>
<input type="email" placeholder="email" name="email" value="<?=(isset($row['email']))?$row['email']:''?>">
<?php if(in_array("email",$error_arr))
echo "* please enter yor email"; 
?>
<br>
<label style="width: 60;display: inline-block;">password</label>
<input type="password" placeholder="password" name="pass" value="<?=(isset($row['password']))?$row['password']:''?>">
<?php if(in_array("pass",$error_arr))
echo "* please enter yor password"; 
?>
<br>
<button type="submit">submit</button>
</form>
</body>
</html>