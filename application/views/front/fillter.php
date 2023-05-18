<style>
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

.fillter_product_img {
    width: 376.7px;
    height: 294.1px;
    left: 475.5px;
    top: 1080px;

    border-radius: 37px 37px 0px 0px;
}

.fillter_product_card {
    margin-left: 5px;
    width: 370.7px;
    height: 219px;
    left: 475.5px;
    top: 1365px;
    background: #FFFFFF;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 0px 0px 37px 37px;
}

.fillter_product_name {
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 800;
    font-size: 20px;
    line-height: 30px;
    color: #000000;

    /* Inside auto layout */
    flex: none;
    order: 0;
    flex-grow: 0;
}

@media (min-width: 991px) {
    .home_background {
        background: linear-gradient(154.02deg, #77D4B5 -12.01%, rgba(213, 253, 252, 0) 21.7%);
    }
}

@media (max-width: 992px) {
    .home_background {
        background: linear-gradient(154.02deg, #77D4B5 -21.01%, rgba(213, 253, 252, 0) 21.7%);
    }
}
</style>
<?php  $id = $this->uri->segment(4); 
    ?>
<div class="container-fluid home_background">
<div class="container">
    <div id="carouselExampleControlss" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
      $all_banner = get_all_banner();
      $j = 1;
      foreach ($all_banner as $key => $banner) {
        ?>
            <div class="carousel-item <?php if ($j == 1){echo "active";} ?>">
                <a href="<?php echo $banner->url; ?>" target="_blank"><img class="d-block w-100"
                        id='<?php  echo $banner->url ?>'
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
</div><br>
    </div>
<div class="container">
    <div class="row">
        <p style="color: #F59E0B;"> -------Our Recomandation</p>
    </div>
</div><br>


<!-- search bar -->
<div class="container">
    <div class="row">
        <div class="col-lg-7 col-md-5 col-sm-4 ">
            <p style="font-size:30px;color:#1B1C57;"> Featured </p>
        </div>
        <div class="col-lg-5 col-md-7 col-sm-8">
            <div class="search_wrap search_wrap_6 m-0">
                <div class="search_box">

                    <input type="search" class="form-control rounded-5" placeholder="Search for the Product you want!"
                        aria-label="Search" aria-describedby="search-addon" style="padding:12px 22px" />
                    <button type="button" class="btn btn-success rounded-5" style="padding:6px 10px">search ></button>
                </div>
            </div>
        </div>
    </div>
</div><br>

<!-- new -->
<div class="container">
    <div class="row ">
        <div class="col-lg-2 col-md-3 col-sm-6 col-12 mb-2">
            <a style="background:#d1fae5;" class="btn shadow rounded-pill btn-change" href="#" role="button"><img
                    class="rounded-pill me-1" width="20" height="20"
                    src="<?php echo base_url();?>assets/images/img/menu1.png" alt=""> &nbsp &nbsp All</a>
        </div>


        <div class="col-lg-3 col-md-5 col-sm-6 col-12 mb-2">
            <a class="btn shadow   rounded-pill btn-change" <?php if($id==1){?> style="background:#d1fae5;" <?php }?>
                href="<?php echo base_url();?>welcome/fillter_product/1" role="button"><img class="rounded-circle me-1"
                    src="<?php echo base_url();?>assets/images/img/reusable1.png" alt="">Reusable parts and Product</a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 mb-2">
            <a class="btn shadow  bg-white rounded-pill btn-change"
                href="<?php echo base_url();?>welcome/fillter_product/2" role="button"><img class="rounded-circle me-1"
                    src="<?php echo base_url();?>assets/images/img/home1.png" alt=""> &nbsp Tuitions/Classes</a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6  mb-2 btn-change">
            <a class="btn shadow  bg-white rounded-pill" href="<?php echo base_url();?>welcome/fillter_product/3"
                role="button"><img class="rounded-circle me-1" src="<?php echo base_url();?>assets/images/img/work1.png"
                    alt=""> Part-time Jobs </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6  mb-2 btn-change">
            <a class="btn shadow  bg-white rounded-pill" href="<?php echo base_url();?>welcome/fillter_product/4"
                role="button"><img class="rounded-circle me-1"
                    src="<?php echo base_url();?>assets/images/img/employee1.png" alt=""> &nbsp Internships </a>
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
                    <?php
                $category = get_all_subcategory();
                foreach ($category as $key => $cat) {
                  ?>

                    <div class="va-card va-card_category"> <a class=" border-0"
                            href="<?php echo base_url();?>welcome/fillter_product" style="max-width: 45%;">
                            <p style="text-align:center;" class="my-auto pouler_Categories">
                                <img class="btn-change"
                                    src="<?php echo base_url();?>uploads/shopcategory/<?php echo $cat->icon; ?>" alt="">
                                <center style="color:black; font-size:12px; font-weight:500">
                                    <?php echo ucfirst($cat->sub_category); ?></center>
                            </p>
                        </a>
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





<div class="container mt-5">
    <div class="row">
        <div class=" col-lg-4  col-md-12 ">
            <div class="card" style="height:1830px;">
                <div class="row text-center mt-2">
                    <div class=" col-md-6 col-sm-6">
                        <p><b>Brand </b></p>
                        <p>Brand 1</p>
                        <p>Brand 2</p>
                        <p>Brand 3</p>
                        <p>Brand 4</p>
                    </div>


                    <div class="col-md-6 col-sm-6">
                        <p><b>Total 512 </b></p>
                        <p><button class=" button5">320</button></p>
                        <p><button class=" button5">112</button></p>
                        <p><button class=" button5">32</button></p>
                        <p><button class=" button5">48</button></p>
                    </div>

                    <div class=" col-md-6 col-sm-6 mt-3 ">
                        <p><b>Product type</b></p>
                        <p>All</p>
                        <p>Normal </p>
                        <p>Boast</p>
                        <p>Donate </p>
                    </div>

                    <div class="col-md-6 col-sm-6 mt-5">
                        <p><b></b></p>
                        <p><button class=" button5">320</button></p>
                        <p><button class=" button5">112</button></p>
                        <p><button class=" button5">32</button></p>
                        <p><button class=" button5">48</button></p>
                    </div>

                </div>
            </div>

        </div>




        <div class=" col-lg-8 col-sm-12 ">
            <div class="row ">
                <div class=" col-lg-6  col-md-6  col-sm-6">
                    <div class="fillter_product_img"
                        style="background: url(<?php echo base_url();?>assets/images/bike1.png);">
                    </div>
                    <div class="fillter_product_card">
                        <div class="row">
                            <div class="col-6">
                                <div class="fillter_product_name mt-3">
                                    Lorem ipsum dolor sit amet
                                </div>
                            </div>
                            <div class="col-3">
                                <img src="<?php echo base_url();?>assets/images/heart.png" class="img-fluid" alt="haert"
                                    width="30" height="30">
                            </div>
                            <div class="col-3">

                            </div>
                        </div>

                    </div>

                </div>

            </div>



        </div>
    </div>


</div>

</div>



<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <img class="img-fluid" src="<?php echo base_url();?>assets/images/carbanner.png" alt="Second slide">
        </div>
    </div>
</div>