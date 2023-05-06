<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- link for map -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Sellerprofile</title>
  <style>
    html,
    body {
      max-width: 100%;
      overflow-x: hidden;
    }




    #a {
      margin-right: 10px;
      border-color: #78d7b8;
      border-radius: 60px;
      font-family: open sans;
      font-weight: 550;
      font-size: 22px;
      padding: 4px 32px;

    }


    #a:visited {
      color: #78d7b8;


    }

    #a:hover {
      color: white;
      background-color: #78d7b8;


    }


    #b {

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

    <div class="shadow p-3  bg-body rounded-5" style="margin:25px"><br>
      <div class="row text-center">

        <div class="col-sm-5 mb-1">
          <a href="<?php echo base_url(); ?>welcome/buyerprofile" class="btn" role="button" aria-disabled="true"
            id="a">Buyer</a>
        </div>
        <div class="col-sm-7 mb-1">
          <div class="row">
            <div class="col-sm-6  mb-1">
              <a href="<?php echo base_url(); ?>welcome/myprofile" class="btn" role="button" aria-disabled="true"
                id="a">Seller</a>

            </div>
            <div class="col-sm-6 mb-1">
              <a href="<?php echo base_url(); ?>welcome/shop" style="background-color: #78d7b8; color:#fff" class="btn"
                role="button" aria-disabled="true" id="a">Shop</a>
            </div>
          </div>
        </div>
      </div><br>
      <div class="row ">
        <?php
        $profile = get_seller_profile($user['user_id']);

        ?>
        <div class="col-sm-5">
        <a href="" data-toggle="modal" data-target="#createModal"><img class="btn-change" src="<?php echo base_url(); ?>/assets/images/Group 451.png"   style="height: 27px; width:27px;margin-left: 52%;position: absolute;margin-top: 4px;border-radius: 100%;"></a>

          <img src="<?php echo base_url(); ?>assets/images/Ellipse 11 (2).png" class="img-fluid rounded mx-auto d-block">
          <div style="text-align:center">
            <h3><b>
                <?php echo $profile->name; ?>
              </b></h3>
            <?php echo $profile->Address; ?>

          </div>
          <div class="row text-center ">
            <p>
              <?php echo $profile->email; ?>
              <?php echo $profile->phone; ?>
            </p>

          </div><br>


        </div>
        <!-- <div class="vr" style="color:#78d7b8"></div> -->
        <div class="col-sm-7 " style=" border-left:solid; border-color: #78d7b8">
        <?php $shop = get_id_by_shop($user['user_id']);
           if(empty($shop)){?>
          <div class="row text-center mt-5">
           
            <div>
              <a data-toggle="modal" data-target="#addshopdetail" href="<?php echo base_url(); ?>welcome/shop"
                style="background-color: #10b981; color:#fff" class="btn" role="button" aria-disabled="true"
                id="a">Verfied your shop details</a>
              <p class="text-muted mt-4">Note: Once you will submit the detail of shop then not editable</p>
            </div>
            </div>
            <div class="row mt-5 ">
            <?php }else{ ?>
              <div class="col" >
                <h2 class="ml-3"><?php echo $shop->name;?></h2>
                <p class="ml-3"><?php echo $shop->email;?></p>
                <p class="ml-3"><?php echo $shop->description;?></p>
                <p class="ml-3">GST Number -<?php echo $shop->GST;?></p>
                <p class="ml-3"><?php echo $shop->Address;?></p>
              </div>
              
                <?php } ?>
          </div>
        </div>
      </div><br>
    </div>
  </div>


  <div class="container">
    <h5><b>Seller Ads</b></h5>
  </div>

  <div class="container">

    <div class="row">

      <div class="col-lg-4 col-sm-6  mb-2">
        <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
          <img src="<?php echo base_url(); ?>assets/images/bike1.png" class="card-img-top" alt="Card image cap">
          <div class="card-block" style="padding:8px">
            <h5 class="card-title">Suzuki</h5>
            <small class="card-text">Space for a small product description.</small><br>

            Fresheness <span style="padding-left:30px">New(Extra fresh)</span><br>
            Model <span style="padding-left:60px"> 2015</span><br>
            Color <span style="padding-left:66px"> Red</span><br>
            <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
            <a href="#" class="btn " id="b">Edit</a>
            <a href="#" class="btn " id="b">Delete</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6  mb-2">
        <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
          <img src="<?php echo base_url(); ?>assets/images/bike1.png" class="card-img-top" alt="Card image cap">
          <div class="card-block" style="padding:8px">
            <h5 class="card-title">Suzuki</h5>
            <small class="card-text">Space for a small product description.</small><br>

            Fresheness <span style="padding-left:30px">New(Extra fresh)</span><br>
            Model <span style="padding-left:60px"> 2015</span><br>
            Color <span style="padding-left:66px"> Red</span><br>
            <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
            <a href="#" class="btn " id="b">Edit</a>
            <a href="#" class="btn " id="b">Delete</a>
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-sm-6  mb-2">
        <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
          <img src="<?php echo base_url(); ?>assets/images/bike1.png" class="card-img-top" alt="Card image cap">
          <div class="card-block" style="padding:8px">
            <h5 class="card-title">Suzuki</h5>
            <small class="card-text">Space for a small product description.</small><br>

            Fresheness <span style="padding-left:30px">New(Extra fresh)</span><br>
            Model <span style="padding-left:60px"> 2015</span><br>
            Color <span style="padding-left:66px"> Red</span><br>
            <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
            <a href="#" class="btn " id="b">Edit</a>
            <a href="#" class="btn " id="b">Delete</a>
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-sm-6  mb-2">
        <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
          <img src="<?php echo base_url(); ?>assets/images/bike1.png" class="card-img-top" alt="Card image cap">
          <div class="card-block" style="padding:8px">
            <h5 class="card-title">Suzuki</h5>
            <small class="card-text">Space for a small product description.</small><br>

            Fresheness <span style="padding-left:30px">New(Extra fresh)</span><br>
            Model <span style="padding-left:60px"> 2015</span><br>
            Color <span style="padding-left:66px"> Red</span><br>
            <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
            <a href="#" class="btn " id="b">Edit</a>
            <a href="#" class="btn " id="b">Delete</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6  mb-2">
        <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
          <img src="<?php echo base_url(); ?>assets/images/bike1.png" class="card-img-top" alt="Card image cap">
          <div class="card-block" style="padding:8px">
            <h5 class="card-title">Suzuki</h5>
            <small class="card-text">Space for a small product description.</small><br>

            Fresheness <span style="padding-left:30px">New(Extra fresh)</span><br>
            Model <span style="padding-left:60px"> 2015</span><br>
            Color <span style="padding-left:66px"> Red</span><br>
            <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
            <a href="#" class="btn" id="b">Edit</a>
            <a href="#" class="btn" id="b">Delete</a>
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-sm-6  mb-2">
        <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
          <img src="<?php echo base_url(); ?>assets/images/bike1.png" class="card-img-top" alt="Card image cap">
          <div class="card-block" style="padding:8px">
            <h5 class="card-title">Suzuki</h5>
            <small class="card-text">Space for a small product description.</small><br>

            Fresheness <span style="padding-left:30px">New(Extra fresh)</span><br>
            Model <span style="padding-left:60px"> 2015</span><br>
            Color <span style="padding-left:66px"> Red</span><br>
            <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
            <a href="#" class="btn " id="b">Edit</a>
            <a href="#" class="btn " id="b">Delete</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6  mb-2">
        <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
          <img src="<?php echo base_url(); ?>assets/images/bike1.png" class="card-img-top" alt="Card image cap">
          <div class="card-block" style="padding:8px">
            <h5 class="card-title">Suzuki</h5>
            <small class="card-text">Space for a small product description.</small><br>

            Fresheness <span style="padding-left:30px">New(Extra fresh)</span><br>
            Model <span style="padding-left:60px"> 2015</span><br>
            Color <span style="padding-left:66px"> Red</span><br>
            <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
            <a href="#" class="btn " id="b">Edit</a>
            <a href="#" class="btn " id="b">Delete</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6  mb-2">
        <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
          <img src="<?php echo base_url(); ?>assets/images/bike1.png" class="card-img-top" alt="Card image cap">
          <div class="card-block" style="padding:8px">
            <h5 class="card-title">Suzuki</h5>
            <small class="card-text">Space for a small product description.</small><br>

            Fresheness <span style="padding-left:30px">New(Extra fresh)</span><br>
            Model <span style="padding-left:60px"> 2015</span><br>
            Color <span style="padding-left:66px"> Red</span><br>
            <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
            <a href="#" class="btn " id="b">Edit</a>
            <a href="#" class="btn " id="b">Delete</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6  mb-2">
        <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
          <img src="<?php echo base_url(); ?>assets/images/bike1.png" class="card-img-top" alt="Card image cap">
          <div class="card-block" style="padding:8px">
            <h5 class="card-title">Suzuki</h5>
            <small class="card-text">Space for a small product description.</small><br>

            Fresheness <span style="padding-left:30px">New(Extra fresh)</span><br>
            Model <span style="padding-left:60px"> 2015</span><br>
            Color <span style="padding-left:66px"> Red</span><br>
            <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
            <a href="#" class="btn " id="b">Edit</a>
            <a href="#" class="btn " id="b">Delete</a>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="container-fluid mt-5">
    <img src="<?php echo base_url(); ?>assets/images/Rectangle 32336.png" class="img-fluid" width="100%" alt="">';
  </div>



