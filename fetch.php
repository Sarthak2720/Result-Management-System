<?php
session_start();
$user="root";
$host="localhost";
$password="";
$dbname="project";
$connection=mysqli_connect($host, $user, $password, $dbname);
if (isset($_SESSION)) {
    $rolno=$_SESSION['rno'];
}

$query="select * from student_marks where role_number='$rolno'";

$result=mysqli_query($connection, $query);

while($row=mysqli_fetch_array($result))
{
$rno=$row['role_number'];
$name=$row['name'];
$math=$row['maths'];
$web=$row['webtech'];
$coa=$row['coa'];
$pcc=$row['pcc'];
$dbms=$row['dbms'];
}
?>
<!DOCTYPE html>
<html>
    <head>
</head>
<style>
    table {
    font-family: arial, sans-serif;
    font-weight:lighter;
    border-collapse: collapse;
 
}
td,
th {
    border: 1px solid black;
    text-align: left;
    padding: 5px;
}
.c1{
    width: 170px;
}
.c2{
    width: 650px;
}
.c3{
    width: 80px;
}
.c4{
    width: 85px;
}
          
    
body{
    width: 80%;
    overflow-x: hidden;
}
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap'); 
b{
    font-family: arial, sans-serif; 
    font-size:15px;
}
span{
    font-weight:lighter;
}
    </style>
<body><br>
<h1 style="position:relative;left: 460px;">Symbiosis University Of Applied Sciences</h1>
    <h2 style="position:relative;left: 540px;color:grey;bottom:10px;">UG Examination (I SEMESTER) 2022</h2>
    <img src="download.jpg" style="height: 120px;position:relative;bottom:126px;left: 325px;">
    <hr color="lightgrey" width="1080px" style="position: relative;bottom: 110px;left: 115px;">
    <b style="position:relative;bottom: 65px;line-height:25px;left: 150px;">Roll No: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "<span>".$rno."</span>";?><b><br>
    <b>Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "<span>".$name."</span>";?><b><br>
    <b>Examination:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>Mid-Semester Test<span><b><br>
    <br>
        <table>
            <tr style="color:#ffff;background-color:#de2a1b;font-weight:bolder;">
                <td class="c1">SUBJECT CODE</td>
                <td class="c2">SUBJECT NAME</td>
                <td>MARKS</td>
                <td class="c4">GRADES</td>
            </tr>
            <tr>
                <td class="c1">BTCS0101</td>
                <td class="c2">APPLIED MATHEMATICS</td>
                <td><?php echo $math;?></td>
                <td><?php if ($math>=24) {echo "O";} 
                elseif ($math>=22 && $math<=23) {
                    echo "A+";}
                elseif ($math>=20 && $math<=21) {
                        echo "A";
                    }
                    elseif ($math>=18 && $math<=19) {
                        echo "B";
                    }
                    elseif ($math>=16 && $math<=17) {
                        echo "C";
                    }
                    elseif ($math>=14 && $math<=15) {
                        echo "D";
                    }
                    elseif ($math>=10 && $math<=13) {
                        echo "E";
                    }
                    elseif ($math<10) {
                        echo "F";
                    }
                    ?></td>
            </tr>
            <tr>
                <td class="c1">BTCS0102</td>
                <td class="c2">WEB TECHNOLOGY</td>
               <td class="c3"><?php echo $web;?></td>
                <td><?php if ($web>=24) {echo "O";} 
                elseif ($web>=22 && $web<=23) {
                    echo "A+";}
                elseif ($web>=20 && $web<=21) {
                        echo "A";
                    }
                    elseif ($web>=18 && $web<=19) {
                        echo "B";
                    }
                    elseif ($web>=16 && $web<=17) {
                        echo "C";
                    }
                    elseif ($web>=14 && $web<=15) {
                        echo "D";
                    }
                    elseif ($web>=10 && $web<=13) {
                        echo "E";
                    }
                    elseif ($web<10) {
                        echo "F";
                    }
                    ?></td>
            </tr>
            <tr>
                <td class="c1">BTCS0103</td>
                <td class="c2">COMPUTER ORGANISATION AND ARCHITECTURE</td>
               <td class="c3"><?php echo $coa;?></td>
                <td><?php if ($coa>=24) {echo "O";} 
                elseif ($coa>=22 && $coa<=23) {
                    echo "A+";}
                elseif ($coa>=20 && $coa<=21) {
                        echo "A";
                    }
                    elseif ($coa>=18 && $coa<=19) {
                        echo "B";
                    }
                    elseif ($coa>=16 && $coa<=17) {
                        echo "C";
                    }
                    elseif ($coa>=14 && $coa<=15) {
                        echo "D";
                    }
                    elseif ($coa>=10 && $coa<=13) {
                        echo "E";
                    }
                    elseif ($coa<10) {
                        echo "F";
                    }
                    ?></td>
            </tr>
            <tr>
                <td class="c1">BTCS0104</td>
                <td class="c2">PROGRAMMING CONCEPT USING C/C++</td>
                <td class="c3"><?php echo $pcc;?></td>
                <td><?php if ($pcc>=24) {echo "O";} 
                elseif ($pcc>=22 && $pcc<=23) {
                    echo "A+";}
                elseif ($pcc>=20 && $pcc<=21) {
                        echo "A";
                    }
                    elseif ($pcc>=18 && $pcc<=19) {
                        echo "B";
                    }
                    elseif ($pcc>=16 && $pcc<=17) {
                        echo "C";
                    }
                    elseif ($pcc>=14 && $pcc<=15) {
                        echo "D";
                    }
                    elseif ($pcc>=10 && $pcc<=13) {
                        echo "E";
                    }
                    elseif ($pcc<10) {
                        echo "F";
                    }
                    ?></td>
            </tr>
            <tr>
                <td class="c1">BTCS0105</td>
                <td class="c2">DATABASE MANAGEMENT SYSTEM</td>
                <td class="c3"><?php echo $dbms;?></td>
                <td><?php if ($dbms>=24) {echo "O";} 
                elseif ($dbms>=22 && $dbms<=23) {
                    echo "A+";}
                elseif ($dbms>=20 && $dbms<=21) {
                        echo "A";
                    }
                    elseif ($dbms>=18 && $dbms<=19) {
                        echo "B";
                    }
                    elseif ($dbms>=16 && $dbms<=17) {
                        echo "C";
                    }
                    elseif ($dbms>=14 && $dbms<=15) {
                        echo "D";
                    }
                    elseif ($dbms>=10 && $dbms<=13) {
                        echo "E";
                    }
                    elseif ($dbms<10) {
                        echo "F";
                    }
                    ?></td>
            </tr>
                </table>
        <br>
        <br>
        RESULT: <?php if ($math<10 || $web<10 || $coa<10 || $pcc<10 || $dbms<10) {
            echo "FAIL";
        }
        else {
            echo "PASS";
        }
        ?>
 &nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 PERCENTAGE: <?php echo ($math+$web+$coa+$pcc+$dbms)/125*100;echo "%";?><br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button onclick="javascript:window.print();return false">Print</button>
</body>
</html>

