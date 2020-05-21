<?php
if(isset($_POST['name'])){
    $n=$_POST['name'];
    $a=$_POST['age']
    if($n>=18){
        echo"rohit $n can vote";
    }
    else{
        echo"$n can't vote";
    }
}


?>