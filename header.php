<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Library Management System</title>
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="style/jquery-3.3.1.js"></script>
    <script src="style/JQ.js"></script>
</head>
<body>
<div id="header">
    <h1>Library Management System</h1>
     <ul style="font-size:12px">
       <li> <a href="admin.php"> HomePage </a></li>
        <li><a href="view.php"> BooksManagement</a></li>
       <li> <a href="usermanager.php">UserManagement</a></li>
        <li><a href="borrowmanager.php">RentalManagement</a></li>
    </ul style="font-size:12px">
    <h4>
        <?php
            session_start();
            echo "User：".$_SESSION['id']; ?>
    </h4>&nbsp&nbsp&nbsp&nbsp&nbsp
    <a href="index.php">Quit</a>
</div>
</body>