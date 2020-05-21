<?php
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$course=$_POST['course'];
$sql="INSERT INTO student VAUES('$rollno','$name','$course')";
$cn=mysqul_connect("localhost","root","","abes")or die("unable to connect");
mysqli_query($cn,$sql);
mysqli_close($cn);
echo "done";
}
?>