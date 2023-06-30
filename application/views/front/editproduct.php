<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Checkout example · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"
        rel="stylesheet" />
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyAuJlJoxTMjjeSLvb3BYmty0eEkp6oHfCU&libraries=places&callback=initAutocomplete"></script>

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
        z-index: 1500;
    }

    .breadcrumb_container {
        box-sizing: border-box;
        width: 100%;
        max-width: 1126px;
        margin: 0 auto;
    }

    .breadcrumb_row {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -15px;
    }

    .breadcrumb_col {
        box-sizing: border-box;
        flex: 1;
        padding: 0 15px;
    }

    .breadcrumbs {
        box-sizing: border-box;
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 16px 45px;
        position: relative;
        height: 48px;
        background: linear-gradient(90.02deg, #77D4B5 -23.01%, rgba(213, 253, 252, 0) 97.7%);
        border: 0.5px solid #6AD3B0;
        border-radius: 20px;
    }

    .images_container {
        position: relative;
    }

    .images_row {
        display: flex;
        justify-content: center;
    }

    .images_col {
        width: 400px;
        height: 300px;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        background: #D1FAE5;

        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 13px;
        text-align: -webkit-center;
    }

    .my-box {
        width: 100px;
        height: 100px;
        margin-top: 24%;
        background: #FFFFFF;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        text-align: -webkit-center;
        border-radius: 50%;
    }

    .pluse {

        width: 42px;
        height: 100px;
        left: 956.88px;
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 73.2759px;
        line-height: 100px;
        color: #888888;
        opacity: 0.5;
    }

    .images_small_box {
        text-align: -webkit-center;
        width: 78.17px;
        height: 96px;
        background: #DDFBEC;
        box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.25);
        padding-right: 0px;
        padding-left: 0px;
    }

    /* Set the position and spacing for the row element */
    .images_small_box_row {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 96px;

    }

    .images_small_box__plus {
        width: 11px;
        height: 36px;
        left: 844px;
        margin-top: 35%;
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 29.3103px;
        line-height: 40px;
        color: #888888;
        opacity: 0.5;

    }

    .post_input_fild {
        text-align-last: left;
        background: #FFFFFF;
        border: 1px solid #10B981;
        border-radius: 18px;
        box-sizing: border-box;
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 15px;
        line-height: 20px;
        color: #000000;

    }

    .post_input_lable {
        font-family: 'Open Sans';
        font-size: 18px;
        font-weight: 700;
        line-height: 25px;
        letter-spacing: 0em;
        text-align: left;
        color: #000000;
    }

    .product_submit_button {
        background: #10B981;
        border-radius: 30px;
        font-family: 'Open Sans';
        font-size: 23px;
        font-weight: 700;
        line-height: 32px;
        letter-spacing: 0em;
        text-align: center;
        color: #F5F5F5;
    }

    .product_submit_button:hover {
        background: #F5F5F5;
        color: #10B981;
        border: 1px solid #10B981;
    }

    .product_reset_button {
        background: #F5F5F5;
        border-radius: 30px;
        font-family: 'Open Sans';
        font-size: 23px;
        font-weight: 700;
        line-height: 32px;
        letter-spacing: 0em;
        text-align: center;
        color: #10B981;
        border: 1px solid #10B981;
    }

    .product_reset_button:hover {
        background: #10B981;
        color: #F5F5F5;
    }

    select {
        text-align: center;
        text-align-last: center;
    }

    option {
        text-align: left;
    }

    @media (max-width: 992px) {
        .inputform_colume {
            margin-top: 8%;
        }
    }

    @media (max-width: 500px) {
        .inputform_colume {
            margin-top: 25%;
        }
    }

    @media (max-width: 400px) {
        .inputform_colume {
            margin-top: 42%;
        }
    }

    @media (min-width: 200px) {
        .images_small_box_row {
            margin-top: 150%;
        }
    }

    @media (min-width: 300px) {
        .images_small_box_row {
            margin-top: 106%;
        }
    }

    @media (min-width: 400px) {
        .images_small_box_row {
            margin-top: 89%;
        }
    }

    @media (min-width: 500px) {
        .images_small_box_row {
            margin-top: 73%;
        }
    }

    @media (min-width: 767px) {
        .images_small_box_row {
            margin-top: 53%;
        }
    }

    @media (min-width: 992px) {
        .images_small_box_row {
            margin-top: 100%;
        }
    }

    @media (min-width: 1200px) {
        .images_small_box_row {
            margin-top: 80%;
        }
    }

    @media (min-width: 1400px) {
        .images_small_box_row {
            margin-top: 70%;
        }
    }

    .form-check-input {

        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 700;
        font-size: 18px;
        line-height: 25px;
        border: 3px solid #10B981;
        border-radius: 100px;
    }

    .form-check-input:checked {
        background: #FFFF00;
        border: 3px solid #10B981;
    }

    .hiddens {
        display: none;
    }

    #ImgPreview {
        width: -webkit-fill-available;
        height: -webkit-fill-available;
        /* display: none; */
    }

    #ImgPreview2,
    #ImgPreview3,
    #ImgPreview4,
    #ImgPreview5 {
        width: -webkit-fill-available;
        height: -webkit-fill-available;
        /* display: none; */
    }

    .btn-rmv1 {
        font-size: 34px;
        float: right;
        position: absolute;
        margin-left: 85%;
        color: #6AD3B0;
        /* display: none; */
    }

    .btn-rmv2,
    .btn-rmv3,
    .btn-rmv4,
    .btn-rmv5 {
        font-size: 16px;
        float: right;
        position: absolute;
        color: #6AD3B0;
        /* display: none; */
        margin-left: 55px;
    }
    .handline{
      font-family: 'Open Sans';
font-style: normal;
font-weight: 400;
font-size: 12px;
line-height: 16px;
color: #0C0B0B;
flex: none;
order: 0;
flex-grow: 0;
    }
    #cover_images_box{
        display:none;
    }
    #images_small_box__plus_2,#images_small_box__plus_3,
    #images_small_box__plus_4,#images_small_box__plus_5{
        display:none;
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="checkout.css" rel="stylesheet">
    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> 
  
  
  
  <script type="text/javascript">
