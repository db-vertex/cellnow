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
        max-width: 1200px;
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
        width: 320px;
        height: 300px;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        background: #D1FAE5;
        text-align: center;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 13px;
        text-align: -webkit-center;
    }

    .my-box {
        margin-left: auto;
        margin-right: auto;
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
        text-align: center;
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
        margin-right: auto;
        margin-left: auto;
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
        font-size: 18px;
        font-weight: 700;
        line-height: 32px;
        letter-spacing: 0em;
        text-align: center;
        color: #F5F5F5;

    }

    .none {
        display: none;
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
        display: none;
    }

    #ImgPreview2,
    #ImgPreview3,
    #ImgPreview4,
    #ImgPreview5 {
        width: -webkit-fill-available;
        height: -webkit-fill-available;
        display: none;
    }

    .btn-rmv1 {
        font-size: 34px;
        float: right;
        position: absolute;
        margin-left: 85%;
        display: none;
    }

    .btn-rmv2,
    .btn-rmv3,
    .btn-rmv4,
    .btn-rmv5 {
        font-size: 16px;
        float: right;
        position: absolute;
        display: none;
        margin-left: 55px;
    }

    .handline {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 15px;
        line-height: 16px;

        color: #0C0B0B;

        flex: none;
        order: 0;
        flex-grow: 0;
    }

    .Post_header {
        padding-bottom: 0px;
        border-bottom: 6px solid #10B981;
    }
    #verified_option_normal{
        display:none;
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="checkout.css" rel="stylesheet">
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
                            <span class="me-2 handline"><a class="text-dark link-underline-opacity-0"
                                    href="<?php echo base_url(); ?>">Home</a></span>/<span class="ms-2 handline">Post
                                Ads </span>
                        </div>
                    </div>
                </div>
            </div>

            <?php  if($error=$this->session->flashdata('saveproduct')){  ?>
            <script>
            swal({
                title: "Success!",
                text: "Product added Successfully!",

                button: false,
                timer: 5000,
            });
            </script>

            <?php } ?>
            <?php  if($error=$this->session->flashdata('saveproductfiled')){  ?>
            <div class="row  text-center" style="justify-content: center;">
                <div class="col-lg-6">
                    <div class="alert alert-danger ">
                        <?= $error; 

                               unset($_SESSION['saveproductfiled']);
                                 ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                            style="float:right;"></button>
                    </div>
                </div>
            </div>

            <?php } ?>

            <form class="needs-validation" action="<?php echo base_url();?>welcome/saveproduct" method="post"
                enctype="multipart/form-data" id="data_input" novalidate>
                <div class="row g-5 justify-content-center">

                    <div class=" offset-lg-1 col-lg-5">
                        <div class=" images_container  mt-3 me-2">
                            <div class=" images_row">
                                <div class=" images_col mx-2">
                                    <i class="bi bi-x-circle-fill btn-rmv1 me-3 " id="removeImage1"></i>
                                    <img id="ImgPreview" src="" class="preview1" style="width: inherit; height: 300px;" />
                                    <div class="box a">
                                        <div class="my-box" id="cover_images_box">
                                            <label class="pluse" for="cover_images" class="btn">
                                                +
                                            </label>
                                            <input type="file" class="form-control-file" id="cover_images"
                                                name="profile_img[]" style="visibility:hidden;" accept="image/*"
                                                required>
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
                                <i class="bi bi-x-circle-fill btn-rmv2 me-3" id="removeImage2"></i>
                                <img id="ImgPreview2" src="" class="preview2" style="width: 78.17px; height: 96px;" />
                                <label class="images_small_box__plus" id="images_small_box__plus_2" for="images_2"
                                    class="btn">+</label>
                                <input type="file" class="form-control-file" id="images_2" name="profile_img[]"
                                    accept="image/*" style="visibility:hidden;">
                            </div>
                            <div class="col-3 images_small_box m-2">
                                <i class="bi bi-x-circle-fill btn-rmv3 me-3" id="removeImage3"></i>
                                <img id="ImgPreview3" src="" class="preview3" style="width: 78.17px; height: 96px;" />
                                <label class="images_small_box__plus" id="images_small_box__plus_3" for="images_3"
                                    class="btn">+</label>
                                <input type="file" class="form-control-file" id="images_3" name="profile_img[]"
                                    accept="image/*" style="visibility:hidden;">
                            </div>
                            <div class="col-3 images_small_box m-2">
                                <i class="bi bi-x-circle-fill btn-rmv4 me-3" id="removeImage4"></i>
                                <img id="ImgPreview4" src="" class="preview4" style="width: 78.17px; height: 96px;" />
                                <label class="images_small_box__plus" id="images_small_box__plus_4" for="images_4"
                                    class="btn">+</label>
                                <input type="file" class="form-control-file" id="images_4" name="profile_img[]"
                                    accept="image/*" style="visibility:hidden;">
                            </div>
                            <div class="col-3 images_small_box m-2">
                                <i class="bi bi-x-circle-fill btn-rmv5 me-3" id="removeImage5"></i>
                                <img id="ImgPreview5" src="" class="preview5" style="width: 78.17px; height: 96px;" />
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

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Sponsor" id="inlineRadio2"
                                        value="3" checked>
                                    <label class="form-check-label" for="inlineRadio2">Boost Ads</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Sponsor" id="inlineRadio1"
                                        value="0">
                                    <label class="form-check-label" for="inlineRadio1">Normal</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Sponsor" id="inlineRadio3"
                                        value="2">
                                    <label class="form-check-label" for="inlineRadio3">Donate</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="firstName" class="form-label post_input_lable">Title</label>
                                <input type="text" class="form-control post_input_fild" id="Title" name="Title"
                                    placeholder="Please Enter Title" required>
                                <div class="invalid-feedback">
                                    Please Enter Title.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="state" class="form-label post_input_lable">Category</label>
                                <select class="form-select post_input_fild" id="category" name="category" required>
                                    <option value="">Select Category</option>
                                    <option value="1">Reusable parts and Products</option>
                                    <option value="2">Tuitions / Classes</option>
                                    <option value="3">Part-time Jobs</option>
                                    <option value="4">Internships</option>
                                    <option value="5">Commericial Places</option>
                                    <option value="6">Residential Places</option>
                                    <option value="7">Land/Plot</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Category.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="subcategory" class="form-label post_input_lable">Sub Category</label>
                                <select class="form-select post_input_fild" id="subcategory" value="" name="subcategory"
                                    required>
                                    <option value="">Select Sub Category</option>

                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Sub Category.
                                </div>
                            </div>

                            <div class="col-sm-12 hiddens" id="reusable_parts_Product_Brand_div">
                                <label for="Product_Brand" class="form-label post_input_lable">Product Brand</label>

                                <select class="form-select post_input_fild" id="Product_Brand" name="Product_Brand">
                                    <option value="">Select Brand</option>
                                    <option value="Acer">Acer</option>
                                    <option value="Alcatel">Alcatel</option>
                                    <option value="Allview">Allview</option>
                                    <option value="Amazon">Amazon</option>
                                    <option value="Amoi">Amoi</option>
                                    <option value="Apple">Apple</option>
                                    <option value="Archos">Archos</option>
                                    <option value="Asus">Asus</option>
                                    <option value="AT&T">AT&T</option>
                                    <option value="Benefon">Benefon</option>
                                    <option value="BenQ">BenQ</option>
                                    <option value="BenQ-Siemens">BenQ-Siemens</option>
                                    <option value="Bird">Bird</option>
                                    <option value="BlackBerry">BlackBerry</option>
                                    <option value="Blackview">Blackview</option>
                                    <option value="BLU">BLU</option>
                                    <option value="Bosch">Bosch</option>
                                    <option value="BQ">BQ</option>
                                    <option value="Casio">Casio</option>
                                    <option value="Cat">Cat</option>
                                    <option value="Celkon">Celkon</option>
                                    <option value="Chea">Chea</option>
                                    <option value="Coolpad">Coolpad</option>
                                    <option value="Dell">Dell</option>
                                    <option value="Doogee">Doogee</option>
                                    <option value="Emporia">Emporia</option>
                                    <option value="Energizer">Energizer</option>
                                    <option value="Ericsson">Ericsson</option>
                                    <option value="Eten">Eten</option>
                                    <option value="Fairphone">Fairphone</option>
                                    <option value="Fujitsu Siemens">Fujitsu Siemens</option>
                                    <option value="Garmin-Asus">Garmin-Asus</option>
                                    <option value="Gigabyte">Gigabyte</option>
                                    <option value="Gionee">Gionee</option>
                                    <option value="Google">Google</option>
                                    <option value="Haier">Haier</option>
                                    <option value="Honor">Honor</option>
                                    <option value="HP">HP</option>
                                    <option value="HTC">HTC</option>
                                    <option value="Huawei">Huawei</option>
                                    <option value="mate">mate</option>
                                    <option value="mobile">mobile</option>
                                    <option value="Icemobile">Icemobile</option>
                                    <option value="Infinix">Infinix</option>
                                    <option value="Innostream">Innostream</option>
                                    <option value="iNQ">iNQ</option>
                                    <option value="Intex">Intex</option>
                                    <option value="Jolla">Jolla</option>
                                    <option value="Karbonn">Karbonn</option>
                                    <option value="Kyocera">Kyocera</option>
                                    <option value="Lava">Lava</option>
                                    <option value="LeEco">LeEco</option>
                                    <option value="Lenovo">Lenovo</option>
                                    <option value="LG">LG</option>
                                    <option value="Maxon">Maxon</option>
                                    <option value="Maxwest">Maxwest</option>
                                    <option value="Meizu">Meizu</option>
                                    <option value="Micromax">Micromax</option>
                                    <option value="Microsoft">Microsoft</option>
                                    <option value="Mitac">Mitac</option>
                                    <option value="Mitsubishi">Mitsubishi</option>
                                    <option value="Modu">Modu</option>
                                    <option value="Motorola">Motorola</option>
                                    <option value="MWg">MWg</option>
                                    <option value="NEC">NEC</option>
                                    <option value="Neonode">Neonode</option>
                                    <option value="NIU">NIU</option>
                                    <option value="Nokia">Nokia</option>
                                    <option value="Nothing">Nothing</option>
                                    <option value="Nvidia">Nvidia</option>
                                    <option value="O2">O2</option>
                                    <option value="OnePlus">OnePlus</option>
                                    <option value="Oppo">Oppo</option>
                                    <option value="Orange">Orange</option>
                                    <option value="Palm">Palm</option>
                                    <option value="Panasonic">Panasonic</option>
                                    <option value="Pantech">Pantech</option>
                                    <option value="Parla">Parla</option>
                                    <option value="Philips">Philips</option>
                                    <option value="Plum">Plum</option>
                                    <option value="Posh">Posh</option>
                                    <option value="Prestigio">Prestigio</option>
                                    <option value="QMobile">QMobile</option>
                                    <option value="Qtek">Qtek</option>
                                    <option value="Razer">Razer</option>
                                    <option value="Realme">Realme</option>
                                    <option value="Sagem">Sagem</option>
                                    <option value="Samsung">Samsung</option>
                                    <option value="Sendo">Sendo</option>
                                    <option value="Sewon">Sewon</option>
                                    <option value="Sharp">Sharp</option>
                                    <option value="Siemens">Siemens</option>
                                    <option value="Sonim">Sonim</option>
                                    <option value="Sony">Sony</option>
                                    <option value="Sony Ericsson">Sony Ericsson</option>
                                    <option value="Spice">Spice</option>
                                    <option value="T-Mobile">T-Mobile</option>
                                    <option value="TCL">TCL</option>
                                    <option value="Tecno">Tecno</option>
                                    <option value="Tel.Me.">Tel.Me.</option>
                                    <option value="Telit">Telit</option>
                                    <option value="Thuraya">Thuraya</option>
                                    <option value="Toshiba">Toshiba</option>
                                    <option value="Ulefone">Ulefone</option>
                                    <option value="Unnecto">Unnecto</option>
                                    <option value="Vertu">Vertu</option>
                                    <option value="verykool">verykool</option>
                                    <option value="Vivo">Vivo</option>
                                    <option value="VK Mobile">VK Mobile</option>
                                    <option value="Vodafone">Vodafone</option>
                                    <option value="Wiko">Wiko</option>
                                    <option value="WND">WND</option>
                                    <option value="XCute">XCute</option>
                                    <option value="Xiaomi">Xiaomi</option>
                                    <option value="XOLO">XOLO</option>
                                    <option value="Yezz">Yezz</option>
                                    <option value="Yota">Yota</option>
                                    <option value="YU">YU</option>
                                    <option value="ZTE">ZTE</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Product Brand.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="Rent_sale_div">
                                <label for="Rent_sale" class="form-label post_input_lable">Filter</label>

                                <select class="form-select post_input_fild" id="Rent_sale" name="Rent_sale">
                                    <option value="">Select Type</option>
                                    <option value="Rent">Rent</option>
                                    <option value="Sale">Sale</option>

                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Filter.
                                </div>
                            </div>


                            <div class="col-sm-6 hiddens" id="BHK_type_div">
                                <label for="BHK_type" class="form-label post_input_lable"> Type</label>

                                <select class="form-select post_input_fild" id="BHK_type" name="type">
                                    <option value="">Select Type</option>
                                    <option value="1BHK">1BHK</option>
                                    <option value="2BHK">2BHK</option>
                                    <option value="3BHK">3BHK</option>
                                    <option value="Others">Others</option>

                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Type.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="Floor_div">
                                <label for="Floor" class="form-label post_input_lable">Floor Type</label>

                                <select class="form-select post_input_fild" id="Floor" name="Floor">
                                    <option value="">Select Floor</option>
                                    <option value="Ground">Ground</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option>
                                    <option value="3rd">3rd</option>
                                    <option value="4th">4th</option>
                                    <option value="5th">5th</option>
                                    <option value="5th">6th</option>
                                    <option value="5th">7th</option>

                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Floor.
                                </div>
                            </div>


                            <div class="col-sm-6 hiddens" id="Parking_div">
                                <label for="Parking" class="form-label post_input_lable">Parking Type</label>

                                <select class="form-select post_input_fild" id="Parking" name="Parking">
                                    <option value="">Select Parking</option>
                                    <option value="None">None</option>
                                    <option value="2 Wheeler">2 Wheeler</option>
                                    <option value="4 Wheeler">4 Wheeler</option>


                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Parking.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="Facing_div">
                                <label for="Facing" class="form-label post_input_lable">Facing</label>

                                <select class="form-select post_input_fild" id="Facing" name="Facing">
                                    <option value="">Select Facing</option>
                                    <option value="North">North</option>
                                    <option value="South">South</option>
                                    <option value="East">East</option>
                                    <option value="West">West</option>


                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Facing.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="Room_div">
                                <label for="Room" class="form-label post_input_lable">Rooms</label>

                                <select class="form-select post_input_fild" id="Room" name="Room">
                                    <option value="">Select Rooms</option>
                                    <option value="Sharing">Sharing</option>
                                    <option value="Independent">Independent</option>


                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Bathrooms.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="Bathroom_div">
                                <label for="Bathroom" class="form-label post_input_lable">Bathrooms</label>

                                <select class="form-select post_input_fild" id="Bathroom" name="Bathroom">
                                    <option value="">Select Bathrooms</option>
                                    <option value="Sharing">Sharing</option>
                                    <option value="Independent">Independent</option>


                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Bathrooms.
                                </div>
                            </div>

                            <!-- <div class="col-sm-6 hiddens" id="land_Bathroom_div">
                                <label for="land_Bathroom" class="form-label post_input_lable">Bathrooms</label>
                               
                                    <select class="form-select post_input_fild" id="land_Bathroom"
                                    name="Bathroom">
                                    <option value="">Select Bathrooms</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    
  
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Bathrooms.
                                </div>
                            </div> -->

                            <div class="col-sm-6 hiddens" id="Bathrooms_div">
                                <label for="Bathrooms" class="form-label post_input_lable">Bathrooms</label>

                                <select class="form-select post_input_fild" id="Bathrooms" name="Bathrooms">
                                    <option value="">Select Bathrooms</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="Others">Others</option>


                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Bathrooms.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="Preferred_div">
                                <label for="Preferred" class="form-label post_input_lable">Preferred Tenant</label>

                                <select class="form-select post_input_fild" id="Preferred" name="Preferred">
                                    <option value="">Select Preferred Tenant</option>
                                    <option value="Girl">Girl</option>
                                    <option value="Boy">Boy</option>
                                    <option value="Any">Any</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Preferred.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="Preferred_tenant_div">
                                <label for="Preferred_tenant" class="form-label post_input_lable">Preferred
                                    Tenant</label>

                                <select class="form-select post_input_fild" id="Preferred_tenant"
                                    name="Preferred_tenant">
                                    <option value="">Select Preferred Tenant</option>
                                    <option value="Bachelor">Bachelor</option>
                                    <option value="Family">Family</option>
                                    <option value="Any">Any</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Preferred Tenant.
                                </div>
                            </div>



                            <div class="col-sm-6 hiddens" id="Sale_Price_div">
                                <label for="Sale_Price" class="form-label post_input_lable">Sale / Rent Price</label>
                                <input type="text" class="form-control post_input_fild" id="Sale_Price"
                                    name="Sale_Price" placeholder="Please Enter Price">
                                <div class="invalid-feedback">
                                    Please Enter Price.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="Area_div">
                                <label for="Area" class="form-label post_input_lable">Area(square feet)</label>
                                <input type="text" class="form-control post_input_fild" id="Area" name="Area"
                                    placeholder="Please Enter Area">
                                <div class="invalid-feedback">
                                    Please Enter Area.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="reusable_parts_Publisher_div">
                                <label for="state" class="form-label post_input_lable">Publisher</label>
                                <select class="form-select post_input_fild" id="reusable_parts_Publisher"
                                    name="reusable_parts_Publisher">
                                    <option value="">Select Publisher</option>
                                    <option value="Single Book">Single Book</option>
                                    <option value="Bundle of">Bundle of</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Publisher.
                                </div>
                            </div>


                            <div class="col-sm-6 hiddens" id="reusable_parts_Select_Type_div">
                                <label for="state" class="form-label post_input_lable">Select Type</label>
                                <select class="form-select post_input_fild" id="reusable_parts_Select_Type"
                                    name="reusable_parts_Select_Type">
                                    <option value="">Select Type</option>
                                    <option value="Products">Products</option>
                                    <option value="parts">parts</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Select Type.
                                </div>
                            </div>


                            <div class="col-sm-6 hiddens" id="reusable_parts_product_Type_div">
                                <label for="state" class="form-label post_input_lable">Product Type</label>
                                <select class="form-select post_input_fild" id="reusable_parts_product_Type"
                                    name="reusable_parts_product_Type">
                                    <option value="">Select Type</option>
                                    <option value="Display">Display</option>
                                    <option value="MotherBoard">MotherBoard</option>
                                    <option value="Pen">Pen</option>
                                    <option value="Camera Module">Camera Module</option>
                                    <option value="Charger Module">Charger Module</option>
                                    <option value="Others">Others</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Product Type.
                                </div>
                            </div>


                            <div class="col-sm-6 hiddens" id="reusable_parts_Laptops_product_Type_div">
                                <label for="reusable_parts_Laptops_product_Type"
                                    class="form-label post_input_lable">Product Type</label>
                                <select class="form-select post_input_fild" id="reusable_parts_Laptops_product_Type"
                                    name="reusable_parts_Laptops_product_Type">
                                    <option value="">Select Type</option>
                                    <option value="Display">Display</option>
                                    <option value="MotherBoard">MotherBoard</option>
                                    <option value="Pen">Pen</option>
                                    <option value="Camera Module">Camera Module</option>
                                    <option value="Charger Module">Charger Module</option>
                                    <option value="Others">Others</option>
                                    <option value="Ram">Ram</option>
                                    <option value="SSD, HHD">SSD, HHD</option>
                                    <option value="Keyboard">Keyboard</option>
                                    <option value="Speaker">Speaker</option>
                                    <option value="Internal DVD Writer">Internal DVD Writer</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Product Type.
                                </div>
                            </div>


                            <div class="col-sm-6 hiddens" id="reusable_parts_computer_product_Type_div">
                                <label for="reusable_parts_computer_product_Type"
                                    class="form-label post_input_lable">Product Type</label>
                                <select class="form-select post_input_fild" id="reusable_parts_computer_product_Type"
                                    name="reusable_parts_computer_product_Type">
                                    <option value="">Select Type</option>
                                    <option value="Monitors">Monitors</option>
                                    <option value="Routers">Routers</option>
                                    <option value="Motherboard">Motherboard</option>
                                    <option value="External hard disks">External hard disks</option>
                                    <option value="Data Cards">Data Cards</option>
                                    <option value="RAM">RAM</option>
                                    <option value="USB drives">USB drives</option>
                                    <option value="Graphics Card">Graphics Card</option>
                                    <option value="Keyboards">Keyboards</option>
                                    <option value="Mouses">Mouses</option>
                                    <option value="Adapters/Power cables">Adapters/Power cables</option>
                                    <option value="Access Points">Access Points</option>
                                    <option value="Batteries">Batteries</option>
                                    <option value="Network Cards">Network Cards</option>
                                    <option value="Ethernet cables">Ethernet cables</option>
                                    <option value="Others">Others</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Product Type.
                                </div>
                            </div>


                            <div class="col-sm-6 hiddens" id="reusable_parts_Electronics_product_Type_div">
                                <label for="reusable_parts_Electronics_product_Type"
                                    class="form-label post_input_lable">Product Type</label>
                                <select class="form-select post_input_fild" id="reusable_parts_Electronics_product_Type"
                                    name="reusable_parts_Electronics_product_Type">
                                    <option value="">Select Type</option>
                                    <option value="Printers">Printers</option>
                                    <option value="Camera">Camera</option>
                                    <option value="iPod">iPod</option>
                                    <option value="MP3 players">MP3 players</option>
                                    <option value="DVD players">DVD players</option>
                                    <option value="TV, Monitors">TV, Monitors</option>
                                    <option value="Inverters, UPS & Generators">Inverters, UPS & Generators</option>
                                    <option value="Fax, EPABX">Fax, EPABX</option>
                                    <option value="Security Equipment">Security Equipment</option>
                                    <option value="Smart watches">Smart watches</option>
                                    <option value="Smart Bands">Smart Bands</option>
                                    <option value="Others">Others</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Product Type.
                                </div>
                            </div>



                            <div class="col-sm-6 hiddens" id="reusable_parts_Home_Appliances_product_Type_div">
                                <label for="reusable_parts_Home_Appliances_product_Type"
                                    class="form-label post_input_lable">Product Type</label>
                                <select class="form-select post_input_fild"
                                    id="reusable_parts_Home_Appliances_product_Type"
                                    name="reusable_parts_Home_Appliances_product_Type">
                                    <option value="">Select Type</option>
                                    <option value="Refrigerators / Fridge">Refrigerators / Fridge</option>
                                    <option value="Washing Machines">Washing Machines</option>
                                    <option value="Air Conditioners / AC">Air Conditioners / AC</option>
                                    <option value="Air Coolers">Air Coolers</option>
                                    <option value="Water Heaters / Geysers">Water Heaters / Geysers</option>
                                    <option value="Sewing Machines">Sewing Machines</option>
                                    <option value="Vacuum Cleaners">Vacuum Cleaners</option>
                                    <option value="Ceiling Fans">Ceiling Fans</option>
                                    <option value="Table Fans">Table Fans</option>
                                    <option value="Iron">Iron</option>
                                    <option value="Air Purifiers">Air Purifiers</option>
                                    <option value="Room Heaters">Room Heaters</option>
                                    <option value="Others">Others</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Product Type.
                                </div>
                            </div>


                            <div class="col-sm-6 hiddens" id="reusable_parts_Kitchen_Appliances_product_Type_div">
                                <label for="reusable_parts_Kitchen_Appliances_product_Type"
                                    class="form-label post_input_lable">Product Type</label>
                                <select class="form-select post_input_fild"
                                    id="reusable_parts_Kitchen_Appliances_product_Type"
                                    name="reusable_parts_Kitchen_Appliances_product_Type">
                                    <option value="">Select Type</option>
                                    <option value="Water Purifiers">Water Purifiers</option>
                                    <option value="Microwave Ovens">Microwave Ovens</option>
                                    <option value="Mixer/Grinder/Juicer">Mixer/Grinder/Juicer</option>
                                    <option value="Induction Cook Tops">Induction Cook Tops</option>
                                    <option value="Gas Stove">Gas Stove</option>
                                    <option value="Oven Toaster Griller">Oven Toaster Griller</option>
                                    <option value="Electric Cookers">Electric Cookers</option>
                                    <option value="Food Processors">Food Processors</option>
                                    <option value="Coffee Makers">Coffee Makers</option>
                                    <option value="Air Fryer">Air Fryer</option>
                                    <option value="Sandwich Makers">Sandwich Makers</option>
                                    <option value="Roti Maker">Roti Maker</option>
                                    <option value="Pop Up Toasters">Pop Up Toasters</option>
                                    <option value="Electric Kettles">Electric Kettles</option>
                                    <option value="Electric Tandoor">Electric Tandoor</option>
                                    <option value="Hand Blenders">Hand Blenders</option>
                                    <option value="Others">Others</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Product Type.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="reusable_parts_Automobiles_product_Type_div">
                                <label for="reusable_parts_Automobiles_product_Type"
                                    class="form-label post_input_lable">Product Type</label>
                                <select class="form-select post_input_fild" id="reusable_parts_Automobiles_product_Type"
                                    name="reusable_parts_Automobiles_product_Type">
                                    <option value="">Select Type</option>
                                    <option value="Motorcycles">Motorcycles</option>
                                    <option value="Scooters">Scooters</option>
                                    <option value="Bicycles">Bicycles</option>
                                    <option value="Cars">Cars</option>
                                    <option value="Other Automobile">Other Automobile</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Product Type.
                                </div>
                            </div>


                            <div class="col-sm-6 hiddens" id="reusable_parts_Furniture_product_Type_div">
                                <label for="reusable_parts_Furniture_product_Type"
                                    class="form-label post_input_lable">Product Type</label>
                                <select class="form-select post_input_fild" id="reusable_parts_Furniture_product_Type"
                                    name="reusable_parts_Furniture_product_Type">
                                    <option value="">Select Type</option>
                                    <option value="Sofa & Dining">Sofa & Dining</option>
                                    <option value="Beds & Wardrobes">Beds & Wardrobes</option>
                                    <option value="Home Decor & Garden">Home Decor & Garden</option>
                                    <option value="Kids Furniture">Kids Furniture</option>
                                    <option value="Recliner">Recliner</option>
                                    <option value="TV stands">TV stands</option>
                                    <option value="Dressing Tables">Dressing Tables</option>
                                    <option value="Mattresses">Mattresses</option>
                                    <option value="Bookshelves">Bookshelves</option>
                                    <option value="Shoe Racks">Shoe Racks</option>
                                    <option value="Other Office Furniture’s">Other Office Furniture’s</option>
                                    <option value="Bean Bags">Bean Bags</option>
                                    <option value="Other Household Items">Other Household Items</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Product Type.
                                </div>
                            </div>


                            <div class="col-sm-6 hiddens" id="reusable_parts_Musical_product_Type_div">
                                <label for="reusable_parts_Musical_product_Type"
                                    class="form-label post_input_lable">Product Type</label>
                                <select class="form-select post_input_fild" id="reusable_parts_Musical_product_Type"
                                    name="reusable_parts_Musical_product_Type">
                                    <option value="">Select Type</option>
                                    <option value="Piano/Keyboard">Piano/Keyboard</option>
                                    <option value="Guitar">Guitar</option>
                                    <option value="Violin">Violin</option>
                                    <option value="Drums">Drums</option>
                                    <option value="Saxophone">Saxophone</option>
                                    <option value="Flute">Flute</option>
                                    <option value="Clarinet">Clarinet</option>
                                    <option value="Cello">Cello</option>
                                    <option value="Trumpet">Trumpet</option>
                                    <option value="Indian Musical Instrument’s">Indian Musical Instrument’s</option>
                                    <option value="Others">Others</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Product Type.
                                </div>
                            </div>


                            <div class="col-sm-6 hiddens" id="reusable_parts_Sports_product_Type_div">
                                <label for="reusable_parts_Sports_product_Type"
                                    class="form-label post_input_lable">Product Type</label>
                                <select class="form-select post_input_fild" id="reusable_parts_Sports_product_Type"
                                    name="reusable_parts_Sports_product_Type">
                                    <option value="">Select Type</option>
                                    <option value="Treadmills">Treadmills</option>
                                    <option value="Bicycle & Accessories">Bicycle & Accessories</option>
                                    <option value="Dumbbells">Dumbbells</option>
                                    <option value="Barbells">Barbells</option>
                                    <option value="Other Fitness Equipment’s">Other Fitness Equipment’s</option>
                                    <option value="Cricket">Cricket</option>
                                    <option value="Badminton">Badminton</option>
                                    <option value="Basketball">Basketball</option>
                                    <option value="Camping and Hiking">Camping and Hiking</option>
                                    <option value="Swimming">Swimming</option>
                                    <option value="Table tennis">Table tennis</option>
                                    <option value="Tennis">Tennis</option>
                                    <option value="Skating">Skating</option>
                                    <option value="Football">Football</option>
                                    <option value="Pool & Snooker">Pool & Snooker</option>
                                    <option value="Carrom">Carrom</option>
                                    <option value="Chess">Chess</option>
                                    <option value="Other Sports Equipment’s">Other Sports Equipment’s</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Product Type.
                                </div>
                            </div>




                            <div class="col-sm-6 hiddens" id="reusable_parts_Publisher_type_div">
                                <label for="reusable_parts_Publisher_type" class="form-label post_input_lable">Publisher
                                    Type</label>
                                <select class="form-select post_input_fild" id="reusable_parts_Publisher_type"
                                    name="reusable_parts_Publisher_type">
                                    <option value="">Select Publisher Type</option>
                                    <option value="Academic Books">Academic Books</option>
                                    <option value="Magazines">Magazines</option>
                                    <option value="Fictional">Fictional</option>
                                    <option value="Non-Fictional">Non-Fictional</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Publisher Type.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="Tuitions_loction_div">
                                <label for="Tuitions_loction" class="form-label post_input_lable">Tuitions
                                location</label>
                                <select class="form-select post_input_fild" id="Tuitions_loction"
                                    name="Tuitions_loction">
                                    <option value="">Select Tuitions location</option>
                                    <option value="Clients home">Clients home</option>
                                    <option value="Tuition Center">Tuition Center</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Tuitions location.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="Tuitions_Education_Type_div">
                                <label for="Tuitions_Education_Type" class="form-label post_input_lable">Education
                                    Type</label>
                                <select class="form-select post_input_fild" id="Tuitions_Education_Type"
                                    name="Tuitions_Education_Type">
                                    <option value="">Select Education Type</option>
                                    <option value="13">Academic based</option>

                                    <option value="14">Music Classes</option>
                                    <option value="15">Self-defence Classes</option>
                                    <option value="16">Sports</option>
                                    <option value="17">Swimming Classes </option>
                                    <option value="18">Typing</option>
                                    <option value="19">Computer Classes</option>
                                    <option value="20">Special abled Teachers</option>
                                    <option value="21">Dance Classes</option>
                                    <option value="22">Others</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Education Type.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="school_eduction_div">
                                <label for="school_eduction" class="form-label post_input_lable">Eduction
                                    category</label>
                                <select class="form-select post_input_fild" id="school_eduction" name="school_eduction">
                                    <option value="">Select Eduction category</option>
                                    <option value="Playschool (Below 1st class)">Playschool (Below 1st class)</option>
                                    <option value="Junior (1 to 6th class)">Junior (1 to 6th class)</option>
                                    <option value="Senior (7th to 10th Classes)">Senior (7th to 10th Classes)</option>
                                    <option value="Higher Secondary (11th and 12th classes)">Higher Secondary (11th and
                                        12th classes)</option>
                                    <option value="Competitive exams">Competitive exams</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Eduction category.
                                </div>
                            </div>


                            <div class="col-sm-6 hiddens" id="Tuitions_gender_div">
                                <label for="Tuitions_gender" class="form-label post_input_lable">Classes for</label>
                                <select class="form-select post_input_fild" id="Tuitions_gender" name="Tuitions_gender">
                                    <option value="">Select Classes for</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Both">Both</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a Classes for.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="Tuitions_Teachers_Experience_div">
                                <label for="Tuitions_Teachers_Experience"
                                    class="form-label post_input_lable">Experience</label>
                                <select class="form-select post_input_fild" id="Tuitions_Teachers_Experience"
                                    name="Tuitions_Teachers_Experience">
                                    <option value="">Select Experience</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Experience.
                                </div>
                            </div>


                            <div class="col-sm-6 hiddens" id="Tuitions_Teachers_type_div">
                                <label for="Tuitions_Teachers_type" class="form-label post_input_lable">Teachers
                                    type</label>
                                <select class="form-select post_input_fild" id="Tuitions_Teachers_type"
                                    name="Tuitions_Teachers_type">
                                    <option value="">Select type</option>
                                    <option value="Student">Student</option>
                                    <option value="Teacher">Teacher</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Teachers type.
                                </div>
                            </div>


                            <div class="col-sm-6 hiddens" id="Tuitions_Years_Experience_div">
                                <label for="Tuitions_Years_Experience" class="form-label post_input_lable">Years of
                                    Experience</label>
                                <input type="number" class="form-control post_input_fild" id="Tuitions_Years_Experience"
                                    name="Tuitions_Years_Experience" placeholder="Please Enter Years of Experience">
                                <div class="invalid-feedback">
                                    Please select Years of Experience.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="Tuitions_Available_Timings_div">
                                <label for="Tuitions_Available_Timings" class="form-label post_input_lable">Available
                                    Timings</label>
                                <input type="text" class="form-control post_input_fild" id="Tuitions_Available_Timings"
                                    name="Tuitions_Available_Timings" placeholder="Please select Available_Timings">
                                <div class="invalid-feedback">
                                    Please select Available Timings.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="Tuitions_Available_Timings_post_div">
                                <label for="Tuitions_Available_Timings_post"
                                    class="form-label post_input_lable">Available
                                    Timings</label>
                                <input type="text" class="form-control post_input_fild"
                                    id="Tuitions_Available_Timings_post" name="Tuitions_Available_Timings_post"
                                    placeholder="Please select Available_Timings">
                                <div class="invalid-feedback">
                                    Please select Available Timings.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="Tuitions_Available_Timings_intership_div">
                                <label for="Tuitions_Available_Timings_intership"
                                    class="form-label post_input_lable">Available
                                    Timings</label>
                                <input type="text" class="form-control post_input_fild"
                                    id="Tuitions_Available_Timings_intership"
                                    name="Tuitions_Available_Timings_intership"
                                    placeholder="Please select Available_Timings">
                                <div class="invalid-feedback">
                                    Please select Available Timings.
                                </div>
                            </div>





                            <div class="col-sm-6 hiddens" id="Tuitions_person_Fees_div">
                                <label for="Tuitions_person_Fees" class="form-label post_input_lable">Par Person
                                    Fees</label>
                                <input type="number" class="form-control post_input_fild" id="Tuitions_person_Fees"
                                    name="Tuitions_person_Fees" placeholder="Please Enter Fees">
                                <div class="invalid-feedback">
                                    Please Enter person Fees.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="Tuitions_Teachers_Qualifications_div">
                                <label for="Tuitions_Teachers_Qualifications"
                                    class="form-label post_input_lable">Teacher's qualification</label>
                                <input type="text" class="form-control post_input_fild"
                                    id="Tuitions_Teachers_Qualifications" name="Tuitions_Teachers_Qualifications"
                                    placeholder="Please Enter Teacher's qualification">
                                <div class="invalid-feedback">
                                    Please Enter Teacher's qualification.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="Tuitions_Joining_criteria_div">
                                <label for="Tuitions_Joining_criteria" class="form-label post_input_lable">Joining
                                    criteria</label>
                                <input type="text" class="form-control post_input_fild" id="Tuitions_Joining_criteria"
                                    name="Tuitions_Joining_criteria" placeholder="Please Enter Joining criteria">
                                <div class="invalid-feedback">
                                    Please Enter Joining criteria.
                                </div>
                            </div>



                            <div class="col-sm-6 hiddens" id="Job_Location_div">
                                <label for="Job_Location" class="form-label post_input_lable">Job Location</label>
                                <select class="form-select post_input_fild" id="Job_Location" name="Job_Location">
                                    <option value="">Select Job Location</option>
                                    <option value="Work Form Home">Work Form Home</option>
                                    <option value="Office">Office</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Job Location.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="job_Office_Address_div">
                                <label for="job_Office_Address" class="form-label post_input_lable">Office
                                    Address</label>
                                <input type="text" class="form-control post_input_fild" id="job_Office_Address"
                                    name="job_Office_Address" placeholder="Please Enter Office Address">
                                <div class="invalid-feedback">
                                    Please Enter Office Address.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="Job_type_div">
                                <label for="Job_type" class="form-label post_input_lable">Job Type</label>
                                <select class="form-select post_input_fild" id="Job_type" name="Job_type">
                                    <option value="">Select Job Type</option>


                                    <option value="23">Event planers</option>
                                    <option value="24">Event execution helpers</option>
                                    <option value="25">Painters</option>
                                    <option value="26">Legal assistant</option>
                                    <option value="27">Billing manager</option>
                                    <option value="28">Sales Executing</option>
                                    <option value="29">Marketing Executive</option>
                                    <option value="30">Brand Manager</option>
                                    <option value="31">Babysitter</option>
                                    <option value="32">Nurse</option>
                                    <option value="33">Elderly Helpers</option>
                                    <option value="34">Personal Drivers</option>
                                    <option value="35">Special abled helper and teacher
                                    </option>
                                    <option value="36">NGO</option>
                                    <option value="37">Web development</option>
                                    <option value="38">Digital Marketing</option>
                                    <option value="39">App Development</option>
                                    <option value="40">SCO</option>
                                    <option value="41">Copywriter</option>
                                    <option value="42">Graphic Designer</option>
                                    <option value="43">Photographer</option>
                                    <option value="44">Videographer</option>
                                    <option value="45">Logo Designers</option>
                                    <option value="46">Other jobs</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Job Type.
                                </div>
                            </div>



                            <div class="col-sm-6 hiddens" id="intership_Job_type_div">
                                <label for="intership_Job_type" class="form-label post_input_lable">Job Type</label>
                                <select class="form-select post_input_fild" id="intership_Job_type"
                                    name="intership_Job_type">
                                    <option value="">Select Job Type</option>
                                    <option value="47">Field Marketing</option>
                                    <option value="48">Sales Manager</option>
                                    <option value="49">Human Resources</option>
                                    <option value="50">Event Management</option>
                                    <option value="51">Software</option>
                                    <option value="52">Digital marketing</option>
                                    <option value="53">Accounts executive</option>
                                    <option value="54">Data Management</option>
                                    <option value="55">Fashion design</option>
                                    <option value="56">Architecture</option>
                                    <option value="57">Engineering</option>
                                    <option value="58">Para legal</option>
                                    <option value="59">Lawyer</option>
                                    <option value="60">Dental Assistant</option>
                                    <option value="61">Nurse</option>
                                    <option value="62">Laboratory Technician</option>
                                    <option value="63">Journalist</option>
                                    <option value="64">Copywriter</option>
                                    <option value="65">Communications manager</option>
                                    <option value="66">Public relations specialist</option>
                                    <option value="67">Meeting/event planner</option>
                                    <option value="68">Social media manager</option>
                                    <option value="72">Brand manager</option>
                                    <option value="73">Graphic designer</option>
                                    <option value="74">Animator/video game designer</option>
                                    <option value="69">Photographer</option>
                                    <option value="70">Others</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Job Type.
                                </div>
                            </div>


                            <div class="col-sm-6 hiddens" id="intership_Skills_Qualifications_div">
                                <label for="intership_Skills_Qualifications" class="form-label post_input_lable">Skills
                                    Qualifications</label>
                                <input type="text" class="form-control post_input_fild"
                                    id="intership_Skills_Qualifications" name="intership_Skills_Qualifications"
                                    placeholder="Please Enter Skills Qualifications">
                                <div class="invalid-feedback">
                                    Please Enter Skills Qualifications.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="intership_Need_Stipend_div">
                                <label for="intership_Need_Stipend" class="form-label post_input_lable">Need
                                    Stipend</label>
                                <select class="form-select post_input_fild" id="intership_Need_Stipend"
                                    name="intership_Need_Stipend">
                                    <option value="">Select Need Stipend</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please Select a valid Need Stipend.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="intership_Post_Vacant_div">
                                <label for="intership_Post_Vacant" class="form-label post_input_lable">Post
                                    Vacant</label>
                                <input type="text" class="form-control post_input_fild" id="intership_Post_Vacant"
                                    name="intership_Post_Vacant" placeholder="Please Enter Post Vacant">
                                <div class="invalid-feedback">
                                    Please Enter Post Vacant.
                                </div>
                            </div>



                            <div class="col-sm-6 hiddens" id="job_Experience_div">
                                <label for="job_Experience" class="form-label post_input_lable">Experience</label>
                                <input type="text" class="form-control post_input_fild" id="job_Experience"
                                    name="job_Experience" placeholder="Please Enter Experience">
                                <div class="invalid-feedback">
                                    Please Enter Experience.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="Job_Pitching_Experience_div">
                                <label for="Job_Pitching_Experience"
                                    class="form-label post_input_lable">Experience</label>
                                <select class="form-select post_input_fild" id="Job_Pitching_Experience"
                                    name="Job_Pitching_Experience">
                                    <option value="">Select Job Experience</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please Select a valid Experience.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="job_Salery_div">
                                <label for="job_Salery" class="form-label post_input_lable">Salery</label>
                                <input type="number" class="form-control post_input_fild" id="job_Salery"
                                    name="job_Salery" placeholder="Please Enter Salery">
                                <div class="invalid-feedback">
                                    Please Enter Salery.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="job_amount_div">
                                <label for="job_amount" class="form-label post_input_lable">Amount</label>
                                <input type="number" class="form-control post_input_fild" id="job_amount"
                                    name="job_amount" placeholder="Please Enter Amount">
                                <div class="invalid-feedback">
                                    Please Enter Amount.
                                </div>
                            </div>


                            <div class="col-sm-6 hiddens" id="Price_div">
                                <label for="Price" class="form-label post_input_lable">Price(INR)</label>
                                <input type="text" class="form-control post_input_fild" id="Price" name="Price" placeholder="Please Enter Price">
                                <div class="invalid-feedback">
                                    Please Enter Price.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="use_years_div">
                                <label for="Price" class="form-label post_input_lable">In use years</label>
                                <input type="text" class="form-control post_input_fild" name="use_years"
                                    placeholder="Please choose years" id="use_years" />
                                <div class="invalid-feedback">
                                    Please choose years.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="Have_Bill_div">
                                <label for="Have_Bill" class="form-label post_input_lable">Have Bill</label>
                                <select class="form-select post_input_fild" id="Have_Bill" name="Have_Bill">
                                    <option value="">Select Have Bill</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Have Bill.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="Food_div">
                                <label for="Food" class="form-label post_input_lable">Food</label>
                                <select class="form-select post_input_fild" id="Food" name="Food">
                                    <option value="">Select Food</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Food.
                                </div>
                            </div>

                            <div class="col-sm-6 hiddens" id="Furniture_div">
                                <label for="Furniture" class="form-label post_input_lable">Furniture Type</label>
                                <select class="form-select post_input_fild" id="Furniture" name="Furniture">
                                    <option value="">Select Furniture Type</option>
                                    <option value="Not">Not</option>
                                    <option value="Semi">Semi</option>
                                    <option value="Full">Full</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Furniture.
                                </div>
                            </div>


                            <div class="col-sm-6 hiddens" id="Warrenty_div">
                                <label for="Warrenty" class="form-label post_input_lable">Warrenty</label>
                                <select class="form-select post_input_fild" id="Warrenty" name="Warrenty">
                                    <option value="">Select Warrenty</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Warrenty.
                                </div>
                            </div>

                            <div class="col-12 hiddens" id="intership_qustions_div">
                                <label for="address" class="form-label post_input_lable">Why should the company select
                                    you. ?</label>
                                <textarea type="intership_qustions" class="form-control post_input_fild"
                                    id="intership_qustions" name="intership_qustions" rows="5" cols="50"
                                    placeholder="Enter Your Answer"></textarea>
                                <div class="invalid-feedback">
                                    Please Enter Your Answer.
                                </div>
                            </div>


                            <div class="col-12 hiddens" id="Tuitions_Positives_Outcomes_div">
                                <label for="Tuitions_Positives_Outcomes" class="form-label post_input_lable">Positive  Outcome</label>
                                <textarea type="text" class="form-control post_input_fild"
                                    id="Tuitions_Positives_Outcomes" name="Tuitions_Positives_Outcomes" rows="5"
                                    cols="50" placeholder="Enter Positive  Outcome"></textarea>
                                <div class="invalid-feedback">
                                    Please Enter Positive  Outcome.
                                </div>
                            </div>


                            <div class="col-12 hiddens" id="Tuitions_Requirements_Teachers_div">
                                <label for="Tuitions_Requirements_Teachers"
                                    class="form-label post_input_lable">Requirements for Teachers</label>
                                <textarea type="text" class="form-control post_input_fild"
                                    id="Tuitions_Requirements_Teachers" name="Tuitions_Requirements_Teachers" rows="5"
                                    cols="50" placeholder="Enter Requirements for Teachers"></textarea>
                                <div class="invalid-feedback">
                                    Please Enter Requirements for Teachers.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="address" class="form-label post_input_lable">Town</label>
                                <input type="text" class="form-control post_input_fild" id="address" name="Town"
                                    placeholder="Enter Town" required>
                                <div class="invalid-feedback">
                                    Please Enter Town.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="address" class="form-label post_input_lable">Postal code</label>
                                <input type="text" class="form-control post_input_fild" id="address" name="Postal_code"
                                    placeholder="Enter Postal code" required>
                                <div class="invalid-feedback">
                                    Please Enter Postal code.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label post_input_lable">Address</label>
                                <input type="text" class="form-control post_input_fild" id="Address" name="Address"
                                    placeholder="Enter Address" required>
                                <div class="invalid-feedback">
                                    Please Enter Product Address.
                                </div>
                            </div>


                            <div class="col-12">
                                <label for="address" class="form-label post_input_lable">Description</label>
                                <textarea type="text" class="form-control post_input_fild" id="editor"
                                    name="Description" rows="10" cols="50" placeholder="Enter Description"
                                    required></textarea>
                                <div class="invalid-feedback">
                                    Please Enter Product Description.
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                        required>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Terms and Conditions
                                    </label><a href="<?php echo base_url();?>welcome/termscondition"
                                        style=" text-decoration: none; color:black;"><span><i
                                                class="fa fa-question-circle-o" aria-hidden="true"
                                                style="font-size: 22px; padding: 0px; width: 25px;"></i></span></a>
                                    <div class="invalid-feedback">You must agree to the terms and conditions.</div>
                                </div>
                            </div>

                           

                            <div class="col-12" id="verified_option">
                                <div class="form-check">
                                    <input class="form-check-input " name="verified_admin" type="checkbox" value="yes"
                                        onchange="valChange(this)">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Rs.10 (Payment for online post verification by CelNow executive over
                                        phone/WhatsApp.)
                                    </label>
                                </div>
                            </div>

                            <div class="col-12" id="verified_option_normal">
                                <div class="form-check">
                                    <input class="form-check-input " name="verified_admin" type="checkbox" value="yes"
                                        onchange="verified_option_normal(this)">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Rs.10 (Payment for online post verification by CelNow executive over
                                        phone/WhatsApp.)
                                    </label>
                                </div>
                            </div>


                            <input type="text" class="form-control" name="user_id" id="user_id" placeholder=""
                                value="<?php echo $user['user_id']; ?>" rows="8" hidden />
                            <input type="text" class="form-control" name="latitude" id="latitude" hidden />
                            <input type="text" class="form-control" name="longitude" id="longitude" hidden />
                            <div class="my-4"> </div>

                            <div class="col-sm-6 col-6 none" id="sub">
                                <button class="w-100 btn product_submit_button " onclick=""
                                    type="submit">Submit</button>
                            </div>
                            <div class="col-sm-6 col-6 " id="submit">
                                <button class="w-100 btn product_submit_button " onclick="" type="submit">Submit
                                    (Rs.125)</button>
                            </div>
                            <div class="col-sm-6 col-6 none" id="visible">
                                <button class="w-100 btn product_submit_button " onclick="" type="submit">Submit
                                    (Rs.135)</button>
                            </div>

                            <div class="col-sm-6 col-6">
                                <button class="w-100 btn  product_reset_button " id="submit_form" type="">Reset</button>
                            </div>
                        </div>

                    </div>


                </div>
            </form>
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

    $("#use_years").datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years"
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('select[name="category"]').on('change', function() {
            var stateID = $(this).val();
            if (stateID) {
                $.ajax({
                    url: '<?php echo base_url();?>welcome/subcategorydropdown/' + stateID,
                    type: "POST",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="subcategory"]').empty();
                        $('select[name="subcategory"]').append(
                            '<option  value="">Choose</option>');
                        $.each(data, function(key, value) {
                            $('select[name="subcategory"]').append(
                                '<option  value="' + value.sub_id + '">' + value
                                .sub_category + '</option>');

                        });
                    }
                });
            } else {
                $('select[name="subcategory"]').empty();
            }
        });
    });
    </script>

    <script>
    $("#submit_form").on("click", function(e) {
        e.preventDefault();
        $('#data_input').trigger("reset");
    });
    </script>

    <script>
    $('#Tuitions_Education_Type').change(function() {
        if ($(this).val() == "13") {
            document.getElementById("school_eduction_div").style.display = "block";
            school_eduction.required = true;

        } else {
            document.getElementById("school_eduction_div").style.display = "none";
        }
    });




    $('#Job_Location').change(function() {
        if ($(this).val() == "Office") {
            document.getElementById("job_Office_Address_div").style.display = "block";
            job_Office_Address.required = true;

        } else {
            document.getElementById("job_Office_Address_div").style.display = "none";
        }
    });
    </script>

    <script>
    $(document).ready(function() {
        $('input[type="radio"]').click(function() {
            var inputValue = $(this).attr("value");

            if (inputValue != 3) {
            
                document.getElementById("verified_option_normal").style.display = "block"; 
                document.getElementById("verified_option").style.display = "none"; 
                document.getElementById("submit").style.display = "none";
                document.getElementById("sub").style.display = 'block';
                document.getElementById("visible").style.display = 'none';
            } else {
                document.getElementById("verified_option_normal").style.display = "none";
                document.getElementById("verified_option").style.display = "block"; 
                document.getElementById("submit").style.display = "block";
                document.getElementById("sub").style.display = 'none';
            }



        });
    });
    
    function valChange(element) {
      
        if (element.checked) {
         //   document.getElementById("sub").style.display = "none";
            document.getElementById("submit").style.display = "none";
            document.getElementById("visible").style.display = 'block';
        } else {
            document.getElementById("visible").style.display = "none";
            document.getElementById("submit").style.display = "block";
           // document.getElementById("sub").style.display = 'none';
        }
    }


