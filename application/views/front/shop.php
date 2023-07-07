<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script
        src="https://maps.google.com/maps/api/js?key=AIzaSyAuJlJoxTMjjeSLvb3BYmty0eEkp6oHfCU&libraries=places&callback=initAutocomplete">
    </script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

    <!-- link for map -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <title>Sellerprofile</title>
    <style>
    html,
    body {
        max-width: 100%;
        overflow-x: hidden;
    }

    .form-check-input:checked {
        background-color: #13C571;
        border-color: #13C571;
    }

    img.rounded-corners {
        border-radius: 50%;
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
    .details_price {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 25px;
        display: flex;
        align-items: flex-end;
        text-align: right;
        color: #10B981;
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

    .Shop_header {
        padding-bottom: 0px;
        border-bottom: 6px solid #10B981;
    }

    .related_ads_details_button {
        box-sizing: border-box;

        /* Auto layout */

        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 9.42857px 12.5714px;
        gap: 4.71px;

        width: 88.43px;
        height: 30.86px;

        background: #10B981;
        /* C2/B */

        border: 1.57143px solid #46760A;
        border-radius: 25.42857px;

        /* Inside auto layout */

        flex: none;
        order: 0;
        align-self: center;
        flex-grow: 0;
    }

    .related_ads_details_button_text {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 9.7857px;
        line-height: 15px;
        color: #FFFFFF;
        flex: none;
        order: 0;
        flex-grow: 0;
    }

    @media (min-width: 350px) and (max-width: 459px){

        #a {
        margin-right: 10px;
        border-color: #78d7b8;
        border-radius: 60px;
        font-family: open sans;
        font-weight: 550;
        font-size: 10px;
        padding: 4px 10px;
        max-width: 100%;

    }
    }

    </style>
</head>


<body>

    <?php 
   $shop = get_id_by_shop($user['user_id']);?>
    <div class="container" style=" margin-top: 180px;">

        <div class="shadow p-3  bg-body rounded-5" style="margin:25px"><br>
            <div class="row text-center">

                <div class="col-sm-5 mb-1">
                    <a href="<?php echo base_url(); ?>welcome/buyerprofile" class="btn" role="button"
                        aria-disabled="true" id="a">Buyer</a>
                </div>
                <div class="col-sm-7 mb-1">
                    <div class="row">
                        <div class="col-sm-6  mb-1">
                            <a href="<?php echo base_url(); ?>welcome/myprofile" class="btn" role="button"
                                aria-disabled="true" id="a">Seller</a>

                        </div>
                        <div class="col-sm-6 mb-1">
                            <a href="<?php echo base_url(); ?>welcome/shop"
                                style="background-color: #78d7b8; color:#fff" class="btn" role="button"
                                aria-disabled="true" id="a">Shop</a>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row ">
                <?php
        $profile = get_seller_profile($user['user_id']);

        ?>
                <div class="col-sm-6">

                    <img src="<?php echo base_url()."uploads/profile/".$profile->profile_img."";?>"
                        class="img-fluid rounded-corners mx-auto d-block" style="height: 131.9px;
width: 131.9px;">
                    <div style="text-align:center">
                        <h5><b>
                                <?php echo ucfirst($profile->name); ?>
                            </b></h5>
                            <img style="max-width:25px;" src="<?php echo base_url(); ?>assets/images/location .png"> <?php if(isset($profile->Address)) {echo ucfirst($profile->Address);} ?>

                    </div>
                    <div class="row text-center ">
                        <p>
                            <img src="<?php echo base_url()?>assets/images/email.png"> <?php echo $profile->email; ?>
                            <img src="<?php echo base_url()?>assets/images/mobile.png"> <?php echo $profile->phone; ?>
                        </p>
                        <?php  if(!empty($shop)){?>
                        <p class="pt-3"><?php if(!empty($shop->shop_images)){?>
                            <img class="rounded-4 " style="height: 161.9px;
width: 220.9px;" src="<?php echo base_url()?>uploads/shop/<?php echo $shop->shop_images; ?>">
                            <?php }else{?><img src="<?php echo base_url()?>assets/images/shop1.png">
                            <?php } }?>
                        </p>
                    </div><br>


                </div>
                <!-- <div class="vr" style="color:#78d7b8"></div> -->
                <div class="col-sm-6 " style=" border-left:solid; border-color: #78d7b8">
                    <?php 
       
           if(empty($shop)){?>
                    <div class="row text-center mt-5">

                        <div>
                            <a data-toggle="modal" data-target="#addshopdetail"
                                href="<?php echo base_url(); ?>welcome/shop"
                                style="background-color: #10b981; color:#fff" class="btn" role="button"
                                aria-disabled="true" id="a">Take Your Shop/Services online on celnow</a>
                            <p class="text-muted mt-4">Note: Once you will submit the details of shop then you can not change
                            </p>
                        </div>
                    </div>
                    <div class="row mt-5 ">
                        <?php }else{ ?>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <h5 class="ml-3"><b><?php echo ucfirst($shop->name);?> </b></h5>
                                </div>
                                <div class="col"><?php if($shop->admin_approval==2){?>
                                    <div>
                                        <a class="btn " id="b"
                                            style="align-self:center; background-color:#FF7474; color:#540C07">Rejected
                                            by admin </a>
                                    </div><?php }else if($shop->admin_approval==1){?> <div>
                                        <a class="btn " id="b"
                                            style="align-self:center; background-color:#d1fae5; color:#13C571">Verified
                                            by admin </a>
                                    </div><?php }else if($shop->admin_approval==0){?>
                                    <div>
                                        <a class="btn " id="b"
                                            style="align-self:center; background-color:#FF7474; color:#540C07">Pending
                                        </a>
                                    </div><?php } ?>
                                </div>
                            </div>

                            <p class="mt-3 ml-3 word"><?php echo $shop->description;?></p>
                            <p class="ml-3"><?php echo $shop->Address;?></p>
                            <p class="ml-3"><?php echo $shop->mobile;?></p>
                            <p class="ml-3 mt-5"><b>GST Number -</b><?php echo $shop->GST;?></p>

                            <p class="mt-3 ml-3"><b>Open-close time :</b> <?php echo $shop->open_close_time;?></p>
                            <p class="ml-3"><b>Type of service: </b><?php echo $shop->service_type;?></p>
                        </div>
                        <?php if($shop->admin_approval!=1 && $shop->admin_approval!=0){?>
                        <div class="row text-center p-5">
                            <div>
                                <a href="#" data-toggle="modal" data-target="#editshopdetail" class="btn btn-change"
                                    id="a" style="align-self:center; background-color:#13C571; color:#fff">Edit </a>
                            </div>
                        </div>

                        <div id="editshopdetail" class="modal fade" role="dialog">

                            <div class="modal modal-signin position-static d-block  py-5" tabindex="-1" role="dialog"
                                id="modalSignin">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content rounded-4 shadow">
                                        <button data-dismiss="modal" type="button" class="close" aria-label="Close"
                                            style="margin-left: 90%; margin-top:10px;">&times;</button>
                                        <?php  $shop = get_id_by_shop($user['user_id']); ?>

                                        <div class="modal-body px-5 pt-0">
                                            <h3 class=" mb-0 my-3 fs-5" style="text-align: center;color:#13C571">Edit
                                                Shop Detail</h3>

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
                                            <form class="needs-validation" novalidate
                                                action="<?php echo base_url(); ?>welcome/editshop" method="post"
                                                enctype="multipart/form-data">
                                                <input type="hidden" name="user_id"
                                                    value="<?php echo $user['user_id'] ?>">
                                                <input type="hidden" name="id" value="<?php echo $shop->id; ?>">
                                                <div class="form-group ">
                                                    <label>Shop Name</label>
                                                    <input name="name" class="form-control" placeholder="Shop Name"
                                                        type="text" value="<?php echo $shop->name; ?>"
                                                        style="border-radius:30px; border-color:#13C571" maxlength="25"
                                                        required>
                                                    <div class="invalid-feedback">
                                                        Valid name is required.
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label>Enter Your Email</label>
                                                    <input name="email" class="form-control" placeholder="Email"
                                                        type="email" maxlength="30" value="<?php echo $shop->email; ?>"
                                                        style="border-radius:30px; border-color:#13C571" required>
                                                    <div class="invalid-feedback">
                                                        Valid email is required.
                                                    </div>
                                                </div> <!-- form-group// -->


                                                <div class="form-group">
                                                    <label> Mobile</label>
                                                    <input name="mobile" class="form-control" placeholder="Mobile"
                                                        type="number" id="mobile"
                                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                        value="<?php echo $shop->mobile; ?>"
                                                        style="border-radius:30px; border-color:#13C571" maxlength="10"
                                                        minlength="10" required>
                                                    <p id="mobile_error"></p>
                                                    <div class="invalid-feedback">
                                                        Valid Mobile is required.
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Google Address</label>
                                                    <input type="text" class="form-control" name="Address"
                                                        placeholder="Address" id="location"
                                                        value="<?php echo $shop->Address; ?>"
                                                        style="border-radius:30px; border-color:#13C571" required>
                                                    <div class="invalid-feedback">
                                                        Address is required.
                                                    </div>
                                                </div>


                                                <!-- form-group// -->
                                                <div class="form-group">

                                                    <label> Category</label>
                                                    <select name="shop_category"
                                                        style="border-radius:30px; border-color:#13C571"
                                                        class="form-select" required id="category" required>
                                                        <option value="">Choose</option>
                                                        <?php
                $category = get_all_shopcategory();
                foreach ($category as $key => $cat) {
                  ?>
                                                        <option id="" value="<?php echo $cat->id; ?>"
                                                            <?php if($cat->id == $shop->shop_category_id ){echo "Selected" ;}?>>
                                                            <?php echo $cat->shop_category; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Category is required.
                                                    </div>
                                                </div> <!-- form-group// -->

                                                <div class="form-group">
                                                    <label>Shop Time</label>
                                                    <input name="open_close_time" class="form-control"
                                                        placeholder="00:00 AM To 00:00 PM" type="text"
                                                        value="<?php echo $shop->open_close_time; ?>"
                                                        style="border-radius:30px; border-color:#13C571" required>
                                                    <div class="invalid-feedback">
                                                        Valid time is required.
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label>Type of service </label>
                                                    <div class="col-12">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="service_type" id="inlineRadio1" value="Remote"
                                                                checked>
                                                            <label class="form-check-label"
                                                                for="inlineRadio1">Remote</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="service_type" id="inlineRadio2" value="In Shop">
                                                            <label class="form-check-label" for="inlineRadio2">In
                                                                Shop</label>
                                                        </div>

                                                    </div>

                                                    <div class="invalid-feedback">
                                                        Valid Service Type is required.
                                                    </div>

                                                </div>


                                                <div class="form-group">
                                                    <label> GST/PAN Number/Adhar Number</label>
                                                    <input name="GST" class="form-control" placeholder="GST Number"
                                                        type="text" maxlength="20" value="<?php echo $shop->GST; ?>"
                                                        style="border-radius:30px; border-color:#13C571" required>
                                                        <input type="file" class="form-control mt-3"  name="shop_images[]"
                                style="border-radius:30px; border-color:#13C571" ><div class="invalid-feedback">
                                                        Valid GST is required.
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <label> Description</label>
                                                    <textarea name="description" class="form-control" id="editor"
                                                        placeholder="Description" maxlength="200" rows="4"
                                                        style="border-radius:20px; border-color:#13C571"
                                                        required><?php echo $shop->description; ?></textarea>
                                                    <div class="invalid-feedback">
                                                        Valid message is required.
                                                    </div>

                                                </div>

                                                <div class="form-group">

                                                    <label>Shop document photo Upload size(180 x 190) px</label>
                                                    <input type="file" class="form-control" id="cover_image"
                                                        name="shop_images[]"
                                                        style="border-radius:30px; border-color:#13C571"
                                                        accept="image/*" required>
                                                    <span id="cover_err" style="color:red;"></span>
                                                    <div class="invalid-feedback">
                                                        Image is required.
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked" required>

                                                        <label>
                                                            Terms and Conditions
                                                        </label>
                                                        <div class="invalid-feedback">
                                                            Terms & condition is required.
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="latitude" id="latitude"
                                                    hidden />
                                                <input type="text" class="form-control" name="longitude" id="longitude"
                                                    hidden />

                                                <center><button class=" mb-2 btn btn-lg  text-white mt-2"
                                                        style="background-color:#13C571;border-radius:30px;width:40%;"
                                                        type="submit" name="submit">Save</button>

                                                </center>
                                            </form>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php } } ?>


                    </div>


                </div>
            </div><br>
        </div>
    </div>


    <div class="container">
        <h3 class="ml-5"><b>Verified Ads</b></h3>
    </div>

    <div class="container">

        <div class="row ml-4 mr-4">

            <?php if(!empty($shop->id)){
      $product = get_productid_by_shop($shop->id);
    foreach($product as $value){

    
    $category =$value->category_id; 
    $product =$value->product_id;

    if($category==1){
      $Categories_all_product = get_all_category_reusable_parts($product);
     
    }

    $wishlist = 0;
    if (!empty($user) && isset($user)) {
      $wishlit = get_wishlist($Categories_all_product->id, $Categories_all_product->category_id, $user["user_id"]);

      if (empty($wishlit)) {

        $wishlist = 0;


      } else {

        $wishlist = 1;

      }
    } else {
      $wishlist = 0;
    }
    ?>



<div class="col-lg-3 col-md-4 col-sm-6 mb-4" >
<a
                                href="<?php echo base_url();?>welcome/productdetail/<?php echo $Categories_all_product->category_id; ?>/<?php echo $Categories_all_product->id; ?>/<?php echo $Categories_all_product->subcategory_id; ?>">
            <div class="card">
            <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                          <img
                                    src="<?php echo base_url(); ?><?php echo $Categories_all_product->cover_img ?>"
                                    class="w-100 va-thumbnail" />
                                    <p style="margin-left:5px;"> 
                                    <?php if($Categories_all_product->pay_type ==1){ ?>
                                      <img class="img-fluid image2"
                                src="<?php echo base_url(); ?>assets/images/sponsor.png" style="
   width:80px; ">
                            <?php } if($Categories_all_product->verified_product ==1){ ?>
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
              <div class="row mt-1">
                 <div class="col-9">
                            
                             <?php if($Categories_all_product->category_id != 4 && $Categories_all_product->pay_type !=2){ ?>
                         <p class="details_price">₹<?php echo $Categories_all_product->price; ?>
                                </p>
<?php } ?>
<?php if($Categories_all_product->pay_type==2){?>
  <p class="details_price">Donate</p>
  <?php } ?>
</div>
                                                <div class="col-3">

                            <a  style="font-size:20px; color:#69d3b0; padding: 0px;" <?php if (empty($user) || !isset($user)) { ?>
                                href="<?php echo base_url(); ?>welcome/login" <?php } else { ?>><i lass="bi bi-suit-heart" aria-hidden="true"
                                style="font-size:20px; color:#69d3b0; padding: 0px;"
                               
                                data-uid="<?php echo $user["user_id"]; ?>" <?php } ?>
                                class="<?php echo ($wishlist == 0) ? 'fa fa-heart-o' : 'fa fa-heart'; ?> dddssaaf dddssaaf<?php echo $Categories_all_product->id; ?>"
                                data-pid="<?php echo $Categories_all_product->id; ?>"
                                data-cid="<?php echo $Categories_all_product->category_id; ?>"
                                data-wishlist="<?php echo $wishlist; ?>"></i></a>
                                </div>      </div>
                            <div class="d-flex justify-content-between align-items-center">

                                <p><?php
                           $title = $Categories_all_product->title;
                            if(strlen($title) <= 20)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,20) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?></p>

                            </div>
                            <div class="row mt-1">
                                                <div class="col-2">
                                                <p> <img src="<?php echo base_url();?>assets/images/location .png"></p>
                                                </div>
                                                <div class="col-8">
                                                <p style="color: #575757;"><?php
                           $title = $Categories_all_product->address;
                            if(strlen($title) <= 15)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,15) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?></p>
                                                </div>
                                   
                                            </div>
                        </div>
            </div>
            </a>
          </div> 

            <?php } }else{?>
            <center><img src="<?php echo base_url();?>assets/images/no_product .png"></center>
            <?php } ?>
        </div>
    </div>


    <div class="container-fluid px-0 mt-5">
        <img src="<?php echo base_url(); ?>assets/images/Rectangle 32336.png" class="img-fluid" width="100%" alt="">
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
                    <form class="needs-validation" novalidate action="<?php echo base_url(); ?>welcome/addshop"
                        method="post" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="<?php echo $user['user_id'] ?>">
                        <div class="form-group ">
                            <label>Shop Name</label>
                            <input name="name" class="form-control" placeholder="Shop Name" type="text" maxlength="30"
                                value="<?php echo set_value('email'); ?>"
                                style="border-radius:30px; border-color:#13C571" required>
                            <div class="invalid-feedback">
                                Valid name is required.
                            </div>
                        </div>
                        <div class="form-group ">
                            <label>Enter Your Email</label>
                            <input name="email" class="form-control" placeholder="Email" type="email"
                                value="<?php echo set_value('email'); ?>"
                                style="border-radius:30px; border-color:#13C571" required>
                            <div class="invalid-feedback">
                                Valid email is required.
                            </div>
                        </div> <!-- form-group// -->


                        <div class="form-group">
                            <label> Mobile</label>
                            <input name="mobile" class="form-control" placeholder="Mobile" type="number" id="mobile"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                value="<?php echo set_value('mobile'); ?>" maxlength="10" minlength="10"
                                style="border-radius:30px; border-color:#13C571" required>
                            <div class="invalid-feedback">
                                Valid Mobile is required.
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Google Address</label>
                            <input name="Address" class="form-control" placeholder="Address" id="location" type="text"
                                maxlength="30" value="" style="border-radius:30px; border-color:#13C571" required>
                            <div class="invalid-feedback">
                                Address is required.
                            </div>
                        </div>


                        <!-- form-group// -->
                        <div class="form-group">

                            <label> Category</label>
                            <select name="shop_category" style="border-radius:30px; border-color:#13C571"
                                class="form-select" required id="category" required>
                                <option value="">Choose</option>
                                <?php
                $category = get_all_shopcategory();
                foreach ($category as $key => $cat) {
                  ?>
                                <option id="" value="<?php echo $cat->id; ?>"><?php echo $cat->shop_category; ?>
                                </option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                Category is required.
                            </div>
                        </div> <!-- form-group// -->

                        <div class="form-group">
                            <label>Shop Time</label>
                            <input name="open_close_time" class="form-control" placeholder="00:00 AM To 00:00 PM"
                                type="text" value="<?php echo set_value('open_close_time'); ?>"
                                style="border-radius:30px; border-color:#13C571" required>
                            <div class="invalid-feedback">
                                Valid time is required.
                            </div>

                        </div>

                        <div class="form-group">
                            <label>Service Type</label>
                            <div class="col-12">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="service_type"
                                        id="inlineRadio1" value="Remote" checked>
                                    <label class="form-check-label" for="inlineRadio1">Remote</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="service_type"
                                        id="inlineRadio2" value="In Shop">
                                    <label class="form-check-label" for="inlineRadio2">In Shop</label>
                                </div>

                            </div>
                            <div class="invalid-feedback">
                                Valid Service Type is required.
                            </div>

                        </div>

                        <div class="form-group">
                            <label> GST/PAN Number/Adhar Number</label>
                            <input name="GST" class="form-control" placeholder="GST Number" type="text" maxlength="20"
                                value="<?php echo set_value('name'); ?>"
                                style="border-radius:30px; border-color:#13C571" required>
                                <input type="file" class="form-control mt-3"  name="shop_images[]"
                                style="border-radius:30px; border-color:#13C571">
                            <div class="invalid-feedback">
                                Valid GST is required.
                            </div>

                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" id="editor" placeholder="Description"
                                maxlength="200" rows="4" style="border-radius:20px; border-color:#13C571"
                                required></textarea>
                            <div class="invalid-feedback">
                                Valid message is required.
                            </div>


                        </div>

                        <div class="form-group">

                            <label>Shop document photo Upload size(180 x 190) px</label>
                            <input type="file" class="form-control" id="cover_image" name="shop_images[]"
                                style="border-radius:30px; border-color:#13C571" accept="image/*">
                            <span id="cover_err" style="color:red;"></span>
                        </div>

                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required>
                                <label>
                                    Terms and Conditions
                                </label>
                                <div class="invalid-feedback">
                                    Terms & condition is required.
                                </div>
                            </div>
                        </div>
                        <input type="text" class="form-control" name="latitude" id="latitude" hidden />
                        <input type="text" class="form-control" name="longitude" id="longitude" hidden />
                        <center><button class=" mb-2 btn btn-lg  text-white mt-2"
                                style="background-color:#13C571;border-radius:30px;width:40%;" type="submit"
                                name="submit">Save</button>

                        </center>
                    </form>


                </div>
            </div>
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
    var input = document.getElementById('Location');
    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
        $('#addshopdetail').modal('show');
        $('#latitude').val(place.geometry['Location'].lat());
        $('#longitude').val(place.geometry['Location'].lng());

        $("#latitudeArea").removeClass("d-none");
        $("#longtitudeArea").removeClass("d-none");
    });
}
</script>


<script>
function checkcoverimage() {

    var image = $('#cover_image').val();

    if (image == "") {

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
            } else if (mabile < 10) {
                document.getElementById("mobile_error").innerHTML = "Please enter 10 digits";
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()
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