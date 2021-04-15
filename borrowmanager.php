<?php
include_once('header.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Library Management System</title>
    <link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="Login_Register" style="height: 320px;">
    <h2>Rental Operation</h2>
    <form action="borrow_ope.php" method="post">
       &nbsp UserID &nbsp&nbsp ：<input type="text" name="userid" placeholder="enter UserId"><br><br>
         BookNumber ：<input type="text" name="bookid" placeholder="Enter BookNumber"><br>
        <h3 id="borrowMan"><input type="radio" name="operation" value="0" checked> &nbsp Rental&nbsp&nbsp<input type="radio" name="operation" value="1">Return</h3>
        <button type="submit" name="ok">confirm</button>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <button type="submit" name="ok2">reset</button>

    </form>
</div>
</body>

