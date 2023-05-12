<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
    <style>
   @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
/*================================================*/
@import url('https://fonts.googleapis.com/css?family=Roboto');
.carousel-item > div {
  float: left;
}
.carousel-by-item [class*="cloneditem-"] {
  display: none;
}
@media (min-width: 576px) {
    .nav-scroller {
    position: relative;
    z-index: 2;
    height: 5.275rem;
  
}
    }

  .card2{
    --bs-card-spacer-y: 1rem;
    --bs-card-spacer-x: 1rem;
    --bs-card-title-spacer-y: 0.5rem;
    --bs-card-title-color: ;
    --bs-card-subtitle-color: ;
    --bs-card-border-width: var(--bs-border-width);
    --bs-card-border-color: #C5DC49;
    --bs-card-border-radius: 0.575rem;
    --bs-card-box-shadow: ;
    --bs-card-inner-border-radius: calc(var(--bs-border-radius) - (var(--bs-border-width)));
    --bs-card-cap-padding-y: 0.5rem;
    --bs-card-cap-padding-x: 1rem;
    --bs-card-cap-bg: rgba(var(--bs-body-color-rgb), 0.03);
    --bs-card-cap-color: ;
    --bs-card-height: ;
    --bs-card-color: ;
    --bs-card-bg: var(--bs-body-bg);
    --bs-card-img-overlay-padding: 1rem;
    --bs-card-group-margin: 0.75rem;
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    height: var(--bs-card-height);
    word-wrap: break-word;
    background-color: var(--bs-card-bg);
    background-clip: border-box;
    border: var(--bs-card-border-width) solid var(--bs-card-border-color);
    border-radius: var(--bs-card-border-radius);
}
p {
    margin-top: 0;
    margin-bottom: 0rem;
    font-family:'Open Sans';
    font-weight:500;
    font-size:0.9rem;
}

.nav-scroller {
    position: relative;
    z-index: 2;
    height: 5.275rem;
   
}
.nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
}


  *, *::before, *::after {
  box-sizing: border-box;
}

a {
    color: rgba(var(--bs-link-color-rgb),var(--bs-link-opacity,1));
    text-decoration: none;
}

#hover:hover {
      color: white;
      background-color: #d1fae5;


    }
  .container_ { 
     
      background-color: #fafafa; 
        box-shadow: 0 1px 3px 0 rgb(175 174 165 / 50%);
  }
  .cut-list { list-style: none;  color: black; line-height: 10px; }
  .cut-list > li {
      margin-left:25px;
      margin-right:25px; 
    
      padding-bottom: 2px;
  }
  .cut-list >li:hover {
  border-bottom :4px  solid rgba(197,220,73,255);
}
 .cut-list__elem  {
    margin-inline: auto;
    min-width: fit-content;
}

.with-more-items{
    justify-content: center;
}

  .cut-list__more {
  position: absolute;
  right: 0;
  min-width: 150px;
  padding: 10px;
  margin: 0;
  text-align: left;
  background-color: #222;
  z-index: 100;
  display: none;
  border-radius: 5px;
}


.cut-list {
    display:flex;
 
    
}
.cut-list__elem {
white-space:nowrap; 
padding-top:10px;


}

.cut-list__more.cut-list__more-content.cut-list__elem{
  color:red;
}
.cut-list__dropdown {position: relative;}
.cut-list__drop-toggle{cursor: pointer; user-select: none;  font-weight:400;  font-size:12px;text-align: center;margin: 0 2rem;}
.cut-list__more {
	position: absolute;
	top: 100%;
	right: 0;
	min-width: 190px;
	padding: 0;
	margin: 0;
	text-align: left;
	background-color: #fff;
	border: 1px solid #ccc;
	z-index: 100;
	display: none;
	text-align: left;
}
.cut-list__more-content:hover{
  
}

.cut-list__more.is-top{
	top: auto;
	bottom: 100%;
	position: relative;
}

