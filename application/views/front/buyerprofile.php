<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<!-- link for card -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Buyer Profile</title>
    <style>

html,body
    {
      max-width: 100%;
        overflow-x: hidden;  
    }
     
#a{
  margin-right: 10px;
  border-color: #78d7b8;
  border-radius: 60px;
  font-family:open sans;
  font-weight:550;
  font-size:22px;
  padding: 4px 32px;
  
}


#a:visited {
  color: #78d7b8;
  
  
}
#a:hover {
  color: white;
  background-color: #78d7b8;
  
  
}


#b{
 
 border: 1px solid #78d7b8;
 border-radius: 25px;
 font-size: 12px;
 
}
#b:visited {
 color: #78d7b8;
 
 border-color: #78d7b8;
}

#b:hover {
 color: white;
 background-color: #78d7b8;
}
    </style>
  </head>
  <body>
   

    
   
<div class="container">
  
  <div class="shadow p-4 mb-5 bg-body rounded-5" style="margin:25px"><br>
  <div class="row text-center" >
 
  <div class="col-sm-5 mb-1">
  <a href="<?php echo base_url();?>welcome/buyerprofile" style="background-color: #78d7b8; color:#fff" class="btn" role="button" aria-disabled="true" id="a">Buyer</a>
  </div>
  <div class="col-sm-7 mb-1">
  <div class="row">
  <div class="col-sm-6  mb-1">
  <a href="<?php echo base_url();?>welcome/myprofile" class="btn" role="button" aria-disabled="true" id="a">Seller</a>
 
  </div>
  <div class="col-sm-6 mb-1" >
  <a href="#" class="btn" role="button" aria-disabled="true" id="a">Shop</a>
  </div>
</div>
</div>
</div><br>
<div class="row ">
<?php
              $profile = get_seller_profile($user['user_id']);

                  ?>
  <div class="col-sm-5">
  
   <img src="<?php echo base_url();?>assets/images/Ellipse 11 (2).png"  class="img-fluid rounded mx-auto d-block">
   <div style="text-align:center"><h3><b ><?php echo $profile->name; ?></b></h3>
   <?php echo $profile->Address; ?>
   
  </div>
  <div class="row text-center ">
    <p><?php echo $profile->email; ?></p>
    <p><?php echo $profile->phone; ?></p>
  </div><br>
  
 
  </div>
  <!-- <div class="vr" style="color:#78d7b8"></div> -->
  <div class="col-sm-7 "> 
    
    <h2 class="pl-5"><b>About us</b></h2>
    <p class="pl-5"><?php echo $profile->aboutus; ?></p>

    <div class="row text-center">
    <div>
  <a href="#" data-toggle="modal"  data-target="#editprofile" class="btn "id="b" style="align-self:center; background-color:#13C571">Edit</a>
  </div>
  </div>
  </div> 
</div><br>
</div>
</div>  


<div class="container-fluid" style="padding:0px">
<img src="<?php echo base_url();?>/assets/images/Rectangle 32336.png" class="img-fluid" width="100%" alt="">';
</div>


    

  </body>
</html>
