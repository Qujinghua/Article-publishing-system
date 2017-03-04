<?php
header("content-type:text/html;charset=utf-8");
require_once '../include.php';
require_once '../connect.php';
$name=$_POST['name'];
$password=$_POST['password'];
// $name=addslashes($name);
// $password=md5($_POST['password']);
// $autoFlag=$_POST['autoFlag'];

$sql_1="select * from admin where name='{$name}' and password='{$password}'";
$rs=mysqli_query($link,$sql_1);
$num=mysqli_num_rows($rs);

$row = mysqli_fetch_array($rs);
print_r($row);
// while($row = mysqli_fetch_array($rs)){
//     $rows[] = $row;
//   }
//   echo $row['name'];

// if($num){
//   echo "<script>alert('登录成功'); window.location.href='index.php';</script> ";
// }else{
//   echo "<script>alert('登陆失败，重新登陆'); window.location.href='login.php';</script> ";
// };


if($num){

  if($row){
  //如果选了一周内自动登陆
  if(@$autoFlag){
    setcookie("adminId",$row['id'],time()+7*24*3600);
    setcookie("adminName",$row['name'],time()+7*24*3600);
  }
  $_SESSION['adminName']=$row['name'];
  $_SESSION['adminId']=$row['id'];
  echo "<script>alert('登录成功'); window.location.href='index.php';</script> ";
}else{
  echo "<script>alert('登陆失败，重新登陆'); window.location.href='login.php';</script> ";
}

}else{
  echo "<script>alert('没有管理员'); ";
}