.cut-list__more.is-left{
	right: auto;
	left: 0;
	
}
.link-plain,
      .link-plain:hover,
      .link-plain:active,
      .link-plain:visited {
        text-decoration: none;
        border-radius: 0.575rem;
        
      }
  .link-plains,
      .link-plains:hover,
      .link-plains:active,
      .link-plains:visited {
        text-decoration: none;
        border-radius: 0.575rem;
        background-color: #fff;
        overflow: hidden;
        border: 1px solid #C5DC49;
        border-radius: 8px;
        text-align: left;
        min-height: 246px;
      }
      
      .link-plains:hover{
          box-shadow: 0 0 11px rgba(33,33,33,.2); 
          
      }
      .pouler_Categories:hover{
   	-webkit-transform: scale(1.0);
	transform: scale(1.0);
      }
      .link-plain-f,
      .link-plain-f:hover,
      .link-plain-f:active,
      .link-plain-f:focus,
      .link-plain-f:visited {
          color: initial;
          text-decoration: none !important;
      }
  
      .div-center {
          display: inline-block;
          width: 100%;
          text-align: center;
      }
      #va_container {
          position: relative;
          max-width: 1140px;
          margin: auto;
      }
        #va_container_urgent {
          position: relative;
          max-width: 1140px;
          margin: auto;
      }
      
        #va_container_most_view{
          position: relative;
          max-width: 1140px;
          margin: auto;
      }
         #va_container_Popular{
          position: relative;
          max-width: 1140px;
          margin: auto;
      }
  
      .va-thumbnail {
          border-radius: 5px;
          border: 0px;
          width: 100%;
          max-height:150px;
          min-height: 145px;
      }
        .va-thumbnail_category {
          border-radius: 5px;
          border: 0px;
          width: 100%;
          max-height:150px;
         
      }
       .va-thumbnail:hover{
      -webkit-transform: scale(1.1);
	transform: scale(1.1);
       }
    
  
      .va-carrousel-flexbox {
          
          display: flex;
          flex-wrap: nowrap;
          overflow-x: auto;
          scrollbar-width: none;
          justify-content:;
      }
  
      .va-carrousel-flexbox .va-card {
          flex: 0 0 auto;
          padding-left: 15px;
      }
  
      .va-carrousel-flexbox .va-card:last-child {
          margin-right: 15px;
      }
  
      .va-carrousel-flexbox .va-card:last-child::after {
          content: ' ';
          display: inline-block;
      }
      
         .va-carrousel,
      .va-carrousel-flexbox {
          width: 100%;
          -webkit-overflow-scrolling: touch;
      }
  
      .va-carrousel::-webkit-scrollbar,
      .va-carrousel-flexbox::-webkit-scrollbar {
          display: none;
      }
  
       .va-carrousel-flexbox_most {
          
          display: flex;
          flex-wrap: nowrap;
          overflow-x: auto;
          scrollbar-width: none;
          justify-content:;
      }
  
      .va-carrousel-flexbox_most .va-card {
          flex: 0 0 auto;
          padding-left: 15px;
      }
  
      .va-carrousel-flexbox_most .va-card:last-child {
          margin-right: 15px;
      }
  
      .va-carrousel-flexbox_most .va-card:last-child::after {
          content: ' ';
          display: inline-block;
      }
      
         .va-carrousel,
      .va-carrousel-flexbox_most {
          width: 100%;
          -webkit-overflow-scrolling: touch;
      }
  
      .va-carrousel::-webkit-scrollbar,
      .va-carrousel-flexbox_most::-webkit-scrollbar {
          display: none;
      }
      
      
      .va-carrousel-flexbox_urgent {
          
          display: flex;
          flex-wrap: nowrap;
          overflow-x: auto;
          scrollbar-width: none;
          justify-content:;
      }
  
      .va-carrousel-flexbox_urgent .va-card {
          flex: 0 0 auto;
          padding-left: 15px;
      }
  
      .va-carrousel-flexbox_urgent .va-card:last-child {
          margin-right: 15px;
      }
  
      .va-carrousel-flexbox_urgent .va-card:last-child::after {
          content: ' ';
          display: inline-block;
      }
      
         .va-carrousel,
      .va-carrousel-flexbox_urgent {
          width: 100%;
          -webkit-overflow-scrolling: touch;
      }
  
      .va-carrousel::-webkit-scrollbar,
      .va-carrousel-flexbox_urgent::-webkit-scrollbar {
          display: none;
      }
      
      
      
      .va-carrousel-flexbox_Popular {
          
          display: flex;
          flex-wrap: nowrap;
          overflow-x: auto;
          scrollbar-width: none;
          justify-content:;
      }
  
      .va-carrousel-flexbox_Popular .va-card {
          flex: 0 0 auto;
          padding-left: 15px;
      }
  
      .va-carrousel-flexbox_Popular .va-card:last-child {
          margin-right: 15px;
      }
  
      .va-carrousel-flexbox_Popular .va-card:last-child::after {
          content: ' ';
          display: inline-block;
      }
      
         .va-carrousel,
      .va-carrousel-flexbox_Popular {
          width: 100%;
          -webkit-overflow-scrolling: touch;
      }
  
      .va-carrousel::-webkit-scrollbar,
      .va-carrousel-flexbox_Popular::-webkit-scrollbar {
          display: none;
      }
      
      
  
      .va-card_category {
          cursor: pointer;
          user-select: none;
          outline: none;
          width: 130px;
      }
     .va-cards{
          cursor: pointer;
          user-select: none;
          outline: none;
          width: 170px;
      }
      .va-card:hover {
          user-select: none;
          outline: none;
      }
  
      .va-card a {
          display: block;
      }
  
  
   
      .va-carrousel-title {
          display: inline-block;
  
          color: white;
          font-weight: 700;
          padding-bottom: 8px;
  
          margin-bottom: 18px;
      }
  
      .va-title {
        margin-top: 8px;
    font-size: 12px;
       height: 24px;
       font-weight: 700;
       letter-spacing: 1px;
     
       color: #3c3c3c;

      }
  
    
  
      .va-start-from {
          font-size: 9px;
          display: flex;
          align-items: center;
          justify-content: space-between;
          color: black;
      }

      .btn-change:hover{
    -webkit-transform: scale(1.1);
    
}
  
      .va-points {
          font-size: 12px;
          font-weight: 700;
          display: inline-block;
          color: white;
      }
  
      .deals-paddle {
          height: 38px;
          width: 38px;
          color: white;
          background-color: #00000089;
          border-radius: 50%;
          border: 0px solid;
          margin: auto;
          position: absolute;
  
          display: flex;
          justify-content: center;
          align-items: center;
        cursor:pointer;
      }
  
      .deals-paddle:focus {
          outline: none;
      }
  
      .deals-paddle:active {
          border-style: solid;
          outline: none;
          user-select: none;
      }
  
      .deals-paddle svg {
          width: 10px;
      }
  
      @media (min-width: 768px) {
          .other-game-button {
              width: 300px;
          }
      }
  
      .deals-scroll-left {
          top: 0;
          left: 5px;
          bottom: 0;
      }
  
      .deals-scroll-right {
          top: 0;
          bottom: 0;
          right: 5px;
      }
  
   .deals-scroll-left_urgent {
          top: 0;
          left: 5px;
          bottom: 0;
      }
  
      .deals-scroll-right_urgent {
          top: 0;
          bottom: 0;
          right: 5px;
      }
    .deals-scroll-left_most_view {
          top: 0;
          left: 5px;
          bottom: 0;
      }
  
      .deals-scroll-right_most_view {
          top: 0;
          bottom: 0;
          right: 5px;
      }
      
        
   .deals-scroll-left_Popular {
          top: 0;
          left: 5px;
          bottom: 0;
      }
  
      .deals-scroll-right_Popular {
          top: 0;
          bottom: 0;
          right: 5px;
      }
      
      
      .va-carrousel-section {
          font-family: "Roboto"
          padding: 0px;
          position: relative;
      }
  
      @media (min-width: 768px) {
  
          .va-carrousel-section {
              padding-left: 15px;
              padding-right: 15px;
          }
      }
  
      .va-whitewrap {
  /*         background-color: white; */
          padding-top: 15px;
          margin-top: 15px;
      }
  
      .va-seeall {
          display: block;
          font-size: 18px;
          font-weight: 700;
          border-top: 1px solid #DDDDDD;
          text-align: center;
          padding: 10px;
      }
      .hidde_optione .cut-list__elem:hover{
        background-color:rgba(197,220,73,255);
        padding-left:7px;
       
      }
       .hidde_optione .cut-list__elem{
        padding-left:5px;
       
      }  
      .hidde_optione {
          margin-top:2px;
          margin-bottom:4px;
      }
      .cut-list__more{
        width: max-content;
       
      }
  
 #left_view_button{
     display:none;
 }
 #left_sponser_button{
     display:none;
 }
 #left_urgent_button{
     display:none;
 }

 img.rounded-corners {
  border-radius: 50%;
}

 p.word {
  word-wrap: break-word;
}
</style>
  </head>
  <body>
    <!-- <h1 >Hello, world!</h1> -->
    <div class="container-fluid" style="background-image: linear-gradient(to right, #6ad3b0 ,white ,#f5f5f5, #f5f5f5);">
    <div class="container" >
    <nav class="navbar navbar-expand-lg bg-body-" >
  <div class="container-fluid" >
    <a class="navbar-brand" href="<?php echo base_url();?>" >
    <img class="btn-change" src="<?php echo base_url();?>assets/images/CelNow 5 1.png"  class="img-fluid" width="180px">
    </a>
    

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav m-auto mb-2 mb-lg-0" >
        <li class="nav-item" style="padding-right:20px ";>
          <a class="nav-link active"  aria-current="page" href="#" id="hover" style="color:#10B981;font-weight:600;border-radius:32px;border:1px solid; font-size: 13px;">Donate</a>
        </li>
        <li class="nav-item dropdown" style="padding-right:20px";>
          <a class="nav-link dropdown-toggle" href="" id="hover" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 13px;color:#10B981;font-weight:600;border-radius:32px;border:1px solid">
            Categories
          </a>
          <ul class="dropdown-menu">
            <?php $category = get_all_category(); 
             foreach ($category as $key => $cat) {?>
            <li><a class="dropdown-item" id="hover" href="<?php echo base_url();?>welcome/fillter_product"><?php echo $cat->category; ?></a></li>
          
            <?php }?>
          </ul>
        </li>
        <li class="nav-item dropdown" style="padding-right:20px";>
          <a class="nav-link dropdown-toggle" id="hover" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 13px; color:#10B981;font-weight:600;border-radius:32px;border:1px solid">
            Service Center 
          </a>
          <ul class="dropdown-menu" >
          <?php
                $shopcategory = get_all_shopcategory();
                foreach ($shopcategory as $key => $cat) {
                  ?>
            <li><a class="dropdown-item" href="<?php echo base_url();?>welcome/store"><?php echo $cat->shop_category; ?></a></li>
           
            <?php }?>
          </ul>
        </li>
        <li class="nav-item" style="padding-right:20px";>
          <a class="nav-link" href="<?php echo base_url();?>welcome/shop" style="font-size: 13px;color:#10B981;font-weight:600;border-radius:32px;border:1px solid;background-color:#10b981;color:white">Shop -></a>
        </li>
        <li class="nav-item" style="padding-right:20px";>
          <a class="nav-link" href="<?php echo base_url();?>welcome/postproduct" style="font-size: 13px;color:#10B981;font-weight:600;border-radius:32px;border:1px solid;background-color:#d1fae5;">Ad Post</a>
        </li>
        
        <!-- <li class="nav-item" hello>
        <a class="nav-link" href="#" style="color:#10B981;font-weight:600;padding-left:22px">Login/Signup</a>
        </li> -->
     
     <?php  if(!empty($user)){
      $profile = get_seller_profile($user['user_id']);
   ?>
    <div class="nav-item dropdown" style="padding-right:90px";>
    <li class="nav-item" style="padding-right:70px";></div>
            <img class="img-fluid rounded-corners mx-auto d-block" style="height: 40.9px;
width: 40.9px;" src="<?php echo base_url()."uploads/profile/".$profile->profile_img."";?>"> </li>
    <li class="nav-item">
   <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size:13px;color:#10B981;font-weight:600;">
   <?php echo ucfirst($profile->name);?> 
          </a>
   <ul class="dropdown-menu" style="margin-left:80%;margin-top: -30px;">
    
            <li><a class="dropdown-item" href="<?php echo base_url();?>welcome/buyerprofile">My profile</a></li>
          
            <li><a class="dropdown-item" href="#">My Chat</a></li>
            <?php if($profile->login_type == 'normal'){ ?>
              <li> <a class="dropdown-item" href="<?php echo base_url();?>welcome/changepassword" class="">Change Password</a></li>
                        <?php } ?>
            <li><a class="dropdown-item" href="<?php echo base_url();?>welcome/logout">logout</a></li>
          </ul>
            </li>
          
         <?php  }
          else{ ?>
         <li class="nav-item" style="padding-right:70px";></div>
          <a class="nav-link" href="<?php echo base_url();?>welcome/login" style="color:#10B981;font-weight:600;">Login &nbsp</a>/ <a class="nav-link" href="<?php echo base_url();?>welcome/signup" style="color:#10B981;font-weight:600;">&nbsp Signup</a>
          </li>
          <?php }?>
         
          </ul>
            </div>
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