
<?php
session_start();
include_once("conn.php");
if(isset($_POST['ok1'])){//Click the login button
    $userid = $_POST['userid'];
    $password = md5($_POST['password']);
    $strQuery = "select * from user where id = '$userid' and pwd ='$password'";
    $stmt= $dbh->query($strQuery);
    if($stmt->rowCount()==1){
        echo "Incorrect account or password, please re-enter！";
    }else{                      //The account password is correct, successfully enter the system
        date_default_timezone_set('PRC');//Set default time zone
        $nowTime = date('Y-m-d H:i:s',time());
        $updatetime = "update user set last_login_time = '$nowTime' where id=$userid";
        $st = $dbh->query($updatetime);
        $_SESSION['id'] = $userid;
        header('Location:admin.php');
    }
}
if(isset($_POST['ok2'])){//Click the register button
    header('Location:register.php');
}
?>
