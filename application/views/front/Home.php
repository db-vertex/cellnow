


<style>
.selected {
    background: #d1fae5;
    color: black;
}

.select {
    background: #d1fae5;
    color: black;
    border-radius: 50%;
}



/* search btn line 11 to 89 */
.search_wrap {
    width: 100%;

}

.search_wrap .search_box {
    position: relative;

    height: 64px;
}

.img-size {
    max-height: 500px;
    min-height: 500px;
    

}

.search_wrap .search_box .btn {
    position: absolute;

    height: 80%;
    background: #10B981;
    color: white;

}

.search_wrap .search_box .btn.btn_common .fas {

    /* top: 50%;
	left: 50%;
	transform: translate(-50%,-50%); */
    /* color: #fff; */

}

.search_wrap.search_wrap_6 .search_box .btn {
    max-width: 100%;
    height: 60%;
    top: 8%;
    right: 1.3%;
    padding: 6px 0px;


    /* color: #fff; */
    display: flex;
    align-items: center;
    justify-content: center;
}

input::placeholder {
    font-size: 16px;
    font-weight: bold;
}

@media screen and (max-width: 992px) {
    input::placeholder {
        font-size: 12px;
        font-weight: bold;
    }

    img.fix {
        position: absolute;
        margin-top: 19%;
        height: 25px;
    }
}

@media screen and (max-width: 776px) {
    input::placeholder {
        font-size: 10px;
        font-weight: bold;
    }

    .img-size {
        max-height: 300px;
        min-height: 300px;
        

    }


}

@media screen and (max-width: 560px) {
    input::placeholder {
        font-size: 12px;
        font-weight: bold;
    }

    .img-size {
        max-height: 200px;
        min-height: 200px;
        

    }
}

.mores {
    display: none;
}

.va-carrousel-section {
    padding-left: 0px;
    padding-right: 0px;
}

.cut-list>li {
    /* margin-left: 25px; */
    margin-right: 50px;
    padding-bottom: 2px;
}
</style>




<div class="container home_background" style=" margin-top: 125px;">

    <div class="container px-0">
        <div id="carouselExampleControlss" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
      $all_banner = get_all_banner();
      $j = 1;
      foreach ($all_banner as $key => $banner) {
        ?>
                <div class="carousel-item <?php if ($j == 1){echo "active";} ?>">
                    <a href="<?php echo $banner->url; ?>" target="_blank"><img style="border-radius:30px;"
                            class="d-block w-100 img-size" id='<?php  echo $banner->url ?>'
                            src="<?php echo base_url(); ?>uploads/banner/<?php echo $banner->banner_image; ?>"
                            alt="First slide"></a>
                </div>
                <?php

        $j++;

      }
      ?>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlss"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlss"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div><br>

<div class="container">
    <div class="row pl-4">
        <p style="color: #F59E0B;"></p>
    </div>
</div><br>


<!-- search bar -->
<div class="container">
    <div class="row px-0">
        <div class="col-lg-6 col-md-5 col-sm-4 ">

        </div>
        <div class="col-lg-6 col-md-7 col-sm-6 ">
            <div class="search_wrap search_wrap_6 m-0">
                <div class="search_box">
                  
         
		       <input type="search"  name="anything" id="anything" class="form-control rounded-5"  placeholder="Search for the Product you want!" aria-label="Search" aria-describedby="search-addon"  style="padding:12px 22px" />
          <button type="submit" class="btn btn-success rounded-5" id="myBtn" style="padding:6px 10px">Search </button>
         

                    <!-- <form method="post" action="<?php echo base_url();?>welcome/searchproduct/">
                        <div class="searchbox-wrap">
                            <input type="text" value="" name="anything" aria-label="Search"
                                aria-describedby="search-addon" class="search_input form-input"
                                placeholder="Search for the Product you want!">
                            <input type="text" class="form-control" name="latitude" id="latitude" hidden />
                            <input type="text" class="form-control" name="longitude" id="longitude" hidden />
                            <button type="submit" class="search_b"><span class="Search_text">Search </span> </button>
                        </div>
                    </form> -->
                </div>

                <div class="row">
                    <div id="display"></div>




                </div>
            </div>
        </div>
    </div>
