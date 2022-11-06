<?php include('header.php'); ?>
<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_POST['submit2'])) {
 $firstname=mysqli_real_escape_string($con,trim($_POST['firstname']));
 $lastname=mysqli_real_escape_string($con,trim($_POST['lastname']));
    $phonenumber=mysqli_real_escape_string($con,trim($_POST['phonenumber']));
    $email=mysqli_real_escape_string($con,trim($_POST['email']));
    $fath_id=mysqli_real_escape_string($con,trim($_POST['fath_id']));
    $password=mysqli_real_escape_string($con,trim($_POST['password']));
    $cpass =$_POST['rpassword']; 
  // images
$img_name = $_FILES['my_image']['name'];
$img_size = $_FILES['my_image']['size'];
$tmp_name = $_FILES['my_image']['tmp_name'];
$error = $_FILES['my_image']['error'];
$select_chech = mysqli_query($con, "SELECT * FROM receptionist_tbl WHERE email='".trim($_POST['email'])."' OR phonenumber='".trim($_POST['phonenumber'])."'");
// uplading Thumbnail
if ($img_size > 2250000) {
  echo '<script>alert("Sorry, your file is too large.")</script>';
}elseif (mysqli_num_rows($select_chech) > 0) {
  echo '<script>alert("Email is already Exists.")</script>';

}
elseif(mysqli_num_rows($select_chech) > 0){
    echo "<script>
    alert('Your phonenumber and email is already exists check');document.location ='add_father.php';
    </script>";
}
elseif ($password != $cpass) {
    echo '<script>alert("Password Does Not Match.")</script>';
}
else {
  $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
  $img_ex_lc = strtolower($img_ex);

  $allowed_exs = array("jpg", "jpeg", "png"); 

  if (in_array($img_ex_lc, $allowed_exs)) {
      $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
      $img_upload_path = 'images/'.$new_img_name;
      move_uploaded_file($tmp_name, $img_upload_path);
      $imageSize = getimagesize("$img_upload_path");
      if ($imageSi) {
        echo '<script>alert("file size is not contribute.")</script>';
      }else {
        
          
      // Insert into Database
      $status =0;
      $hashpassword=password_hash($password, PASSWORD_BCRYPT);
      $query=mysqli_query($con,"INSERT INTO `receptionist_tbl`(`firstname`, `lastname`, `email`, `phonenumber`, `password`, `ImageName`, `status`, `fath_id`) 
      VALUES ('$firstname','$lastname','$email','$phonenumber','$hashpassword','$new_img_name','$status','$fath_id')");

          if($query)
          {
            echo '<script>alert("New receptionist User is Created successfully ")</script>';
        
          }
          else{
            echo '<script>alert("Something went wrong . Please try again ")</script>';
 
          }
      }
  }else {
    echo '<script>alert("You cant upload files of this type ")</script>';
  
  }
}
// end of uplading Thumbanail

}
?>

<ol class="breadcrumb" style="margin: 10px 0px ! important;">
    <li class="breadcrumb-item"><a href="Home.php">Home</a><i class="fa fa-angle-right"></i>Receptionist<i class="fa fa-angle-right"></i> Receptionist Add</li>
</ol>
<!--grid-->
<center>
 	<div class="validation-system" style="margin-top: 0;">
 		
 		<div class="validation-form">
 	<!---->
        <form method="POST" action="" enctype="multipart/form-data">
       
        <div class="vali-form-group">
          <div class="col-md-4 control-label">
              <label class="control-label">Firstname</label>
              <div class="input-group">             
                  <span class="input-group-addon">
              <i class="fa fa-user" aria-hidden="true"></i>
              </span>
              <input type="text" name="firstname" title="Employee ID"  class="form-control" placeholder="FirstName" required="">
              </div>
            </div>
            <div class="clearfix"> </div>
            <div class="vali-form-group">
          <div class="col-md-4 control-label">
              <label class="control-label">Lastname</label>
              <div class="input-group">             
                  <span class="input-group-addon">
              <i class="fa fa-user" aria-hidden="true"></i>
              </span>
              <input type="text" name="lastname" title="Employee ID"  class="form-control" placeholder="Lastname" required="">
              </div>
            </div>
            <div class="clearfix"> </div>
            <div class="col-md-4 control-label">
              <label class="control-label">Email</label>
              <div class="input-group">             
                  <span class="input-group-addon">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              </span>
              <input type="email" name="email" title="email"  class="form-control" placeholder="Email" required="">
              </div>
            </div>
            <div class="clearfix"> </div>
            <div class="col-md-4 control-label">
              <label class="control-label">Mobile Number*</label>
              <div class="input-group">             
                  <span class="input-group-addon">
              <i class="fa fa-mobile" aria-hidden="true"></i>
              </span>
              <input type="text" name="phonenumber" title="Mobile Number"  class="form-control" placeholder="Mobile Number" min="10" maxlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required="">
              </div>
            </div>
            <input type="hidden" name="fath_id" title="email"  class="form-control" placeholder="Email" required="" value="<?php echo $_SESSION['fath_id']; ?>">
            
            </div>
            <div class="clearfix"> </div>

            <div class="col-md-4 control-label">
              <label class="control-label">Profile Image*</label>
              <div class="input-group">             
                  <span class="input-group-addon">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
              </span>
              <input type="file" name="my_image" title="Profile Image" class="form-control" name="fileupload"  >
              </div>
            </div>
            <div class="clearfix"> </div>
            <div class="col-md-3 control-label">
              <label class="control-label">Password*</label>
              <div class="input-group">             
                  <span class="input-group-addon">
              <i class="fa fa-pencil" aria-hidden="true"></i>
              </span>
              <input type="password" id="Psw" title="Password" name="password" placeholder="Password " class="form-control" required="">
              <span class="input-group-addon">
              <a><i class='fa fa-eye' aria-hidden='false' onclick="passwordeyes()"></i></a>
              </span>
              </div>              
            </div>
         

              <div class="col-md-3 control-label">
              <label class="control-label">Confirm Password*</label>
              <div class="input-group">             
                  <span class="input-group-addon">
              <i class="fa fa-pencil" aria-hidden="true"></i>
              </span>
              <input type="password" id="Psw" title="Password"  name="rpassword" placeholder="Password " class="form-control" required="">
              <span class="input-group-addon">
              <a><i class='fa fa-eye' aria-hidden='false' onclick="passwordeyes()"></i></a>
              </span>
              </div>              
            </div>
          
              <div class="clearfix"> </div>
          <center>  <div class="col-md-12 form-group">
              <button type="submit" name="submit2" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
              <input type="text" name="imagefilename" hidden="
              ">
            </div>
          <div class="clearfix"> </div></center>
        </form>
 	<!---->
 </div>
</div>
<script>
function passwordeyes() {
    var x = document.getElementById("Psw").type;
    if(x=="password")
      document.getElementById("Psw").type="text";
    else
      document.getElementById("Psw").type="password";
}

</script>
<script>
var OneStepBack;
function nmac(val,e){
  if(e.keyCode!=8)
  {
    if(val.length==2)
      document.getElementById("mac").value = val+"-";
    if(val.length==5)
      document.getElementById("mac").value = val+"-";
    if(val.length==8)
      document.getElementById("mac").value = val+"-";
      if(val.length==11)
      document.getElementById("mac").value = val+"-";
      if(val.length==14)
      {
        document.getElementById("mac").value = val+"-";   
      }
  }
}

function nmac1(val,e){
if(e.keyCode==32){
return false;
}

  if(e.keyCode!=8){

    if(val.length==2)
      document.getElementById("mac").value = val+"-";
    if(val.length==5)
      document.getElementById("mac").value = val+"-";
    if(val.length==8)
      document.getElementById("mac").value = val+"-";
      if(val.length==11)
      document.getElementById("mac").value = val+"-";
      if(val.length==14){
      document.getElementById("mac").value = val+"-";   
    }

    if(val.length==17){
        return false;
    }
  } 
}
</script>
<script>
  contrychange();
  function contrychange()
  {
    var selectedstateid = "<?php echo $StateId; ?>";
    var selectedstateid = parseInt(selectedstateid);

    var selectedcountry = $('#contryid').val();
    $.get("controller/getstatecity.php?Type=s&ci="+selectedcountry+"&ss="+selectedstateid,function(data,status){
        $("#stateid").html(data);
    });
    statechange(selectedstateid);
  }
  function statechange(si)
  {

    var selectedstate = $('#stateid').val();
    if(si!=undefined)
      selectedstate=si;

    var selectedcityid = "<?php echo $CityId; ?>";
    selectedcityid = parseInt(selectedcityid);
    
    $.get("controller/getstatecity.php?Type=c&si="+selectedstate+"&sc="+selectedcityid,function(data,status){
      $("#cityid").html(data);
    });
  }
</script>

<script>
  
  var birthdate = $('#Birthdate').val();
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1;
    var yy = today.getFullYear();
    var tdate = yy+"/"+mm+"/"+dd;

$('#Birthdate').datetimepicker({
  yearOffset:0,
  lang:'ch',
  timepicker:false,
  format:'Y/m/d',
  formatDate:'Y/m/d',
  //minDate:'-1980/01/01', // yesterday is minimum date
  maxDate: tdate // and tommorow is maximum date calendar
});

$('#JoinDate').datetimepicker({
  yearOffset:0,
  lang:'ch',
  timepicker:false,
  format:'Y/m/d',
  formatDate:'Y/m/d',
  //minDate:'-1980/01/01', // yesterday is minimum date
  //maxDate: tdate // and tommorow is maximum date calendar
});

$('#LeaveDate').datetimepicker({
  yearOffset:0,
  lang:'ch',
  timepicker:false,
  format:'Y/m/d',
  formatDate:'Y/m/d',
  //minDate:'-1980/01/01', // yesterday is minimum date
  //maxDate: tdate // and tommorow is maximum date calendar
});

</script>
<?php include('footer.php'); ?>