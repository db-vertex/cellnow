

<div class="container">
  <div id="banner" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url();?>assets/images/banner.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url();?>assets/images/banner.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url();?>assets/images/banner.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#banner" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#banner" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div class="container">
    <div class="row">
    <p style="color: #F59E0B;"> -------Our Recomandation</p>
    </div>
   </div>


   <!-- feratured part add -->
   <div class="container">
    <div class="row">
        <div class="col-md-6">
        <p style="font-size:30px;color:#1B1C57;"> Featured </p>
</div>

<div class="col-md-6">
<div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
            <div class="input-group">
              <div class="input-group-prepend">
                <button id="button-addon2" type="submit" class="btn btn-link text-warning"><i class="material-icons" style="font-size:20px;color:red">place</i>
</i></button>
              </div>
              <input type="search" placeholder="Search for the Product you want!"  aria-describedby="button-addon2" class="form-control border-0 bg-light"><button  style="color:white; background-color:#10B981;width:100px;height:40px;" class="button" >search <i class='fas fa-angle-right' style='font-size:10px;color:#10B981'></i></button> </p>
             
            </div>
          </div>
      </div>
    </div>
   </div>

<div class="container">
<div class="va-carrousel-section">
    <div class="va-whitewrap">
       

        <div id="va_container_Popular" style="text-align: -webkit-center;">
        
            <div class="va-carrousel-flexbox_Popular  pt-4">
            <?php
                $category = get_all_shopcategory();
                foreach ($category as $key => $cat) {
                  ?>
                 
                  <div class="va-card va-card_category"> <a class="link-plain border-0"  href="" style="max-width: 45%;"> 
                  <p style="text-align:center;" class="my-auto pouler_Categories">
                  <img class="" width="20" height="20" src="<?php echo base_url();?>assets/images/Vector (7).png" alt="">
                   <center style="color:black; font-size:13px; font-weight:700"><?php echo ucfirst($cat->shop_category); ?></center>
                  </p>
                    </a> 
                    </div>
                   
                    <?php } ; ?>  
            </div>

       
        </div>


    </div>

</div>
</div>

<div class="container" >

<div class="row">
<?php $shop = get_all_store();

foreach($shop as $value){
   

?>
    <div class="col-lg-4 col-sm-6 mt-3 mb-2">
    <div class="card" style="max-width: 23rem; border-radius: 28px;margin:auto;">
    <a href="<?php echo base_url();?>welcome/shopdetail/<?php echo $value->id;?>"><img class="card-img-top" alt="Card image cap" src="<?php echo base_url();?>uploads/shop/<?php echo $value->shop_images;?>"  ></a>
      <div class="card-block" style="padding:8px">
      <h4 class="card-title"><?php echo $value->name;?></h4>
    <p class="card-text"><?php echo $value->description;?></p><br>
    <?php $username = get_user_name($value->user_id);?>
    <h5 class="card-title"><?php echo $username;?></h5>
    <i class="fa fa-map-marker"></i> <span><?php echo $value->Address;?></span><br>
   
    </div>
    </div>
</div>
<?php } ?>

<div class="col-lg-4 col-sm-6 mt-3 mb-2">
    <div class="card" style="max-width: 23rem; border-radius: 28px;margin:auto;">
    <img src="<?php echo base_url();?>assets/images/shop1.png" class="card-img-top" alt="Card image cap">
      <div class="card-block" style="padding:8px">
      <h5 class="card-title">Suzuki</h5>
    <small class="card-text">Space for a small product description.</small><br>
   
    Fresheness  <span style="padding-left:30px">New(Extra fresh)</span><br>
    Model            <span style="padding-left:60px"> 2015</span><br>
    Color     <span style="padding-left:66px"> Red</span><br>
    <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
   
    </div>
    </div>
</div>


<div class="col-lg-4 col-sm-6  mt-3 mb-2">
    <div class="card" style="max-width: 23rem; border-radius: 28px;margin:auto;">
    <img src="<?php echo base_url();?>assets/images/shop1.png" class="card-img-top" alt="Card image cap">
      <div class="card-block" style="padding:8px">
      <h5 class="card-title">Suzuki</h5>
    <small class="card-text">Space for a small product description.</small><br>
    
    Fresheness  <span style="padding-left:30px">New(Extra fresh)</span><br>
    Model            <span style="padding-left:60px"> 2015</span><br>
    Color     <span style="padding-left:66px"> Red</span><br>
    <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
   
    </div>
    </div>
</div>


    <div class="col-lg-4 col-sm-6 mt-3 mb-2">
    <div class="card" style="max-width: 23rem; border-radius: 28px;margin:auto;">
    <img src="<?php echo base_url();?>assets/images/shop1.png" class="card-img-top" alt="Card image cap">
      <div class="card-block" style="padding:8px">
      <h5 class="card-title">Suzuki</h5>
    <small class="card-text">Space for a small product description.</small><br>
    
    Fresheness  <span style="padding-left:30px">New(Extra fresh)</span><br>
    Model            <span style="padding-left:60px"> 2015</span><br>
    Color     <span style="padding-left:66px"> Red</span><br>
    <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
   
    </div>
    </div>
</div>

<div class="col-lg-4 col-sm-6  mt-3 mb-2">
    <div class="card" style="max-width: 23rem; border-radius: 28px;margin:auto;">
    <img src="<?php echo base_url();?>assets/images/shop1.png" class="card-img-top" alt="Card image cap">
      <div class="card-block" style="padding:8px">
      <h5 class="card-title">Suzuki</h5>
    <small class="card-text">Space for a small product description.</small><br>
   
    Fresheness  <span style="padding-left:30px">New(Extra fresh)</span><br>
    Model            <span style="padding-left:60px"> 2015</span><br>
    Color     <span style="padding-left:66px"> Red</span><br>
    <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
    
    </div>
    </div>
</div>


<div class="col-lg-4 col-sm-6 mt-3 mb-2">
    <div class="card" style="max-width: 23rem; border-radius: 28px;margin:auto;">
    <img src="<?php echo base_url();?>assets/images/shop1.png" class="card-img-top" alt="Card image cap">
      <div class="card-block" style="padding:8px">
      <h5 class="card-title">Suzuki</h5>
    <small class="card-text">Space for a small product description.</small><br>
    
    Fresheness  <span style="padding-left:30px">New(Extra fresh)</span><br>
    Model            <span style="padding-left:60px"> 2015</span><br>
    Color     <span style="padding-left:66px"> Red</span><br>
    <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
  
    </div>
    </div>
</div>



</div>
</div>