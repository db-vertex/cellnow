<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

    <!-- link for map -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">



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

    .spacetop {
        margin-top: 10px;
    }

    .left-space {
        padding-left: 25%;
    }

    .details_img_cover {

        background: url(suzuki-gixxer-sf-150cc-bike-500x500.png);
        border-radius: 15px;
        max-width: 150px;
        min-width: 150px;
        max-height: 100px;

    }

    .column {
        float: left;
        width: 16.66%;
    }

    .caption-container {
        text-align: center;
        background-color: #222;
        padding: 2px 16px;
        color: white;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Add a transparency effect for thumnbail images */



    .details_img_box {
        min-width: 50.69px;
        max-width: 50.69px;
        max-height: 50.31px;
        min-height: 50.31px;
        left: 114px;
        top: 1213.13px;

        border-radius: 11.8328px;
    }

    .mySlides {
        display: none;
    }



    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;

        top: 30%;
        width: 49%;
        padding: 16px;
        margin-top: -100px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }

    .deletebtn {
        left: 10px;

        position: absolute;
    }

    .editebtn {
        margin-left: 14px;
        margin-top: 12px;
        position: absolute;
    }

    .image-uploade {
        background: url('https://www.freeiconspng.com/uploads/no-image-icon-11.PNG');
        border: 2px solid grey;
        border-radius: 10px;
        height: 100px;
        width: 100%;

        object-fit: cover;
        background-size: cover;
        background-repeat: no-repeat;
        padding: 10px;
    }

    .image-upload>input,
    .image-uploade>input {
        display: none;
    }

    img.rounded-corners {
        border-radius: 50%;
    }

    @media screen and (min-width: 560px) {
        #a {
            margin-right: 10px;
            border-color: #78d7b8;
            border-radius: 60px;
            font-family: open sans;
            font-weight: 550;
            font-size: 22px;
            padding: 4px 32px;

        }
    }

    @media screen and (max-width: 560px) {
        #a {
            margin-right: 10px;
            border-color: #78d7b8;
            border-radius: 60px;
            font-family: open sans;
            font-weight: 550;
            font-size: 15px;
            padding: 4px 18px;
        }
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

    #c {
        margin-right: 10px;
        border-color: #78d7b8;
        border-radius: 60px;
        font-family: open sans;
        font-weight: 550;
        font-size: 15px;
        padding: 9px 32px;

    }

    @media (min-width: 350px) and (max-width: 459px) {



        .spacetop {
            margin: 0px;
        }

        .left-space {
            padding-left: 20px;
        }

        .details_img_cover {
            background: url(suzuki-gixxer-sf-150cc-bike-500x500.png);
            border-radius: 15px;

        }

        .column {
            float: left;
            width: 22.66%;
        }
    }

    .shop_images_view {
        font-family: open sans;
        font-weight: 550;
    }

    @media (min-width: 575px) {
        .shop_details_border {
            border-left: solid;
            border-color: #78d7b8;
        }
    }

    .fa_plus {
        padding-top: 32%;
        font-size: 30px;
        text-align: center;
        text-decoration: none;
        color: #888b97;
    }

    .fa_delete {
        position: absolute;
        left: 130px;
        color: red;
        cursor: pointer;
        display: none;
    }

    .delete-icon {
        display: none;
    }

    .upl_img {
        width: inherit;
        height: inherit;
    }
    .images_validation{
        display:none;
    }
    .Terms_condition{
        display:none; 
    }
    </style>
</head>


