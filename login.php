<?php

$user="root";
$host="localhost";
$password="";
$dbname="project";
$connection=mysqli_connect($host, $user, $password, $dbname);
$lid=$_POST['lid'];
$password=$_POST['password'];
$query="select * from login where lid='$lid' and password ='$password'";
$result=mysqli_query($connection, $query);
if (mysqli_num_rows($result)==1) 
            {
                echo"you logged in successfully"; 
            header("refresh:3; url= inputmarks.html");
            }   

else{
echo"please enter correct details";
header("refresh:3; url= login.html");
}            