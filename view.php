<?php
include_once('header.php');
include_once("conn.php");
$query = "select * from book_info";
$stmt= $dbh->query($query);

$arr = array();
$arr2 = array();
$query2 = "select book_id,back_date from borrow_list";
$stmt2= $dbh->query($query2);
foreach ($stmt2 as $row){
    if(strtotime($row['back_date'])>time()){//Still lending
        array_push($arr,$row['book_id']);
    }else{                                  //OverDue
        array_push($arr2,$row['book_id']);
    }
}
echo "</table>";
?>
<div id="FanYe">
    <ul>
        <?php
            $count = 0;
            echo "<h2 style='text-align: center'>BookDetail</h2>";
            foreach ($stmt as $row){
                echo "<li>";
                echo "BookNumber：{$row['id']}&nbsp&nbsp&nbsp&nbsp&nbsp";
                echo "BookName：{$row['name']}&nbsp&nbsp&nbsp&nbsp&nbsp";
                echo "Author：{$row['author']}&nbsp&nbsp&nbsp&nbsp&nbsp";
                if(in_array($row['id'],$arr)){
                    echo "<h4 style='color: #f0770c'>Lended</h4>&nbsp&nbsp&nbsp&nbsp&nbsp";
                }else if (in_array($row['id'],$arr2)){
                    echo "<h4 style='color: #d43f3a'>OverDue</h4>&nbsp&nbsp&nbsp&nbsp&nbsp";
                } else{
                    echo "<h4 style='color: greenyellow'>InLibray</h4>&nbsp&nbsp&nbsp&nbsp&nbsp";
                }
                $id = $row['id'];
                echo "<a href='detailInfor.php?book_id=$id'>Detail</a>";
                echo "</li>";
                if($count>12){
                    $count=0;
                }else{
                    $count++;
                }
            }

        ?>
    </ul>

</div>
<?php
$string = <<<EOT
<div class="layui-box layui-laypage layui-laypage-molv" id="layui-laypage-1">

            <a href="javascript:" class="layui-laypage-first" data-page="0">HomePage</a>
            <a href="javascript:" class="layui-laypage-pre" data-page="2">PreviousPage</a>
            <a href="javascript:" class="layui-laypage-next" data-page="2">NextPage</a>
            <a href="javascript:" class="layui-laypage-last" data-page="2">LastPage</a>
            <a href="bookadd.php">Add Book</a></li>           
            <a href="bookdel.php">Delete Book</a></li>


</div>
EOT;
echo $string;
?>