</div><br>

<!-- new -->



<div class="container">
    <div class="row px-0">
        <ul class="pt-0 pb-0 mb-0 cut-list hide-scroll">

            <?php

$category = get_all_category();

foreach ($category as $key => $cat) {


                ?>
            <li class="" id="" onclick="return getsubcategory(<?php echo $cat->id; ?>)">
                <p class="new<?php echo $cat->id; ?> btn border  rounded-pill" role="button"><img class="me-1"
                        src="<?php echo base_url();?>uploads/category/<?php echo $cat->icon;?>" alt=""> &nbsp
                    <?php echo $cat->category; ?> </p>

            </li>

            <?php  }?>
        </ul>
    </div>
</div>

<div class="container">

    <div class="row">
        <div class="va-carrousel-section">
            <div class="va-whitewrap">
                <div id="va_container">
                    <button class="deals-scroll-left deals-paddle " id="left_sponser_button">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                            class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512">
                            <path fill="currentColor"
                                d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                            </path>
                        </svg>
                    </button>
                    <div class="va-carrousel-flexbox" id="sub-list">
                        <?php
					         $cateory =  '';
               
                 
                     $sub_ = '';
                     if($cateory==''){
                        $subcategory = get_all_product_type();  
                     }
                     else{
                        $subcategory = get_producttype_byid($cateory);  
                     }
                      
					  
					  foreach($subcategory as $sub){
					?>

                        <div class="va-card va-card_category mt-2" style="">
                            <p style="text-align:center;" class="my-auto pouler_Categories "
                                <?php if ($category == 1) { ?>
                                onclick="return getproduct( <?php echo $sub->subcategory_id; ?>)" <?php } else { ?>
                                onclick="return getproduct( <?php echo $sub->id; ?>)" <?php } ?>>

                                <img class="btn-change common_selector sub_category sub_new<?php echo $sub->id; ?>"
                                    data-sub-id="<?php if ($category == 1) { echo $sub->subcategory_id; } else{ echo $sub->id; } ?>"
                                    src="https://work.dbvertex.com/celnow/uploads/shopcategory/<?php echo $sub->icon;?>"
                                    alt="">
                                    <center style="color:black; font-size:12px; font-weight:500">
                                    <?php echo $sub->product_type; ?>
                                </center>
                            </p>

                        </div>

                        <?php 
					
                }
               ?>


                    </div>
                    <button class="deals-scroll-right deals-paddle " id="right_sponser_button">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                            class="svg-inline--fa fa-chevron-right fa-w-10" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>




<section>
    <div class="text-center container py-5">


        <div class="row" id="product_list">
            <?php
                                
            $product = get_all_boost();   
              $all_count =get_all_boost_count();
             
            
              if(!empty($product)){
              $i = 1;
              $j = 1;
            foreach($product as $pro){
            
             $session_login_id  = $user['user_id'] ?? null;
              $product_user_id = $pro->user_id;
              if($session_login_id !== $product_user_id){
                  if($i > 0){
            
            ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4 post" id="post_<?php echo $pro->id; ?>">
            <a class="link-plain link-plains"
                            href="<?php echo base_url();?>welcome/productdetail/<?php echo $pro->category_id; ?>/<?php echo $pro->id; ?>/<?php echo $pro->subcategory_id; ?>"> 
                            <div class="card">
                    <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                        <img src="<?php echo base_url(); ?><?php echo $pro->cover_img ?>"
                                class="w-100 va-thumbnail" />
                                <p style="margin-left:5px;"> 
                                    <?php if($pro->pay_type ==1){ ?>
                                      <img class="img-fluid image2"
                                src="<?php echo base_url(); ?>assets/images/sponsor.png" style="
   width:80px; ">
                            <?php } if($pro->verified_product ==1){ ?>
                            <img class="img-fluid image3" src="<?php echo base_url(); ?>assets/images/verified.png" style="
   width:80px; ">
                      

                            <?php }?>
                        </p>


                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                        <?php if($pro->category_id!=4){ ?>
                            <p class="details_price mb-3">
                            <span class=" ">₹<?php echo $pro->price; ?></span>
                        </p>
                            <?php } else{?>
                                <p style="color:#fff" class="details_price mb-3">
                                <strong class="">₹<?php echo $pro->price; ?></strong>
                            </p>
                       <?php } ?>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">

                            <h6 class="dress-name"><?php
                           $title = $pro->title;
                            if(strlen($title) <= 25)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,25) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?></h6>



                        </div>
                        <div class="d-flex justify-content-between align-items-center">

                            <h6><img style="max-width:25px;" src="<?php echo base_url();?>assets/images/location .png"> <?php
                           $title = $pro->address;
                            if(strlen($title) <= 20)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,20) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?></h6>

                        </div>
                    </div>
                </div>
                </a></div>

            <?php $i++;} } else if($j == 1) {?>

            <?php   }  $j++; };  ?>
            <?php }
              else {?>
            <center><img src="<?php echo base_url();?>assets/images/no_product .png"></center>
            <?php }?>
            <?php if($all_count >4){ ?>
            <center class=""><a
                    style="width:100px; border-radius:20px;background-color: #10B981; color:white; border-color:#10B981; "
                    href="<?php echo base_url();?>welcome/fillter_product/5" class="btn btn-danger">See All</a></center>
            <?php } ?>
        </div>



    </div>
