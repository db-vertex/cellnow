<div class="container">

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

<div class="col-lg-4 col-md-6  mb-2 ">
    <div class="card" style="max-width: 25rem; border-radius: 28px;margin:auto;">
    <img src="<?php echo base_url();?>assets/images/bike1.png" class="card-img-top" alt="Card image cap">
      <div class="card-block" style="padding:5px">
      <div class="card-title">
      <div class="row">
        <div class="col-6"><b style="font-size:18px"><?php echo $Categories_all_product->title; ?> </b></div>
        <div class="col-2">      <i style="margin-top:-20px;color:#F15927;" data-toggle="modal" data-target="#login"  data-uid="<?php echo $user["user_id"]; ?>"  class="<?php echo ($wishlist==0)?'fa fa-heart-o':'fa fa-heart'; ?> dddssaaf dddssaaf<?php echo $Categories_all_product->id; ?>" data-pid="<?php echo $Categories_all_product->id; ?>" data-cid="<?php echo $Categories_all_product->category_id; ?>" data-wishlist="<?php echo $wishlist; ?>" ></i>
</div>
        <div class="col-4" style="color:#10b981"><h5><b>$<?php echo $Categories_all_product->price; ?></b></h5></div>
      </div>
      </div>
    <small class="card-text"><?php echo $Categories_all_product->Description; ?></small><br>
    
    <div class="row pt-3">
      <div class=col-6>Fresheness </div>
      <div class=col-6>New(Extra fresh)</div>
    </div>

    <div class="row">
      <div class=col-6>Model</div>
      <div class=col-6><?php echo $Categories_all_product->type; ?></div>
    </div>

   

    <div class="row text-center">
        <div class="col-1"><i class="fa fa-map-marker"></i></div>
        <div class="col-5"><p><?php echo $Categories_all_product->address; ?></p></div>
        <div class="col-6" >     <a href="<?php echo base_url();?>welcome/productdetail/<?php echo $Categories_all_product->category_id;?>/<?php echo $Categories_all_product->id;?>/<?php echo $Categories_all_product->subcategory_id;?>" class="btn btn-change" id="a" style="font-size:15px; background-color:#10B981; color:#fff;" >Ads Details </a>
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