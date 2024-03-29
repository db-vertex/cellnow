<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

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


#a:visited {
  color: #78d7b8;
 
}
#a:hover {
  color: white;
  background-color: #78d7b8;
  
  
}


#b{
 
  box-sizing: border-box;
  
    flex-direction: row;
    align-items: center;
   
    gap: 4.71px;
    width: 119.43px;
    height: 36.86px;
   
    border: 1.57143px solid #78d7b8;
    border-radius: 25.42857px;
    flex: none;
    order: 0;
    align-self: center;
    flex-grow: 0;

}
#b:visited {
 color: #78d7b8;
 
 border-color: #78d7b8;
}

#b:hover {
 color: #fff;
 background-color: #78d7b8;
}


@media screen and (min-width: 560px) {
  #a{
  margin-right: 10px;
  border-color: #78d7b8;
  border-radius: 60px;
  font-family:open sans;
  font-weight:550;
  font-size:22px;
  padding: 4px 32px;
  
}
}
@media screen and (max-width: 560px) {
  #a{
    margin-right: 10px;
  border-color: #78d7b8;
  border-radius: 60px;
  font-family:open sans;
  font-weight:550;
  font-size:15px;
  padding: 4px 18px;
}
}
.shop_images_view {
            font-family: open sans;
            font-weight: 550;
        }

        @media (min-width: 575px){
        .shop_details_border{
            border-left:solid; 
            border-color: #78d7b8;
        }
        }

    </style>
  </head>


  <body>
  


<div class="container" style="margin-top: 130px;">
  
<?php  if($error=$this->session->flashdata('Editproduct')){  ?>
            <div class="row text-center" style="justify-content: center; ">
                <div class="col-lg-6">
                    <div class="alert alert-success ">
                        <?= $error; 

                               unset($_SESSION['Editproduct']);
                               ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                            style="float:right;"></button>
                    </div>
                </div>
            </div>

            <?php } ?>
  
    <div class="shadow p-4 mb-5 bg-body rounded-5"><br>
    <div class="row text-center justify-content-around">
                    <div class="col-3 mb-1 ">
                    <a href="<?php echo base_url();?>welcome/buyerprofile" 
                        class="btn" role="button" aria-disabled="true" id="a">Buyer</a>
                    </div>

                    <div class="col-3 mb-1">
                    <a href="<?php echo base_url();?>welcome/myprofile" style="background-color: #13C571; color:#fff" class="btn" role="button"
                                aria-disabled="true" id="a">Seller</a>
                    </div>


                    <div class="col-3 mb-1">
                    <a href="<?php echo base_url();?>welcome/shop" class="btn" role="button"
                                aria-disabled="true" id="a">Shop</a>
              </div>
            </div>
            
<br>
  <div class="row ">
  <?php
                $profile = get_seller_profile($user['user_id']);

                    ?>
    <div class="col-sm-6">

     <img src="<?php echo base_url()."uploads/profile/".$profile->profile_img."";?>"  class="img-fluid rounded-corners mx-auto d-block" style="height: 131.9px;
width: 131.9px; border-color:#10B981;">
     <div style="text-align:center"><h5 class="shop_images_view"><b ><?php echo ucfirst($profile->name); ?></b></h5>
     <img style="max-width:25px;" src="<?php echo base_url(); ?>assets/images/location .png" alt="location"> <?php if(isset($profile->Address)){echo ucfirst($profile->Address);} ?>
     
    </div>
   
    
   
    </div>
    <!-- <div class="vr" style="color:#78d7b8"></div> -->
    <div class="col-sm-6 text-center shop_details_border" style=""> 
      
      <h4 class="shop_images_view pt-2"><b>About us</b></h4>
      <p class="pl-5 pr-5 word"><?php echo $profile->aboutus; ?></p>

    
    </div> 
  </div><br>
</div>
</div>  




<div class="container">
<h4 class="shop_images_view mt-3 ps-3" style=""><b>My Product</b></h4>
<div class="row ">