</section>



<!-- new  -->
<div class="container">
    <div class="row align-items-center pt-2">
        <div class="col-md-6 ">
            <div class="ratio ratio-16x9">
                <iframe style="border-radius: 15px;" class="embed-responsive-item"
                    src="https://www.youtube.com/embed/JrnQ-915czY"></iframe>
            </div>
        </div>

        <div class="col-md-6 ">
            <h1>Customer flow</h1><br>

            <p style="color: #565656;">Our Business Plan is a written document describing a company's core business
                activites, Objectives, and how it plans to achieve its goals. Our goal is to provide our client high
                quality Product with modern idea accordingly their budgets and according thir reuirements.</p>
        </div>
    </div>
</div><br>

<!-- new  -->
<div class="container">
    <div class="row ">
        <p style="color: #F59E0B;">Search Near By Store</p>
    </div>
</div>






<!-- new  -->
<div class="container  mt-3">
    <div class="row">
        <div class="col-lg-7 col-md-5 col-sm-4">
            <p style="color: #1B1C57; font-size:30px;"> Service Points / Professionals Near By</p>
        </div>
        <div class="col-lg-5 col-md-7 col-sm-8 pr-4">
            <div class="search_wrap search_wrap_6 m-0">
                <div class="search_box">

                   
         
         <input type="search"  name="location" class="form-control rounded-5"  placeholder="Search for the store" id="location" aria-label="Search" aria-describedby="search-addon"  style="padding:12px 22px" />
        <button type="submit" class="btn btn-success rounded-5" id="shopsubmit" style="padding:6px 10px">Search </button>
      
                    <!-- <form method="post" action="<?php echo base_url();?>welcome/searchshop/">
                        <div class="searchbox-wrap">
                            <input type="text" value="" id="Location" name="anything" aria-label="Search"
                                aria-describedby="search-addon" class="search_input form-input"
                                placeholder="Search for the Product you want!">
                            <input type="text" class="form-control" name="latitude" id="latitude" hidden />
                            <input type="text" class="form-control" name="longitude" id="longitude" hidden />
                            <button type="submit" class="search_b"><span class="Search_text">Search </span> </button>
                        </div>
                    </form> -->


                </div>
               
            </div>
        </div>
    </div>
</div><br>


