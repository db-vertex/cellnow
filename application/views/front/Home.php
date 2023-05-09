<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <style>

html,body
{
  max-width: 100%;
  overflow-x: hidden;
}


/* search btn line 11 to 66 */
.search_wrap{
	width: 100%;
	
}

.search_wrap .search_box{
	position: relative;
	
	height: 60px;
}

.search_wrap .search_box .btn{
	position: absolute;
	
	height: 80%;
	background: #10B981;
	
}
.search_wrap .search_box .btn.btn_common .fas{
	
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	color: #fff;
 
}
.search_wrap.search_wrap_6 .search_box .btn{
	width: 25%;
	height: 50%;
	top: 7%;
	right: 1%;
	
	color: #fff;
	display: flex;
	align-items: center;
	justify-content: center;
}

/* input::placeholder {
  font-size: 18px;
}
@media screen and (max-width: 992px) {
  input::placeholder  {
     font-size: 12px;
  }
}
  @media screen and (max-width: 776px) {
  input::placeholder  {
     font-size: 10px;
  }
}
@media screen and (max-width: 560px) {
  input::placeholder  {
     font-size: 13px;
  }
} */



/* .btn{
    width: 100%;
} */
    </style>
  </head>
  <body>
    
<div class="container">
<div id="carouselExampleControlss" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  <?php
      $all_banner = get_all_banner();
      $j = 1;
      foreach ($all_banner as $key => $banner) {
        ?>  
    <div class="carousel-item <?php if ($j == 1){echo "active";} ?>">
      <img class="d-block w-100" src="<?php echo base_url(); ?>uploads/banner/<?php echo $banner->banner_image; ?>" alt="First slide">
    </div>
    <?php

        $j++;

      }
      ?>
   
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlss" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlss" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div><br>

<div class="container">
    <div class="row">
    <p style="color: #F59E0B;"> -------Our Recomandation</p>
    </div>
   </div><br>


    <!-- search bar -->
<div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 ">
        <p style="font-size:30px;color:#1B1C57;"> Featured </p>
      </div>
      <div class="col-md-6 col-sm-6">
      <div class="search_wrap search_wrap_6 m-0">
			<div class="search_box">
         
		       <input type="search" class="form-control rounded-5" placeholder="Search for the Product you want!" aria-label="Search" aria-describedby="search-addon" />
          <button type="button" class="btn  rounded-5" >search ></button>
        </div>
  </div>
</div>
</div>
 </div><br>

 <!-- new -->
<div class="container">
  <div class="row ">
  <div class="col-lg-2 col-md-3 col-sm-6 col-12 mb-2">
  <a class="btn shadow  bg-white rounded-pill" href="#" role="button"><img class="rounded-pill me-1" width="20" height="20" src="<?php echo base_url();?>assets/images/img/menu1.png" alt=""> &nbsp &nbsp All</a>
  </div>


  <div class="col-lg-3 col-md-5 col-sm-6 col-12 mb-2">
    <a class="btn shadow  bg-white rounded-pill" href="#" role="button"><img class="rounded-circle me-1" width="20" height="20" src="<?php echo base_url();?>assets/images/img/reusable1.png" alt="">Reusable parts and Product</a>
  </div>
  <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
  <a class="btn shadow  bg-white rounded-pill" href="#" role="button"><img class="rounded-circle me-1" width="20" height="20" src="<?php echo base_url();?>assets/images/img/home1.png" alt="">  &nbsp Tuitions/Classes</a>
  </div>
  <div class="col-lg-2 col-md-4 col-sm-6  mb-2">
  <a class="btn shadow  bg-white rounded-pill" href="#" role="button"><img class="rounded-circle me-1" width="20" height="20" src="<?php echo base_url();?>assets/images/img/work1.png" alt="">   Part-time Jobs </a>
  </div>
  <div class="col-lg-2 col-md-4 col-sm-6  mb-2">
  <a class="btn shadow  bg-white rounded-pill" href="#" role="button"><img class="rounded-circle me-1" width="20" height="20" src="<?php echo base_url();?>assets/images/img/employee1.png" alt=""> &nbsp  Internships </a>
  </div>
  </div>
