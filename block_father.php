<?php
$conn=new mysqli("localhost","root","","menyesha_db");
$fath_id=$_GET['fath_id'];
$number=1;
$sql="UPDATE `father_tbl` SET `status`='$number' WHERE fath_id=$fath_id";
if ($conn->query($sql))
 {
    echo"<script>alert('User Blocked');window.location='View_father.php';</script>";
}
else
{
    echo"<script>alert('samething went wrong');window.location='View_father.php';</script>";
}
?>