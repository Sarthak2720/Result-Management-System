<?php
session_start();
$user="root";
$host="localhost";
$password="";
$dbname="project";
$connection=mysqli_connect($host, $user, $password, $dbname);
$m="";
if (empty($_POST)===false) {
    
    $role_number=$_POST['role_number'];
    $_SESSION['rno']=$_POST['role_number'];
    $query="select * from student_marks where role_number='$role_number'";
    $result=mysqli_query($connection, $query);
    
    if(mysqli_num_rows($result)==0)
    {
    $m="Incorrect Roll No.";
    header("refresh:3; url=checkresult.php");
    }
    else{
    header("refresh:3; url=fetch.php");
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Examination Result</title>
    <link rel="stylesheet" href="checkresult.css">
</head>
<style>
    input:focus,textarea:focus
    {
     outline: none;  
   }
   body{
     overflow-x:hidden;
   }
</style>
<body>
    <nav>
        <ul>
            <li>
                <div id="list" onmouseover="col()" onmouseout="coll()">
                    HOME<a href="1.html"><span class="hey"></span></a>
                </div>
            </li>

            <li>
                <div id="list1" onmouseover="col1()" onmouseout="coll1()">
                    ABOUT US<a href="aboutus.html"><span class="hey"></span></a>
                </div>
            </li>

            <li>
                <div id="list2" onmouseover="col2()" onmouseout="coll2()">
                    CONTACT US<a href="contactus.html"><span class="hey"></span></a>
                </div>
            </li>

            <li>
                <div id="list3" onmouseover="col3()" onmouseout="coll3()">
                    LOGIN<a href="login.html"><span class="hey"></span></a></div>
            </li>
        </ul>
    </nav>
    <h1 style="position:relative;left: 40px;">Symbiosis University Of Applied Sciences</h1>
    <h2 style="position:relative;left: 40px;">UG Examination (1 SEMESTER) 2021</h2>
    <img src="download.jpg" style="height: 120px;position:relative;bottom:50px;left: 270px;">
    <hr color="lightgrey" width="1000px" style="position: relative;bottom: 100px;"> 
    <?php echo "<h5 style='position:relative;bottom: 70px;left: 640px;color:red;font-size: 17px;'>".$m."</h5>";?>

<form action="" method="post">
<p >Roll Number : </p>
<input type="text" id="id" name="role_number" placeholder="Enter your Roll Number" style="position: relative;bottom: 154px;font-size:18px;height:35px;width:300px;">
<input type="submit" id="id1" value="Submit" style="position: relative; bottom: 60px;font-size:18px;height:35px;width:300px;border:none;">
</form>
</body>
<script>

    function col() {
        document.getElementById("list").style.backgroundColor = "lightblue"
    }
    function col1() {
        document.getElementById("list1").style.backgroundColor = "lightblue"
    }
    function col2() {
        document.getElementById("list2").style.backgroundColor = "lightblue"
    }
    function col3() {
        document.getElementById("list3").style.backgroundColor = "lightblue"
    }
    function coll() {
        document.getElementById("list").style.backgroundColor = "darkseagreen"
    }
    function coll1() {
        document.getElementById("list1").style.backgroundColor = "darkseagreen"
    }
    function coll2() {
        document.getElementById("list2").style.backgroundColor = "darkseagreen"
    }
    function coll3() {
        document.getElementById("list3").style.backgroundColor = "darkseagreen"
    }
</script>
</html>