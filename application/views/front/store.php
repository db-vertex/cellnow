<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
<style>
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
   
}
@media screen and (max-width: 560px) {
    input::placeholder {
        font-size: 12px;
        font-weight: bold;
    }
   
}
.Services_header {
    padding-bottom: 0px;
    border-bottom: 6px solid #10B981;
    width: fit-content;
}
.va-thumbnail {
    border-radius: 2px;
    border: 0px;
    width: 100%;
    max-height: 270px;
    min-height: 270px;
}
.shop_icon {
    width: 40px;
    height: 40px;
}
.icon_slider {
    flex: 0 0 auto;
    width: 3.333333%;
}
.icon_cetgory {
    flex: 0 0 auto;
    width: 91.333333%;
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
<!-- search bar -->
<div class="container">
    <div class="row">
        <div class="col-lg-7 col-md-5 col-sm-4 ">
        </div>
        <div class="col-lg-5 col-md-7 col-sm-8">
            <div class="search_wrap search_wrap_6 m-0">
                <div class="search_box">
                    <input type="search" name="location" class="form-control rounded-5" id="location"
                        placeholder="Search shop by the loction" aria-label="Search" aria-describedby="search-addon"
                        style="padding:12px 22px" />
                    <button type="submit" class="btn btn-success rounded-5" id="myBtn" style="padding:6px 10px">Search
                    </button>
                
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
                        <button class="deals-scroll-left deals-paddle" id="left_sponser_button">
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
                        <div class="va-carrousel-flexbox">
                            <?php $id = $this->uri->segment(3); 
                $category = get_all_shopcategory();
                foreach ($category as $key => $cat) {
                  ?>
                            <div class="va-card va-card_category mt-2">
                                <p style="text-align:center;" class="my-auto pouler_Categories"
                                    onclick="return getshop(<?php echo $cat->id; ?>)">
                                    <img  width="41" height="41" class=" shop_icon btn-change new<?php echo $cat->id; ?>"
                                        src="<?php echo base_url();?>uploads/shopcategory/<?php echo $cat->icon; ?>"
                                        alt="shopcategory">
                                    <center style="color:black; font-size:12px; font-weight:500">
                                        <?php echo ucfirst($cat->shop_category); ?></center>
                                </p>
                            </div>
                            <?php } ; ?>
                        </div>
                    </div>
                    <div class="col-1 icon_slider">
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
</div>
<div class="container">
    <div class="row" id="sub-list">
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
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4 post">
            <div class="card">
                <a href="<?php echo base_url();?>welcome/shopdetail/<?php echo $value->id;?>"><img class="va-thumbnail "
                        alt="Card image cap"
                        src="<?php echo base_url();?>uploads/shop/<?php echo $value->shop_images;?>"></a>
                <div class="card-block" style="padding:8px">
                    <p class="card-title"><b><?php
                           $title = $value->name;
                            if(strlen($title) <= 30)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,30) . '...';
                                echo ucfirst($y);
                              }
                           ?></b></p>
                    <img alt="location" src="<?php echo base_url();?>assets/images/location .png"> <span><?php
                           $title = $value->Address;
                            if(strlen($title) <= 20)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,20) . '...';
                                echo ucfirst($y);
                              }
                           ?></span><br>
                </div>
            </div>
        </div>
        <?php }  ?>
        <?php }
              else {?>
        <center><img src="<?php echo base_url();?>assets/images/no_product.png"></center>
        <?php }?>
    </div>
</div>
<script>
$(document).ready(function() {
    // Get value on button click and show alert
    $("#myBtn").click(function() {
        var location = $("#location").val();
        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url('/welcome/getsearchshop'); ?>",
            data: {
                location: location
            },
            success: function(res) {
                $("#sub-list").html(res);
                // $('#load_cound').val("10");
            }
        });
    });
});
</script>
<script>
function getshop(category_id) {
    //var res = "";
    $("img").removeClass("select");
    $(".new" + category_id).addClass("select");
    // var allch =  $("#").val();
    jQuery.ajax({
        type: "POST",
        url: "<?php echo base_url('/welcome/getshop'); ?>",
        data: {
            category_id: category_id
        },
        success: function(res) {
            $("#sub-list").html(res);
            // $('#load_cound').val("10");
        }
    });
}
</script>
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