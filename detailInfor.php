<?php
include_once("conn.php");
include_once('header.php');
$id = $_GET['book_id'];
$query = "select * from book_info where id='$id'";
$stmt= $dbh->query($query);
$query2 = "select * from borrow_list where book_id = '$id'";
$stmt2 = $dbh->query($query2);
?>
<div id="book_detiail">
    <h2>Book Detail</h2>
    <?php
        foreach ($stmt as $row){
            echo "<h3>BookName：".$row['name']."</h3>";
            echo "<h3>Author：".$row['author']."</h3>";
            echo "<h3>Publishing：".$row['press']."</h3>";
            echo "<h3>PublshingDate：".$row['press_time']."</h3>";
            echo "<h3>Price：".$row['price']."</h3>";
            echo "<h3>ISBN：".$row['ISBN']."</h3>";
            echo "Introudction：".$row['name']."</br>";
            echo "<p>".$row['desc']."</p>";
        }
        if($stmt2->rowCount()!=0){
            foreach ($stmt2 as $row)
            echo "<table border='1px black solid'>";
            echo "<tr>";
            echo "<th>RentalPersonID</th>";
            echo "<th>ReturnDate</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>{$row['user_id']}</td>";
            echo "<td>{$row['back_date']}</td>";
            echo "</tr>";
            echo "</table>";
        }
    ?>
</div>