//<![CDATA[
bkLib.onDomLoaded(function() {
   nicEditors.allTextAreas() ;
   
       
  });



</script>
</head>

<body class="">


    <div class="py-4 text-center">
        <img class="d-block mx-auto mb-4" src="<?php echo base_url();?>assets/images/product_banner.png" alt=""
            width=100%>
    </div>
    <div class="container">
        <main>
          
            <div class="breadcrumb_container container mb-5">
                <div class="row breadcrumb_row">
                    <div class="breadcrumb_col col">
                        <div class="breadcrumbs">
                            <span class="me-2 handline">Home</span>/<span class="ms-2 handline">Edit  Product</span>
                        </div>
                    </div>
                </div>
            </div>



            <?php foreach($product_data as $get_data){?>
            <form class="needs-validation" action="<?php echo base_url();?>welcome/editproduct" method="post"
                enctype="multipart/form-data" id="data_input"  novalidate>
                <div class="row g-5 justify-content-center">

                    <div class=" offset-lg-1 col-lg-5">
                        <div class=" images_container  mt-3 me-2">
                            <div class=" images_row">
                                <div class=" images_col mx-2">
                                    <i class="bi bi-x-circle-fill btn-rmv1 me-3 " id="removeImage1"></i>
                               
                                    <img id="ImgPreview" src="<?php echo base_url();?><?php echo $get_data->cover_img?>" class="preview1" />
                                    <div class="box a">
                                        <div class="my-box" id="cover_images_box">
                                            <label class="pluse" for="cover_images" class="btn">
                                                +
                                            </label>
                                            <input type="file" class="form-control-file" id="cover_images"
                                                name="profile_img[]" style="visibility:hidden;" accept="image/*"
                                                >
                                                <div class="invalid-feedback">
                                           Please Select Cover Images.
                                           </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row images_small_box_row ms-1 ">

                            <div class="col-3 images_small_box m-2">
                                <i class="bi bi-x-circle-fill btn-rmv2 me-3" id="removeImage2"  onclick="images_2()"></i>
                                <?php if($get_data->images_2!==NULL){ ?>
                                    <img id="ImgPreview2" src="<?php echo base_url();?><?php echo $get_data->images_2?>" class="preview2" />
                                    <?php } else{ ?>
                                    <img id="ImgPreview2" src="" class="preview2" style="display:none;"/>
                                    <label class="images_small_box__plus" id="images_small_box__plus_2" for="images_2"
                                    class="btn" style="display:block;">+</label>
                                    <?php } ?>
                                <label class="images_small_box__plus" id="images_small_box__plus_2" for="images_2"
                                    class="btn" >+</label>

                                    
                                <input type="file" class="form-control-file" id="images_2" name="profile_img[]"
                                    accept="image/*" style="visibility:hidden;">
                            </div>
                            <div class="col-3 images_small_box m-2">
                                <i class="bi bi-x-circle-fill btn-rmv3 me-3"  onclick="images_3()"></i>
                                <?php if($get_data->images_3!==NULL){ ?>
                                    <img id="ImgPreview3" src="<?php echo base_url();?><?php echo $get_data->images_3?>" class="preview3" />
                                <?php } else{ ?>
                                    <img id="ImgPreview3" src="" class="preview3" style="display:none;"/>
                                    <label class="images_small_box__plus" id="images_small_box__plus_3" for="images_3"
                                    class="btn" style="display:block;">+</label>
                                    <?php } ?>
<label class="images_small_box__plus" id="images_small_box__plus_3" for="images_3"
                                    class="btn">+</label>
                                <input type="file" class="form-control-file" id="images_3" name="profile_img[]"
                                    accept="image/*" style="visibility:hidden;">
                            </div>
                            <div class="col-3 images_small_box m-2">
                                <i class="bi bi-x-circle-fill btn-rmv4 me-3"  onclick="images_4()"></i>
                                <?php if($get_data->images_4!==NULL){ ?>
                                    <img id="ImgPreview4" src="<?php echo base_url();?><?php echo $get_data->images_4?>" class="preview4" />
                                    <?php } else{ ?>
                                    <img id="ImgPreview4" src="" class="preview4" style="display:none;"/>
                                    <label class="images_small_box__plus" id="images_small_box__plus_4" for="images_4"
                                    class="btn" style="display:block;">+</label>
                                    <?php } ?>
                                    <label class="images_small_box__plus" id="images_small_box__plus_4" for="images_4"
                                    class="btn">+</label>
                                <input type="file" class="form-control-file" id="images_4" name="profile_img[]"
                                    accept="image/*" style="visibility:hidden;">
                            </div>
                            <div class="col-3 images_small_box m-2">
                                
                                <?php if($get_data->images_5!==NULL){ ?>
                                    <i class="bi bi-x-circle-fill btn-rmv5 me-3"  onclick="images_5()"></i>
                                     <img id="ImgPreview5" src="<?php echo base_url();?><?php echo $get_data->images_5?>" class="preview5" />
                                <?php } else{ ?>
                                    <img id="ImgPreview5" src="" class="preview5" style="display:none;"/>
                                    <label class="images_small_box__plus" id="images_small_box__plus_5" for="images_5"
                                    class="btn" style="display:block;">+</label>
                                    <?php } ?>
                                     <label class="images_small_box__plus" id="images_small_box__plus_5" for="images_5"
                                    class="btn">+</label>
                                <input type="file" class="form-control-file" id="images_5" name="profile_img[]"
                                    accept="image/*" style="visibility:hidden;">
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-5 order-lg-first inputform_colume">

                        <div class="row g-3">

                          

                            <div class="col-12">
                                <label for="firstName" class="form-label post_input_lable">Title</label>
                                <input type="text" class="form-control post_input_fild" id="Title" name="Title"
                                    placeholder="Please Enter Title" value=" <?php echo $get_data->title?>" required>
                                <div class="invalid-feedback">
                                    Please Enter Title.
                                </div>
                            </div>

                        
                            <div class="col-sm-6 " id="Price_div"> 
                                <label for="Price" class="form-label post_input_lable">Price</label> 
                                <input type="text" class="form-control post_input_fild" id="Price" name="Price"  value=" <?php echo $get_data->price?>"
                                    placeholder="Please Enter Price">
                                <div class="invalid-feedback">
                                    Please Enter Price.
                                </div>
                            </div>

                       

                            <div class="col-sm-6">
                                <label for="address" class="form-label post_input_lable">Town</label>
                                <input type="text" class="form-control post_input_fild" id="address" name="Town" value=" <?php echo $get_data->town?>"
                                    placeholder="Enter Town" required>
                                <div class="invalid-feedback">
                                    Please Enter Town.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="address" class="form-label post_input_lable">Postal code</label>
                                <input type="text" class="form-control post_input_fild" id="address" name="Postal_code" value=" <?php echo $get_data->postal_code?>"
                                    placeholder="Enter Postal code" required>
                                <div class="invalid-feedback">
                                    Please Enter Postal code.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label post_input_lable">Address</label>
                                <input type="text" class="form-control post_input_fild" id="Location" name="Address" value=" <?php echo $get_data->address?>"
                                    placeholder="Enter Address" required>
                                <div class="invalid-feedback">
                                    Please Enter Product Address.
                                </div>
                            </div>


                            <div class="col-12">
                                <label for="address" class="form-label post_input_lable">Description</label>
                                <textarea type="text" class="form-control post_input_fild" id="address"
                                    name="Description" rows="10" cols="50" placeholder="Enter Description" 
                                    required><?php echo $get_data->Description?></textarea>
                                <div class="invalid-feedback">
                                    Please Enter Product Description.
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required>
                                    <label class="form-check-label" for="flexCheckChecked">
                                         Terms and Conditions
                                    </label><a href="<?php echo base_url();?>welcome/termscondition" style=" text-decoration: none; color:black;"><span><i class="fa fa-question-circle-o" aria-hidden="true" style="font-size: 22px; padding: 0px; width: 25px;"></i></span></a>
                                    <div class="invalid-feedback">You must agree to the terms and conditions.</div>
                                </div>
                            </div>
                            <input type="text" class="form-control " name="product_id" id="product_id" placeholder=""
                                value="<?php  echo $get_data->id; ?>" rows="8" hidden />

                            <input type="text" class="form-control " name="user_id" id="user_id" placeholder=""
                                value="<?php echo $user['user_id']; ?>" rows="8" hidden />
                                <input type="text" class="form-control " name="category" id="category" placeholder=""
                                value="<?php  echo $get_data->category_id; ?>" rows="8" hidden />
                                <input type="text" class="form-control " name="subcategory" id="subcategory" placeholder=""
                                value="<?php echo $get_data->subcategory_id; ?>" rows="8" hidden />
                            <input type="text" class="form-control" name="latitude" id="latitude" hidden />
                            <input type="text" class="form-control" name="longitude" id="longitude" hidden />
                            <div class="my-4"> </div>

                            <div class="col-sm-6 col-6 ">
                                <button class="w-100 btn product_submit_button"  type="submit">Submit</button>
                            </div>

                            <div class="col-sm-6 col-6">
                                <button class="w-100 btn  product_reset_button" id="submit_form" type="">Reset</button>
                            </div>
                        </div>

                    </div>


                </div>
            </form>
            <?php } ?>
        </main>
    </div>

    <script>
       function readURL(input, imgControlName) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $(imgControlName).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#cover_images").change(function() {
        // add your logic to decide which image control you'll use
        var imgControlName = "#ImgPreview";
        readURL(this, imgControlName);
        document.getElementById("ImgPreview").style.display = "block";
        document.getElementById("cover_images_box").style.display = "none";
        document.getElementById("removeImage1").style.display = "block";
        $('.preview1').addClass('it');
        $('.btn-rmv1').addClass('rmv');
    });
    $("#images_2").change(function() {
        // add your logic to decide which image control you'll use
        var imgControlName = "#ImgPreview2";
        readURL(this, imgControlName);
        document.getElementById("ImgPreview2").style.display = "block";
        document.getElementById("images_small_box__plus_2").style.display = "none";
        document.getElementById("removeImage2").style.display = "block";
        $('.preview2').addClass('it');
        $('.btn-rmv2').addClass('rmv');
    });
    $("#images_3").change(function() {
        // add your logic to decide which image control you'll use
        var imgControlName = "#ImgPreview3";
        readURL(this, imgControlName);
        document.getElementById("ImgPreview3").style.display = "block";
        document.getElementById("images_small_box__plus_3").style.display = "none";
        document.getElementById("removeImage3").style.display = "block";
        $('.preview3').addClass('it');
        $('.btn-rmv3').addClass('rmv');
    });
    $("#images_4").change(function() {
        // add your logic to decide which image control you'll use
        var imgControlName = "#ImgPreview4";
        readURL(this, imgControlName);
        document.getElementById("ImgPreview4").style.display = "block";
        document.getElementById("images_small_box__plus_4").style.display = "none";
        document.getElementById("removeImage4").style.display = "block";
        $('.preview4').addClass('it');
        $('.btn-rmv4').addClass('rmv');
    });
    $("#images_5").change(function() {
        // add your logic to decide which image control you'll use
        var imgControlName = "#ImgPreview5";
        readURL(this, imgControlName);
        document.getElementById("ImgPreview5").style.display = "block";
        document.getElementById("images_small_box__plus_5").style.display = "none";
        document.getElementById("removeImage5").style.display = "block";
        $('.preview5').addClass('it');
        $('.btn-rmv5').addClass('rmv');
    });

    $("#removeImage1").click(function(e) {
        e.preventDefault();
        document.getElementById("ImgPreview").style.display = "none";
        document.getElementById("cover_images_box").style.display = "block";
        document.getElementById("removeImage1").style.display = "none";
        cover_images.required = true;
        $("#cover_images").val('');
        $("#ImgPreview").attr("src", "");
        $('.preview1').removeClass('it');
        $('.btn-rmv1').removeClass('rmv');
    });
    $("#removeImage2").click(function(e) {
        e.preventDefault();
        document.getElementById("ImgPreview2").style.display = "none";
        document.getElementById("images_small_box__plus_2").style.display = "block";
        document.getElementById("removeImage2").style.display = "none";
        $("#images_2").val("");
        $("#ImgPreview2").attr("src", "");
        $('.preview2').removeClass('it');
        $('.btn-rmv2').removeClass('rmv');
    });
    $("#removeImage3").click(function(e) {
        e.preventDefault();
        document.getElementById("ImgPreview3").style.display = "none";
        document.getElementById("images_small_box__plus_3").style.display = "block";
        document.getElementById("removeImage3").style.display = "none";
        $("#images_3").val("");
        $("#ImgPreview3").attr("src", "");
        $('.preview3').removeClass('it');
        $('.btn-rmv3').removeClass('rmv');
    });
    $("#removeImage4").click(function(e) {
        e.preventDefault();
        document.getElementById("ImgPreview4").style.display = "none";
        document.getElementById("images_small_box__plus_4").style.display = "block";
        document.getElementById("removeImage4").style.display = "none";
        $("#images_4").val("");
        $("#ImgPreview4").attr("src", "");
        $('.preview4').removeClass('it');
        $('.btn-rmv4').removeClass('rmv');
    });
    $("#removeImage5").click(function(e) {
        e.preventDefault();
        document.getElementById("ImgPreview5").style.display = "none";
        document.getElementById("images_small_box__plus_5").style.display = "block";
        document.getElementById("removeImage5").style.display = "none";
        $("#images_5").val("");
        $("#ImgPreview5").attr("src", "");
        $('.preview5').removeClass('it');
        $('.btn-rmv5').removeClass('rmv');
    });
    </script>




    <script>
    $("#cover_images").change(function() {
        filename = this.cover_images[0].name;
        console.log(filename);
    });
    $("#images_2").change(function() {
        filename = this.images_2[0].name;
        console.log(filename);
    });
    $("#images_3").change(function() {
        filename = this.images_3[0].name;
        console.log(filename);
    });
    $("#images_4").change(function() {
        filename = this.images_4[0].name;
        console.log(filename);
    });
    $("#images_5").change(function() {
        filename = this.images_5[0].name;
        console.log(filename);
    });
    </script>

    <script>
        $("#submit_form").on("click", function(e) {
        e.preventDefault();
        $('#data_input').trigger("reset");
        });
    </script>

    <script>
 function images_2() {
    swal({
                    title: " Delete!",
                    text: "Are you sure you want to delete?",
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
    var thumbnails=  'images_2';
    var product_id=  document.getElementById("product_id").value;
     var category=  document.getElementById("category").value;
    $.ajax({
        url: '<?php echo site_url('Welcome/deleteimage'); ?>',
        type: 'POST',
        data: {
            thumbnails: thumbnails,product_id:product_id,category:category
        },
        dataType: 'json',
        success: function(data) {
          
        }
       
    });
  
} else {
                        swal("Cancelled", "Something went wrong. Please try again.)", "error");
                    }
                    window.location.reload();
                });
  }  
  
  function images_3() {
    swal({
                    title: " Delete!",
                    text: "Are you sure you want to delete?",
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
    var thumbnails=  'images_3';
    var product_id=  document.getElementById("product_id").value;
     var category=  document.getElementById("category").value;
    $.ajax({
        url: '<?php echo site_url('Welcome/deleteimage'); ?>',
        type: 'POST',
        data: {
            thumbnails: thumbnails,product_id:product_id,category:category
        },
        dataType: 'json',
        success: function(data) {
          
        }
        window.location.reload();
    });
  
} else {
                        swal("Cancelled", "Something went wrong. Please try again.)", "error");
                        
                    }
                    window.location.reload();
                });
  }   

  function images_4() {
    swal({
                    title: " Delete!",
                    text: "Are you sure you want to delete?",
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
    var thumbnails=  'images_4';
    var product_id=  document.getElementById("product_id").value;
     var category=  document.getElementById("category").value;
    $.ajax({
        url: '<?php echo site_url('Welcome/deleteimage'); ?>',
        type: 'POST',
        data: {
            thumbnails: thumbnails,product_id:product_id,category:category
        },
        dataType: 'json',
        success: function(data) {
          
        }
        window.location.reload();
    });
   
} else {
                        swal("Cancelled", "Something went wrong. Please try again.)", "error");
                       
                    }
                    window.location.reload();
                });
  }   


  function images_5() {
    swal({
                    title: " Delete!",
                    text: "Are you sure you want to delete?",
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
    var thumbnails=  'images_5';
    var product_id=  document.getElementById("product_id").value;
     var category=  document.getElementById("category").value;
    $.ajax({
        url: '<?php echo site_url('Welcome/deleteimage'); ?>',
        type: 'POST',
        data: {
            thumbnails: thumbnails,product_id:product_id,category:category
        },
        dataType: 'json',
        success: function(data) {
          
        }
        window.location.reload();
    });
    
} else {
                        swal("Cancelled", "Something went wrong. Please try again.)", "error");
                       
                    }
                    window.location.reload();
                });
  }   
        </script>
   

  
   
    <script>
    // hello #6528e0 Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()

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
            
            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();
                
                $('#latitude').val(place.geometry['location'].lat());
                $('#longitude').val(place.geometry['location'].lng());
                
                $("#latitudeArea").removeClass("d-none");
                $("#longtitudeArea").removeClass("d-none");
            });
        } 
    </script>
</body>

</html>