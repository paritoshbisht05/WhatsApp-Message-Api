<?php
session_start();
//include("database/db.config.php");
 
 date_default_timezone_set('Asia/Kolkata');      
$datetime=date("Y-m-d h:i:sa");

if (isset($_POST['save'])) 
{
  $number=$_POST['user'].$_POST['number'];
  $message=$_POST['message'];
  


  //https://wa.me/
//echo "$number";

 //mysqli_query($con,"insert into record(number,message,datetime) values ('$number','$message','$datetime')") or die(mysqli_error());
  header("location:https://api.whatsapp.com/send/?phone=$number&text=$message&app_absent=0");

}
//else
//{
  //echo "<script language='javascript'>alert('error');window.location='index.php'</script>";/
//}

  ?>





<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>WHATSAPP API</title>
<link rel="icon" type="image/icon" href="image/whatsapp_icon-icons.com_62756.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet"  type="text/css" href="css/all.css"/>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="image/whatsapp_icon-icons.com_62756.png" width="30" height="30" alt="
    whatsapp">
  </a>
  <a class="navbar-brand" href="#">WHATSAPP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

     
      </div>
     <!-- <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>
</div>
</div>
</div>
   <!--   <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>-->
    </ul>
  </div>
</nav>
  <script language="javascript">
function check()
{

   if(document.form.user.value=="")
  {
    alert("Please Select Country Code");
  document.form.user.focus();
  return false;
  }

   if(document.form.number.value=="")
  {
    alert("Please Enter Number");
  document.form.number.focus();
  return false;
  }

 return true;
}
</script>


<br><br>

   <div class="bg1">
<div align="center">
<div class="col-md-3"></div>
<!--<div class="col-md-6 panel" style="background-image:url(image/bg1.jpg); min-height:500px;">-->
     <br>
  <!--   <h4 align="" style="font-family:'type'; color:#f7260f" ><b>Note:
       
        <b>
        <br>&emsp;&emsp;*Password should not be same as loginid
        <br>&emsp;&emsp;*Password should minimum length 8 Character
        <br>&emsp;&emsp;*Password should alpha numeric
        <br>&emsp;&emsp;*Password should one character
    </b></h4>-->
<h2 align="center" style="font-family:'type'; color:#000066">Whatsapp Message</h2>
<div style="font-size:23px">


<form  method="post" action="" align="center" name="form" onsubmit="return check();" >

<br>
<label>Country Code:
<br>
<select class="form-control"  name="user" id="user" >
      <option value=""disabled selected>Choose One</option>
      
       <option value="+91" selected="">+91 India</option>
        <option value="+92">+92 Pakistan</option>
         <option value="+93">+93 Afghanistan</option>
         <option value="+86">+86 China</option>
         <option value="+977">+977 Nepal</option>
       </select></label> 
<label>Mobile Number:

<input class="form-control" type="number" autocomplete="off" placeholder="Enter Mobile Number" name="number"  id="number"  ></label>

<br>
<label>Message:



<textarea rows="5"  cols="100"  class="form-control" placeholder="Enter Message"  name="message" id="message">https://chat.whatsapp.com/H1EstGrlta7DU9SpZM8u9s</textarea>
</label>
<br>

<br>

  <button type="submit" name="save" class="btn btn-primary">Send</button>
</form>
</body>
<br>
<br>


  <div align="center">

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">

    <i class="fas fa-id-card"></i> 
  About Developer
</button>

</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
       


        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="image/IMG_20191201_131325_906.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Paritosh Bisht</h5>
    <p class="card-text">
     &nbsp; <span class="fas fa-book"></span>:&nbsp;BCA,MCA<br>
      &nbsp;<span class="fas fa-university"></span>:&nbsp;Graphic era University  



    </p>

    <div class="icon-bar">
 <a  href="https://www.facebook.com/paritoshbisht19/" target="_blank"><i class="fab fa-facebook-square"></i></a>&nbsp;
 <a  href="https://www.instagram.com/paritoshbisht_19/"  target="_blank"><i class="fab fa-instagram"></i></a>&nbsp;
 <a  href="https://twitter.com/ParitoshBisht"  target="_blank"><i class="fab fa-twitter"></i></a>&nbsp;
 <a  href="https://www.linkedin.com/in/paritosh-bisht-a208bb171/"  target="_blank"><i class="fab fa-linkedin"></i></a><p>

<h6>   <a href="tel:7302020015"><span class="fas fa-phone-alt"></span>:&nbsp;7302020015</a> <br>
<a href="mailto:paritoshbisht05@gmail.com"><span class="fas fa-envelope-square"></span>:&nbsp;paritoshbisht05@gmail.com</a></h6>
</p>

</div>


   <!-- <a href="#" class="btn btn-primary">Go somewhere</a>-->
  </div>
</div>
      </div>
     <!-- <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>