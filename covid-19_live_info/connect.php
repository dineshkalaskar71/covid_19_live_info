<?php
$con = mysqli_connect('sql101.epizy.com','epiz_29057970','sDKjFFeAUfUe');
if($con)
{
    echo "connection successfull";

}else{
    echo "no connetion";
}

mysqli_select_db($con,'epiz_29057970_covidinfo');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile']; 
$comment = $_POST['comment'];

$query = "insert into userinfodata(user,email,mobile,comment) 
values('$user','$email','$mobile','$comment')";

mysqli_query($con,$query);

header('location:index.php');

?>