//     function verified_option_normal(element) {
//       if (element.checked) {
//           document.getElementById("sub").style.display = "block";
//           document.getElementById("submit").style.display = "none";
//           document.getElementById("visible").style.display = 'none';
//       } else {
//           document.getElementById("visible").style.display = "none";
//           document.getElementById("submit").style.display = "block";
//           document.getElementById("sub").style.display = 'none';
//       }
//   }



    </script>
    <script type="text/javascript">
    $(document).ready(function() {

        $('select[name="category"]').on('change', function() {
            $('#reusable_parts_Select_Type').prop('required', false);
            $('#Product_Brand').prop('required', false);
            $('#reusable_parts_Publisher').prop('required', false);
            $('#Tuitions_loction').prop('required', false);
            $('#Tuitions_gender').prop('required', false);
            $('#reusable_parts_product_Type').prop('required', false);
            $('#reusable_parts_Laptops_product_Type').prop('required', false);
            $('#reusable_parts_computer_product_Type').prop('required', false);
            $('#reusable_parts_Home_Appliances_product_Type').prop('required', false);
            $('#reusable_parts_Electronics_product_Type').prop('required', false);
            $('#reusable_parts_Kitchen_Appliances_product_Type').prop('required', false);
            $('#reusable_parts_Automobiles_product_Type').prop('required', false);
            $('#reusable_parts_Furniture_product_Type').prop('required', false);
            $('#reusable_parts_Sports_product_Type').prop('required', false);
            $('#reusable_parts_Musical_product_Type').prop('required', false);
            $('#Tuitions_Education_Type').prop('required', false);
            $('#Price').prop('required', false);
            $('#use_years').prop('required', false);
            $('#Have_Bill').prop('required', false);
            $('#Warrenty').prop('required', false);
            $('#school_eduction').prop('required', false);
            $('#Tuitions_Available_Timings').prop('required', false);
            $('#Tuitions_Years_Experience').prop('required', false);
            $('#Tuitions_person_Fees').prop('required', false);
            $('#Tuitions_Teachers_Qualifications').prop('required', false);
            $('#Tuitions_Positives_Outcomes').prop('required', false);
            $('#Tuitions_Joining_criteria').prop('required', false);
            $('#Tuitions_Teachers_Experience').prop('required', false);
            $('#Tuitions_Teachers_type').prop('required', false);
            $('#Tuitions_Requirements_Teachers').prop('required', false);
            $('#Job_Location').prop('required', false);
            $('#job_Office_Address').prop('required', false);
            $('#Job_type').prop('required', false);
            $('#job_Salery').prop('required', false);
            $('#job_Experience').prop('required', false);
            $('#job_amount').prop('required', false);
            $('#Job_Pitching_Experience').prop('required', false);
            $('#intership_Job_type').prop('required', false);
            $('#intership_qustions').prop('required', false);
            $('#intership_Skills_Qualifications').prop('required', false);
            $('#intership_Need_Stipend').prop('required', false);
            $('#intership_Post_Vacant').prop('required', false);
            $('#Tuitions_Available_Timings_post').prop('required', false);
            $('#Tuitions_Available_Timings_intership').prop('required', false);
            $('#Floor').prop('required', false);
            $('#Parking').prop('required', false);
            $('#Facing').prop('required', false);
            $('#Furniture').prop('required', false);
            $('#Area').prop('required', false);
            $('#Bathrooms').prop('required', false);
            $('#Bathroom').prop('required', false);
            $('#Room').prop('required', false);
            $('#Food').prop('required', false);
            $('#Preferred').prop('required', false);



            document.getElementById("school_eduction_div").style.display = "none";
            document.getElementById("job_Office_Address_div").style.display = "none";
          


        });

        $('select[name="subcategory"]').on('change', function() {

            $('#reusable_parts_Select_Type').prop('required', false);
            $('#Product_Brand').prop('required', false);
            $('#reusable_parts_Publisher').prop('required', false);
            $('#Tuitions_loction').prop('required', false);
            $('#Tuitions_gender').prop('required', false);
            $('#reusable_parts_product_Type').prop('required', false);
            $('#reusable_parts_Laptops_product_Type').prop('required', false);
            $('#reusable_parts_computer_product_Type').prop('required', false);
            $('#reusable_parts_Home_Appliances_product_Type').prop('required', false);
            $('#reusable_parts_Electronics_product_Type').prop('required', false);
            $('#reusable_parts_Kitchen_Appliances_product_Type').prop('required', false);
            $('#reusable_parts_Automobiles_product_Type').prop('required', false);
            $('#reusable_parts_Furniture_product_Type').prop('required', false);
            $('#reusable_parts_Sports_product_Type').prop('required', false);
            $('#reusable_parts_Musical_product_Type').prop('required', false);
            $('#Tuitions_Education_Type').prop('required', false);
            $('#Price').prop('required', false);
            $('#use_years').prop('required', false);
            $('#Have_Bill').prop('required', false);
            $('#Warrenty').prop('required', false);
            $('#school_eduction').prop('required', false);
            $('#Tuitions_Available_Timings').prop('required', false);
            $('#Tuitions_Years_Experience').prop('required', false);
            $('#Tuitions_person_Fees').prop('required', false);
            $('#Tuitions_Teachers_Qualifications').prop('required', false);
            $('#Tuitions_Positives_Outcomes').prop('required', false);
            $('#Tuitions_Joining_criteria').prop('required', false);
            $('#Tuitions_Teachers_Experience').prop('required', false);
            $('#Tuitions_Teachers_type').prop('required', false);
            $('#Tuitions_Requirements_Teachers').prop('required', false);
            $('#Job_Location').prop('required', false);
            $('#job_Office_Address').prop('required', false);
            $('#Job_type').prop('required', false);
            $('#job_Salery').prop('required', false);
            $('#job_Experience').prop('required', false);
            $('#job_amount').prop('required', false);
            $('#Job_Pitching_Experience').prop('required', false);
            $('#intership_Job_type').prop('required', false);
            $('#intership_qustions').prop('required', false);
            $('#intership_Skills_Qualifications').prop('required', false);
            $('#intership_Need_Stipend').prop('required', false);
            $('#intership_Post_Vacant').prop('required', false);
            $('#Tuitions_Available_Timings_post').prop('required', false);
            $('#Tuitions_Available_Timings_intership').prop('required', false);
            $('#Floor').prop('required', false);
            $('#Parking').prop('required', false);
            $('#Facing').prop('required', false);
            $('#Furniture').prop('required', false);
            $('#Area').prop('required', false);
            $('#Bathrooms').prop('required', false);
            $('#Room').prop('required', false);
            $('#Food').prop('required', false);

            document.getElementById("school_eduction_div").style.display = "none";

            $('#subcategory').on('change.Price,use_years,Have_Bill,Warrenty', function() {
                $("#Price_div,#use_years_div,#Have_Bill_div,#Warrenty_div").toggle($(this).val() == 1 || $(this).val() == 2 || $(this).val() == 3
                || $(this).val() == 4 || $(this).val() == 5 || $(this).val() == 6 || $(this).val() == 7 || $(this).val() == 8 
                || $(this).val() == 9  || $(this).val() == 10  || $(this).val() == 11);

                if ($(this).val() == 1 || $(this).val() == 2 || $(this).val() == 3
                || $(this).val() == 4 || $(this).val() == 5 || $(this).val() == 6 || $(this).val() == 7 || $(this).val() == 8 
                || $(this).val() == 9  || $(this).val() == 10  || $(this).val() == 11) {
                  
                    Price.required = true;
                    use_years.required = true;
                    Have_Bill.required = true;
                    Warrenty.required = true;
                }
            }).trigger('change.Price,use_years,Have_Bill,Warrenty');

            $('#subcategory').on('change.reusable_parts_Select_Type,Product_Brand', function() {
                $("#reusable_parts_Select_Type_div,#reusable_parts_Product_Brand_div").toggle($(
                        this).val() == 1 || $(this).val() == 2 || $(this).val() == 3 || $(
                        this).val() == 4 ||
                    $(this).val() == 5 || $(this).val() == 6 || $(this).val() == 7 || $(
                        this).val() == 8 || $(this).val() == 9 || $(this).val() == 10 || $(
                        this).val() == 16);
                if ($(this).val() == 1 || $(this).val() == 2 || $(this).val() == 3 || $(this)
                    .val() == 4 ||
                    $(this).val() == 5 || $(this).val() == 6 || $(this).val() == 7 || $(this)
                    .val() == 8 || $(this).val() == 9 || $(this).val() == 10 || $(this).val() ==
                    16) {
                    reusable_parts_Select_Type.required = true;
                    Product_Brand.required = true;
                }
            }).trigger('change.reusable_parts_Select_Type,Product_Brand');


            $('#subcategory').on('change.reusable_parts_Publisher,reusable_parts_Publisher_type',
                function() {
                    $("#reusable_parts_Publisher_div,#reusable_parts_Publisher_type_div").toggle($(
                        this).val() == 11);
                    if ($(this).val() == 11) {
                        reusable_parts_Publisher.required = true;
                        reusable_parts_Publisher_type.required = true;
                    }
                }).trigger('change.reusable_parts_Publisher,reusable_parts_Publisher_type');




            $('#subcategory').on('change.Tuitions_loction,Tuitions_Education_Type,Tuitions_gender',
                function() {
                    $("#Tuitions_loction_div,#Tuitions_Education_Type_div,#Tuitions_gender_div")
                        .toggle($(this).val() == 12 || $(this).val() == 13);
                    if ($(this).val() == 12 || $(this).val() == 13) {
                        Tuitions_loction.required = true;
                        Tuitions_Education_Type.required = true;
                        Tuitions_gender.required = true;
                    }
                }).trigger('change.Tuitions_loction,Tuitions_Education_Type,Tuitions_gender');


            $('#subcategory').on(
                'change.Tuitions_Available_Timings,Tuitions_Years_Experience,Tuitions_person_Fees,Tuitions_Teachers_Qualifications,Tuitions_Positives_Outcomes,Tuitions_Joining_criteria',
                function() {
                    $("#Tuitions_Available_Timings_div,#Tuitions_Years_Experience_div,#Tuitions_person_Fees_div,#Tuitions_Teachers_Qualifications_div,#Tuitions_Positives_Outcomes_div,#Tuitions_Joining_criteria_div")
                        .toggle($(this).val() == 12);
                    if ($(this).val() == 12) {
                        Tuitions_Available_Timings.required = true;
                        Tuitions_Years_Experience.required = true;
                        Tuitions_person_Fees.required = true;
                        Tuitions_Teachers_Qualifications.required = true;
                        Tuitions_Positives_Outcomes.required = true;
                        Tuitions_Joining_criteria.required = true;
                    }
                }).trigger(
                'change.Tuitions_Available_Timings,Tuitions_Years_Experience,Tuitions_person_Fees,Tuitions_Teachers_Qualifications,Tuitions_Positives_Outcomes,Tuitions_Joining_criteria'
            );


            $('#subcategory').on(
                'change.Tuitions_Available_Timings_post,Tuitions_Teachers_Experience,Tuitions_person_Fees,Tuitions_Teachers_type,Tuitions_Requirements_Teachers',
                function() {
                    $("#Tuitions_Available_Timings_post_div,#Tuitions_Teachers_Experience_div,#Tuitions_person_Fees_div,#Tuitions_Teachers_type_div,#Tuitions_Requirements_Teachers_div")
                        .toggle($(this).val() == 13);
                    if ($(this).val() == 13) {
                        Tuitions_Available_Timings_post.required = true;
                        Tuitions_Teachers_Experience.required = true;
                        Tuitions_person_Fees.required = true;
                        Tuitions_Teachers_type.required = true;
                        Tuitions_Requirements_Teachers.required = true;
                    }
                }).trigger(
                'change.Tuitions_Available_Timings_post,Tuitions_person_Fees,Tuitions_Teachers_type,Tuitions_Requirements_Teachers,Tuitions_Teachers_Experience'
            );


            $('#subcategory').on('change.Job_type', function() {
                $("#Job_type_div").toggle($(this).val() == 14 || $(this).val() == 15);
                if ($(this).val() == 14 || $(this).val() == 15) {
                    console.log($(this).val());
                    Job_type.required = true;
                }
            }).trigger('change.Job_type');

            $('#subcategory').on('change.Job_Location', function() {
                $("#Job_Location_div").toggle($(this).val() == 14 || $(this).val() == 15 || $(
                    this).val() == 17 || $(this).val() == 18);
                if ($(this).val() == 14 || $(this).val() == 15 || $(this).val() == 17 || $(this)
                    .val() == 18) {
                    Job_Location.required = true;
                }
            }).trigger('change.Job_Location');

            $('#subcategory').on(
                'change.intership_Job_type,intership_Need_Stipend,Tuitions_Available_Timings_intership',
                function() {
                    $("#intership_Job_type_div,#intership_Need_Stipend_div,#Tuitions_Available_Timings_intership_div")
                        .toggle($(this).val() == 17 || $(this).val() == 18);
                    if ($(this).val() == 17 || $(this).val() == 18) {
                        intership_Job_type.required = true;
                        intership_Need_Stipend.required = true;
                        Tuitions_Available_Timings_intership.required = true;

                    }
                }).trigger(
                'change.intership_Job_type,intership_Need_Stipend,Tuitions_Available_Timings_intership'
            );


            $('#subcategory').on('change.job_Salery,job_Experience', function() {
                $("#job_Salery_div,#job_Experience_div").toggle($(this).val() == 14);
                if ($(this).val() == 14) {
                    job_Salery.required = true;
                    job_Experience.required = true;
                }
            }).trigger('change.job_Salery,job_Experience');

            $('#subcategory').on('change.job_amount,Job_Pitching_Experience', function() {
                $("#job_amount_div,#Job_Pitching_Experience_div").toggle($(this).val() == 15);
                if ($(this).val() == 15) {
                    job_amount.required = true;
                    Job_Pitching_Experience.required = true;
                }
            }).trigger('change.job_amount,Job_Pitching_Experience');

            $('#subcategory').on('change.intership_qustions', function() {
                $("#intership_qustions_div").toggle($(this).val() == 17);
                if ($(this).val() == 17) {
                    intership_qustions.required = true;
                }
            }).trigger('change.intership_qustions');

            $('#subcategory').on('change.intership_Skills_Qualifications,intership_Post_Vacant',
                function() {
                    $("#intership_Skills_Qualifications_div,#intership_Post_Vacant_div").toggle($(
                        this).val() == 18);
                    if ($(this).val() == 18) {
                        intership_Skills_Qualifications.required = true;
                        intership_Post_Vacant.required = true;
                    }
                }).trigger('change.intership_Skills_Qualifications,intership_Post_Vacant');



            $('#subcategory').on('change.Floor,Parking',
                function() {
                    $("#Floor_div,#Parking_div").toggle($(
                            this).val() == 19 || $(this).val() == 20 || $(this).val() == 21 ||
                        $(this).val() == 22 || $(this).val() == 23 || $(this).val() == 24 || $(
                            this).val() == 26 || $(this).val() == 27 || $(this).val() == 28 ||
                        $(this).val() == 30 || $(this).val() == 31 || $(this).val() == 32);
                    if ($(this).val() == 19 || $(this).val() == 20 || $(this).val() == 21 || $(this)
                        .val() == 22 || $(this).val() == 23 || $(this).val() == 24 || $(this)
                    .val() == 26 || $(this).val() == 27 || $(this).val() == 28 || $(this).val() ==
                        30 || $(this).val() == 31 || $(this).val() == 32) {
                        Furniture.required = true;
                        Area.required = true;
                        Floor.required = true;
                        Parking.required = true;
                        Facing.required = true;
                        Rent_sale.required = true;
                    }
                }).trigger('change.Floor,Parking');

            $('#subcategory').on('change.Sale_Price',
                function() {
                    $("#Sale_Price_div").toggle($(
                            this).val() == 19 || $(this).val() == 20 || $(this).val() == 21 ||
                        $(this).val() == 22 || $(this).val() == 23 || $(this).val() == 24 || $(
                            this).val() == 25 || $(this).val() == 26 || $(this).val() == 27 ||
                        $(this).val() == 28 || $(this).val() == 29 || $(this).val() == 30 || $(
                            this).val() == 31 || $(this).val() == 32 || $(this).val() == 33 ||
                        $(this).val() == 34 || $(this).val() == 35);
                    if ($(this).val() == 19 || $(this).val() == 20 || $(this).val() == 21 || $(this)
                        .val() == 22 || $(this).val() == 23 || $(this).val() == 24 || $(this)
                    .val() == 25 || $(this).val() == 26 || $(this).val() == 27 || $(this).val() ==
                        28 || $(this).val() == 29 || $(this).val() == 30 || $(this).val() == 31 ||
                        $(this).val() == 32 || $(this).val() == 33 || $(this).val() == 34 || $(this)
                        .val() == 35) {
                        Sale_Price.required = true;
                    }
                }).trigger('change.Sale_Price');


            $('#subcategory').on('change.Furniture,Area,Rent_sale',
                function() {
                    $("#Furniture_div,#Area_div,#Rent_sale_div").toggle(
                        $(
                            this).val() == 19 || $(this).val() == 20 || $(this).val() == 21 ||
                        $(this).val() == 22 || $(this).val() == 23 || $(this).val() == 24 || $(
                            this).val() == 26 || $(this).val() == 27 || $(this).val() == 28 ||
                        $(this).val() == 29 || $(this).val() == 30 || $(this).val() == 31 || $(
                            this).val() == 32 || $(this).val() == 25);
                    if ($(this).val() == 25) {
                        Furniture.required = true;
                        Area.required = true;

                        Rent_sale.required = true;
                    }
                }).trigger('change.Furniture,Area,Rent_sale');




            $('#subcategory').on('change.Food,Room,Preferred,Bathroom',
                function() {
                    $("#Food_div,#Room_div,#Preferred_div,#Bathroom_div").toggle($(
                            this).val() == 26 || $(this).val() == 27 || $(this).val() == 28 ||
                        $(this).val() == 32);
                    if ($(this).val() == 26 || $(this).val() == 27 || $(this).val() == 28) {

                        Food.required = true;
                        Room.required = true;
                        Preferred.required = true;
                        Bathroom.required = true;
                    }
                }).trigger('change.Food,Room,Preferred,Bathroom');


            $('#subcategory').on('change.BHK_type',
                function() {
                    $("#BHK_type_div").toggle($(
                            this).val() == 30 || $(this).val() == 29 || $(this).val() == 31 ||
                        $(this).val() == 28 || $(this).val() == 32);
                    if ($(this).val() == 28) {

                        BHK_type.required = true;

                    }
                }).trigger('change.BHK_type');

            $('#subcategory').on('change.Bathrooms,Preferred_tenant',
                function() {
                    $("#Bathrooms_div,#Preferred_tenant_div").toggle($(
                        this).val() == 29 || $(this).val() == 30 || $(this).val() == 31);
                    if ($(this).val() == 29) {
                        Bathrooms.required = true;
                        Preferred_tenant.required = true;

                    }
                }).trigger('change.Bathrooms,Preferred_tenant');

            $('#subcategory').on('change.Facing,Area,Rent_sale',
                function() {
                    $("#Facing_div,#Area_div,#Rent_sale_div").toggle(
                        $(
                            this).val() == 33 || $(this).val() == 34 || $(this).val() == 35 ||
                        $(
                            this).val() == 19 || $(this).val() == 20 || $(this).val() == 21 ||
                        $(this).val() == 22 || $(this).val() == 23 || $(this).val() == 24 || $(
                            this).val() == 26 || $(this).val() == 27 || $(this).val() == 28 ||
                        $(this).val() == 29 || $(this).val() == 30 || $(this).val() == 31 || $(
                            this).val() == 32);
                    if ($(this).val() == 35) {
                        Facing.required = true;
                        Area.required = true;

                        Rent_sale.required = true;
                    }
                }).trigger('change.Facing,Area,Rent_sale');

        });


        $('select[name="reusable_parts_Select_Type"]').on('change', function() {
            $('#reusable_parts_Select_Type').prop('required', false);
            $('#reusable_parts_Select_Type').prop('required', false);
            $('#Product_Brand').prop('required', false);
            $('#reusable_parts_Publisher').prop('required', false);
            $('#Tuitions_loction').prop('required', false);
            $('#Tuitions_gender').prop('required', false);
            $('#reusable_parts_product_Type').prop('required', false);
            $('#reusable_parts_Laptops_product_Type').prop('required', false);
            $('#reusable_parts_computer_product_Type').prop('required', false);
            $('#reusable_parts_Home_Appliances_product_Type').prop('required', false);
            $('#reusable_parts_Electronics_product_Type').prop('required', false);
            $('#reusable_parts_Kitchen_Appliances_product_Type').prop('required', false);
            $('#reusable_parts_Automobiles_product_Type').prop('required', false);
            $('#reusable_parts_Furniture_product_Type').prop('required', false);
            $('#reusable_parts_Sports_product_Type').prop('required', false);
            $('#reusable_parts_Musical_product_Type').prop('required', false);
            $('#Tuitions_Education_Type').prop('required', false);
            $('#Price').prop('required', false);
            $('#use_years').prop('required', false);
            $('#Have_Bill').prop('required', false);
            $('#Warrenty').prop('required', false);
            $('#school_eduction').prop('required', false);
            $('#Tuitions_Available_Timings').prop('required', false);
            $('#Tuitions_Years_Experience').prop('required', false);
            $('#Tuitions_person_Fees').prop('required', false);
            $('#Tuitions_Teachers_Qualifications').prop('required', false);
            $('#Tuitions_Positives_Outcomes').prop('required', false);
            $('#Tuitions_Joining_criteria').prop('required', false);
            $('#Tuitions_Teachers_Experience').prop('required', false);
            $('#Tuitions_Teachers_type').prop('required', false);
            $('#Tuitions_Requirements_Teachers').prop('required', false);
            $('#Job_Location').prop('required', false);
            $('#job_Office_Address').prop('required', false);
            $('#Job_type').prop('required', false);
            $('#job_Salery').prop('required', false);
            $('#job_Experience').prop('required', false);
            $('#job_amount').prop('required', false);
            $('#Job_Pitching_Experience').prop('required', false);
            $('#intership_Job_type').prop('required', false);
            $('#intership_qustions').prop('required', false);
            $('#intership_Skills_Qualifications').prop('required', false);
            $('#intership_Need_Stipend').prop('required', false);
            $('#intership_Post_Vacant').prop('required', false);
            $('#Tuitions_Available_Timings_post').prop('required', false);
            $('#Tuitions_Available_Timings_intership').prop('required', false);


            $('#reusable_parts_Select_Type,#subcategory').on('change.reusable_parts_product_Type',
                function() {

                    $("#reusable_parts_product_Type_div").toggle($("#reusable_parts_Select_Type")
                        .val() == "parts" && ($("#subcategory").val() == 1 || $("#subcategory")
                            .val() == 2));
                    if ($("#reusable_parts_Select_Type").val() == "parts" && ($("#subcategory")
                            .val() == 1 || $("#subcategory").val() == 2)) {
                        reusable_parts_product_Type.required = true;
                    }
                }).trigger('change.reusable_parts_product_Type');

            $('#reusable_parts_Select_Type,#subcategory').on(
                'change.reusable_parts_Laptops_product_Type',
                function() {
                    $("#reusable_parts_Laptops_product_Type_div").toggle($(
                            "#reusable_parts_Select_Type").val() == "parts" && $("#subcategory")
                        .val() == 3);
                    if ($("#reusable_parts_Select_Type").val() == "parts" && $("#subcategory")
                        .val() == 3) {
                        reusable_parts_Laptops_product_Type.required = true;
                    }
                }).trigger('change.reusable_parts_Laptops_product_Type');

            $('#reusable_parts_Select_Type,#subcategory').on(
                'change.reusable_parts_computer_product_Type',
                function() {
                    $("#reusable_parts_computer_product_Type_div").toggle($(
                            "#reusable_parts_Select_Type").val() == "parts" && $("#subcategory")
                        .val() == 4);
                    if ($("#reusable_parts_Select_Type").val() == "parts" && $("#subcategory")
                        .val() == 4) {
                        reusable_parts_computer_product_Type.required = true;
                    }
                }).trigger('change.reusable_parts_computer_product_Type');


            $('#reusable_parts_Select_Type,#subcategory').on(
                'change.reusable_parts_Electronics_product_Type',
                function() {
                    $("#reusable_parts_Electronics_product_Type_div").toggle($(
                            "#reusable_parts_Select_Type").val() !== "" && $("#subcategory")
                        .val() == 5);
                    if ($("#reusable_parts_Select_Type").val() !== "" && $("#subcategory").val() ==
                        5) {
                        reusable_parts_Electronics_product_Type.required = true;
                    }
                }).trigger('change.reusable_parts_Electronics_product_Type');


            $('#reusable_parts_Select_Type,#subcategory').on(
                'change.reusable_parts_Home_Appliances_product_Type',
                function() {
                    $("#reusable_parts_Home_Appliances_product_Type_div").toggle($(
                            "#reusable_parts_Select_Type").val() !== "" && $("#subcategory")
                        .val() == 16);
                    if ($("#reusable_parts_Select_Type").val() !== "" && $("#subcategory").val() ==
                        16) {
                        reusable_parts_Home_Appliances_product_Type.required = true;
                    }
                }).trigger('change.reusable_parts_Home_Appliances_product_Type');


            $('#reusable_parts_Select_Type,#subcategory').on(
                'change.reusable_parts_Kitchen_Appliances_product_Type',
                function() {
                    $("#reusable_parts_Kitchen_Appliances_product_Type_div").toggle($(
                            "#reusable_parts_Select_Type").val() !== "" && $("#subcategory")
                        .val() == 6);
                    if ($("#reusable_parts_Select_Type").val() !== "" && $("#subcategory").val() ==
                        6) {
                        reusable_parts_Kitchen_Appliances_product_Type.required = true;
                    }
                }).trigger('change.reusable_parts_Kitchen_Appliances_product_Type');


            $('#reusable_parts_Select_Type,#subcategory').on(
                'change.reusable_parts_Automobiles_product_Type',
                function() {
                    $("#reusable_parts_Automobiles_product_Type_div").toggle($(
                            "#reusable_parts_Select_Type").val() !== "" && $("#subcategory")
                        .val() == 7);
                    if ($("#reusable_parts_Select_Type").val() !== "" && $("#subcategory").val() ==
                        7) {
                        reusable_parts_Automobiles_product_Type.required = true;
                    }
                }).trigger('change.reusable_parts_Automobiles_product_Type');

            $('#reusable_parts_Select_Type,#subcategory').on(
                'change.reusable_parts_Furniture_product_Type',
                function() {
                    $("#reusable_parts_Furniture_product_Type_div").toggle($(
                            "#reusable_parts_Select_Type").val() !== "" && $("#subcategory")
                        .val() == 8);
                    if ($("#reusable_parts_Select_Type").val() !== "" && $("#subcategory").val() ==
                        8) {
                        reusable_parts_Furniture_product_Type.required = true;
                    }
                }).trigger('change.reusable_parts_Furniture_product_Type');

            $('#reusable_parts_Select_Type,#subcategory').on(
                'change.reusable_parts_Sports_product_Type',
                function() {
                    $("#reusable_parts_Sports_product_Type_div").toggle($(
                            "#reusable_parts_Select_Type").val() !== "" && $("#subcategory")
                        .val() == 9);
                    if ($("#reusable_parts_Select_Type").val() !== "" && $("#subcategory").val() ==
                        9) {
                        reusable_parts_Sports_product_Type.required = true;
                    }
                }).trigger('change.reusable_parts_Sports_product_Type');

            $('#reusable_parts_Select_Type,#subcategory').on(
                'change.reusable_parts_Musical_product_Type',
                function() {
                    $("#reusable_parts_Musical_product_Type_div").toggle($(
                            "#reusable_parts_Select_Type").val() !== "" && $("#subcategory")
                        .val() == 10);
                    if ($("#reusable_parts_Select_Type").val() !== "" && $("#subcategory").val() ==
                        10) {
                        reusable_parts_Musical_product_Type.required = true;
                    }
                }).trigger('change.reusable_parts_Musical_product_Type');

        });


    });
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
</body>

</html>

<script>
$(document).ready(function() {
    $("#latitudeArea").addClass("d-none");
    $("#longtitudeArea").addClass("d-none");
});

window.addEventListener('load', initialize);

function initialize() {
    var input = document.getElementById('Address');
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