<div class="container ">

    <div class="va-carrousel-section">
        <div class="va-whitewrap">
        <div id="va_container_urgent">
        <button class="deals-scroll-left_urgent deals-paddle" id="left_urgent_button">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                    class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                    </path>
                </svg>
        </button>

            <div class="va-carrousel-flexbox_urgent">
                    <?php $id = $this->uri->segment(3); 
                $category = get_all_shopcategory();
             
                foreach ($category as $key => $cat) {
                  ?>

                    <div class="va-card va-card_category mt-2"> 
                            <p  style="text-align:center;" class="my-auto pouler_Category" onclick="return getshop(<?php echo $cat->id; ?>)">
                                <img  class="btn-change newshop<?php echo $cat->id; ?>"
                                    src="<?php echo base_url();?>uploads/shopcategory/<?php echo $cat->icon; ?>" alt="">
                                <center style="color:black; font-size:12px; font-weight:500">
                                    <?php echo ucfirst($cat->shop_category); ?></center>
                            </p>
                       
                    </div>

                    <?php } ?>
                   </div>
                   <button class="deals-scroll-right_urgent deals-paddle" id="right_urgent_button">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                    class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                    </path>
                </svg>
            </button>
                </div>

        </div>
    </div>
  
                </div>

<section>

    <div class="text-center container py-4">


        <div class="row" id="shop_list">
            <?php
              
             $store = get_all_store();
             $shop_count= get_all_store_count();
           
           
            if(!empty($store)){
          
          foreach($store as $pro){
         
             ?>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4 mores" id="" >
            <a class="link-plain link-plains" href="<?php echo base_url();?>welcome/shopdetail/<?php echo $pro->id; ?>">
                <div class="card">
                    <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                       <img
                                src="<?php echo base_url(); ?>uploads/shop/<?php echo $pro->shop_images ?>"
                                class="w-100 va-thumbnail" />
                        
                    </div>
                    <div class="card-body">

                        <div class="d-flex justify-content-between align-items-center">

                            <h6 class="dress-name"><?php
                           $title = $pro->name;
                            if(strlen($title) <= 15)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,15) . '...';
                                echo ucfirst($y);
                                
                              }
                           
                           ?></h6>

                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                          
                        <h6><img style="max-width:25px;" src="<?php echo base_url();?>assets/images/location .png"> <?php
                           $title = $pro->Address;
                            if(strlen($title) <= 20)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,20) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?></h6>
                         
                        </div>
                    </div>
                </div>
                </a>
            </div>

           
            <?php }}
              else {?>
            <center><img src="<?php echo base_url();?>assets/images/no_product .png"></center>
            <?php }?>
       
        <?php if($shop_count > 4){ ?>
        <center class=""><a href="<?php echo base_url();?>welcome/store/16" class="btn btn-danger "
                style="width:100px; border-radius:20px; background-color: #10B981; color:white; border-color:#10B981; ">See
                All</a></center>
        <?php } ?>
    </div>
    </div>
</section>




<!-- new  -->
<div class="container">
    <div class="row align-items-center pt-4">
        <div class=" col-md-6 ">
            <div class="ratio ratio-16x9">
                <iframe style="border-radius: 20px;" class="embed-responsive-item"
                    src="https://www.youtube.com/embed/JrnQ-915czY"></iframe>
            </div>
        </div>

        <div class="col-md-6  ">
            <h1>How the store works?</h1><br>

            <p style="color: #565656;">Our Business Plan is a written document describing a company's core business
                activites, Objectives, and how it plans to achieve its goals. Our goal is to provide our client high
                quality Product with modern idea accordingly their budgets and according thir reuirements..</p>
        </div>
    </div>
</div><br>

<!-- new  -->
<section>
    <div class=" container ">
        <div class="row  text-align-left">

            <p id="donate" style="color: #1B1C57; font-size:30px;">Donated</p>

        </div>
    </div>
    <div class="text-center container py-3">


        <div class="row">
            <?php
                  
            
                  $product = get_all_donate();   
                  $allcount =get_all_donate_count();
            
              if(!empty($product)){
              $i = 1;
              $j = 1;
            foreach($product as $pro){
             $session_login_id  = $user['user_id'] ?? null;
              $product_user_id = $pro->user_id;
              if($session_login_id !== $product_user_id){
                  if($i > 0){
            
            ?>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4 postdonate">
            <a class="link-plain link-plains" href="<?php echo base_url();?>welcome/productdetail/<?php echo $pro->category_id; ?>/<?php echo $pro->id; ?>/<?php echo $pro->subcategory_id; ?>">
                <div class="card">
                    <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                       <img
                                src="<?php echo base_url(); ?><?php echo $pro->cover_img ?>"
                                class="w-100 va-thumbnail" />
                      
                    </div>
                    <div class="card-body">

                        <div class="d-flex justify-content-between align-items-center">

                            <h6 class="dress-name"><?php
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
                           
                           ?></h6>



                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                           
                                <h6><img style="max-width:25px;" src="<?php echo base_url();?>assets/images/location .png"> <?php
                           $title = $pro->address;
                            if(strlen($title) <= 20)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,20) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?></h6>
                          
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <?php $i++;} } else if($j == 1) {?>

            <?php   }  $j++; };  ?>
            <?php }
              else {?>
            <center><img src="<?php echo base_url();?>assets/images/no_product .png"></center>
            <?php }?>
       
        <?php if($allcount > 4){ ?>
            <center class=""><a
                    style="width:100px; border-radius:20px;background-color: #10B981; color:white; border-color:#10B981; "
                    href="<?php echo base_url();?>welcome/donatefillter_product/5" class="btn btn-danger">See All</a></center>
            <?php } ?>
            </div>
    </div>