</div><br>

<div class="container">
<div class="va-carrousel-section">
    <div class="va-whitewrap">
       

        <div id="va_container_Popular" style="text-align: -webkit-center;">
        
            <div class="va-carrousel-flexbox_Popular  pt-4">
            <?php
                $category = get_all_subcategory();
                foreach ($category as $key => $cat) {
                  ?>
                 
                  <div class="va-card va-card_category"> <a class="link-plain border-0"  href="" style="max-width: 45%;"> 
                  <p style="text-align:center;" class="my-auto pouler_Categories">
                  <img class=""  src="<?php echo base_url();?>uploads/shopcategory/<?php echo $cat->icon; ?>" alt="">
                   <center style="color:black; font-size:12px; font-weight:700"><?php echo ucfirst($cat->sub_category); ?></center>
                  </p>
                    </a> 
                    </div>
                   
                    <?php } ; ?>  
            </div>

       
        </div>


    </div>

</div>
</div>
<!-- new  -->
<div class="container">
<div id="carouselExampleControles" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  
    <div class="carousel-item active">
      <div class="row">
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/bike1.png" class="d-block w-100" alt="...">
      </div>
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/bike2.png" class="d-block w-100" alt="..."></div>
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/bike1.png" class="d-block w-100" alt="..."></div>
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/bike2.png" class="d-block w-100" alt="..."></div>

      </div>
        
      
      </div>

      <div class="carousel-item ">
      <div class="row">
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/bike1.png" class="d-block w-100" alt="..."></div>
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/bike2.png" class="d-block w-100" alt="..."></div>
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/bike1.png" class="d-block w-100" alt="..."></div>
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/bike2.png" class="d-block w-100" alt="..."></div>

      </div>
         </div>
    </div>

  <!-- </div> -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControles" data-bs-slide="prev" >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControles" data-bs-slide="next" >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div><br>




<!-- new  -->
<div class="container">
  <div class="row align-items-center">
    <div class="col-md-6 p-5" >
    <div class="ratio ratio-16x9">
  <iframe style="border-radius: 40px;" class="embed-responsive-item" src="https://www.youtube.com/embed/JrnQ-915czY"></iframe>
</div>
 </div>

 <div class="col-md-6 p-5">
    <h1>Customer flow</h1><br>

    <p style="color: #565656;">Our Business Plan is a written document describing a company's core business activites, Objectives, and how it plans to achieve its goals. Our goal is to provide our client high quality Product with modern idea accordingly their budgets and according thir reuirements.</p>
 </div>
  </div>
</div><br>

<!-- new  -->
<div class="container">
    <div class="row">
    <p style="color: #F59E0B;">Search  Near  By Store</p>
    </div>
</div>






<!-- new  -->
<div class="container  mt-3">
  <div class="row">
    <div class="col-sm-6">
     <p style="color: #1B1C57; font-size:30px;">Stores</p>
    </div>
    <div class="col-sm-6 text-end">
    <div class="search_wrap search_wrap_6 m-0">
			<div class="search_box">
         
		       <input type="search" class="form-control rounded-5" placeholder="Search for the Product you want!" aria-label="Search" aria-describedby="search-addon" />
          <button type="button" class="btn  rounded-5" >search ></button>
        </div>
  </div>
    </div>
  </div>
</div><br>





<!-- new  -->

