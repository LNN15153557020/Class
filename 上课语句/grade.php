<?php
require_once 'conn.php';
require '../libs/Smarty.class.php';
$smarty = new Smarty;
$conn = new Connect();
$set_utf = $conn->set_utf;
$link = $conn->getLink();

if (isset($_GET["id"])){
// echo $id; 
$id = $_GET["id"];
$sql = "select s.stu_rollno,s.stu_name,s.stu_class,c.course_name,a.mark_score,a.mark_desc from tbmark a 
join tbcourse c on c.course_id = a.course_id join tbstudent s on s.stu_id = a.stu_id where a.course_id =$id order by a.mark_score desc";
$smarty->assign("C_id",$id);
}else{
    $sql = "select s.stu_rollno,s.stu_name,s.stu_class,c.course_name,a.mark_score,a.mark_desc from tbmark a 
    join tbcourse c on c.course_id = a.course_id join tbstudent s on s.stu_id = a.stu_id order by a.mark_score desc";  
}
$courseSql = "select course_id,course_name from tbcourse;";
mysqli_query($link,$set_utf);
$res =  mysqli_query($link,$sql);
$course = mysqli_query($link,$courseSql);
while($result = mysqli_fetch_assoc($res)){
    $allRes[] = $result;
}
while($results = mysqli_fetch_assoc($course)){
   $allCou_id[] = $results["course_id"];
   $allCou_name[] = $results["course_name"];
    //   $allCou[] = $results;
}
mysqli_free_result($res);
mysqli_close($link);
// var_dump($allCou_id);
$smarty->assign("course_id",$allCou_id);
$smarty->assign("course_name",$allCou_name);
// $smarty->assign("course",$allCou);

$smarty->assign("dataStu",$allRes);
$smarty->display("grade.html");

?>