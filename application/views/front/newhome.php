<style>
.btn:hover {
    color: var(--bs-btn-hover-color);
    background-color: #d1fae5;
    border-color: var(--bs-btn-hover-border-color);
}

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


}

@media screen and (max-width: 560px) {
    input::placeholder {
        font-size: 12px;
        font-weight: bold;
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

.shopCategory {
    width: 40px;
    height: 40px;
}

.va-carrousel-flexbox_most .va-card {
    flex: 0 0 auto;
    padding-left: 32px;
}

.icon_slider {
    flex: 0 0 auto;
    width: 3.333333%;
}

.icon_cetgory {
    flex: 0 0 auto;
    width: 91.333333%;
}

.deals-scroll-left {
    top: -35px;
    left: 0px;
    bottom: 0;
}

@media (min-width: 1200px) {
    .home_background {
        margin-top: 100px;
    }
}

@media (max-width: 1199px) {
    .home_background {
        margin-top: 75px;
    }
}

@media (max-width: 548px) {
    .home_background {
        margin-top: 48px;
    }
}

.card-title_Login {
    font-family: 'Lexend';
    font-style: normal;
    font-weight: 600;
}

.card-body {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}


.heading {
    text-align: center;
    color: #454343;
    font-size: 30px;
    font-weight: 600;
    font-family: 'Lexend';
    font-style: normal;
    margin-bottom: 70px;
    text-transform: uppercase;
    z-index: 999;
}

.white-heading {}

.heading:after {
    content: ' ';
    position: absolute;
    top: 100%;
    left: 50%;
    height: 40px;
    width: 180px;
    border-radius: 4px;
    transform: translateX(-50%);
    background: url(img/heading-line.png);
    background-repeat: no-repeat;
    background-position: center;
}

.white-heading:after {
    background: url(https://i.ibb.co/d7tSD1R/heading-line-white.png);
    background-repeat: no-repeat;
    background-position: center;
}

.heading span {
    font-size: 18px;
    display: block;
    font-weight: 500;
}

.white-heading span {
    color: #ffffff;
}


.testimonial {
    min-height: 375px;
    position: relative;

    padding-top: 50px;
    padding-bottom: 50px;
    background-position: center;
    background-size: cover;
}

#testimonial4 .carousel-inner:hover {
    cursor: -moz-grab;
    cursor: -webkit-grab;
}

#testimonial4 .carousel-inner:active {
    cursor: -moz-grabbing;
    cursor: -webkit-grabbing;
}

#testimonial4 .carousel-inner .item {
    overflow: hidden;
}

.testimonial4_indicators .carousel-indicators {
    left: 0;
    margin: 0;
    width: 100%;
    font-size: 0;
    height: 20px;
    bottom: 15px;
    padding: 0 5px;
    cursor: e-resize;
    overflow-x: auto;
    overflow-y: hidden;
    position: absolute;
    text-align: center;
    white-space: nowrap;
}

.testimonial4_indicators .carousel-indicators li {
    padding: 0;
    width: 14px;
    height: 14px;
    border: none;
    text-indent: 0;
    margin: 2px 3px;
    cursor: pointer;
    display: inline-block;
    background: #ffffff;
    -webkit-border-radius: 100%;
    border-radius: 100%;
}

.testimonial4_indicators .carousel-indicators .active {
    padding: 0;
    width: 14px;
    height: 14px;
    border: none;
    margin: 2px 3px;
    background-color: #9dd3af;
    -webkit-border-radius: 100%;
    border-radius: 100%;
}

.testimonial4_indicators .carousel-indicators::-webkit-scrollbar {
    height: 3px;
}

.testimonial4_indicators .carousel-indicators::-webkit-scrollbar-thumb {
    background: #eeeeee;
    -webkit-border-radius: 0;
    border-radius: 0;
}

.testimonial4_control_button .carousel-control {
    top: 175px;
    opacity: 1;
    width: 40px;
    bottom: auto;
    height: 40px;
    font-size: 10px;
    cursor: pointer;
    font-weight: 700;
    overflow: hidden;
    line-height: 38px;
    text-shadow: none;
    text-align: center;
    position: absolute;
    background: transparent;
    border: 2px solid #ffffff;
    text-transform: uppercase;
    -webkit-border-radius: 100%;
    border-radius: 100%;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition: all 0.6s cubic-bezier(0.3, 1, 0, 1);
    transition: all 0.6s cubic-bezier(0.3, 1, 0, 1);
}

