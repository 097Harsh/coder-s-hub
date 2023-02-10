<?php
session_start();

include 'common/connect.php';

$id = $_GET['moreid'];
$user_id = $_SESSION['user_id'];
$date = date('Y-m-d');

$exe = $obj->query("insert into job_app(job_id,user_id,date)values('$id','$user_id','$date')");

if ($exe) {

    echo "<script>alert('Applied job successfully');</script>";

    header("location:index.php");
}
else
{
  echo "<script>alert('Something went wrong!..');</script>";
}

?>