</body>

</html>


<div id="addshopdetail" class="modal fade" role="dialog">

  <div class="modal modal-signin position-static d-block  py-5" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-4 shadow">
        <button data-dismiss="modal" type="button" class="close" aria-label="Close"
          style="margin-left: 90%; margin-top:10px;">&times;</button>


        <div class="modal-body px-5 pt-0">
          <h3 class=" mb-0 my-3 fs-5" style="text-align: center;color:#13C571">Shop Detail</h3>

          <?php if ($error = $this->session->flashdata('Login_fail')) { ?>
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
          <form action="<?php echo base_url(); ?>welcome/addshop" method="post">
            <input type="hidden" name="user_id" value="<?php echo $user['user_id'] ?>">
            <div class="form-group ">
              <label>Shop Name</label>
              <input name="name" class="form-control" placeholder="Shop Name" type="text"
                value="<?php echo set_value('email'); ?>" style="border-radius:30px; border-color:#13C571">
              <span style="color:red;">
                <?php echo form_error('email'); ?>
              </span>
            </div>
            <div class="form-group ">
              <label>Enter Your Email</label>
              <input name="email" class="form-control" placeholder="Email" type="text"
                value="<?php echo set_value('email'); ?>" style="border-radius:30px; border-color:#13C571">
              <span style="color:red;">
                <?php echo form_error('email'); ?>
              </span>
            </div> <!-- form-group// -->


            <div class="form-group">
              <label> Mobile</label>
              <input name="mobile" class="form-control" placeholder="Mobile" type="number"
                value="<?php echo set_value('mobile'); ?>" style="border-radius:30px; border-color:#13C571">
              <span style="color:red;">
                <?php echo form_error('phone'); ?>
              </span>
            </div>
            <div class="form-group">
              <label> Address</label>
              <input name="Address" class="form-control" placeholder="Address" type="text"
                value="<?php echo set_value('Address'); ?>" style="border-radius:30px; border-color:#13C571">
              <span style="color:red;">
                <?php echo form_error('phone'); ?>
              </span>
            </div>


            <!-- form-group// -->
            <div class="form-group">

              <label> Category</label>
              <select name="shop_category" style="border-radius:30px; border-color:#13C571" class="form-select"
                id="category" required>
                <option value="">Choose</option>
                <?php
                $category = get_all_shopcategory();
                foreach ($category as $key => $cat) {
                  ?>
                  <option id="" value="<?php echo $cat->id; ?>"><?php echo $cat->shop_category; ?></option>
                <?php } ?>
              </select>
              <span style="color:red;">
                <?php echo form_error('confirmpassword'); ?>
              </span>
            </div> <!-- form-group// -->



            <div class="form-group">
              <label> GST Number</label>
              <input name="GST" class="form-control" placeholder="GST Number" type="text"
                value="<?php echo set_value('name'); ?>" style="border-radius:30px; border-color:#13C571">
              <span style="color:red;">
                <?php echo form_error('name'); ?>
              </span>

            </div>
            <div class="form-group">
              <label> Description</label>
              <input name="description" class="form-control" placeholder="Description" type="text"
                value="<?php echo set_value('description'); ?>" style="border-radius:30px; border-color:#13C571">
              <span style="color:red;">
                <?php echo form_error('name'); ?>
              </span>

            </div>

            <center><button class=" mb-2 btn btn-lg  text-white mt-2"
                style="background-color:#13C571;border-radius:30px;width:40%;" type="submit" name="submit">Save</button>

            </center>
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

function checkcoverimage() {

var image =$('#cover_image').val();

if (image == "" ) {

    $("#cover_err").text("Please upload image");
   



} else {

    $("#cover_img").submit();

   
}

}



  (() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        var mabile = document.getElementById('mobile').value.length
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
          document.getElementById("mobile_error").innerHTML = "";
        }
        else if (mabile < 10) {
          document.getElementById("mobile_error").innerHTML = "Please enter 10 digits";
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
  })()
</script>