.testimonial4_control_button .carousel-control.left {
    left: 7%;
    top: 50%;
    right: auto;
}

.testimonial4_control_button .carousel-control.right {
    right: 7%;
    top: 50%;
    left: auto;
}

.testimonial4_control_button .carousel-control.left:hover,
.testimonial4_control_button .carousel-control.right:hover {
    color: #000;
    background: #fff;
    border: 2px solid #fff;
}

.testimonial4_header {
    top: 0;
    left: 0;
    bottom: 0;
    width: 550px;
    display: block;
    margin: 30px auto;
    text-align: center;
    position: relative;
}

.testimonial4_header h4 {
    font-size: 30px;
    font-weight: 600;
    position: relative;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.testimonial4_slide {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 70%;
    margin: auto;
    padding: 20px;
    position: relative;
    text-align: center;
    font-family: 'Lexend';
    font-style: normal;
    font-weight: 600;
}

.testimonial4_slide img {
    top: 0;
    left: 0;
    right: 0;
    width: 136px;
    height: 136px;
    margin: auto;
    display: block;

    font-size: 18px;
    line-height: 46px;
    text-align: center;
    position: relative;
    border-radius: 50%;
    box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
    -moz-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
    -o-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
    -webkit-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
}

.testimonial4_slide p {
    color: #999999;
    font-size: 20px;
    line-height: 1.4;
    margin: 40px 0 20px 0;
}

.testimonial4_slide h4 {
    color: #999999;
    font-size: 22px;
}

.testimonial .carousel {
    padding-bottom: 50px;
}

.testimonial .carousel-control-next-icon,
.testimonial .carousel-control-prev-icon {
    width: 35px;
    height: 35px;
    border: 1px solid transparent;
    border-radius: 50%;

    background-color: black;
}

.carousel-item>div {
    float: center;
}
</style>




<div class="container home_background" style="">
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
                            class="d-block w-100 img-size img-fluid" id='<?php  echo $banner->url ?>'
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
    <div class="row px-0">
        <div class="col-lg-6 col-md-5 col-sm-4 ">
        </div>
        <div class="col-lg-6 col-md-7 col-sm-6 ">
            <div class="search_wrap search_wrap_6 m-0">
                <div class="search_box">
                    <input type="search" name="anything" id="anything" class="form-control rounded-5"
                        placeholder="Search for the Product you want!" aria-label="Search"
                        aria-describedby="search-addon" style="padding:12px 22px" />
                    <button type="submit" class="btn btn-success rounded-5" id="myBtn" style="padding:6px 10px">Search
                    </button>
                   
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
    <div class="va-carrousel-section">
        <div class="va-whitewrap">
            <div id="va_container_most_view">
                <div class="row">
                    <div class="col-1 pe-0 icon_slider">
                        <button class="deals-scroll-left_most_view deals-paddle" id="left_view_button">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                                class="svg-inline--fa fa-chevron-left fa-w-10" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path fill="currentColor"
                                    d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <div class="col-10 ps-0 icon_cetgory">
                        <div class="va-carrousel-flexbox_most">
                                    <?php
                    $category = get_all_category();
                    foreach ($category as $key => $cat) {
                                    ?>
                            <div class="va-card cut-list mt-2" onclick="return getsubcategory(<?php echo $cat->id; ?>)">
                                <p class="new<?php echo $cat->id; ?> btn border  rounded-pill <?php if($cat->id==1){ ?>selected <?php } ?>"
                                    role="button">
                                    <img style="height:40px; width:40px;" class="me-1"
                                        src="<?php echo base_url();?>uploads/category/<?php echo $cat->icon;?>"
                                        alt=""><?php echo $cat->category; ?>
                                </p>
                            </div>
                            <?php  }?>
                        </div>
                    </div>
                    <div class="col-1 icon_slider">
                        <button class="deals-scroll-right_most_view deals-paddle" id="right_view_button">
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
</div>
<div class="container">
    <div class="va-carrousel-section">
        <div class="va-whitewrap">
            <div id="va_container">
                <div class="row">
                    <div class="col-1 pe-0 icon_slider">
                        <button class="deals-scroll-left deals-paddle " id="left_sponser_button">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                                class="svg-inline--fa fa-chevron-left fa-w-10" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path fill="currentColor"
                                    d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <div class="col-10 pe-0 icon_cetgory">
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
                                    <?php if ($category == 1 || $category==5) { ?>
                                    onclick="return getproduct( <?php echo $sub->subcategory_id; ?>,<?php echo $sub->category_id; ?>)"
                                    <?php } else { ?>
                                    onclick="return getproduct( <?php echo $sub->id; ?> ,<?php echo $sub->category_id; ?>)"
                                    <?php } ?>>
                                    <img width="41" height="41" class="<?php  if($sub->id==7 || $sub->id==21 || $sub->id==43 || $sub->id==53 || $sub->id==77 || $sub->id==87 || $sub->id==90 || $sub->id == 39){ ?> select <?php } ?> btn-change common_selector sub_category sub_new<?php if ($sub->category_id == 1|| $category == 5) { echo $sub->subcategory_id; } ?>"
                                        data-sub-id="<?php if ($category == 1|| $category == 5) { echo $sub->subcategory_id; } else{ echo $sub->id; } ?>"
                                        src="<?php echo base_url();?>uploads/shopcategory/<?php echo $sub->icon;?>"
                                        alt="">
                                    <center style="color:black; font-size:12px; font-weight:500">
                                        <?php echo $sub->product_type;
                                      
                                        ?>
                                    </center>
                                </p>
                            </div>
                            <?php 	
                }
               ?>
                        </div>
                    </div>
                    <div class="col-1 pe-0 icon_slider">
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
</div>

