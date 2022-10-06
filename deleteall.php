 <?php

$user="root";
$host="localhost";
$password="";
$dbname="project";
$connection=mysqli_connect($host, $user, $password, $dbname);
$query="delete from student_marks";
$a=mysqli_query($connection, $query);
$n=mysqli_affected_rows($connection);
if($n>0)
{
    echo"$n records deleted successfully";
    header("refresh:3; url=delete.html");
}
else if($n==0) 
{
 echo"no record was present to be deleted";   
    header("refresh:3; url=delete.html");
}
else{
die('error' mysqli_error($connection));
header("refresh:3; url=delete.html");
}
?>