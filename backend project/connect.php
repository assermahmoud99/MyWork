<?php  

$conn=mysqli_connect("localhost","root","","task");
if(!$conn)
{
    echo mysqli_connect_error();
    exit;
}

$query="SELECT * FROM `users`";
$res=mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($res))
{
    echo "id: ". $row['id']."<br>";
    echo "user name: ". $row['userName']."<br>"; 
    echo "email: ". $row['email']."<br>";
    echo "password: ". $row['password']."<br>";
    echo str_repeat("-",50)."<br>";
}
mysqli_free_result($res);
mysqli_close($conn);





?>