<?php

$user="root";
$host="localhost";
$password="";
$dbname="project";
$connection=mysqli_connect($host, $user, $password, $dbname);
$role_number=$_POST['role_number'];
$name=$_POST['name'];
$maths=$_POST['maths'];
$webtech=$_POST['webtech'];
$coa=$_POST['coa'];
$pcc=$_POST['pcc'];
$dbms=$_POST['dbms'];
$query="insert into student_marks values('$role_number', '$name', $maths, $webtech, $coa, $pcc, $dbms)";
$a=mysqli_query($connection, $query);
if($a)
{
    echo"record inserted successfully";
    header("refresh:3; url=inputmarks.html");
}
else{
    die('error'.mysqli_error($connection));
    header("refresh:3; url=inputmarks.html");
}
?>