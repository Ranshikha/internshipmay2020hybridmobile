<?php
if(isset($_POST['name'])&&isset($_POST['age'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    if($age>=18)
        echo"dear $name can vote";
    
    else
        echo"dear $name can't vote";
    
    $sql="INSERT INTO candidate VALUES('$name','$age')";
    $cn=mysqul_connect("localhost","root","","country");
    mysqli_query($cn,$sql);
    mysqli_close($cn);
}


?>