<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
  
  <style>

.img-size{
  max-height:500px;
    min-height:500px;"
}
.search_wrap {
    width: 100%;

}

.select {
  background: #d1fae5;
  color: black;
  border-radius: 50%;
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
}

@media screen and (max-width: 776px) {
    input::placeholder {
        font-size: 10px;
        font-weight: bold;
    }
    .img-size{
  max-height:300px;
    min-height:300px;"
}
}

@media screen and (max-width: 560px) {
    input::placeholder {
        font-size: 12px;
        font-weight: bold;
    }

    .img-size{
  max-height:200px;
    min-height:200px;"
}
}

.Services_header{
    padding-bottom: 0px;
    border-bottom: 6px solid #10B981;
    width: fit-content;
}
.va-thumbnail {
        border-radius: 20px;
        border: 0px;
        width: 100%;
        max-height: 270px;
        min-height: 270px;
    }

</style>
<div class="container-fluid home_background"  style=" margin-top: 125px;">

<div class="container">
  <div id="carouselExampleControlss" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  <?php
      $all_banner = get_all_banner();
      $j = 1;
      foreach ($all_banner as $key => $banner) {
        ?>  
    <div class="carousel-item <?php if ($j == 1){echo "active";} ?>">
      <a href="<?php echo $banner->url; ?>" target="_blank"><img style="border-radius:30px;" class="d-block w-100 img-size"  id='<?php  echo $banner->url ?>' src="<?php echo base_url(); ?>uploads/banner/<?php echo $banner->banner_image; ?>" alt="First slide"></a>
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
</div>
    </div><br>


<!-- search bar -->
<div class="container">
    <div class="row">
        <div class="col-lg-7 col-md-5 col-sm-4 ">
           
        </div>
        <div class="col-lg-5 col-md-7 col-sm-8">
            <div class="search_wrap search_wrap_6 m-0">
                <div class="search_box">

                <!-- <form method="post" action="<?php echo base_url();?>welcome/searchshop/">
  
         <input type="search"  name="anything" class="form-control rounded-5"  placeholder="Search for the Product you want!" aria-label="Search" aria-describedby="search-addon"  style="padding:12px 22px" />
        <button type="submit" class="btn btn-success rounded-5" style="padding:6px 10px">Search </button>
       </form> -->

       <form method="post" action="<?php echo base_url();?>welcome/searchshop/">
                                    <div class="searchbox-wrap">
                                        <input ype="search"  name="anything" aria-label="Search" aria-describedby="search-addon"  class="search_input form-input" placeholder="Search for the Product you want!">
                                        <input type="text" class="form-control" name="latitude" id="latitude" hidden />
                                        <input type="text" class="form-control" name="longitude" id="longitude"
                                            hidden />
                                        <button type="submit" class="search_b"><span class="Search_text">Search </span> </button>
                                    </div>
                                    </form>
                </div>
            </div>
        </div>
    </div>
</div><br>

<div class="container">
    <div class="va-carrousel-section">
        <div class="va-whitewrap">


            <div id="va_container">
                <button class="deals-scroll-left deals-paddle" id="left_sponser_button">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                        class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                        </path>
                    </svg>
                </button>

                <div class="va-carrousel-flexbox">
                    <?php $id = $this->uri->segment(3); 
                $category = get_all_shopcategory();
             
                foreach ($category as $key => $cat) {
                  ?>

                    <div class="va-card va-card_category mt-2"> 
                            <p  style="text-align:center;" class="my-auto pouler_Categories" onclick="return getshop(<?php echo $cat->id; ?>)">
                                <img  class="btn-change new<?php echo $cat->id; ?>"
                                    src="<?php echo base_url();?>uploads/shopcategory/<?php echo $cat->icon; ?>" alt="">
                                <center style="color:black; font-size:12px; font-weight:500">
                                    <?php echo ucfirst($cat->shop_category); ?></center>
                            </p>
                       
                    </div>

                    <?php } ; ?>


                    <button class="deals-scroll-right deals-paddle" id="right_sponser_button">
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


    <div class="container">

        <div class="row" >
            <?php  
            if($id == 16){
                $shop = get_all_store();
            }
            else{
            $shop = get_category_all_store($id);
            }
if(!empty($shop)){
foreach($shop as $value){
   

?>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4 post" id="sub-list">
                <div class="card" >
                    <a href="<?php echo base_url();?>welcome/shopdetail/<?php echo $value->id;?>"><img
                            class="va-thumbnail " alt="Card image cap"
                            src="<?php echo base_url();?>uploads/shop/<?php echo $value->shop_images;?>"></a>
                    <div class="card-block" style="padding:8px">
                        <p class="card-title"><b><?php
                           $title = $value->name;
                            if(strlen($title) <= 10)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,10) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?></b></p>
                        <p class="card-text"> <?php
                           $title = $value->description;
                            if(strlen($title) <= 30)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,30) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?></p><br>
                        <?php $username = get_user_name($value->user_id);?>
                        <p class="card-title"><?php echo $username;?></p>
                        <img src="<?php echo base_url();?>assets/images/location .png" > <span><?php
                           $title = $value->Address;
                            if(strlen($title) <= 10)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,10) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?></span><br>

                    </div>
                </div>
            </div>
            <?php }  ?>
               


            <?php }
              else {?>
            <center><img  src="<?php echo base_url();?>assets/images/no_product .png"></center>
            <?php }?>





        </div>
    </div>

    <script>

function getshop(category_id){

 
//var res = "";
 $("img").removeClass("select");
 $(".new"+category_id).addClass("select");

    // var allch =  $("#").val();

  jQuery.ajax({
  type: "POST",
  url: "<?php echo base_url('/welcome/getshop'); ?>",
  data: { category_id:category_id},
  success: function(res) 
  {

    
   


  

    
       
  
    $("#sub-list").html(res);
    
    // $('#load_cound').val("10");
    
  }
  });

}


        </script>
