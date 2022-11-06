<?php
$conn=new mysqli("localhost","root","","menyesha_db");
$rec_id=$_GET['rec_id'];
$number=1;
$sql="UPDATE `receptionist_tbl` SET `status`='$number' WHERE rec_id=$rec_id";
if ($conn->query($sql))
 {
    echo"<script>alert('User Blocked');window.location='View_receptionist.php';</script>";
}
else
{
    echo"<script>alert('samething went wrong');window.location='View_receptionist.php';</script>";
}
?>