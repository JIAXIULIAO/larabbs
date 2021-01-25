
<?php

$conn=$mysql_connect("localhost","root","root");

//var_dump($conn);

if(!$conn){

    die("数据库链接失败!");

} 

$mysql_select_db("liuyan");//设置操作的数据库 

$mysql_query("set names utf8");//设置操作编码 
$sql="insert into obj_message set nicheng='1',touxiang='2',neirong='3',shijian='2020'";
$rst=mysqli_query($conn,$sql); 