</section>





<div class="container">
    <div class="row pt-2">
        <div class="col-12">
            <a href="<?php echo base_url();?>welcome/shop"><img class="img-fluid"
                    src="<?php echo base_url();?>assets/images/carbanner2.png" width="100%" alt="Second slide"></a>
        </div>
    </div>
</div><br>

<div class="container">
    <div class="row align-items-center pt-2">
        <div class="col-md-6 ">
            <div class="ratio ratio-16x9">
                <iframe style="border-radius: 15px;" class="embed-responsive-item"
                    src="https://www.youtube.com/embed/JrnQ-915czY"></iframe>
            </div>
        </div>

        <div class="col-md-6">
            <h1>About us
            </h1>

            <p style="color: #565656;">Our Business Plan is a written document describing a company's core business
                activites, Objectives, and how it plans to achieve its goals. Our goal is to provide our client high
                quality Product with modern idea accordingly their budgets and according thir reuirements.</p>
        </div>
    </div>
</div><br>

<div class="container ">
    <div class="row pt-2">
        <div class="col-12">
            <a href="<?php echo base_url(); ?>welcome/postproduct"><img class="img-fluid"
                    src="<?php echo base_url();?>assets/images/carbanner.png" width="100%" alt="Second slide"></a>
        </div>
    </div>
</div><br>




<div class="container">
    <div id="carouselExampleControlss" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img class="d-block w-100" id='<?php  echo $banner->url ?>'
                    src="<?php echo base_url(); ?>assets/images/Happy Client.png" alt="First slide">
            </div>
            <div class="carousel-item ">
                <img class="d-block w-100" id='<?php  echo $banner->url ?>'
                    src="<?php echo base_url(); ?>assets/images/Happy Client.png" alt="First slide">
            </div>


        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlss"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlss"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="container" style="max-width:600px;">
    <div class="row">
        <div class="col">
            <p style="color:#1b1c57; text-align:center; font-weight:bolder; font-size:30px;">Subscribe For More Info
                And Update From Celnow</p>
            <p style="color:#757575; text-align:center; font-weight:bolder; font-size:20px;">
            <div class="search_wrap search_wrap_6 m-0 mt-4 ">
                <div class="search_box">


                    <form method="post" action="<?php echo base_url();?>welcome/subscribe">
		       <input type="search"  name="email_newsletter" id="email_newsletter" class="form-control rounded-5"  placeholder="Your Email Here!" aria-label="Search" aria-describedby="search-addon"  style="padding:12px 22px" />
            <button type="button" name="submit" class="btn btn-success rounded-5" style="padding:6px 10px" onclick="return checkemail();">Subscribe </button>
            <span id="email_er" style="color: red; font-size:12px;"></span>
           </form>

                    <!-- <form method="post" action="<?php echo base_url();?>welcome/subscribe">
                        <div class="searchbox-wrap">
                            <input type="search" name="email_newsletter" id="email_newsletter"
                                placeholder="Your Email Here!" aria-label="Search" aria-describedby="search-addon"
                                class="search_input form-input">
                            <button type="button" class="search_b"><span class="Search_text"
                                    onclick="return checkemail();">Subscribe</span> </button>

                        </div>
                        <span id="email_er" class="ms-5" style="color: red; font-size:12px;"></span>
                    </form> -->


                </div>


            </div>
            </p>
        </div>
    </div>
