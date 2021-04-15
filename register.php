<?php
include_once("conn.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>User Register</title>
    <link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="register">
    <form action="" method="post">
        <h1>User Register</h1>
        UserName：<input type="text" name="name" placeholder="enter User Name"><br><br>
       &nbsp&nbsp UserId &nbsp ：<input type="text" name="userid" placeholder="enter User id"><br><br>
        Password：<input type="password" name="password" placeholder="enter password"><br><br>
		&nbsp&nbsp Phone &nbsp：<input type="Phone" name="Phone" placeholder="enter PhoneNumber"><br><br>
		&nbsp&nbsp Email &nbsp：<input type="Email" name="Email" placeholder="enter Email"><br>
        <button type="submit" name="ok1">submit</button>
        <button type="submit" name="ok2">reset</button><br>
        <?php
        if(isset($_POST['ok1'])){
            $name = $_POST['name'];
            $arr = array();
            $id = $_POST['userid'];
            $password = md5($_POST['password']);
			$Phone = $_POST['Phone'];
			$Email = $_POST['Email'];
            $time = date('Y-m-d h:i:s', time());
            $query = "Select * from user";
            $stmt= $dbh->query($query);
            foreach ($stmt as $row){
                array_push($arr,$row['id']);
            }
            if(in_array($id,$arr)){
                echo "<h4 style='color: #d43f3a'>The account already exists, please re-enter the account！</h4>";
            }else{
                $query2 = "Insert into user(id,pwd,name,Phone,Email)values(:id,:pwd,:name,:Phone,:Email)";
                $stmt2 = $dbh->prepare($query2);
                $stmt2->bindParam(':id',$id);
                $stmt2->bindParam(':pwd',$password);
                $stmt2->bindParam(':name',$name);
				$stmt2->bindParam(':Phone',$Phone);
				$stmt2->bindParam(':Email',$Email);
 
                $stmt2->execute();

//                $query2 = "Insert into user values('$id','$password','$name','$class','1','0','$time')";
//                $stmt2=$dbh->query($query2);
                if($stmt2){
                    $_SESSION['id'] = $id;
                    header('Location:admin.php');
                }else{
                    echo "<h4 style='color: #d43f3a'>The account information is incorrect, please re-enter the account！</h4>";
                }

            }
        }
        ?>
    </form>
    <a href="index.php" style="float: right;margin-right: 20px;">return</a>
</div>
</body>
</html>

