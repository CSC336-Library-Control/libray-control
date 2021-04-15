<?php
include_once("conn.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library Management System</title>
<link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="Login_Register">
    <h2>Library Management System</h2>
    <form action="login.php" method="post">
       &nbsp UserID &nbsp&nbsp&nbsp：<input type="text" name="userid" placeholder="Enter Userid"><br>
        &nbsp Password &nbsp：<input type="password" name="password" placeholder="enter Password"><br><br>
        <button type="submit" name="ok1">Login</button>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <button type="submit" name="ok2">Register</button>
    </form>
</div>
</body>
