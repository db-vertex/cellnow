<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="icon" sizes="196x196" href="https://dbvertex.com/celnow/assets/images/CelNow 5 1.png" 
        type="image/png">
        <title>CelNow</title>
    <style>
       html,
    body {
        overflow-x: hidden;
    }
      .nav ul li a:hover {
  color: #555;
}
    </style>
  </head>
  <body>
    <!-- <h1 >Hello, world!</h1> -->

    <div class="container" >
    <nav class="navbar navbar-expand-lg bg-body-">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url();?>" >
    <img src="<?php echo base_url();?>assets/images/CelNow 5 1.png"  class="img-fluid" width="180px">
    </a>
    

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav m-auto mb-2 mb-lg-0" >
        <li class="nav-item" style="padding-right:20px ";>
          <a class="nav-link active"  aria-current="page" href="#" style="color:#10B981;font-weight:600;border-radius:32px;border:1px solid">Donate</a>
        </li>
        <li class="nav-item dropdown" style="padding-right:20px";>
          <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#10B981;font-weight:600;border-radius:32px;border:1px solid">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url();?>welcome/fillter_product">Reusable parts and product</a></li>
            <li><a class="dropdown-item" href="#">Tuitions</a></li>
            <li><a class="dropdown-item" href="#">Freelancer / Part time</a></li>
            <li><a class="dropdown-item" href="#">Intership</a></li>
            
          </ul>
        </li>
        <li class="nav-item dropdown" style="padding-right:20px";>
          <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#10B981;font-weight:600;border-radius:32px;border:1px solid">
            Service Center 
          </a>
          <ul class="dropdown-menu" >
          <?php
                $category = get_all_shopcategory();
                foreach ($category as $key => $cat) {
                  ?>
            <li><a class="dropdown-item" href="#"><?php echo $cat->shop_category; ?></a></li>
           
            <?php }?>
          </ul>
        </li>
        <li class="nav-item" style="padding-right:20px";>
          <a class="nav-link" href="<?php echo base_url();?>welcome/shop" style="color:#10B981;font-weight:600;border-radius:32px;border:1px solid;background-color:#10b981;color:white">Shop -></a>
        </li>
        <li class="nav-item" style="padding-right:20px";>
          <a class="nav-link" href="<?php echo base_url();?>welcome/postproduct" style="color:#10B981;font-weight:600;border-radius:32px;border:1px solid;background-color:#d1fae5;">Ad Post</a>
        </li>
        
        <!-- <li class="nav-item" hello>
        <a class="nav-link" href="#" style="color:#10B981;font-weight:600;padding-left:22px">Login/Signup</a>
        </li> -->
     </ul>
     <?php  if(!empty($user)){
      $profile = get_seller_profile($user['user_id']);
   ?>
    <div class="nav-item dropdown" style="padding-right:20px";>
   
   <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#10B981;font-weight:600;">
   <?php echo ucfirst($profile->name);?> 
          </a>
   <ul class="dropdown-menu">
    
            <li><a class="dropdown-item" href="<?php echo base_url();?>welcome/myprofile">My profile</a></li>
          
            <li><a class="dropdown-item" href="#">My Chat</a></li>
            <?php if($profile->login_type == 'normal'){ ?>
              <li> <a class="dropdown-item" href="<?php echo base_url();?>welcome/changepassword" class="">Change Password</a></li>
                        <?php } ?>
            <li><a class="dropdown-item" href="<?php echo base_url();?>welcome/logout">logout</a></li>
          </ul>
     </div>
         <?php  }
          else{ ?>
         
          <a class="nav-link" href="<?php echo base_url();?>welcome/login" style="color:#10B981;font-weight:600;">Login</a>/ <a class="nav-link" href="<?php echo base_url();?>welcome/signup" style="color:#10B981;font-weight:600;"> Signup</a>

          <?php }?>
            </div>
  </div>
</nav>
</div>  
<!-- <img src="<?php echo base_url();?>assets/images/celNow.png"  class="img-fluid"> -->





  </body>
</html>
<script>
"use strict"; / Start of use strict /
(function () {
function14();
})();
function function14() {
$('.btnSweetalert').on("click", function () {
swal({
title: " Logout!",
text: "Are you sure you want to logout?",
type: "warning",
showCancelButton: true,
confirmButtonColor: "#DD6B55",
confirmButtonText: "Yes",
cancelButtonText: "No",
closeOnConfirm: false,
closeOnCancel: false},
function (isConfirm) {
if (isConfirm) {

 window.location.href = "<?php echo base_url();?>welcome/logout";
} else {
swal("Cancelled", "Something went wrong. Please try again.)", "error");
}
});
});
}
</script>