<?php $sellerproduct = get_seller_product($user['user_id']); 

 if(!empty($sellerproduct)){
  foreach($sellerproduct as $pro){
 
  ?>

<div class="col-lg-3 col-md-4 col-sm-6 mb-4 post">
<a href="<?php echo base_url();?>welcome/myproductdetail/<?php echo $pro->category_id; ?>/<?php echo $pro->id; ?>/<?php echo $pro->subcategory_id; ?>"> 
                                <div class="card">
                        <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                           <img  src="<?php echo base_url(); ?><?php echo $pro->cover_img ?>"
                                    class="w-100 va-thumbnail image1" />
                                    <p style="margin-left:5px;"> 
                                    <?php if($pro->pay_type ==1){ ?>
                                      <img class="img-fluid image2"
                                src="<?php echo base_url(); ?>assets/images/sponsor.png" style="
   width:80px; ">
                            <?php } if($pro->verified_product ==1){ ?>
                            <img class="img-fluid image3" src="<?php echo base_url(); ?>assets/images/verified.png" style="
   width:80px; ">
                      

                            <?php }?>
                        </p>
                            <a href="#!">

                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                               
                              <?php if($pro->category_id != 4){
                                if($pro->pay_type !=2){ ?>
                         <p class="details_price">₹<?php echo $pro->price; ?>
                                </p>
<?php }else{ ?>
  <p class="details_price"> Donate</p>
<?php } }?>

                            </div>
                            <div class="d-flex justify-content-between align-items-center">

                                <p style="color: #575757;"><?php
                           $title = $pro->title;
                            if(strlen($title) <= 25)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,25) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?></p>

                            </div>
                           
                                <div class="d-flex justify-content-between align-items-center">
                                <p style="color: #575757;"> <img src="<?php echo base_url();?>assets/images/location .png" alt="location"> &nbsp
                                <?php
                           $title = $pro->address;
                            if(strlen($title) <= 25)
                              {
                                echo '<span class="ps-3" >'.ucfirst($title);'</span>';
                              }
                              else
                              {
                                $y = substr($title,0,25) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?></p>
                               

                            </div>
                            <div class="pt-2 "><p><a style="background-color:#10b981; color:#fff" href="<?php echo base_url();?>Welcome/editproduct_view/<?php echo  $pro->category_id?>/<?php echo  $pro->id ?>" class="btn " id="b">Edit</a> &nbsp &nbsp
  
  <a  href="javascript:void(0)" id="b" class="delete_product btn"  data-cid="<?php echo $pro->category_id; ?>" data-pid="<?php echo $pro->id; ?>"><span  style="color:#78d7b8">Delete</span></a>
                            </p>
</div>
                     
                        </div>
                    </div>
                    </a>
                </div>

<?php }}else{?>
            <center><img  src="<?php echo base_url();?>assets/images/no_product.png"></center>
<?php }?>

</div>
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

<script>
"use strict"; /* Start of use strict */
(function () {
function14();
})();
function function14() {
$('.delete_product').on("click", function () {
    var pid=$(this).data("pid");
    var cid=$(this).data("cid");
  
swal({
title: " DELETE!",
text: "Are you sure you want to ?",
type: "warning",
showCancelButton: true,
confirmButtonColor: "#DD6B55",
confirmButtonText: "Yes",
cancelButtonText: "No",
closeOnConfirm: false,
closeOnCancel: true},
function (isConfirm) {
if (isConfirm) {
$.ajax({
        type:'POST',
        url:"<?php echo base_url();?>welcome/deleteproduct",
        data: {pid:pid,cid,cid},
        success: function(){
             location.reload(); 
          },
});
} else {
}
});
});
}
</script>	

<script>
    "use strict"; /* Start of use strict */
    (function() {
        function14();
    })();

    function function14() {
        $('.btnSweetalert').on("click", function() {
            swal({
                    title: " Logout!",
                    text: "Are you sure you want to logout?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes",
                    cancelButtonText: "No",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm) {
                    if (isConfirm) {

                        window.location.href = "<?php echo base_url();?>welcome/logout";
                    } else {
                        swal("Cancelled", "Something went wrong. Please try again.)", "error");
                    }
                });
        });
    }
    </script>