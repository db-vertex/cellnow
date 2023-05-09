<div class="container">

<div class="shadow p-3  bg-body rounded-5" style="margin:25px"><br>
 
  <div class="row ">
    <?php
     $id = $this->uri->segment(3);
     $shop = get_id_by_shopdetail($id);
    $profile = get_seller_profile($user['user_id']);

    ?>
    <div class="col-sm-6">

      <img src="<?php echo base_url(); ?>assets/images/Ellipse 11 (2).png" class="img-fluid rounded mx-auto d-block">
      <div style="text-align:center">
        <h3><b>
            <?php echo $profile->name; ?>
          </b></h3>
        <?php echo $profile->Address; ?>

      </div>
      <div class="row text-center ">
        <p>
        <img src="<?php echo base_url()?>assets/images/email.png"> <?php echo $profile->email; ?>
        <img src="<?php echo base_url()?>assets/images/mobile.png"> <?php echo $profile->phone; ?>
        </p>
        <?php  if(!empty($shop)){?>
        <p><?php if(!empty($shop->shop_images)){?>
          <img  src="<?php echo base_url()?>uploads/shop/<?php echo $shop->shop_images; ?>">
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
            <p class="ml-3"><?php echo $shop->description;?></p>
            <p class="ml-3"><?php echo $shop->Address;?></p>
            <p class="ml-3 mt-5"><b>GST Number -</b><?php echo $shop->GST;?></p>
           
            <p class="ml-3"><b>Open-close time :</b> <?php echo $shop->open_close_time;?></p>
            <p class="ml-3"><b>Type of service: </b><?php echo $shop->service_type;?></p>
          </div>
          <?php if($shop->admin_approval!=1){?>
          <div class="row text-center">
  <div>
<a href="#" data-toggle="modal"  data-target="#editshopdetail" class="btn "id="b" style="align-self:center; background-color:#13C571; color:#fff" >Edit </a>
</div>
</div>
            <?php } } ?>

            
      </div>

      
    </div>
  </div><br>
</div>
</div>