<section>
    <div class="text-center container py-5">


        <div class="row" id="product_list">
            <?php
                                
                 if(!empty($location) && empty($anything)){
                     $product= get_all_location_boost($location);
                         $all_count =get_all_location_count_boost($location);
                               
                                  }
             
            
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
                                <img class="img-fluid image2" src="<?php echo base_url(); ?>assets/images/sponsor.png"
                                    style="
   width:80px; ">
                                <?php } if($pro->verified_product ==1){ ?>
                                <img class="img-fluid image3" src="<?php echo base_url(); ?>assets/images/verified.png"
                                    style="
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

                                <h6><img style="max-width:25px;"
                                        src="<?php echo base_url();?>assets/images/location .png"> <?php
                           $title = $pro->address;
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
                        </div>
                    </div>
                </a>
            </div>

            <?php $i++;} } else if($j == 1) {?>

            <?php   }  $j++; };  ?>
            <?php }
              else { ?>
            <center><img src="<?php echo base_url();?>assets/images/no_product.png"></center>
            <?php } ?>

        </div>



    </div>
</section>


<!-- new  -->
<div class="container">
    <div class="row ">
        <p style="color: #F59E0B;">Search Near By Store</p>
    </div>
</div>

<!-- new  -->
<div class="container">
    <div class="row align-items-center pt-2">
        <div class="col-md-6 ">
            <div class="ratio ratio-16x9">
                <iframe style="border-radius: 15px;" class="embed-responsive-item"
                    src="https://www.youtube.com/embed/Pt-jwyi8-R8"></iframe>
            </div>
        </div>
        <div class="col-md-6 ">
            <h3 class="card-title_Login mt-sm-2">Turn Your Broken Devices into Cash with Celnow!</h3><br>
            <p class="card-title_Login" style="color: #565656;">Create a listing for your broken device, Celnow's
                platform connects you with potential buyers who can benefit from your broken device and you can earn
                some extra money from your unused gadgets.</p>
        </div>
    </div>
</div>
<br>

<div class="container  mt-3">
    <div class="row">
        <div class="col-lg-7 col-md-5 col-sm-4">
            <p class="card-title_Login" style=" font-size:30px;"> Service Points / Professionals Near By</p>
        </div>
        <div class="col-lg-5 col-md-7 col-sm-8 pr-4">
            <div class="search_wrap search_wrap_6 m-0">
                <div class="search_box">
                    <input type="search" name="location" class="form-control rounded-5"
                        placeholder="Search for the store" id="location" aria-label="Search"
                        aria-describedby="search-addon" style="padding:12px 22px" />
                    <button type="submit" class="btn btn-success rounded-5" id="shopsubmit"
                        style="padding:6px 10px">Search </button>
                </div>
            </div>
        </div>
    </div>
</div><br>