</div><br>



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


<script>
function getsubcategory(category_id) {


    //var res = "";
    $("p").removeClass("selected");
    $(".new" + category_id).addClass("selected");

    // var allch =  $("#").val();

    jQuery.ajax({
        type: "POST",
        url: "<?php echo base_url('/welcome/getsubcategory'); ?>",
        data: {
            category_id: category_id
        },
        success: function(res) {








            $("#sub-list").html(res);



            // $('#load_cound').val("10");

        }
    });

}


function getshop(category_id){

 
//var res = "";
 $("img").removeClass("select");
 $(".newshop"+category_id).addClass("select");

    // var allch =  $("#").val();

  jQuery.ajax({
  type: "POST",
  url: "<?php echo base_url('/welcome/getshop'); ?>",
  data: { category_id:category_id},
  success: function(res) 
  {

    
   


  

    
       
  
    $("#shop_list").html(res);
    
    // $('#load_cound').val("10");
    
  }
  });

}


function getproduct(subcategory_id) {


    //var res = "";
    $("img").removeClass("select");
    $(".sub_new" + subcategory_id).addClass("select");

    // var allch =  $("#").val();

    jQuery.ajax({
        type: "POST",
        url: "<?php echo base_url('/welcome/getproduct'); ?>",
        data: {
            subcategory_id: subcategory_id
        },
        success: function(res) {


            $("#product_list").html(res);

     
            // $('#load_cound').val("10");

        }
    });

}
</script>
<script>
$(document).ready(function(){
    // Get value on button click and show alert
    $("#myBtn").click(function(){
        var anything = $("#anything").val();
        

        jQuery.ajax({
  type: "POST",
  url: "<?php echo base_url('/welcome/getsearchproduct'); ?>",
  data: { anything:anything},
  success: function(res) 
  {

  
   
  
    $("#product_list").html(res);
    
  }
  });
    });
});
</script>

<script>
$(document).ready(function(){
    // Get value on button click and show alert
    $("#shopsubmit").click(function(){
        var location = $("#location").val();
        

        $.ajax({
  type: "POST",
  url: "<?php echo base_url('/welcome/getsearchshop'); ?>",
  data: { location:location},
  success: function(res) 
  {
    
    $("#shop_list").html(res);
    
  }
  });
    });
});
</script>
<script type='text/javascript'>
$(document).ready(function() {
    $("#search").autocomplete({

        source: function(request, response) {
            $.ajax({
                url: "<?php echo base_url();?>welcome/search",
                data: {
                    term: request.term
                },
                dataType: "json",
                success: function(data) {

                    var resp = $.map(data, function(obj) {
                        var id = obj.id;
                        var category_id = obj.category_id;
                        var subcategory_id = obj.subcategory_id;
                        var add = category_id + '/' + id + '/' + subcategory_id;
                        return {
                            label: obj.title,
                            value: add

                        }

                    });
                    response(resp);
                    console.log(resp);
                    $("#display").html(data).show();
                }


            });


        },
        select: function(event, ui) {
            location.href = "<?php echo base_url();?>welcome/productdetail/" + ui.item.value;
        },
        minLength: 2
    });


});


$(".col-lg-3").slice(0, 4).show();
$(".loadMore").on("click", function() {
    $(".col-lg-3:hidden").slice(0, 4).show();
    if ($(".col-lg-3:hidden").length == 0) {
        $(".loadMore").fadeOut();
    }
})


$(".col-lg-4").slice(0, 3).show();
$(".loadmore").on("click", function() {
    $(".col-lg-4:hidden").slice(0, 3).show();
    if ($(".col-lg-4:hidden").length == 0) {
        $(".loadmore").fadeOut();
    }
})

$(".mores").slice(0, 4).show();
$(".more").on("click", function() {
    $(".mores:hidden").slice(0, 4).show();
    if ($(".mores:hidden").length == 0) {
        $(".more").fadeOut();
    }
})

