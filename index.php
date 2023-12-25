<?php

$firstname=$_REQUEST['firstname'];
$secondname=$_REQUEST['Second name'];
$address=$_REQUEST['Address'];


if(isset($_POST['btntest"']))
{

$host="localhost";
$user="root";
$password="";
$db="exotics driver store"

$conn = mysqli_connect($host,$user,$password,$db)

$insert= "insert into cutomers data values('$firstname',$secondname',$address')"; 

mysqli_query($conn,$insert);

if($conn){
    echo("<h1 style='color:green;'Your Registration is Done!</h1>")
}
else {
    echo("<h1 style='color:RED;'Your Registration is Failed!</h1>")
}

}




?>