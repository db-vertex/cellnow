<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
<!-- link for map -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Verify product details</title>
    <style>
      #a{
  
  border-color: #78d7b8;
  border-radius: 20px;
  align-items: center;
  background-color: white;

  
}


#a:visited {
  color: #78d7b8;
 
  
  
}
#a:hover {
  color: white;
  background-color: #78d7b8;
  
  
}


      /* for hr line  */
      hr.class-1 {
        border-top: 2px solid #69d3b0;
        width: 120px;
        margin :3px 0px;
    }


        #b{
 
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
    <!-- <h1>Hello, world!</h1> -->
    <?php
  
    ?>

<div class="container-fluid" style="padding:0px">
<img src="<?php echo base_url();?>/assets/images/Rectangle 32336.png" class="img-fluid" width="100%" alt="">
</div><br>

<div class="container">
<div class="row p-2"style="border:1px solid #69d3b0;border-radius:15px;background-color:#d1fae5">
<div class="col"><small>Homepage/Bike/Hayabusa Suzuki</small></div>
</div><br>
</div>

<?php
           
           $product_detail = $categories_data;
            ?>
<div class="container ">
  <div class="row ">
    <div class="col-lg-6 col-sm-6 ">
    <img src="<?php echo base_url();?>assets/images/bike1.png" class="img-fluid"  alt=" image" > 
    <div class="row mt-3">
    <div class="col"><img src="<?php echo base_url();?>assets/images/bike1.png" class="img-fluid" alt=" image" ></div>
    <div class="col"><img src="<?php echo base_url();?>assets/images/bike1.png" class="img-fluid"  alt=" image" ></div>
    <div class="col"><img src="<?php echo base_url();?>assets/images/bike1.png" class="img-fluid"  alt=" image" ></div>
    <div class="col"><img src="<?php echo base_url();?>assets/images/bike1.png" class="img-fluid"  alt=" image" ></div>
    
    </div>

    <div class="row mt-3" style="border:1px solid #69d3b0;margin:3px">
      
      
      <div class="col-3 responsive-font-example p-0"><small style="font-size:15px"><i class="fa fa-calendar" aria-hidden="true" style="color:#69d3b0"></i> 110 Days ago</small></div>
      <div class="col-3 responsive-font-example p-0"><small style="font-size:15px"><i class="fa fa-eye" aria-hidden="true" style="color:#69d3b0"></i> 507 views</small></div>
      <div class="col responsive-font-example p-0"><small>200</small></div>
      <div class="col responsive-font-example p-0"><small style="font-size:15px"><i class="fa fa-share-alt" aria-hidden="true" style="color:#69d3b0 "></i> Share</small></div>
      <div class="col responsive-font-example p-0"><small style="font-size:15px"><i class="fa fa-exclamation-triangle" aria-hidden="true" style="color:#69d3b0"></i> Report</small></div>

      
      
    </div>

    <div class="row mt-3">
    <img src="<?php echo base_url();?>/assets/images/Rectangle 32336.png" class="img-responsive center-block d-block mx-auto" width="100%" alt="" style="padding:px">
    </div><br>
    </div>
    
    
    <div class="col-lg-6 col-sm-6 ">
     <div class="card" style="padding:30px;border-color:#69d3b0">
        <div class="row">
          <div class="col">
           <b style="font-size:22px"><?php echo $product_detail->title; ?></b>
          </div><br><br>
          <div class="col">
           <b style="font-size:22px; color:#047857;">$<?php echo $product_detail->price; ?></b>
          </div>
        </div>

        <div class="row"><div class="col"><b>General Details</b></div></div>
        <hr class="class-1" />
       
      <div class="row"><div class="col" style="word-spacing:20px">Condition:  <?php echo $product_detail->brand; ?></div></div>
      <div class="row"><div class="col" style="word-spacing:63px"> City:  <?php echo $product_detail->address; ?></div></div>
      <div class="row"><div class="col" style="word-spacing:46px">Model:  2013</div></div>
      <div class="row"><div class="col" style="word-spacing:53px">Color:  Red</div></div>
      <div class="row"><div class="col" style="word-spacing:62px">Size:  Red</div></div>
      <br>

      <div style="font-size:12px"> <i class="fa fa-map-marker"></i> 303 usha ganj Indore 452001 M.P. India </div><br>
      <div class="row text-center"style="border:1px solid #69d3b0;border-radius:15px;background-color:#d1fae5"><div class="col"> Verified By Shop: Shop Name</div></div><br>


      <div class="card" style="border-radius:4em;background-color:#d1fae5">
  <div class="card-body">
    <div class="row text-center">
   <div class="col-lg-4 "><img src="<?php echo base_url();?>assets/images/Ellipse 1092.png"  class="img-fluid"  alt="" style="padding:px"></div>
   <div class="col-lg-4 "><b >Bhupendra Sharma</b><br>
       <span style="font-size:12px"> Profile Crated 60 Days ago </span><br>
       <span style="font-size:15px"> Total 20 Ads</span><br>
       <span style="font-size:15px"> Active 10 Adss </span></div>
   <div class="col-lg-4"><a href="#" class="btn" role="button" aria-disabled="true" id="a">chat</a><br>
        <a href="#" style="color:black">View Seller profile ></a></div>
        </div>
  </div>
