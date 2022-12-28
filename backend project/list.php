<?php
session_start();
if(isset($_SESSION['id']))
{
    echo '<p>welcom '.$_SESSION['email'].'</p><a href="logout.php">logout</a>';
}
else
{
    header("location:login.php");
    exit;
}
$conn=mysqli_connect("localhost","root","","task");
if(!$conn)
{
    echo mysqli_connect_error();
    exit;
}
$query="SELECT * FROM `users`";
if(isset($_GET["search"]))
{
    $search=mysqli_escape_string($conn,$_GET["search"]);
    $query.=" WHERE `users`.`userName` LIKE '%".$search."%' OR `users` . `email` LIKE '%".$search."%'"; 
}
$res=mysqli_query($conn,$query);
$tit="list";
include "./header.php";
?>
<body>

    <h1>list of users</h1>
    <form method="GET">
        <input type="text" name="search" placeholder="enter { name } or { email } to search" style="width:500px;">
        <input type="submit" value="search">
    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>email</th>
                <th>admin</th>
                <th>action</th>
            </tr>
        </thead>
        <?php
        while($row=mysqli_fetch_assoc($res))
        {?>
            <tr>
                <td><?=$row["id"]?></td>
                <td><?=$row["userName"]?></td>
                <td><?=$row["email"]?></td>
                <td><?=($row["admin"])?"Yes" :"No"?></td>
                <td><a href="edit.php?id=<?=$row["id"]?>">edit</a> | <a href="delete.php?id=<?=$row["id"]?>">delete</a></td>
            </tr>
        <?php
         }
    ?>
    <tfoot>
        <tr>
            <td colspan="2" style="text-align: center;"><?=mysqli_num_rows($res)?> users</td>
            <td colspan="3" style="text-align: center;"><a href="singup.php">add user</a></td>
        </tr>
    </tfoot>
    </table>
</body>
<?php
mysqli_free_result($res);
mysqli_close($conn);
?>