<div class="container">
<div id="carouselExampleControlls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  
    <div class="carousel-item active">
      <div class="row">
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/shopimg.png" class="d-block w-100" alt="...">
    
    </div>
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/shopimg.png" class="d-block w-100" alt="..."></div>
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/shopimg.png" class="d-block w-100" alt="..."></div>
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/shopimg.png" class="d-block w-100" alt="..."></div>
      </div>
        
      
      </div>

      <div class="carousel-item ">
      <div class="row">
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/shopimg.png" class="d-block w-100" alt="..."></div>
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/shopimg.png" class="d-block w-100" alt="..."></div>
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/shopimg.png" class="d-block w-100" alt="..."></div>
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/shopimg.png" class="d-block w-100" alt="..."></div>
      </div>
         </div>
    </div>

  <!-- </div> -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlls" data-bs-slide="prev" >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlls" data-bs-slide="next" >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div><br><br>


<!-- <div class="container mt-5">
  <div class="row">
    <div class="col-12">
    <img class="img-fluid" src="<?php echo base_url();?>assets/images/img/carbanner2.png" width="100%" alt="Second slide">
    </div>
  </div>
</div><br> -->
















<!-- new  -->
<div class="container">
  <div class="row align-items-center">
    <div class=" col-md-6 p-5">
    <div class="ratio ratio-16x9">
  <iframe style="border-radius: 40px;" class="embed-responsive-item" src="https://www.youtube.com/embed/JrnQ-915czY"></iframe>
</div>
 </div>

 <div class="col-md-6 p-5 ">
    <h1>How the store works?</h1><br>

    <p style="color: #565656;">Our Business Plan is a written document describing a company's core business activites, Objectives, and how it plans to achieve its goals. Our goal is to provide our client high quality Product with modern idea accordingly their budgets and according thir reuirements..</p>
 </div>
  </div>
</div><br>

<!-- new  -->
<div class="container">
  <div class="row">
    <div class="col-12">
      <p style="color: #1B1C57; font-size:30px;">Donate</p>
    </div>
  </div>
</div><br>


<!-- new  -->
<div class="container">
<div id="carouselExampleControlssss" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  
    <div class="carousel-item active">
      <div class="row">
      <?php
                  
              
                  $product = get_all_reusableproduct();   
            
            
             
              $i = 1;
              $j = 1;
            foreach($product as $pro){
             $session_login_id  = $user['user_id'] ?? null;
              $product_user_id = $pro->user_id;
              if($session_login_id !== $product_user_id){
                  if($i > 0){
            
            ?>  
        <div class="col"> <img src="<?php echo base_url(); ?><?php echo $pro->cover_img ?>" class="d-block w-100" alt="...">
        <p class="ms-1 mt-3 ms-3" style="color:black; font-weight:800;">$<?php echo $pro->price ?></p>
                        <div class="va-title ms-3">  <?php
                           $title = $pro->title;
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
                           </div></div>
      
        <?php $i++;} } else if($j == 1) {?>
                   
                   <?php   }  $j++; };  ?>  
      </div>
        
      
      </div>

      <div class="carousel-item ">
      <div class="row">
      <?php
                  
              
                  $product = get_all_reusableproduct();   
            
            
             
              $i = 1;
              $j = 1;
            foreach($product as $pro){
             $session_login_id  = $user['user_id'] ?? null;
              $product_user_id = $pro->user_id;
              if($session_login_id !== $product_user_id){
                  if($i > 0){
            
            ?>  
        <div class="col"> <img src="<?php echo base_url(); ?><?php echo $pro->cover_img ?>" class="d-block w-100" alt="...">
        <p class="ms-1 mt-3 ms-3" style="color:black; font-weight:800;">$<?php echo $pro->price ?></p>
                        <div class="va-title ms-3">  <?php
                           $title = $pro->title;
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
                           </div>
                           </div>
      
        <?php $i++;} } else if($j == 1) {?>
                   
                   <?php   }  $j++; };  ?>  
      </div>
        
         </div>
    </div>

  <!-- </div> -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlssss" data-bs-slide="prev" >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlssss" data-bs-slide="next" >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div><br>


<div class="container mt-5">
  <div class="row">
    <div class="col-12">
    <img class="img-fluid" src="<?php echo base_url();?>assets/images/img/carbanner2.png" width="100%" alt="Second slide">
    </div>
  </div>
