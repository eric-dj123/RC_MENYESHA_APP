<?php
$conn=new mysqli("localhost","root","","menyesha_db");
$anou_id=$_GET['anou_id'];
$number=0;
$sql="UPDATE `anouncement_tbl` SET `status`='$number' WHERE anou_id=$anou_id";
if ($conn->query($sql))
 {
    echo"<script>alert('Anouncement has been Restored');window.location='view_anouncement.php';</script>";
}
else
{
    echo"<script>alert('samething went wrong');window.location='view_anouncement.php';</script>";
}
?>