<?php
include_once('header.php');
include_once("conn.php");
$userid = $_GET['user_id'];
$query ="Select * from user where id='$userid'";
$stmt=$dbh->query($query);
foreach ($stmt as $row){
    $row['id'];
    $row['name'];
}
echo "<div id='alter'>";
echo "<h3>UserID：{$row['id']}</h3>";
echo "<h4>EditInformation</h4>";
echo "<form action='' method='post'>";
echo "Name：<input type='text' name='name' value='{$row['name']}'><br>";
echo "<button type='submit' name='ok'>Submit</button>";
echo "</form></div>";
if(isset($_POST['ok'])){
    $newName = $_POST['name'];
    $query2 = "update user 
                set name = '$newName' 
                where id='$userid'";
    $stmt=$dbh->query($query2);
    echo "<h2 style='text-align: center;'>Editd successfully</h2>";
    //header('Location:admin.php');
}
?>