$(document).ready(function() {

    // Load more data
    $('.load-more').click(function() {
        var row = Number($('#row').val());
        var allcount = Number($('#all').val());
        var rowperpage = 4;
        row = row + rowperpage;

        if (row <= allcount) {
            $("#row").val(row);

            $.ajax({
                url: '<?php echo base_url();?>welcome/getproduct',
                type: 'post',
                data: {
                    row: row
                },
                beforeSend: function() {
                    $(".load-more").text("Loading...");
                },
                success: function(response) {

                    // Setting little delay while displaying new content
                    setTimeout(function() {
                        // appending posts after last post with class="post"
                        $(".post:last").after(response).show().fadeIn("slow");

                        var rowno = row + rowperpage;

                        // checking row value is greater than allcount or not
                        if (rowno > allcount) {

                            // Change the text and background
                            $('.load-more').hide();

                        } else {
                            $(".load-more").text("Load more");
                        }
                    }, 1000);

                }
            });
        } else {
            $('.load-more').text("Loading...");

            // Setting little delay while removing contents
            setTimeout(function() {

                // When row is greater than allcount then remove all class='post' element after 3 element
                $('.post:nth-child(3)').nextAll('.post').remove();

                // Reset the value of row
                $("#row").val(0);

                // Change the text and background
                $('.load-more').text("Load more");


            }, 1000);


        }

    });

});


$(document).ready(function() {

    // Load more data
    $('.donate-load-more').click(function() {
        var row = Number($('#row-donate').val());
        var allcount = Number($('#all-donate').val());
        var rowperpage = 4;
        row = row + rowperpage;

        if (row <= allcount) {
            $("#row-donate").val(row);

            $.ajax({
                url: '<?php echo base_url();?>welcome/getdonateproduct',
                type: 'post',
                data: {
                    row: row
                },
                beforeSend: function() {
                    $(".donate-load-more").text("Loading...");
                },
                success: function(response) {

                    // Setting little delay while displaying new content
                    setTimeout(function() {
                        // appending posts after last post with class="post"
                        $(".postdonate:last").after(response).show().fadeIn("slow");

                        var rowno = row + rowperpage;

                        // checking row value is greater than allcount or not
                        if (rowno > allcount) {

                            // Change the text and background
                            $('.donate-load-more').hide();

                        } else {
                            $(".donate-load-more").text("Load more");
                        }
                    }, 1000);

                }
            });
        } else {
            $('.donate-load-more').text("Loading...");

            // Setting little delay while removing contents
            setTimeout(function() {

                // When row is greater than allcount then remove all class='post' element after 3 element
                $('.postdonate:nth-child(3)').nextAll('.postdonate').remove();

                // Reset the value of row
                $("#row-donate").val(0);

                // Change the text and background
                $('.donate-load-more').text("Load more");


            }, 1000);


        }

    });

});
</script>

<script>
function checkemail(event) {

    var email_newsletter = $('#email_newsletter').val();
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (email_newsletter == "") {
        $("#email_er").text("Please Enter Email");
    } else if (!(email_newsletter.match(mailformat))) {
        $("#email_er").text("Please Enter valid Email");
    } else {

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url();?>welcome/subscribe',
            data: 'newsletterSubmit=1&email_newsletter=' + email_newsletter,

            success: function(data) {
                $("#email_er").text("");
                swal("Subscribe successfully!", "", "success");
            }
        });

    }


}
</script>
<script>
$(document).ready(function() {
    $("#latitudeArea").addClass("d-none");
    $("#longtitudeArea").addClass("d-none");
});

google.maps.event.addDomListener(window, 'load', initialize);

function initialize() {
    var input = document.getElementById('Location');
    var autocomplete = new google.maps.places.Autocomplete(input);

    var job_Office_Address = document.getElementById('job_Office_Address');
    var autocomplete = new google.maps.places.Autocomplete(job_Office_Address);

    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();

        $('#latitude').val(place.geometry['location'].lat());
        $('#longitude').val(place.geometry['location'].lng());

        $("#latitudeArea").removeClass("d-none");
        $("#longtitudeArea").removeClass("d-none");
    });
}
</script>
