<?php
include_once('header.php');
include_once("conn.php");
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Library Management System</title>
    <link href="style/style.css" rel="stylesheet" type="text/css">

</head>
<body>
<div id="userinfo">
    <h2>Personal Information</h2>
    <?php
        $id = $_SESSION['id'];
        $query = "select * from user where id='$id'";
        $stmt= $dbh->query($query);
        foreach ($stmt as $row){
            echo "<h3>UserID&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp{$row['id']}</h3>";
            echo "<h3>UserName&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp{$row['name']}</h3>";
			echo "<h3>&nbsp Email&nbsp&nbsp:&nbsp&nbsp&nbsp{$row['Email']}</h3>";
			echo "<h3>Phone&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp{$row['Phone']}</h3>";
            if($row['status']==1){
                echo "<h3>UserStatus&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNormal</h3>";
            }else{
                echo "<h3>UserStatus&nbsp&nbsp&nbsp：&nbsp&nbsp&nbsp Owe</h3>";
            }

        }
        echo "<a href='AlterUserManager.php?user_id=$id' style='float: right;margin-right: 100px'>Edit Personal Information</a><br>";
        ?>
    <?php
    $query = "SELECT book_id,name,borrow_date,back_date 
            FROM borrow_list a,book_info b 
            WHERE a.book_id = b.id AND a.user_id='$id'";
    $stmt= $dbh->query($query);

    echo "<table border='1px gray solid' width='600px' align='center' cellpadding='0' cellspacing='0'>";
    echo "<caption><h2>Personal Rental information </h2></caption>";
    echo "<tr style='line-height: 40px;'><th>BookNumber</th><th>BookName</th><th>RentalTime</th><th>ReturnTime</th><th>Detail</th></tr>";
    $time = time();
    $borrow_data = date("Y-m-d",$time);
    $a = strtotime($borrow_data);
    foreach ($stmt as $row){
        echo "<tr style='text-align: center;line-height: 40px'>";
        echo "<td>".$row['book_id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['borrow_date']."</td>";
        echo "<td>".$row['back_date']."</td>";
        $b = strtotime($row['back_date']);
        if($a<=$b){
            echo "<td><span style='color: #5cb85c'>Normal</span></td>";
        }else{
            echo "<td><a href='borrowmanager.php' style='color: #d43f3a;text-decoration: none;'>OverDue</a></td>";
        }
        echo "</tr>";
    }
    echo "</table>"
    ?>
</div>
</body>
</html>

