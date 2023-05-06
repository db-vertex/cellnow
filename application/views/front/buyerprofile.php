<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
  
  <div class="shadow p-4  bg-body rounded-5" style="margin:25px"><br>
  <div class="row text-center" >
 
  <div class="col-sm-5 mb-1">
  <a href="<?php echo base_url();?>welcome/buyerprofile" class="btn" role="button" aria-disabled="true" id="a">Buyer</a>
  </div>
  <div class="col-sm-7 mb-1">
  <div class="row">
  <div class="col-sm-6  mb-1">
<<<<<<< HEAD
  <a href="<?php echo base_url();?>welcome/myprofile"  style="background-color: #78d7b8; color:#fff" class="btn" role="button" aria-disabled="true" id="a">Seller</a>
=======
  <a href="<?php echo base_url();?>welcome/myprofile"   class="btn" role="button" aria-disabled="true" id="a">Seller</a>
>>>>>>> origin/poonam
 
  </div>
  <div class="col-sm-6 mb-1" >
  <a href="<?php echo base_url();?>welcome/shop" class="btn" role="button" aria-disabled="true" id="a">Shop</a>
  </div>
</div>
</div>
</div><br>
<div class="row ">
<?php
              $profile = get_seller_profile($user['user_id']);

                  ?>
<<<<<<< HEAD
  <div class="col-sm-5">
=======
  <div class="col-sm-6">
>>>>>>> origin/poonam
  <a href="" data-toggle="modal" data-target="#createModal"><img class="btn-change" src="<?php echo base_url(); ?>/assets/images/Group 451.png"   style="height: 27px; width:27px;margin-left: 52%;position: absolute;margin-top: 4px;border-radius: 100%;"></a>

   <img src="<?php echo base_url()."uploads/profile/".$profile->profile_img."";?>"  class="img-fluid rounded mx-auto d-block">
   <div style="text-align:center"><h3><b ><?php echo $profile->name; ?></b></h3>
   <?php echo $profile->Address; ?>
   
  </div>
  <div class="row text-center ">
    <p><img src="<?php echo base_url()?>assets/images/email.png"><?php echo $profile->email; ?></p>
    <p><img src="<?php echo base_url()?>assets/images/mobile.png"><?php echo $profile->phone; ?></p>
  </div><br>
  
 
  </div>
  <!-- <div class="vr" style="color:#78d7b8"></div> -->
<<<<<<< HEAD
  <div class="col-sm-7 " style=" border-left:solid; border-color: #78d7b8"> 
=======
  <div class="col-sm-6 " style=" border-left:solid; border-color: #78d7b8"> 
>>>>>>> origin/poonam
    
    <h2 class="pl-5"><b>About us</b></h2>
    <p class="pl-5"><?php echo $profile->aboutus; ?></p>

    <div class="row text-center">
    <div>
  <a href="" data-toggle="modal"  data-target="#editprofile" class="btn "id="b" style="align-self:center; background-color:#13C571">Edit</a>
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


<div class="modal fade" id="createModal" aria-hidden="true">
				<div class="modal-dialog" role="document">
				    <div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Update Profile Picture</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  	<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form  id="cover_img" enctype="multipart/form-data" action="<?php echo base_url();?>welcome/uploadprofileimg" method="POST">
						    <input type="hidden" name="user_id" value="<?php echo $user['user_id'] ?>">
				      	<div class="modal-body">
				        	<div class="form-group">
				        	    
							    <label>Image </label>
							    <input type="file" class="form-control" id="cover_image" name="profile_img" accept="image/*">
							    <span id="cover_err" style="color:red;"></span>
							</div>
				      	</div>
				      	<div class="modal-footer">
				        	<button type="button" class="btn-change btn btn-secondary pull-left" data-dismiss="modal">Cancel</button>
				        	<button type="button" style="background-color:#13C571; color:#fff;
                            border-radius:0.20rem;" class="btn-change btn btn-rounded"   onclick="return checkcoverimage();">Upload</button>
				      	</div>
				      		</form>
				    </div>
				</div>
			</div>

      <script>
        function checkcoverimage() {

var image =$('#cover_image').val();

if (image == "" ) {

    $("#cover_err").text("Please upload image");
   



} else {

    $("#cover_img").submit();

   
}

}</script>