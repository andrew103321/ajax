<?php
//處理刪除資料的請求
include_once "base.php";
$id=$_POST['id'];
$sql = "DELETE FROM `students` WHERE `uni_id`='$id'";

// query 為陣列，空值為無
// exce 會回傳是否成功 ，空值為-1
echo $pdo->exec($sql);
echo "你刪除的學號".$id."的學生";


?>