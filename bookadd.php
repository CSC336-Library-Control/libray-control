<?php
include_once('header.php');
include_once("conn.php");
include 'connect.php';
?>



<form action = "bookadd.php" method = "POST">
    <div class="div2" name="Center">
        <h1>Add Book</h1>
        <label style="font-weight: bold;display: inline-block;
        width: 140px;
        text-align: right;">Name:</label>
        <input type="text" name="title"/> <br>
        <label style="font-weight: bold;display: inline-block;
        width: 140px;
        text-align: right;">Author:</label>
        <input type="text" name="author"/><br>
        <label style="font-weight: bold;display: inline-block;
        width: 140px;
        text-align: right;">Publication</label>
        <input type="text" name="publication"><br>
        <label style="font-weight: bold;display: inline-block;
        width: 140px;
        text-align: right;">ISBN:</label>
        <input type="text" name="ISBN"><br>
        <label style="font-weight: bold;display: inline-block;
        width: 140px;
        text-align: right;">Publication Date:</label>
        <input type="text" name="Date"><br>
        
        <label style="font-weight: bold;display: inline-block;
        width: 140px;
        text-align: right;">Price:</label>
        <input type="text" name="price"><br>
        <label style="font-weight: bold;display: inline-block;
        width: 140px;
        text-align: right;">Description:</label>
        <input type="text" name="description"><br>
        <button type="submit" style="margin-left:15em;height:5%;Width:15%;" name="submit">Add</button>
    </div>
    </form>

    <?php

   
    if(isset($_POST['title'])){ 
    $title =$_POST['title'];
    $Author =$_POST['author'];
    $Publication_date =$_POST['Date'];
    $ISBN = $_POST['ISBN'];
    $publication = $_POST['publication'];
    $price = $_POST["price"];
    $des = $_POST["description"];
    //if(isset($title) && isset($Author) && isset($Publication_date) && isset($ISBN) && isset($publication) && isset($price)){
    $sqla = "INSERT INTO book_info(book_info.name,author,press,press_time,price,ISBN,book_info.desc) VALUES('$title','$Author','$publication','$Publication_date','$price','$ISBN','$des');";
    mysqli_query($conns,$sqla);
    }
//}
    ?>
   