</div><br>

<div class="container mt-5">
  <div class="row align-items-center">
    <div class="col-md-6 p-5">
    <div class="ratio ratio-16x9">
  <iframe style="border-radius: 40px;" class="embed-responsive-item" src="https://www.youtube.com/embed/JrnQ-915czY"></iframe>
</div>
 </div>

 <div class="col-md-6 p-5">
    <h1>About us
</h1>

    <p style="color: #565656;">Our Business Plan is a written document describing a company's core business activites, Objectives, and how it plans to achieve its goals. Our goal is to provide our client high quality Product with modern idea accordingly their budgets and according thir reuirements.</p>
 </div>
  </div>
</div><br>

<div class="container mt-5">
  <div class="row">
    <div class="col-12">
    <img class="img-fluid" src="<?php echo base_url();?>assets/images/img/carbanner.png" width="100%" alt="Second slide">
    </div>
  </div>
</div><br>

<div class="container mt-3">
  <div class="row">
    <div class="col">
      <p style="color:#000000; text-align:center; font-weight:bolder; font-size:30px;">What our happy client say</p>
       <p style="color:#757575; text-align:center; font-weight:bolder; font-size:20px;">Several selected clients, who already believe in our service.</p>
    </div>
  </div>
</div><br>

<!-- new  -->

<div class="container">
<div id="carouselExampleControlsl" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  
    <div class="carousel-item active">
      <div class="row">
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/mathewpal.png" class="d-block w-100" alt="..."></div>
        <div class="col align-self-center"> 
          <h5><b >Matthew Paul</b></h5>
                  <p style="color: #000000;font-size:1.3vw">Perfect, very good job! Thank you for the amazing design and work. Really impressed with the high quality and quick turnaround time. Highly recommend.</p>
        </div>
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/mathewpal.png" class="d-block w-100" alt="..."></div>
      </div>
        
      
      </div>

      <div class="carousel-item ">
      <div class="row">
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/mathewpal.png" class="d-block w-100" alt="..."></div>
        <div class="col align-self-center"> 
          <h5><b >Matthew Paul</b></h5>
                  <p style="color: #000000;font-size:1.3vw">Perfect, very good job! Thank you for the amazing design and work. Really impressed with the high quality and quick turnaround time. Highly recommend.</p>
        </div>
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/mathewpal.png" class="d-block w-100" alt="..."></div>
      </div>
         </div>
    </div>

  <!-- </div> -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsl" data-bs-slide="prev" >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsl" data-bs-slide="next" >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div><br>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="row">
                <div class="col"> <img src="<?php echo base_url();?>assets/images/img/chairimg.png" class="img-fluid" alt="..."></div>
                <div class="col"><img src="<?php echo base_url();?>assets/images/img/mtimg.png" class="img-fluid" alt="..."></div>
            </div>
            <div class="row">
                <div class="col"><img src="<?php echo base_url();?>assets/images/img/gi.png" class="img-fluid" alt="..."></div>
                <div class="col"><img src="<?php echo base_url();?>assets/images/img/house.png" class="img-fluid" alt="..."></div>
            </div>
        </div>
        <div class="col-sm-4">
            <h2><b style="color:#1b1c57">Subscribe For More Info
            And Update For Celnow</b></h2>
        </div>
        <div class="col-sm-4">
        <div class="row">
                <div class="col"> <img src="<?php echo base_url();?>assets/images/img/h2.png" class="img-fluid" alt="..."></div>
                <div class="col"><img src="<?php echo base_url();?>assets/images/img/gimg.png" class="img-fluid" alt="..."></div>
            </div>
            <div class="row">
                <div class="col"><img src="<?php echo base_url();?>assets/images/img/bimg.png" class="img-fluid" alt="..."></div>
                <div class="col"><img src="<?php echo base_url();?>assets/images/img/c2.png" class="img-fluid" alt="..."></div>
            </div>
        </div>
    </div>
</div>



  </body>
</html>