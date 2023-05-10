<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- link for map -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Sellerprofile</title>
    <style>
html,body
    {
      max-width: 100%;
        overflow-x: hidden;  
    }
     

    img.rounded-corners {
  border-radius: 50%;
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
    <a href="<?php echo base_url();?>welcome/buyerprofile" class="btn" role="button" aria-disabled="true" id="a">Buyer</a>
    </div>
    <div class="col-sm-7 mb-1">
    <div class="row">
    <div class="col-sm-6  mb-1">
    <a href="<?php echo base_url();?>welcome/myprofile"  style="background-color: #78d7b8; color:#fff" class="btn" role="button" aria-disabled="true" id="a">Seller</a>
   
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
    <div class="col-sm-6">
    <a href="" data-toggle="modal" data-target="#createModal"><img class="btn-change" src="<?php echo base_url(); ?>/assets/images/Group 451.png"   style="height: 27px; width:27px;margin-left: 52%;position: absolute;margin-top: 4px;border-radius: 100%;"></a>

     <img src="<?php echo base_url()."uploads/profile/".$profile->profile_img."";?>"  class="img-fluid rounded-corners mx-auto d-block" style="height: 131.9px;
width: 131.9px; border-color:#10B981;">
     <div style="text-align:center"><h3><b ><?php echo ucfirst($profile->name); ?></b></h3>
     <?php echo ucfirst($profile->Address); ?>
     
    </div>
    <div class="row text-center ">
    <p>
            <img src="<?php echo base_url()?>assets/images/email.png"> <?php echo $profile->email; ?>
            <img src="<?php echo base_url()?>assets/images/mobile.png"> <?php echo $profile->phone; ?>
            </p>
    </div><br>
    
   
    </div>
    <!-- <div class="vr" style="color:#78d7b8"></div> -->
    <div class="col-sm-6 " style=" border-left:solid; border-color: #78d7b8"> 
      
      <h2 class="pl-5"><b>About us</b></h2>
      <h6 class="pl-5"><?php echo $profile->aboutus; ?></h6>

      <div class="row text-center">
      <div>
    <a href="#" data-toggle="modal"  data-target="#editprofile" class="btn "id="a" style="align-self:center; background-color:#10B981; color:#fff;" >Edit </a>
    </div>
    </div>
    </div> 
  </div><br>
</div>
</div>  




<div class="container" >
<h3 class="ml-5 mb-3"><b>Seller Ads</b></h3>
<div class="row">

    <div class="col-lg-4 col-sm-6  mb-2">
    <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
    <img src="<?php echo base_url();?>assets/images/bike1.png" class="card-img-top" alt="Card image cap">
      <div class="card-block" style="padding:8px">
      <h5 class="card-title">Suzuki</h5>
    <small class="card-text">Space for a small product description.</small><br>
    
    Fresheness  <span style="padding-left:30px">New(Extra fresh)</span><br>
    Model            <span style="padding-left:60px"> 2015</span><br>
    Color     <span style="padding-left:66px"> Red</span><br>
    <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
    <a href="#" class="btn "id="b">Edit</a>
    <a href="#" class="btn "id="b">Delete</a>
    </div>
    </div>
</div>

<div class="col-lg-4 col-sm-6  mb-2">
    <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
    <img src="<?php echo base_url();?>assets/images/bike1.png" class="card-img-top" alt="Card image cap">
      <div class="card-block" style="padding:8px">
      <h5 class="card-title">Suzuki</h5>
    <small class="card-text">Space for a small product description.</small><br>
   
    Fresheness  <span style="padding-left:30px">New(Extra fresh)</span><br>
    Model            <span style="padding-left:60px"> 2015</span><br>
    Color     <span style="padding-left:66px"> Red</span><br>
    <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
    <a href="#" class="btn "id="b">Edit</a>
    <a href="#" class="btn "id="b">Delete</a>
    </div>
    </div>
</div>


<div class="col-lg-4 col-sm-6  mb-2">
    <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
    <img src="<?php echo base_url();?>assets/images/bike1.png" class="card-img-top" alt="Card image cap">
      <div class="card-block" style="padding:8px">
      <h5 class="card-title">Suzuki</h5>
    <small class="card-text">Space for a small product description.</small><br>
    
    Fresheness  <span style="padding-left:30px">New(Extra fresh)</span><br>
    Model            <span style="padding-left:60px"> 2015</span><br>
    Color     <span style="padding-left:66px"> Red</span><br>
    <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
    <a href="#" class="btn "id="b">Edit</a>
    <a href="#" class="btn "id="b">Delete</a>
    </div>
    </div>
</div>


    <div class="col-lg-4 col-sm-6  mb-2">
    <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
    <img src="<?php echo base_url();?>assets/images/bike1.png" class="card-img-top" alt="Card image cap">
      <div class="card-block" style="padding:8px">
      <h5 class="card-title">Suzuki</h5>
    <small class="card-text">Space for a small product description.</small><br>
    
    Fresheness  <span style="padding-left:30px">New(Extra fresh)</span><br>
    Model            <span style="padding-left:60px"> 2015</span><br>
    Color     <span style="padding-left:66px"> Red</span><br>
    <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
    <a href="#" class="btn "id="b">Edit</a>
    <a href="#" class="btn "id="b">Delete</a>
    </div>
    </div>
</div>

<div class="col-lg-4 col-sm-6  mb-2">
    <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
    <img src="<?php echo base_url();?>assets/images/bike1.png" class="card-img-top" alt="Card image cap">
      <div class="card-block" style="padding:8px">
      <h5 class="card-title">Suzuki</h5>
    <small class="card-text">Space for a small product description.</small><br>
   
    Fresheness  <span style="padding-left:30px">New(Extra fresh)</span><br>
    Model            <span style="padding-left:60px"> 2015</span><br>
    Color     <span style="padding-left:66px"> Red</span><br>
    <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
    <a href="#" class="btn"id="b">Edit</a>
    <a href="#" class="btn"id="b">Delete</a>
    </div>
    </div>
</div>


<div class="col-lg-4 col-sm-6  mb-2">
    <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
    <img src="<?php echo base_url();?>assets/images/bike1.png" class="card-img-top" alt="Card image cap">
      <div class="card-block" style="padding:8px">
      <h5 class="card-title">Suzuki</h5>
    <small class="card-text">Space for a small product description.</small><br>
    
    Fresheness  <span style="padding-left:30px">New(Extra fresh)</span><br>
    Model            <span style="padding-left:60px"> 2015</span><br>
    Color     <span style="padding-left:66px"> Red</span><br>
    <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
    <a href="#" class="btn "id="b">Edit</a>
    <a href="#" class="btn "id="b">Delete</a>
    </div>
    </div>
</div>

<div class="col-lg-4 col-sm-6  mb-2">
    <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
    <img src="<?php echo base_url();?>assets/images/bike1.png" class="card-img-top" alt="Card image cap">
      <div class="card-block" style="padding:8px">
      <h5 class="card-title">Suzuki</h5>
    <small class="card-text">Space for a small product description.</small><br>
    
    Fresheness  <span style="padding-left:30px">New(Extra fresh)</span><br>
    Model            <span style="padding-left:60px"> 2015</span><br>
    Color     <span style="padding-left:66px"> Red</span><br>
    <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
    <a href="#" class="btn "id="b">Edit</a>
    <a href="#" class="btn "id="b">Delete</a>
    </div>
    </div>
</div>

<div class="col-lg-4 col-sm-6  mb-2">
    <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
    <img src="<?php echo base_url();?>assets/images/bike1.png" class="card-img-top" alt="Card image cap">
      <div class="card-block" style="padding:8px">
      <h5 class="card-title">Suzuki</h5>
    <small class="card-text">Space for a small product description.</small><br>
    
    Fresheness  <span style="padding-left:30px">New(Extra fresh)</span><br>
    Model            <span style="padding-left:60px"> 2015</span><br>
    Color     <span style="padding-left:66px"> Red</span><br>
    <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
    <a href="#" class="btn "id="b">Edit</a>
    <a href="#" class="btn "id="b">Delete</a>
    </div>
    </div>
</div>

<div class="col-lg-4 col-sm-6  mb-2">
    <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
    <img src="<?php echo base_url();?>assets/images/bike1.png" class="card-img-top" alt="Card image cap">
      <div class="card-block" style="padding:8px">
      <h5 class="card-title">Suzuki</h5>
    <small class="card-text">Space for a small product description.</small><br>
    
    Fresheness  <span style="padding-left:30px">New(Extra fresh)</span><br>
    Model            <span style="padding-left:60px"> 2015</span><br>
    Color     <span style="padding-left:66px"> Red</span><br>
    <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
    <a href="#" class="btn " id="b">Edit</a>
    <a href="#" class="btn " id="b">Delete</a>
    </div>
    </div>
</div>

</div>
</div>


<div class="container-fluid mt-5">
<img src="<?php echo base_url();?>assets/images/Rectangle 32336.png" class="img-fluid" width="100%" alt="">';
</div>



</body>
</html>


<div id="editprofile" class="modal fade" role="dialog">
 
  <div class="modal modal-signin position-static d-block  py-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
          <button data-dismiss="modal"  type="button" class="close"  aria-label="Close"  style="margin-left: 90%; margin-top:10px;" >&times;</button>
     

      <div class="modal-body px-5 pt-0">
          <h5 class=" mb-0 my-3 fs-5" style="text-align: center;">Edit Profile</h5>
          
          <?php  if($error=$this->session->flashdata('Login_fail')){  ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="alert alert-danger ">
                                                <?= $error; 

                               unset($_SESSION['Login_fail']);
                                  ?>

                                            </div>
                                        </div>
                                    </div>

                                    <?php } ?>
                                    
        <form class="needs-validation" novalidate enctype="multipart/form-data" action="<?php echo base_url();?>welcome/updatesellerreg" method="POST" class="needs-validation" novalidate style="text-align: center;">
             <?php
                            
                            $profile = get_seller_profile($user['user_id']);

                            //$username = get_username($user['user_id']);

                            //print_r($profile);
                     
                        ?>
                        <input type="hidden" name="user_id" value="<?php echo $user['user_id'] ?>">

                        <input type="hidden" name="profile_id" value="<?php echo $profile->user_id; ?>">
             <div class=" input-container my-3 px-3">
            
            <input name="name" type="text" class="form-control pl-5  text-dark Name" id="firstName"  value="<?php echo $profile->name; ?>" placeholder="Name" style="border-radius:30px; border-color:#13C571" required>
              <div class="invalid-feedback">
                Valid name is required.
              </div>
          </div>
         
          <div class=" input-container my-3 px-3">
          
              <?php if($profile->login_type!=='normal'){?>
            <input name="email" type="email" class="form-control pl-5  text-dark inp-icon"   readonly placeholder="Enter Email" style="border-radius:30px; border-color:#13C571" >


            <?php  }else{?>
            <input name="email" type="email" class="form-control pl-5  text-dark inp-icon" id="email" value="<?php echo $profile->email; ?>" placeholder="Enter Email" style="border-radius:30px; border-color:#13C571" required>
              <div class="invalid-feedback">
                Please enter a valid email address.
              </div><?php }?> 
          </div>
          <div class=" input-container mt-3 px-3 ">
         
            <input name="phone" type="number" class="form-control  pl-5 text-dark mobile"  value="<?php echo $profile->phone; ?>"  placeholder="phone"  style="border-radius:30px; border-color:#13C571" required>
             
            <p id="mobile_error"></p>
            <div class="invalid-feedback">
                Valid mobile is required.
              </div> 
          </div>
          <div class=" input-container my-3 px-3">
         
            <input name="Address" type="text" class="form-control  pl-5  text-dark Name" id="lastName"  value="<?php echo $profile->Address; ?>" placeholder="Address" style="border-radius:30px; border-color:#13C571" required>
              <div class="invalid-feedback">
                Valid address is required.
              </div>
          </div>
          <div class=" input-container my-3 px-3">
        
              <textarea  name="aboutus"  class="form-control" id="aboutus" placeholder="About Us" maxlength="100" rows="4" style="border-radius:20px; border-color:#13C571" required><?php echo $profile->aboutus; ?></textarea>
             <div class="invalid-feedback">
                Valid message is required.
              </div>
          </div>
          <button class="btn-change  w-50 mb-2 btn btn-lg  text-white mt-3"  style="background-color:#13C571"   type="submit">Submit</button>
          <hr class="my-2">
         
        </form>
      </div>
    </div>
  </div>
</div>
  
</div>

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

(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
  })()


function checkcoverimage() {

var image =$('#cover_image').val();

if (image == "" ) {

    $("#cover_err").text("Please upload image");
   



} else {

    $("#cover_img").submit();

   
}

}


function checkprofile() {

var image =$('#cover_image').val();

if (image == "" ) {

    $("#cover_err").text("Please upload image");
   



} else {

    $("#cover_img").submit();

   
}

}
</script>