<body>

    <?php 
   $shop = get_id_by_shop($user['user_id']);?>
    <div class="container" style=" margin-top: 130px;">

        <div class="shadow p-3  bg-body rounded-5" style=""><br>
            <div class="row text-center justify-content-around">
                <div class="col-3 mb-1">
                    <a href="<?php echo base_url();?>welcome/buyerprofile" class="btn" role="button"
                        aria-disabled="true" id="a">Buyer</a>
                </div>

                <div class="col-3 mb-1">
                    <a href="<?php echo base_url();?>welcome/myprofile" class="btn" role="button" aria-disabled="true"
                        id="a">Seller</a>
                </div>


                <div class="col-3 mb-1">
                    <a href="<?php echo base_url();?>welcome/shop" style="background-color: #13C571; color:#fff"
                        class="btn" role="button" aria-disabled="true" id="a">Shop</a>
                </div>
            </div>

            <br>
            <div class="row ">
                <?php
            $profile = get_seller_profile($user['user_id']);

              ?>
                <div class="col-sm-6">
                    <div class="row" style="place-content: center;">
                    <div class="col-6">
                        <div style="text-align: right;">
                            <a href="" data-toggle="modal" data-target="#createModal">
                                <img class="btn-change"
                                    src="<?php echo base_url(); ?>/assets/images/Group 451.png"
                                    style="height: 27px; width:27px;margin-left: -22%;position: absolute;margin-top: 4px;border-radius: 100%;">
                                </a>
                        </div>
                            <img
                             src=" <?php if(isset($shop->shop_images)) {echo base_url()."uploads/shop/".$shop->shop_images;} 
                             else{
                                echo base_url()."uploads/shop/noshop_images.png";
                             }
                             ?>"
                        class="img-fluid mx-auto rounded d-block" style="height: 131.9px; max-width: 100%;">
                   </div>
                   </div>
                    <div style="text-align:center">
                        <h5 class="mt-3"><b>
                                <?php if(isset($shop->name)) {echo ucfirst($shop->name);} ?>
                            </b></h5>

                        <img style="max-width:25px;" alt="location" src="<?php if(isset($shop->Address)) {echo base_url()."assets/images/location .png";} 
                             else{
                             }
                             ?>">
                        <?php if(isset($shop->Address)) {echo ucfirst($shop->Address);} ?>

                    </div>
                    <div class="row text-center ">
                        <p>
                            <img src="<?php echo base_url()?>assets/images/email.png"> <?php echo $profile->email; ?>
                            <img src="<?php echo base_url()?>assets/images/mobile.png"> <?php echo $profile->phone; ?>
                        </p>


                    </div>


                </div>
                <!-- <div class="vr" style="color:#78d7b8"></div> -->
                <div class="col-sm-6 shop_details_border" style="">
                    <?php 
       
                             if(empty($shop)){ ?>
                                <div class="row text-center mt-2">

                                    <div>


                            <h5 class="text-muted mt-4 card-title_Login">Take Your Shop/Services online on CelNow</h5>

                            <a data-toggle="modal" data-target="#addshopdetail"
                                href="<?php echo base_url(); ?>welcome/shop"
                                style="background-color: #13C571; color:#fff" class="btn spacetop card-title_Login"
                                role="button" aria-disabled="true" id="c">ADD SHOP </a>
                            <p class="text-muted mt-4 card-title_Login">
                            </p>
                        </div>
                    </div>
                    <div class="row mt-5 ">
                        <?php }else{ ?>
                        <div class="col mt-4">
                            <div class="row">
                               
                                <div class="col"><?php if($shop->admin_approval==2){?>
                                    <div>
                                        <a class="btn" id="b"
                                            style="align-self:left; background-color:#FF7474; color:#540C07">Rejected
                                            by admin </a>
                                    </div><?php }else if($shop->admin_approval==1){?> <div>
                                        <p class="btn " id="b"
                                            style="align-self:left; background-color:#d1fae5; color:#13C571">Verified
                                            by admin </p>
                                    </div><?php }else if($shop->admin_approval==0){?>
                                    <div>
                                        <a class="btn " id="b"
                                            style="align-self:left; background-color:#FF7474; color:#540C07">Pending
                                        </a>
                                    </div><?php } ?>
                                </div>
                            </div>

                            <p class="mt-3 ml-3 word"><?php echo  ucfirst($shop->description);?></p>
                          
                            <p><?php echo $shop->mobile;?></p>
                            <p class=" mt-5"><b>GST Number -</b><?php echo $shop->GST;?></p>

                            <p class="mt-3"><b>Open-close time :</b> <?php echo $shop->open_close_time;?></p>
                            <p class=""><b>Type of service: </b><?php echo $shop->service_type;?></p>
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
                                                    <label> GST/PAN Number/Aadhar Number</label>
                                                    <input name="GST" class="form-control" placeholder="GST Number"
                                                        type="text" maxlength="20" value="<?php echo $shop->GST; ?>"
                                                        style="border-radius:30px; border-color:#13C571" required>
                                                    <input type="file" class="form-control mt-3" name="shop_images[]"
                                                        style="border-radius:30px; border-color:#13C571">
                                                    <div class="invalid-feedback">
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
                                                    <div class="row">
                                                        <label>Shop document photo Upload size(180 x 190) px</label>
                                                        <?php 

                /* echo $product['id'];*/

                $i=1;

                $product_image =   get_shop_image($shop->id);

                    $count = count($product_image);

                                        if(!empty($product_image)){
                                        foreach ($product_image as $key => $pro_img) {

                                            $ext = pathinfo($pro_img->shop_image, PATHINFO_EXTENSION);

                                            ?>
                                                        <div class="col-6" id="productimage<?=$pro_img->id?>">
                                                            <p class="deletebtn" data-productid="<?=$shop->id; ?>"
                                                                data-imageid="<?=$pro_img->id?>"><i class="fa fa-trash"
                                                                    aria-hidden="true"
                                                                    style="font-size:20px; color:red  margin-left: 14px; margin-top: 12px;position: absolute;"></i>
                                                            </p>
                                                            <a href="<?php echo base_url()."uploads/shop/$pro_img->shop_image";?>"
                                                                style="width: 100%;"><img
                                                                    src="<?php echo base_url()."uploads/shop/$pro_img->shop_image";?>"
                                                                    style="border: 2px solid grey;border-radius: 10px; height: 100px; width: inherit; margin: 8px 8px 8px 8px; object-fit: cover; "></a>
                                                        </div>


                                                        <?php

                                                            $i++;

                                                                }

                                                                }

                                                            for($i=0; $i<(4-count($product_image)); $i++){
                                                            ?>
                                                        <div class="col-6">
                                                            <p class="editebtn" onclick="fileinputimg<?=$i?>.click();"
                                                                for="fileinputimg<?=$i?>"><i class="fa fa-edit"
                                                                    aria-hidden="true"
                                                                    style="font-size:20px;color:#78d7b8"></i></p>
                                                            <a style="width: 100%;">
                                                                <div
                                                                    style=" height: 150px; max-width:100%; min-width:100%; margin: 8px 8px 8px 8px; object-fit: cover; ">
                                                                    <div for="fileinputimg<?=$i?>"
                                                                        class="image-uploade">
                                                                        <input id="fileinputimg<?=$i?>"
                                                                            class="fileinputimg" name="backimg[]"
                                                                            type="file" accept="image/*" />
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <?php
}
      ?>

                                                        <span id="cover_err" style="color:red;"></span>
                                                        <div class="invalid-feedback">
                                                            Image is required.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked" required style="margin-top: 5px;">

                                                        <a class="text-decoration-none text-dark"
                                                            href="<?php echo base_url();?>welcome/termscondition">
                                                            Terms and Conditions
                                                        </a>
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
                        <?php }  ?>

                        <?php if($shop->admin_approval!=2 && $shop->admin_approval!=0){?>
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
                                                action="<?php echo base_url(); ?>welcome/editverifiedshop" method="post"
                                                enctype="multipart/form-data">
                                                <input type="hidden" name="user_id"
                                                    value="<?php echo $user['user_id'] ?>">
                                                <input type="hidden" name="id" value="<?php echo $shop->id; ?>">

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
                                                    <div class="row">
                                                        <label>Shop document photo Upload size(180 x 190) px</label>
                                                        <?php 
                                                    $i=1;
                                                    $product_image =   get_shop_image($shop->id);
                                                        $count = count($product_image);
                                                        if(!empty($product_image)){
                                                        foreach ($product_image as $key => $pro_img) {
                                                            $ext = pathinfo($pro_img->shop_image, PATHINFO_EXTENSION);
                                                            ?>
                                                        <div class="col-6" id="productimage<?=$pro_img->id?>">
                                                            <p class="deletebtn" data-productid="<?=$shop->id; ?>"
                                                                data-imageid="<?=$pro_img->id?>"><i class="fa fa-trash"
                                                                    aria-hidden="true"
                                                                    style="font-size:20px;color:red;margin-left: 14px; margin-top: 12px;position: absolute;"></i>
                                                            </p>
                                                            <a
                                                                href="<?php echo base_url()."uploads/shop/$pro_img->shop_image";?>"><img
                                                                    src="<?php echo base_url()."uploads/shop/$pro_img->shop_image";?>"
                                                                    style="border: 2px solid grey;
                                                                     border-radius: 10px; height: 100px; max-width:100%; min-width:100%; margin: 8px 8px 8px 8px; object-fit: cover; "></a>
                                                        </div>


                                                        <?php

                                                                                    $i++;

                                                                                        }

                                                                                        }

                                                    for($i=0; $i<(4-count($product_image)); $i++){
                                                    ?>
                                                        <div class="col-6">
                                                            <p class="editebtn" onclick="fileinputimg<?=$i?>.click();"
                                                                for="fileinputimg<?=$i?>"><i class="fa fa-edit"
                                                                    aria-hidden="true"
                                                                    style="font-size:20px;color:#78d7b8"></i></p>
                                                            <a style="width: 100%;">
                                                                <div
                                                                    style=" height: 150px; max-width:100%; min-width:100%; margin: 8px 8px 8px 8px; object-fit: cover; ">
                                                                    <div for="fileinputimg<?=$i?>"
                                                                        class="image-uploade">
                                                                        <input id="fileinputimg<?=$i?>"
                                                                            class="fileinputimg" name="backimg[]"
                                                                            type="file" accept="image/*" />
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <?php
}
      ?>

                                                        <span id="cover_err" style="color:red;"></span>
                                                        <div class="invalid-feedback">
                                                            Image is required.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked" required style="margin-top: 5px;">

                                                        <a class="text-decoration-none text-dark"
                                                            href="<?php echo base_url();?>welcome/termscondition">
                                                            Terms and Conditions
                                                        </a>
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



                <div class="row" style="margin-left: 0.2rem!important;">
                    <?php if(!empty($shop)){?>
                    <h5 class="shop_images_view">Shop Images</h5>
                    <?php $i=1;
                $product_image = get_shop_image($shop->id);
                if(!empty($product_image)){
                foreach($product_image as $product_images){ ?>`
                    <div class=" col-lg-2 col-sm-4 col-auto mb-3">
                        <a href="<?php echo base_url().'uploads/shop/'.$product_images->shop_image; ?>"
                            data-lightbox="shop-images">
                            <img class="details_img_cover img-fluid"
                                src="<?php echo base_url().'uploads/shop/'.$product_images->shop_image; ?>">
                        </a>
                    </div>
                    <?php }}  else{ ?>

                    <img class="details_img_cover img-fluid"
                        src="<?php echo base_url();?>uploads/shop/noshop_images.png">
                    <?php } ?>
                    <?php }  ?>

                </div>


            </div>
        </div>
    </div>


    <div class="container">
        <h4 class="shop_images_view mt-4 ps-3" style=""><b>Verified Ads</b></h4>
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
    else if($category== 2){
        $Categories_all_product = get_shopall_category_tuitions($product);  
        
    }
    else if($category == 3 ){
        $Categories_all_product = get_shopall_category_job($product); 
        
    }
    else if($category == 4){
     $Categories_all_product = get_shopall_category_internships($product);
    
    }
    else if($category== 5){
        $Categories_all_product = get_shopall_category_commericial_places($product);
       
       }
       else if($category == 6){
        $Categories_all_product = get_shopall_category_residential_places($product);
       
       }
       else if($category == 7){
        $Categories_all_product = get_shopall_category_land_plot($product);
       
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



            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <a
                    href="<?php echo base_url();?>welcome/productdetail/<?php echo $Categories_all_product->category_id; ?>/<?php echo $Categories_all_product->id; ?>/<?php echo $Categories_all_product->subcategory_id; ?>">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                            <img src="<?php echo base_url(); ?><?php echo $Categories_all_product->cover_img ?>"
                                class="w-100 va-thumbnail" />
                            <p style="margin-left:5px;">
                                <?php if($Categories_all_product->pay_type ==1){ ?>
                                <img class="img-fluid image2" src="<?php echo base_url(); ?>assets/images/sponsor.png"
                                    style="
   width:80px; ">
                                <?php } if($Categories_all_product->verified_product ==1){ ?>
                                <img class="img-fluid image3" src="<?php echo base_url(); ?>assets/images/verified.png"
                                    style="
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

                                    <a style="font-size:20px; color:#69d3b0; padding: 0px;"
                                        <?php if (empty($user) || !isset($user)) { ?>
                                        href="<?php echo base_url(); ?>welcome/login" <?php } else { ?>><i
                                            lass="bi bi-suit-heart" aria-hidden="true"
                                            style="font-size:20px; color:#69d3b0; padding: 0px;"
                                            data-uid="<?php echo $user["user_id"]; ?>" <?php } ?>
                                            class="<?php echo ($wishlist == 0) ? 'fa fa-heart-o' : 'fa fa-heart'; ?> dddssaaf dddssaaf<?php echo $Categories_all_product->id; ?>"
                                            data-pid="<?php echo $Categories_all_product->id; ?>"
                                            data-cid="<?php echo $Categories_all_product->category_id; ?>"
                                            data-wishlist="<?php echo $wishlist; ?>"></i></a>
                                </div>
                            </div>
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
                                    <p> <img alt="location" src="<?php echo base_url();?>assets/images/location .png"></p>
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
            <center><img src="<?php echo base_url();?>assets/images/no_product.png"></center>
            <?php } ?>
        </div>
    </div>


    <div class="container-fluid px-0 mt-5">
    <a href="<?php echo base_url();?>welcome/postproduct">
        <img src="<?php echo base_url();?>/assets/images/Rectangle 32336.png" class="img-fluid" width="100%" alt="" style="max-height: 288px;">
        </a>
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
                        method="post" enctype="multipart/form-data" id="Shop_add">
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
                            <input name="Address" class="form-control" placeholder="Address" id="shop_address"
                                type="text" maxlength="30" value="" style="border-radius:30px; border-color:#13C571"
                                required>
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
                            <label> GST/PAN Number/Aadhar Number</label>
                            <input name="GST" class="form-control" placeholder="GST Number" type="text" maxlength="20"
                                value="<?php echo set_value('name'); ?>"
                                style="border-radius:30px; border-color:#13C571" required>
                            <div class="invalid-feedback">
                                Valid GST is required.
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Upload Document</label>
                            <input type="file" class="form-control mt-3" name="shop_images"
                                style="border-radius:30px; border-color:#13C571" required>
                            <div class="invalid-feedback">
                                Choose A Document Image.
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
                            <label>Shop Banner</label>
                            <input type="file" class="form-control mt-3" name="shop_banner"
                                style="border-radius:30px; border-color:#13C571" required>
                            <div class="invalid-feedback">
                                Choose A Shop Banner.
                            </div>
                        </div>

                        <div class="form-group">

                            <label>Shop photo Upload size(180 x 190) px</label>

                            <div class="row">
                                <div class="col ">
                                    <div class="image-box">
                                        <label for="filebtn1" class="filebtn ">
                                            <i class="fa fa-plus fa_plus" aria-hidden="true"></i>
                                            <span class="delete-icon"><i class="fa fa-trash fa_delete"></i></span>
                                            <input type="file" id="filebtn1" class="profile_img form-control" style="display: none"
                                                name="shop_img[]" accept="image/*" required>
                                            <img src="#" class="upl_img" style="display: none;">
                                        </label>
                                        <div class="images_validation text-danger">
                                        Please Select One Images.
                                        </div>

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="image-box">
                                        <label for="filebtn2" class="filebtn">
                                            <i class="fa fa-plus fa_plus" aria-hidden="true"></i>
                                            <span class="delete-icon"><i class="fa fa-trash fa_delete"></i></span>
                                            <input type="file" id="filebtn2" class="profile_img" style="display: none"
                                                name="shop_img[]" accept="image/*">
                                            <img src="#" class="upl_img" style="display: none;">
                                            <span class="delete-icon"><i class="fa fa-trash fa_delete"></i></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="image-box">
                                        <label for="filebtn3" class="filebtn">
                                            <i class="fa fa-plus fa_plus" aria-hidden="true"></i>
                                            <span class="delete-icon"><i class="fa fa-trash fa_delete"></i></span>
                                            <input type="file" id="filebtn3" class="profile_img" style="display: none"
                                                name="shop_img[]" accept="image/*">
                                            <img src="#" class="upl_img" style="display: none;">
                                            <span class="delete-icon"><i class="fa fa-trash fa_delete"></i></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="image-box">
                                        <label for="filebtn4" class="filebtn">
                                            <i class="fa fa-plus fa_plus" aria-hidden="true"></i>
                                            <span class="delete-icon"><i class="fa fa-trash fa_delete"></i></span>
                                            <input type="file" id="filebtn4" class="profile_img" style="display: none"
                                                name="shop_img[]" accept="image/*">
                                            <img src="#" class="upl_img" style="display: none;">
                                            <span class="delete-icon"><i class="fa fa-trash fa_delete"></i></span>
                                        </label>
                                    </div>
                                </div>

                                <span id="cover_err" style="color:red;"></span>
                            </div>
                        </div>
                </div>


                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input ms-3 border-dark" type="checkbox" value="" id="flexCheckChecked_add"
                            style="margin-top: 5px;" required>
                        <label>
                            <a class="text-decoration-none text-dark"
                                href="<?php echo base_url();?>welcome/termscondition">
                                Terms and Conditions
                            </a>
                        </label>
                        <div class="Terms_condition text-danger">
                            Terms & condition is required.
                        </div>
                    </div>
                </div>
                
                <input type="text" class="form-control" name="latitude" id="latitude" hidden />
                <input type="text" class="form-control" name="longitude" id="longitude" hidden />
                <center><button class=" mb-2 btn btn-lg  text-white mt-2" id="submitButton"
                        style="background-color:#13C571;border-radius:30px;width:40%;" type="submit"
                        name="submit">Save</button>

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
                <h5 class="modal-title" id="exampleModalLongTitle">Update Shop Banner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="cover_img" enctype="multipart/form-data" action="<?php echo base_url();?>welcome/uploadshopbanner"
                method="POST">
                <input type="hidden" name="user_id" value="<?php echo $user['user_id'] ?>">
                <div class="modal-body">
                    <div class="form-group">

                        <label></label>
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
        document.getElementById('Shop_add').addEventListener('submit', function(event) {
            var checkbox = document.getElementById('flexCheckChecked_add');
            var errorMessage = checkbox.closest('.form-check').querySelector('.Terms_condition');
            
            if (!checkbox.checked) {
                errorMessage.style.display = 'block';
            
            } else {
                errorMessage.style.display = 'none';
            }
        });
</script>

<script>
        document.getElementById('Shop_add').addEventListener('submit', function(event) {
            var fileInput = document.getElementById('filebtn1');
            var errorMessage = document.querySelector('.images_validation');
            
            if (fileInput.files.length === 0) {
            
                errorMessage.style.display = 'block';
               // event.preventDefault(); 
            } else {
                errorMessage.style.display = 'none';
            }
        });
</script>

<script>
document.querySelectorAll('.profile_img').forEach(function(input) {
    input.addEventListener('change', function() {
        var errorMessage = document.querySelector('.images_validation');
        var fileInput = this;
        var imgBox = fileInput.closest('.image-box');
        var imgElement = imgBox.querySelector('.upl_img');
        var fa_plus = imgBox.querySelector('.fa_plus');
        var deleteIcon = imgBox.querySelector('.delete-icon');

        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                imgElement.src = e.target.result;
                imgElement.style.display = 'inline';
                deleteIcon.style.display = 'block';
                fa_plus.style.display = 'none';
                errorMessage.style.display = 'none';
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    });
});

// Delete image function
document.querySelectorAll('.delete-icon').forEach(function(icon) {
    icon.addEventListener('click', function() {
        var imgBox = this.parentNode;
        var imgElement = imgBox.querySelector('.upl_img');
        var deleteIcon = imgBox.querySelector('.delete-icon');
        var fileInput = imgBox.querySelector('.profile_img');
        var fa_plus = imgBox.querySelector('.fa_plus');

        imgElement.src = '';
        imgElement.style.display = 'none';
        deleteIcon.style.display = 'none';
        fileInput.style.display = 'none';
        fa_plus.style.display = 'block';
        fileInput.value = '';
    });
});
</script>


<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("demo");
    let captionText = document.getElementById("caption");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
}
</script>
<script>
$(function() {
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
    var input = document.getElementById('shop_address');
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
// hello #6528e0 Example starter JavaScript for disabling form submissions if there are invalid fields
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

<script type="text/javascript">
$(".deletebtn").click(function() {
    var imageid = $(this).data("imageid");
    var sid = $(this).data("productid");

    swal({
            title: "Are you sure?",
            text: "You will not be able to recover!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: true,
            closeOnCancel: true
        },
        function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url: '<?php echo base_url();?>welcome/deleteshopimage/' + imageid + '/' + sid,
                    type: 'post',
                    data: {},
                    contentType: false,
                    processData: false,
                    error: function(err) {
                        console.log(err);
                    },
                    beforeSend: function() {

                    },
                    success: function(response) {
                        console.log(response);
                        $("#productimage" + imageid).replaceWith(
                            '<div class="col-6"><p  class="editebtn" onclick="fileinputimg' +
                            imageid + '.click();" for="fileinputimg' + imageid +
                            '"><i class="fa fa-edit" aria-hidden="true"></i></p><a><div  style=" height: 150px; max-width:100%; min-width:100%; margin: 8px 8px 8px 8px; object-fit: cover; "><div for="fileinputimg' +
                            imageid + '" class="image-uploade"><input id="fileinputimg' +
                            imageid +
                            '" class="fileinputimg" name="backimg[]" type="file" accept="image/*"  /></div></div></a></div>'
                        );
                        swal("Deleted!", "Poses has been deleted.", "success");
                    }
                });
            } else {

            }
        }
    );
})
</script>

<script>
$(document).on("change", ".fileinputimg", function() {
    console.log("fff");
    var parent = $(this).closest("div");
    var files = !!this.files ? this.files : [];
    if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

    if (/^image/.test(files[0].type)) { // only image file
        var reader = new FileReader(); // instance of the FileReader
        reader.readAsDataURL(files[0]); // read the local file

        reader.onloadend = function() { // set image data as background of div
            //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
            parent.css("background-image", "url(" + this.result + ")");
        }
    }

});
</script>