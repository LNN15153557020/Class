<?php
require_once 'conn.php';
require '../libs/Smarty.class.php';
$smarty = new Smarty;
$conn = new Connect();
$set_utf = $conn->set_utf;
$link = $conn->getLink();

$sql = "select * from tbstudent";
mysqli_query($link,$set_utf);
// mysql_set_charset($link,"utf8");   设置字符集
// var_dump()    输出任何数据 如多维数组
$res = mysqli_query($link,$sql);
$result = [];
while($row = mysqli_fetch_array($res,MYSQLI_ASSOC)){
    $result[] = array("stu_rollno" => $row["stu_rollno"],
                    "stu_name" => $row["stu_name"],
                    "stu_major" => $row["stu_major"],
                    "stu_class" => $row["stu_class"]);
}
mysqli_free_result($res);
mysqli_close($link);
$smarty->assign("data",$result);
$smarty->display('stu.tpl');

?>