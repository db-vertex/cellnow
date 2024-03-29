<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
   
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- link for card -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
    <title>Buyer Profile</title>
    <style>
    html,
    body {
        max-width: 100%;
        overflow-x: hidden;
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


    #a:visited {
        color: #78d7b8;


    }

    #a:hover {
        color: white;
        background-color: #78d7b8;


    }

    img.rounded-corners {
        border-radius: 50%;
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




    <div class="container" style=" margin-top: 130px;">

        <div class="shadow p-4  bg-body rounded-5" style=""><br>
            <div class="row text-center justify-content-around">
                    <div class="col-3 mb-1">
                    <a href="<?php echo base_url();?>welcome/buyerprofile" style="background-color: #13C571; color:#fff"
                        class="btn" role="button" aria-disabled="true" id="a">Buyer</a>
                    </div>

                    <div class="col-3 mb-1">
                    <a href="<?php echo base_url();?>welcome/myprofile" class="btn" role="button"
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
                    <a href="" data-toggle="modal" data-target="#createModal"><img class="btn-change"
                            src="<?php echo base_url(); ?>/assets/images/Group 451.png"
                            style="height: 27px; width:27px;margin-left: 52%;position: absolute;margin-top: 4px;border-radius: 100%;"></a>

                    <img src="<?php echo base_url()."uploads/profile/".$profile->profile_img."";?>"
                        class="img-fluid rounded-corners mx-auto d-block" style="height: 131.9px; width: 131.9px;">
                    <div style="text-align:center">
                        <h5 class="shop_images_view"><b><?php echo ucfirst($profile->name); ?></b></h5>
                        <img style="max-width:25px;" src="<?php echo base_url(); ?>assets/images/location .png" alt="location"> <?php if(isset($profile->Address)){ echo ucfirst($profile->Address);} ?>

                    </div>
                    <div class="row text-center ">
                        <p>
                            <img src="<?php echo base_url()?>assets/images/email.png"> <?php echo $profile->email; ?>
                            <img src="<?php echo base_url()?>assets/images/mobile.png"> <?php echo $profile->phone; ?>
                        </p>
                    </div><br>


                </div>
              
                <div class="col-sm-6 text-center shop_details_border " style="">

                    <h4 class="shop_images_view"><b>About us</b></h4>
                    <p class="word"><?php echo ucfirst($profile->aboutus); ?></p>

                    <div class="row text-center p-5">
                        <div>
                            <a href="#" data-toggle="modal" data-target="#editprofile" class="btn btn-change" id="a"
                                style="align-self:center; background-color:#10B981; color:#fff;">Edit </a>
                        </div>
                    </div>
                </div>
            </div><br>
        </div>
    </div>

    <div class="container-fluid mt-5" style="padding:0px">
    <a href="<?php echo base_url();?>welcome/postproduct">
        <img src="<?php echo base_url();?>/assets/images/Rectangle 32336.png" class="img-fluid" width="100%" alt="" style="max-height: 288px;">
        </a>
    </div>




</body>

</html>

<div id="editprofile" class="modal fade" role="dialog">

    <div class="modal modal-signin position-static d-block  py-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <button data-dismiss="modal" type="button" class="close" aria-label="Close"
                    style="margin-left: 90%; margin-top:10px;">&times;</button>


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

                    <form class="needs-validation" novalidate enctype="multipart/form-data"
                        action="<?php echo base_url();?>welcome/updatesellerreg" method="POST" class="needs-validation"
                        novalidate style="text-align: center;">
                        <?php
                            
                            $profile = get_seller_profile($user['user_id']);

                            //$username = get_username($user['user_id']);

                            //print_r($profile);
                     
                        ?>
                        <input type="hidden" name="user_id" value="<?php echo $user['user_id'] ?>">

                        <input type="hidden" name="profile_id" value="<?php echo $profile->user_id; ?>">
                        <div class=" input-container my-3 px-3">

                            <input name="name" type="text" class="form-control pl-5  text-dark Name" id="firstName"
                                value="<?php echo $profile->name; ?>" placeholder="Name" maxlength="30"
                                style="border-radius:30px; border-color:#13C571" required>
                            <div class="invalid-feedback">
                                Valid name is required.
                            </div>
                        </div>

                        <div class=" input-container my-3 px-3">

                            <?php if($profile->login_type!=='normal'){?>
                            <input name="email" type="email" class="form-control pl-5  text-dark inp-icon" readonly
                                placeholder="Enter Email" style="border-radius:30px; border-color:#13C571">


                            <?php  }else{?>
                            <input name="email" type="email" class="form-control pl-5  text-dark inp-icon" id="email"
                                value="<?php echo $profile->email; ?>" maxlength="25" placeholder="Enter Email"
                                style="border-radius:30px; border-color:#13C571" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div><?php }?>
                        </div>
                        <div class=" input-container mt-3 px-3 ">

                            <input name="phone" type="number" class="form-control  pl-5 text-dark mobile"
                                value="<?php echo $profile->phone; ?>" placeholder="phone" readonly
                                style="border-radius:30px; border-color:#13C571" required>

                            <p id="mobile_error"></p>
                            <div class="invalid-feedback">
                                Valid mobile is required.
                            </div>
                        </div>
                        <div class=" input-container my-3 px-3">

                            <input name="Address" type="text" class="form-control  pl-5  text-dark Name" id="buyer_address"
                                maxlength="30" value="<?php echo $profile->Address; ?>" placeholder="Address"
                                style="border-radius:30px; border-color:#13C571" required>
                            <div class="invalid-feedback">
                                Valid address is required.
                            </div>
                        </div>
                        <div class=" input-container my-3 px-3 ">
                            <p>Only 150 characters are allowed</p>
                            <textarea name="aboutus" class="form-control" id="aboutus" placeholder="About Us"
                                maxlength="150" rows="4" style="border-radius:20px; border-color:#13C571"
                                required><?php echo $profile->aboutus; ?></textarea>
                            <div class="invalid-feedback">
                                Valid message is required.
                            </div>
                        </div>

                        <input type="text" class="form-control" name="latitude" id="latitude" hidden />
                        <input type="text" class="form-control" name="longitude" id="longitude" hidden />
                        <center><button class=" mb-2 btn btn-lg  text-white mt-2"
                                style="background-color:#13C571;border-radius:30px;width:40%;" type="submit"
                                name="submit">Edit</button>

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
            <form id="cover_img" enctype="multipart/form-data" action="<?php echo base_url();?>welcome/uploadprofileimg"
                method="POST">
                <input type="hidden" name="user_id" value="<?php echo $user['user_id'] ?>">
                <div class="modal-body">
                    <div class="form-group">

                        <label>Image size(151 x 151) px</label>
                        <input type="file" class="form-control" id="cover_image" name="profile_img" accept="image/*">
                        <span id="cover_err" style="color:red;"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-change btn btn-secondary pull-left"
                        data-dismiss="modal">Cancel</button>
                    <button type="button" style="background-color:#13C571; color:#fff;
                            border-radius:0.20rem;" class="btn-change btn btn-rounded"
                        onclick="return checkcoverimage();">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    $(function () {
        var input = document.getElementById("Location");
        var autocomplete = new google.maps.places.Autocomplete(input);

      

    });

</script>
<style>
    .pac-container {
        z-index: 10000 !important;
    }
</style>

<script>
$(document).ready(function() {
    $("#latitudeArea").addClass("d-none");
    $("#longtitudeArea").addClass("d-none");
});

google.maps.event.addDomListener(window, 'load', initialize);

function initialize() {
    var input = document.getElementById('buyer_address');
    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
        $('#addshopdetail').modal('show');
        $('#latitude').val(place.geometry['location'].lat());
        $('#longitude').val(place.geometry['location'].lng());

        $("#latitudeArea").removeClass("d-none");
        $("#longtitudeArea").removeClass("d-none");
    });
}
</script>

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

    var image = $('#cover_image').val();

    if (image == "") {

        $("#cover_err").text("Please upload image");




    } else {

        $("#cover_img").submit();


    }

}


function checkprofile() {

    var image = $('#cover_image').val();

    if (image == "") {

        $("#cover_err").text("Please upload image");




    } else {

        $("#cover_img").submit();


    }

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