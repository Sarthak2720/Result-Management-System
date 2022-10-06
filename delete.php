<?php

$user="root";
$host="localhost";
$password="";
$dbname="project";
$connection=mysqli_connect($host, $user, $password, $dbname);
$roll_number=$_POST['roll_number'];
$name=$_POST['name'];
$query="delete from `student_marks` where role_number='$roll_number'or name='$name';";
$a=mysqli_query($connection, $query);
$n=mysqli_affected_rows($connection);
if($n>0)
{
 echo"$n record deleted successfully";
    header("refresh:3; url=delete.html");
}
else if($n==0)
{
echo"no matching record found to be deleted";   
header("refresh:3; url=delete.html");
}
else
{
    die('error'.mysqli_error($connection));
//    header("refresh:3; url=delete.html");

}
?>