</div> 

      <h5><b style="font-size: 15px;">Description</b></h5>
      <hr class="class-1" />
      <b style="font-size: 13px;">Origins</b>
      <p style="font-size: 13px;">Lorem Ipsum is simply dummy text of the <br>
      printing and typesetting industry. <br>
    Lorem Ipsum has been the industry's <br>
    standard dummy text ever since the 1500s </p>


   
     </div>
    </div>
  </div>
  
</div>








<!-- <div class="card">
  <div class="card-body">
    This is some text within a card body.
  </div>
</div> -->








































 <div class="container mt-5">
<p style="color:red">Our Recommendation</p>
<h4><b style="padding-left:0px">Related Ads</b></h4>
</div>

<div class="container" >
<div class="row">
<div class="col-lg-4 col-sm-6  mb-2">
    <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
    <img src="<?php echo base_url();?>assets/images/bike1.png" class="card-img-top" alt="Card image cap">
      <div class="card-block" style="padding:8px">
      <h5 class="card-title">Suzuki</h5>
    <small class="card-text">Space for a small product description.</small><br>
    
    Fresheness  <span style="padding-left:30px">New(Extra fresh)</span><br>
    Model            <span style="padding-left:60px"> 2015</span><br>
    Color     <span style="padding-left:66px"> Red</span><br>
    <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
    <a href="#" class="btn "id="b">Ads Details ></a>
  
    </div>
    </div>
</div>

<div class="col-lg-4 col-sm-6  mb-2">
    <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
    <img src="<?php echo base_url();?>assets/images/bike1.png" class="card-img-top" alt="Card image cap">
      <div class="card-block" style="padding:8px">
      <h5 class="card-title">Suzuki</h5>
    <small class="card-text">Space for a small product description.</small><br>
    
    Fresheness  <span style="padding-left:30px">New(Extra fresh)</span><br>
    Model            <span style="padding-left:60px"> 2015</span><br>
    Color     <span style="padding-left:66px"> Red</span><br>
    <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
    <a href="#" class="btn "id="b">Ads Details ></a>
   
    </div>
    </div>
</div>

<div class="col-lg-4 col-sm-6  mb-2">
    <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
    <img src="<?php echo base_url();?>assets/images/bike1.png" class="card-img-top" alt="Card image cap">
      <div class="card-block" style="padding:8px">
      <h5 class="card-title">Suzuki</h5>
    <small class="card-text">Space for a small product description.</small><br>
    
    Fresheness  <span style="padding-left:30px">New(Extra fresh)</span><br>
    Model            <span style="padding-left:60px"> 2015</span><br>
    Color     <span style="padding-left:66px"> Red</span><br>
    <i class="fa fa-map-marker"></i> <span style="padding-left:50px">West India</span><br>
    <a href="#" class="btn "id="b">Ads Details ></a>
    
    </div>
    </div>
</div>
</div>
</div> 


<?php
    // include "footer.php";
    ?>
  </body>
</html>