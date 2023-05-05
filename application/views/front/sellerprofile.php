<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
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


<div class="container">
<h5><b>Seller Ads</b></h5>
</div>

<div class="container" >

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
                                    
        <form  enctype="multipart/form-data" action="<?php echo base_url();?>welcome/updatesellerreg" method="POST" class="needs-validation" novalidate style="text-align: center;">
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
         
            <input name="phone" type="number" class="form-control  pl-5 text-dark mobile"  value="<?php echo $profile->phone; ?>"  placeholder="phone"  style="border-radius:30px; border-color:#13C571">
             
            <p id="mobile_error"></p>
            <div class="invalid-feedback">
                Valid mobile is required.
              </div> 
          </div>
          <div class=" input-container my-3 px-3">
         
            <input name="Address" type="text" class="form-control  pl-5  text-dark Name" id="lastName"  value="<?php echo $profile->Address; ?>" placeholder="Address" style="border-radius:30px; border-color:#13C571" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
          </div>
          <div class=" input-container mt-3 ">
        
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


<script>

  (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
         var mabile =  document.getElementById('mobile').value.length 
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      document.getElementById("mobile_error").innerHTML = "";  
      }
    else if(mabile < 10){
     document.getElementById("mobile_error").innerHTML = "Please enter 10 digits";  
       event.preventDefault()
        event.stopPropagation()
    }
    
      form.classList.add('was-validated')
    }, false)
  })
})()
</script>