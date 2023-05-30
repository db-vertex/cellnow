<style>
   .va-thumbnail {
        border-radius: 20px;
        border: 0px;
        width: 100%;
        max-height: 190px;
        min-height: 190px;
    }
    .related_ads_details_button {
        box-sizing: border-box;

        /* Auto layout */

        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 9.42857px 12.5714px;
        gap: 4.71px;

        width: 80.43px;
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
</style><div class="container" style=" margin-top: 180px;">

<div class="shadow p-3  bg-body rounded-5" style="margin:25px"><br>
 
  <div class="row ">
    <?php
     $id = $this->uri->segment(3);
     $shop = get_id_by_shopdetail($id);
    $profile = get_seller_profile($shop->user_id);

    ?>
     <div class="col-sm-6">

<img src="<?php echo base_url()."uploads/profile/".$profile->profile_img."";?>" class="img-fluid rounded-corners mx-auto d-block" style="height: 131.9px;
width: 131.9px;">
<div style="text-align:center">
  <h5><b>
      <?php echo ucfirst($profile->name); ?>
    </b></h5>
  <?php echo ucfirst($profile->Address); ?>

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
  <?php }else{?><img  src="<?php echo base_url()?>assets/images/shop1.png">
    <?php } }?></p>
</div><br>


</div>
    <!-- <div class="vr" style="color:#78d7b8"></div> -->
    <div class="col-sm-6 " style=" border-left:solid; border-color: #78d7b8">
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
          <div class="col" >
         <div class="row">
         <div class="col">
            <h4 class="ml-3"><?php echo $shop->name;?> </h4> </div><div class="col"><?php if($shop->admin_approval==2){?><div>
<a href="#" data-toggle="modal"  data-target="#editshopdetail" class="btn "id="b" style="align-self:center; background-color:#FF7474; color:#540C07" >Rejected by admin </a>
</div><?php }else if($shop->admin_approval==1){?> <div>
<a href="#" data-toggle="modal"  data-target="#editshopdetail" class="btn "id="b" style="align-self:center; background-color:#d1fae5; color:#13C571" >Verified by admin </a>
</div><?php }?>
        </div> </div>
        <p class="ml-3"><?php echo $shop->email;?></p>
            <p class="ml-3  word"><?php echo $shop->description;?></p>
            <p class="ml-3"><?php echo $shop->Address;?></p>
            <p class="ml-3 mt-5"><b>GST Number -</b><?php echo $shop->GST;?></p>
           
            <p class="ml-3"><b>Open-close time :</b> <?php echo $shop->open_close_time;?></p>
            <p class="ml-3"><b>Type of service: </b><?php echo $shop->service_type;?></p>
          </div>
          
            <?php  } ?>

            
      </div>

      
    </div>
  </div><br>
</div>
</div>

<div class="container">
    <h3 class="ml-5 mb-3"><b>Verified by shop </b></h3>
    <div class="row">
        
        <?php $product = get_productid_by_shop($id); 
         if(!empty($product)){
        
          foreach($product as $value){
        $product_id=$value->product_id;
        $category_id=$value->category_id;
         if($category_id ==1 ){
           $Categories_all_product = get_all_category_reusable_parts($product_id);

           
         }
         else if($category_id == 2){
             $Categories_all_product = get_all_category_Electronic($product_id);  
             
         }
         else if($category_id == 3 ){
             $Categories_all_product = get_all_category_Furniture($product_id); 
             
         }
         else if($category_id == 4){
          $Categories_all_product = get_all_category_Fashion($product_id);
         
         }
         
        
         
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

<div class="col-lg-4 col-md-6  mb-2">
            <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
              <img class="va-thumbnail" src="<?php echo base_url(); ?><?php echo $Categories_all_product->cover_img;?>" class="card-img-top" alt="Card image cap">
              <div class="card-block" style="padding:5px">
                <div class="card-title">
                  <div class="row pl-3">
                    <div class="col-6"><b style="font-size:15px">
                    <?php
                           $title =$Categories_all_product->title;
                            if(strlen($title) <= 12)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,12) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?>
                      </b></div>
                    <div class="col-2"> <i style=" font-size:19px; margin-top:-20px;color:#F15927;" data-toggle="modal" data-target="#login"
                        data-uid="<?php echo $user["user_id"]; ?>"
                        class="<?php echo ($wishlist == 0) ? 'fa fa-heart-o' : 'fa fa-heart'; ?> dddssaaf dddssaaf<?php echo $Categories_all_product->id; ?>"
                        data-pid="<?php echo $Categories_all_product->id; ?>" data-cid="<?php echo $Categories_all_product->category_id; ?>"
                        data-wishlist="<?php echo $wishlist; ?>"></i>
                    </div>
                    <div class="col-4" style="color:#10b981">
                      <h6><b>$<?php echo $Categories_all_product->price; ?>
                        </b></h6>
                    </div>
                  </div>
                </div>
                <div class="row pl-3">
                <small class="card-text ">
                <?php
                           $title =$Categories_all_product->Description;
                            if(strlen($title) <= 25)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,25) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?>
                </small><br>
        </div>

               
                <div class="row pl-3">
                  <div class=col-4><p>Type</p></div>
                  <div class=col-8><p><?php echo $Categories_all_product->type; ?></p></div>
                </div>



                <div class="row text-center p-3">
                  <div class="col-2">
                  <img src="<?php echo base_url();?>assets/images/location .png" >
                            </div>
                  <div class="col-5"> 
                    <p>
                    <?php
                           $title =$Categories_all_product->address;
                            if(strlen($title) <= 15)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,15) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?>
                    </p>
                  </div>
                  <div class="col-5">
                                        <a
                                            href="<?php echo base_url(); ?>welcome/productdetail/<?php echo $Categories_all_product->category_id; ?>/<?php echo $Categories_all_product->id; ?>/<?php echo $Categories_all_product->subcategory_id; ?>">
                                            <p class="related_ads_details_button ">
                                                <spam class="related_ads_details_button_text">Product Detail</spam>
                                            </p>
                                        </a>
                                    </div>
                </div>

              </div>
            </div>
          </div> 

<?php }}else{?>
         <center><img  src="<?php echo base_url();?>assets/images/no_product .png"></center>
   <?php }?>


</div>
</div>