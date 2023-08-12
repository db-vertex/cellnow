<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

<style>
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

.va-thumbnail {
    border-radius: 6px;
    border: 0px;
    width: 100%;
    max-height: 250px;
    min-height: 250px;
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

.details_img_cover {
    border-radius: 15px;
    max-width: 150px;
    min-width: 150px;
    max-height: 100px;

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
</style>
<div class="container" style=" margin-top: 130px;">

    <div class="shadow p-3  bg-body rounded-5" style=""><br>

        <div class="row ">
            <?php
     $id = $this->uri->segment(3);
     $shop = get_id_by_shopdetail($id);
    $profile = get_seller_profile($shop->user_id);

    ?>
            <div class="col-sm-6">

            <div class="row" style="place-content: center;">
                    <div class="col-6">
                        <div style="text-align: right;">
                          
                        </div>
                            <img src="<?php echo base_url()."uploads/shop/".$shop->shop_images."";?>"
                        class="img-fluid mx-auto rounded d-block" style="height: 131.9px; max-width: 100%;">
                   </div>
                   </div>

                <div class="mt-3" style="text-align:center">
                    <h5><b>
                            <?php echo ucfirst($shop->name); ?>
                        </b></h5>
                    <?php echo ucfirst($shop->Address); ?>

                </div>
                <div class="row text-center ">
                    <p>
                        <img src="<?php echo base_url()?>assets/images/email.png"> <?php echo $profile->email; ?>
                        <img src="<?php echo base_url()?>assets/images/mobile.png"> <?php echo $profile->phone; ?>

                </div><br>


            </div>

            <!-- <div class="vr" style="color:#78d7b8"></div> -->
            <div class="col-sm-6 shop_details_border" style="">
                <?php 
   
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
                    <div class="col">
                        <div class="row">
                       
                            <div class="col"><?php if($shop->admin_approval==2){?><div>
                                    <a href="#" data-toggle="modal" data-target="#editshopdetail" class="btn " id="b"
                                        style="align-self:left; background-color:#FF7474; color:#540C07">Rejected by
                                        admin </a>
                                </div><?php }else if($shop->admin_approval==1){?> <div>
                                    <a href="#" data-toggle="modal" data-target="#editshopdetail" class="btn " id="b"
                                        style="align-self:left; background-color:#d1fae5; color:#13C571">Verified by
                                        admin </a>
                                </div><?php }?>
                            </div>
                        </div>
                        <p class=" word mt-2"><?php echo $shop->description;?></p>
                      

                        <p class="mt-2"><b>Open-close time :</b> <?php echo $shop->open_close_time;?></p>
                        <p class=""><b>Type of service: </b><?php echo $shop->service_type;?></p>
                    </div>

                    <?php  } ?>


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

                <img class="details_img_cover img-fluid" src="<?php echo base_url();?>uploads/shop/noshop_images.png">
                <?php } ?>
                <?php }  ?>

            </div>


        </div><br>
    </div>
</div>

<div class="container">
    <h4 class="shop_images_view mt-4" style="padding-left: 2.3rem!important;"><b>Verified Ads</b></h4>
    <div class="row ml-4 mr-4">

        <?php $product = get_productid_by_shop($id); 
         if(!empty($product)){
        
          foreach($product as $value){

        $product_id=$value->product_id;
        $category_id=$value->category_id;
         if($category_id ==1 ){
           $Categories_all_product = get_shopall_category_reusable_parts($product_id);

           
         }
         else if($category_id == 2){
             $Categories_all_product = get_shopall_category_tuitions($product_id);  
             
         }
         else if($category_id == 3 ){
             $Categories_all_product = get_shopall_category_job($product_id); 
             
         }
         else if($category_id == 4){
          $Categories_all_product = get_shopall_category_internships($product_id);
         
         }
         else if($category_id == 5){
          $Categories_all_product = get_shopall_category_commericial_places($product_id);
         
         }
         else if($category_id == 6){
          $Categories_all_product = get_shopall_category_residential_places($product_id);
         
         }
         else if($category_id == 7){
          $Categories_all_product = get_shopall_category_land_plot($product_id);
         
         }
         
        
         if(!empty($Categories_all_product)){
           $wishlist=0;
      if(!empty($user) && isset($user)){
  $wishlit = get_wishlist($Categories_all_product->id, $Categories_all_product->category_id,$user["user_id"]);

			if(empty($wishlit)){

				$wishlist = 0;

			
			}else{

				$wishlist = 1;

			}
   }
   else{
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

        <?php } }}else{?>
        <center><img src="<?php echo base_url();?>assets/images/no_product .png"></center>
        <?php }?>


    </div>
</div>
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