<section>

    <div class="text-center container py-4">


        <div class="row" id="shop_list">

            <?php if(!empty($location)&& empty($anything)){
              $store = get_all_location_store($location);
          
             $shop_count= get_all_location_store_count($location);
                }
                else{
                $store = get_all_store();
                $shop_count= get_all_store_count();
                
                }
              
           
            if(!empty($store)){
          
          foreach($store as $pro){
         
             ?>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4 mores" id="">
                <a class="link-plain link-plains"
                    href="<?php echo base_url();?>welcome/shopdetail/<?php echo $pro->id; ?>">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                            <img src="<?php echo base_url(); ?>uploads/shop/<?php echo $pro->shop_images ?>"
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

                                <h6><img style="max-width:25px;"
                                        src="<?php echo base_url();?>assets/images/location .png"> <?php
                           $title = $pro->Address;
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
                        </div>
                    </div>
                </a>
            </div>


            <?php }}
              else {?>
            <center><img src="<?php echo base_url();?>assets/images/no_product.png"></center>
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
    <div class="row align-items-center pt-2">
        <div class="col-md-6 ">
            <h3 class="card-title_Login">Unlock Your Earning Potential: Leverage Your Service Points with Celnow!</h3>
            <br>
            <p class="card-title_Login  mb-sm-2" style="color: #565656;">Join as a Verified Service Point, list your skills,
                expand your reach, Showcase your portfolio, interact directly with customers, and enjoy a flexible
                schedule.
                Level up your service business with CelNow's platform. Sign up today and start earning more!</p>
        </div>
        <div class="col-md-6 ">
            <div class="ratio ratio-16x9">
                <iframe style="border-radius: 15px;" class="embed-responsive-item"
                    src="https://www.youtube.com/embed/aHwBET-Zejs"></iframe>
            </div>
        </div>
    </div>
</div>
<br>

<!-- new  -->
<section>
    <div class=" container ">
        <div class="row  text-align-left">
        <p id="donate" class="card-title_Login" style="font-size:30px;">Donated</p>
        </div>
    </div>
    <div class="text-center container py-3">
        <div class="row">
            <?php
                  
                  if(!empty($location)&& empty($anything)){
                    $donate = get_all_location_donate($location);
                
                   $allcount= get_all_location__count_donate($location);
      }
      else{
            
                  $donate = get_all_donate();   
                  $allcount =get_all_donate_count();
      }
            
              if(!empty($donate)){
              $i = 1;
              $j = 1;
            foreach($donate as $pro){
             $session_login_id  = $user['user_id'] ?? null;
              $product_user_id = $pro->user_id;
              if($session_login_id !== $product_user_id){
                  if($i > 0){
            
            ?>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4 postdonate">
                <a class="link-plain link-plains"
                    href="<?php echo base_url();?>welcome/productdetail/<?php echo $pro->category_id; ?>/<?php echo $pro->id; ?>/<?php echo $pro->subcategory_id; ?>">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                            <img src="<?php echo base_url(); ?><?php echo $pro->cover_img ?>"
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

                                <h6><img style="max-width:25px;"
                                        src="<?php echo base_url();?>assets/images/location .png"> <?php
                           $title = $pro->address;
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
                        </div>
                    </div>
                </a>
            </div>

            <?php $i++;} } else if($j == 1) {?>

            <?php   }  $j++; };  ?>
            <?php }
              else {?>
            <center><img src="<?php echo base_url();?>assets/images/no_product.png"></center>
            <?php }?>

            <?php if($allcount > 4){ ?>
            <center class=""><a
                    style="width:100px; border-radius:20px;background-color: #10B981; color:white; border-color:#10B981; "
                    href="<?php echo base_url();?>welcome/donatefillter_product/5" class="btn btn-danger">See All</a>
            </center>
            <?php } ?>
        </div>
    </div>
</section>


<div class="container ">
    <div class="row pt-2">
        <div class="col-12">
            <?php
            $banner_name =  get_post_banner_name(1);
         
            ?>
            <a href="<?php echo $banner_name->url;?>"><img class="img-fluid"
                    src="<?php echo base_url();?>uploads/banner/<?php echo $banner_name->banner_image;?>" width="100%" alt="Second slide"
                    style="border-radius: 31px;"></a>
        </div>
    </div>
</div><br>

<div class="container">
    <div class="row align-items-center pt-2">
        <div class="col-md-6 ">
            <div class="ratio ratio-16x9">
                <iframe style="border-radius: 15px;" class="embed-responsive-item"
                    src="https://www.youtube.com/embed/RFH__0A8fV0"></iframe>
            </div>
        </div>
        <div class="col-md-6 ">
            <h3 class="card-title_Login mt-sm-2">Benefits of Using Celnow Website</h3><br>
            <p class="card-title_Login" style="color: #565656;">Explore CelNow: Your all-in-one solution for buying, selling, and connecting! From secondhand treasures to tutoring opportunities, freelancing gigs, and local services, CelNow has it all.</p>
        </div>
    </div>
</div>
<br>

<div class="container ">
    <div class="row pt-2">
        <div class="col-12">
            <?php
            $banner_name =  get_post_banner_name(2);
         
            ?>
            <a href="<?php echo $banner_name->url;?>"><img class="img-fluid"
                    src="<?php echo base_url();?>uploads/banner/<?php echo $banner_name->banner_image;?>" width="100%" alt="Second slide"
                    style="border-radius: 31px;"></a>
        </div>
    </div>
</div><br>


<section class="testimonial text-center">
  <div class="container">
    <div class="heading white-heading">
      Testimonial
    </div>
    <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000">
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div class="testimonial4_slide">
            <img src="<?php echo base_url(); ?>assets/review/Hareesh.png" class="img-circle img-responsive" alt="Client 1">
            <p>Genuine platform, everyone should give it a try.</p>
            <h4>Hareesh</h4>
          </div>
        </div>
        <div class="carousel-item">
          <div class="testimonial4_slide">
            <img src="<?php echo base_url(); ?>assets/review/niki.png" class="img-circle img-responsive" alt="Client 2">
            <p>Best mobile friendly website to find buyers for our broken gadgets.</p>
            <h4>Niki</h4>
          </div>
        </div>
       
       

        <div  class="carousel-item">
          <div class="testimonial4_slide">
            <img src="<?php echo base_url(); ?>assets/review/aravind.png" class="img-circle img-responsive" alt="Client 3">
            <p>Must use website to find no-broker houses, commercial places for rent and sale nearby</p>
            <h4>Aravind</h4>
          </div>
        </div>

      </div>
      <a class="carousel-control-prev" href="#testimonial4" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#testimonial4" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </a>
    </div>
  </div>
</section>

<div class="container" style="max-width:600px;">
    <div class="row">
        <div class="col">
            <p style=" text-align:center; font-weight:bolder; font-size:30px;">Subscribe For More Info
                And Update From CelNow</p>
            <p style="color:#757575; text-align:center; font-weight:bolder; font-size:20px;">
            <div class="search_wrap search_wrap_6 m-0 mt-4 ">
                <div class="search_box">
                    <form method="post" action="<?php echo base_url();?>welcome/subscribe">
                        <input type="search" name="email_newsletter" id="email_newsletter"
                            class="form-control rounded-5" placeholder="Your Email Here!" aria-label="Search"
                            aria-describedby="search-addon" style="padding:12px 22px" />
                        <button type="button" name="submit" class="btn btn-success rounded-5" style="padding:6px 10px"
                            onclick="return checkemail();">Subscribe </button>
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


function getshop(category_id) {


    //var res = "";
    $("img").removeClass("select");
    $(".newshop" + category_id).addClass("select");

    // var allch =  $("#").val();

    jQuery.ajax({
        type: "POST",
        url: "<?php echo base_url('/welcome/getshop'); ?>",
        data: {
            category_id: category_id
        },
        success: function(res) {










            $("#shop_list").html(res);

            // $('#load_cound').val("10");

        }
    });

}


function getproduct(subcategory_id, category_id) {


    //var res = "";
    $("img").removeClass("select");
    $(".sub_new" + subcategory_id).addClass("select");

    // var allch =  $("#").val();

    jQuery.ajax({
        type: "POST",
        url: "<?php echo base_url('/welcome/getproduct'); ?>",
        data: {
            subcategory_id: subcategory_id,
            category_id: category_id
        },
        success: function(res) {


            $("#product_list").html(res);


            // $('#load_cound').val("10");

        }
    });

}
</script>
<script>
$(document).ready(function() {
    // Get value on button click and show alert
    $("#myBtn").click(function() {
        var anything = $("#anything").val();


        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url('/welcome/getsearchproduct'); ?>",
            data: {
                anything: anything
            },
            success: function(res) {




                $("#product_list").html(res);

            }
        });
    });
});
</script>

<script>
$(document).ready(function() {
    // Get value on button click and show alert
    $("#shopsubmit").click(function() {
        var location = $("#location").val();


        $.ajax({
            type: "POST",
            url: "<?php echo base_url('/welcome/getsearchshop'); ?>",
            data: {
                location: location
            },
            success: function(res) {

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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 