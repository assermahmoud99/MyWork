<?php

$tit="sign up";
include "./header.php";
$error_arr=array();
if(isset($_GET["error_fields"]))
if($_GET["error_fields"])
{
    $error_arr = explode(",",$_GET["error_fields"]); 
}
?>
<body>
<form action="./dash.php" method="POST">
<label style="width: 60;display: inline-block;">name</label>
<input type="text" placeholder="name" name="name">
<?php if(in_array("name",$error_arr))
echo "* please enter yor name"; 
?>
<br>
<label style="width: 60;display: inline-block;">email</label>
<input type="email" placeholder="email" name="email">
<?php if(in_array("email",$error_arr))
echo "* please enter yor email"; 
?>
<br>
<label style="width: 60;display: inline-block;">password</label>
<input type="password" placeholder="password" name="pass">
<?php if(in_array("pass",$error_arr))
echo "* please enter yor password"; 
?>
<br>
<button type="submit">submit</button>
</form>
</body>
</html>