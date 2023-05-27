<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>

    <!-- link for map -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    <title>Verify product details</title>
    <style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

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

    .handline {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 16px;

        color: #0C0B0B;


        /* Inside auto layout */

        flex: none;
        order: 0;
        flex-grow: 0;
    }

    .details_img_cover {

        max-height: 367px;
        min-height: 367px;
        left: 114px;
        top: 588px;
        background: url(suzuki-gixxer-sf-150cc-bike-500x500.png);
      
        border-radius: 21px;
        min-width: 100%;
    }
    

    .cover_img_div {
        text-align: center;
    }

    .details_img_box {
        min-width: 70.69px;
    max-width: 70.69px;
    max-height: 70.31px;
    min-height: 70.31px;
        left: 114px;
        top: 1213.13px;
        filter: drop-shadow(0px 0px 1.07571px #10B981);
        border-radius: 11.8328px;
    }




    .details_box_content {
        background: #FFFFFF;
        border: 1px solid #69D3B0;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 14px;
        padding-right: 0px;
    }





    .details_profile_img {

        width: 120px;
        height: 120px;
        left: 854px;
        top: 1057px;
        border: 1px solid #000000;
        box-shadow: 0px 0px 4px #10B981;
        border-radius: 50%;
        margin-top: 24px;
        margin-left: 20px;
    }

    .deatails_profile_name {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 18px;
        line-height: 24px;
        color: #000000;
    }

    .deatails_profile_name_time {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 15px;
        line-height: 15px;
        /* identical to box height */
        color: #000000;
    }

    .deatails_profile_name_ads {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 24px;

        color: #000000;
    }

    .details_Description {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 19px;
        color: #151515;
    }

    @media (min-width: 992px) {
        .details_title {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: bold;
            font-size: 20px;
            line-height: 17px;
            /* identical to box height */
            color: #000000;
            /* Inside auto layout */
            flex: none;
            order: 0;
            flex-grow: 0;
        }

        .details_handing {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
            line-height: 27px;
            color: #151515;
        }

        .details_price {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 25px;
            display: flex;
            align-items: flex-end;
            text-align: right;

            color: #10B981;
        }

        .details_text {
            font-family: 'Poppins';
            font-style: normal;
            font-size: 15px;
            line-height: 17px;
            color: #151515;
        }


        .details_profile {
            width: 434px;
            height: 140px;
            left: 426px;
            margin-top: 30px;
            float: right;
            background: linear-gradient(91.25deg, #A3E9D2 5.31%, rgba(145, 188, 174, 0.32) 63.47%, rgba(105, 211, 176, 0) 115.15%);
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
            border-radius: 80px 0px 0px 80px;
        }

        .details_profile_img {

            width: 100px;
            height: 100px;
            border: 1px solid #000000;
            box-shadow: 0px 0px 4px #10B981;
            border-radius: 50%;
            margin-top: 20px;
            margin-left: 15px;
        }

        .deatails_profile_name {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-size: 14px;
            line-height: 24px;
            color: #000000;
            margin-top: 1.5rem !important;
        }

        .deatails_profile_name_time {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-size: 10px;
            line-height: 15px;
            /* identical to box height */
            color: #000000;
        }

        .col-xl-4 {
    flex: 0 0 auto;
    width: 29.33333333%;
}

        .deatails_profile_name_ads {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 24px;

            color: #000000;
        }

        .details_Description {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 13px;
            line-height: 19px;
            color: #151515;
            padding-bottom: 10px;
        }

        .details_handing_Description {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 27px;
            color: #151515;
            margin-top: 30px;
        }

        .detalis_option {
            max-width: 590.7px;
            left: 112px;
            top: 1373.5px;
            background: #FFFFFF;
            box-shadow: 0px 0px 4px #69D3B0;
        }

        .detalis_option_text {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 0px;
          
            color: #898686;
        }


        .margin_top_css {
            margin-top: 3rem !important;
        }
    }

    @media (max-width: 499px) {

        .details_img_cover {
    max-height: 257px;
    min-height: 257px;
    left: 114px;
    top: 588px;
    background: url(suzuki-gixxer-sf-150cc-bike-500x500.png);
    filter: drop-shadow(0px 0px 4.79774px #10B981);
    border-radius: 21px;
    min-width: 100%;
}

        .details_img_box {
        min-width: 40.69px;
    max-width: 40.69px;
    max-height: 40.31px;
    min-height: 40.31px;
        left: 114px;
        top: 1213.13px;
        filter: drop-shadow(0px 0px 1.07571px #10B981);
        border-radius: 11.8328px;
    }

        .btn_Verified_shop_name {
            width: 250px;
            height: 54px;
            left: 988px;
            top: 941px;
            background: #D1FAE5;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 32px;
        }

        .btn_Verified_text {
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 500;
            font-size: 13px;
            text-transform: capitalize;
            color: #047857;
        }

        .btn_Verified_img {
            width: 30px;
            height: 30px;
            left: 33px;
            top: 10px;
        }

        .margin_left_css {
            margin-left: 1rem !important;
        }
        .details_profile {
    width: 236px;
    height: 90px;
    left: 826px;
    margin-top: 30px;
    float: right;
    background: linear-gradient(91.25deg, #A3E9D2 5.31%, rgba(145, 188, 174, 0.32) 63.47%, rgba(105, 211, 176, 0) 115.15%);
    filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
    border-radius: 80px 0px 0px 80px;
}
    }

    @media (min-width: 359px) and (max-width: 459px){

        

        .detalis_option_text {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    font-size: 6px;
    line-height: 0px;
    padding-left: 1px;
    color: #898686;
}

.details_img_cover {
max-height: 200px;
min-height: 200px;
left: 114px;
top: 588px;
background: url(suzuki-gixxer-sf-150cc-bike-500x500.png);
filter: drop-shadow(0px 0px 4.79774px #10B981);
border-radius: 21px;
min-width: 100%;
}

.details_img_box {
min-width: 30.69px;
max-width: 30.69px;
max-height: 30.31px;
min-height: 30.31px;
left: 100px;
top: 1213.13px;
filter: drop-shadow(0px 0px 1.07571px #10B981);
border-radius: 11.8328px;
}

.btn_Verified_shop_name {
    width: 250px;
    height: 54px;
    left: 988px;
    top: 941px;
    background: #D1FAE5;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 32px;
}

.btn_Verified_text {
    font-family: 'Lexend';
    font-style: normal;
    font-weight: 500;
    font-size: 13px;
    text-transform: capitalize;
    color: #047857;
}

.btn_Verified_img {
    width: 30px;
    height: 30px;
    left: 33px;
    top: 10px;
}

.margin_left_css {
    margin-left: 1rem !important;
}
.details_profile {
width: 236px;
height: 90px;
left: 826px;
margin-top: 30px;
float: right;
background: linear-gradient(91.25deg, #A3E9D2 5.31%, rgba(145, 188, 174, 0.32) 63.47%, rgba(105, 211, 176, 0) 115.15%);
filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
border-radius: 80px 0px 0px 80px;
}
}

    @media (min-width: 500px) and (max-width: 768px) {
        .btn_Verified_shop_name {
            width: 400px;
            height: 54px;
            left: 988px;
            top: 941px;
            background: #D1FAE5;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 32px;
        }

        .btn_Verified_text {
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 500;
            font-size: 15px;
            text-transform: capitalize;
            color: #047857;
        }

        .btn_Verified_img {
            width: 30px;
            height: 30px;
            left: 33px;
            top: 10px;
        }

        .margin_left_css {
            margin-left: 1rem !important;
        }

    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .btn_Verified_shop_name {
            width: 269px;
            height: 54px;
            left: 988px;
            top: 941px;
            background: #D1FAE5;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 32px;
        }

        .btn_Verified_text {
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 500;
            font-size: 13px;
            text-transform: capitalize;
            color: #047857;
        }

        .btn_Verified_img {
            width: 30px;
            height: 30px;
            left: 33px;
            top: 10px;
        }

        .margin_left_css {
            margin-left: 2rem !important;
        }

    }

    @media (min-width: 991.98px) and (max-width: 1199.98px) {
        .btn_Verified_shop_name {
            width: 335px;
            height: 54px;
            left: 988px;
            top: 941px;
            background: #D1FAE5;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 32px;
        }

        .btn_Verified_text {
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 500;
            font-size: 15px;
            text-transform: capitalize;
            color: #047857;
        }

        .btn_Verified_img {
            width: 30px;
            height: 30px;
            left: 33px;
            top: 10px;
        }

        .margin_left_css {
            margin-left: 3rem !important;
        }

    }

    @media (min-width: 1199.98px) {
        .btn_Verified_shop_name {
            width: 400px;
            height: 54px;
            left: 988px;
            top: 941px;
            background: #D1FAE5;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 32px;
        }

        .btn_Verified_text {
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 500;
            font-size: 15px;
            text-transform: capitalize;
            color: #047857;
        }

        .btn_Verified_img {
            width: 30px;
            height: 30px;
            left: 33px;
            top: 10px;
        }

        .margin_left_css {
            margin-left: 3rem !important;
        }


    }


    @media(max-width: 991px) {
        .details_title {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: bold;
            font-size: 10px;
            line-height: 17px;
            /* identical to box height */
            color: #000000;
            /* Inside auto layout */
            flex: none;
            order: 0;
            flex-grow: 0;
        }

        .details_handing {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            line-height: 27px;
            color: #151515;
        }

        .details_price {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 25px;
            display: flex;
            align-items: flex-end;
            text-align: right;

            color: #10B981;
        }

        .details_text {
            font-family: 'Poppins';
            font-style: normal;
            font-size: 10px;
            line-height: 17px;
            color: #151515;
        }



        .details_profile {
            width: 336px;
            height: 97px;
            left: 826px;
            margin-top: 30px;
            float: right;
            background: linear-gradient(91.25deg, #A3E9D2 5.31%, rgba(145, 188, 174, 0.32) 63.47%, rgba(105, 211, 176, 0) 115.15%);
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
            border-radius: 80px 0px 0px 80px;
        }


        .details_profile_img {

            width: 80px;
            height: 80px;
            border: 1px solid #000000;
            box-shadow: 0px 0px 4px #10B981;
            border-radius: 50%;
            margin-top: 10px;
            margin-left: 15px;
        }

        .deatails_profile_name {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-size: 11px;
            line-height: 24px;
            color: #000000;
            margin-top: 0rem !important;

        }

        .deatails_profile_name_time {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-size: 8px;
            line-height: 15px;
            /* identical to box height */
            color: #000000;
        }

        .deatails_profile_name_ads {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-size: 10px;
            line-height: 24px;

            color: #000000;
        }

        .details_Description {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 11px;
            line-height: 19px;
            color: #151515;
        }

        .details_handing_Description {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            line-height: 27px;
            color: #151515;
            margin-top: 30px;
        }

        .detalis_option {

            left: 112px;
            top: 1373.5px;
            background: #FFFFFF;
            box-shadow: 0px 0px 4px #69D3B0;
        }

        .detalis_option_text {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-size: 10px;
            line-height: 0px;
            padding-left: 10px;
            color: #898686;
        }

        .margin_top_css {
            margin-top: 1rem !important;
        }

    }


    .chat_button {
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 12px 16px;
        gap: 6px;
        margin-top: 10px;
        width: 70px;
        height: 44px;
        left: 1218px;
        bottom: 1737px;
        background: #FFFFFF;
        border: 2px solid #46760A;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 50px;
    }

    .View_Seller_profile {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 12px;
        line-height: 14px;

        color: #000000;
        margin-top: 10px;
    }

    .Related_Ads {
        font-family: 'Lexend';
        font-style: normal;
        font-weight: 600;
        font-size: 32px;
        line-height: 40px;
        text-transform: capitalize;
        color: #1B1C57;
    }

    .related_ads_card {
        min-height: 200px;
        max-height: 200px;
        left: 105px;
        top: 2174px;
        border-radius: 37px 37px 0px 0px;
        background-color: #FFFFFF;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 0px 0px 37px 37px;
    }

    .related_ads_card_img {
        min-height: 200.1px;
        max-height: 200.1px;
        left: 105px;
        top: 1889px;
        border-radius: 27px 27px 0px 0px;
    }

    .related_ads_card_title {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 900;
        font-size: 15px;
        line-height: 10px;
        /* identical to box height */
        color: #000000;
        /* Inside auto layout */
        flex: none;
        order: 0;
        flex-grow: 0;
    }

    .related_ads_details_button {
        box-sizing: border-box;

        /* Auto layout */

        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 7.42857px 6.5714px;
        gap: 4.71px;

        width: 80.43px;
        height: 26.86px;

        background: #10B981;
        /* C2/B */

        border: 1.57143px solid #46760A;
        border-radius: 25.42857px;

        /* Inside auto layout */

        flex: none;
        order: 0;
        align-self: center;
        flex-grow: 0;
    }

    .related_ads_details_button_text {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 9.7857px;
        line-height: 18px;
        color: #FFFFFF;
        flex: none;
        order: 0;
        flex-grow: 0;
    }

    .btn_Verified {
        width: 192px;
        height: 54px;
        left: 988px;
        top: 941px;
        background: #D1FAE5;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 32px;
    }

    .btn_Verified:hover {
        width: 192px;
        height: 54px;
        background: #D1FAE5;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 32px;

    }
  

    </style>
</head>

<body>
    <?php
  $product_detail = $categories_data;
 
  $wishlist = 0;
  if (!empty($user) && isset($user)) {
    $wishlit = get_wishlist($product_detail->id, $product_detail->category_id, $user["user_id"]);

    if (empty($wishlit)) {

      $wishlist = 0;


    } else {

      $wishlist = 1;

    }
  } else {
    $wishlist = 0;
  }
  $i = $product_detail->Count;
$data = ++$i; // Increment $i and assign the value to $data
$product_count_update = update_count_comman_query($product_detail->category_id, $data, $product_detail->id);
  ?>


    <div class=" text-center " style="margin-top:7%">
        <img class="d-block mx-auto mb-2" src="<?php echo base_url();?>assets/images/product_banner.png" alt=""
            width=100%>
    </div>
    <div class="container mt-4" >
        <main>
            <div class=" container mb-4">
                <div class="row breadcrumb_row">
                    <div class="breadcrumb_col col">
                        <div class="breadcrumbs">
                            <span class="me-2 handline"><a class="text-dark link-underline-opacity-0"
                                    href="<?php echo base_url();?>">Homepage</a></span>/<span
                                class="ms-2 handline">Bike</span>
                        </div>
                    </div>
                </div>
            </div>
       
<div class="container">
            <div class="row " style="margin-left: 30px;
        margin-right: 30px;">
                <div class="col-md-6">
             

     
         <ul id="lightSlider">
         <?php if ($product_detail->cover_img !== NULL) { ?>
         <li data-thumb="<?php echo base_url() . $product_detail->cover_img . ""; ?>"> <img class="details_img_cover" src="<?php echo base_url() . $product_detail->cover_img . ""; ?>" /> </li>
         <?php } else { ?>

<?php } ?>
<?php if ($product_detail->images_2 !== NULL) { ?>
 <li data-thumb="<?php echo base_url() . $product_detail->images_2 . ""; ?>"> <img class="details_img_cover" src="<?php echo base_url() . $product_detail->images_2 . ""; ?>" /> </li>
 <?php } else { ?>

<?php } ?> 
<?php if ($product_detail->images_3 !== NULL) { ?>
    <li data-thumb="<?php echo base_url() . $product_detail->images_3 . ""; ?>"> <img class="details_img_cover" src="<?php echo base_url() . $product_detail->images_3 . ""; ?>" /> </li> 
    <?php } else { ?>

<?php } ?>  <?php if ($product_detail->images_4 !== NULL) { ?>
 <li data-thumb="<?php echo base_url() . $product_detail->images_4 . ""; ?>"> <img class="details_img_cover" src="<?php echo base_url() . $product_detail->images_4 . ""; ?>" /> </li> 
 <?php } else { ?>

<?php } ?> 
<?php if ($product_detail->images_5 !== NULL) { ?>
  <li data-thumb="<?php echo base_url() . $product_detail->images_5 . ""; ?>"> <img class="details_img_cover" src="<?php echo base_url() . $product_detail->images_5 . ""; ?>" /> </li> 
  <?php } else { ?>

<?php } ?>
</ul>


                     
                   
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
<script> $('#lightSlider').lightSlider({ gallery: true, item: 1, loop: true, slideMargin: 0, thumbItem: 9 });
</script>
                    <div class="row mt-3">
                        <div class="detalis_option">
                            <div class="row">
                                <div class="col-3 px-0">
                                    <div class="row">
                                        <div class="col-4">
                                            <i class="fa fa-calendar fa-icon" aria-hidden="true"
                                                style="font-size:15px; color:#69d3b0"></i>
                                        </div>
                                        <div class="col-8 mt-3">
                                            <span class="detalis_option_text"> <?php function time_elapsed_string($datetime, $full = false)
                  {
                    $now = new DateTime;
                    $ago = new DateTime($datetime);
                    $diff = $now->diff($ago);

                    $diff->w = floor($diff->d / 7);
                    $diff->d -= $diff->w * 7;

                    $string = array(
                      'y' => 'year',
                      'm' => 'month',
                      'w' => 'week',
                      'd' => 'day',
                      'h' => 'hour',
                      'i' => 'minute',
                      's' => 'second',
                    );
                    foreach ($string as $k => &$v) {
                      if ($diff->$k) {
                        $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                      } else {
                        unset($string[$k]);
                      }
                    }

                    if (!$full)
                      $string = array_slice($string, 0, 1);
                    return $string ? implode(', ', $string) . ' ago' : 'just now';
                  }
                  echo time_elapsed_string($product_detail->created_at); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 px-0">
                                    <div class="row">
                                        <div class="col-4">
                                            <i class="fa fa-eye" aria-hidden="true"
                                                style="font-size:15px; color:#69d3b0"></i>
                                        </div>
                                        <div class="col-8 mt-3">
                                            <span class="detalis_option_text"><?php echo $product_detail->Count ?> views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 px-0">

                                    <div class="row">
                                        <div class="col-4">
                                            <i class="fa fa-heart" aria-hidden="true"
                                                style="font-size:15px; color:#69d3b0"></i>

                                        </div>
                                        <div class="col-8 mt-3">
                                            <span class="detalis_option_text">&nbsp Like</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 px-0">
                                    <div class="row">
                                        <div class="col-4">
                                            <a class="btn-change" style="color:black;" id="GFG"
                                                <?php if (empty($user) || !isset($user)) { ?>
                                                href="<?php echo base_url();?>welcome/login" <?php } else{?>   id="share_desk"
                                                onclick="window.open('mailto:?subject=<?php echo base_url() . 'welcome/productdetail/' . $product_detail->category_id . '/' . $product_detail->id; ?>');"
                                             <?php } ?>
                                               >
                                                <i class="fa fareport_productdata-target fa-share-alt"
                                                    aria-hidden="true" style="font-size:15px; color:#69d3b0"> </i> </a>

                                        </div>
                                        <div class="col-8 mt-3">
                                            <span class="detalis_option_text">&nbsp Share</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 px-0">
                                    <div class="row">
                                        <div class="col-4">
                                            <a class="btn-change" style="color:black; " id="GFG"
                                                <?php if (empty($user) || !isset($user)) { ?>
                                                href="<?php echo base_url();?>welcome/login" <?php } else { ?>
                                                data-toggle="modal" data-target="#report_product" <?php } ?>><i
                                                    class="fa fa-exclamation-triangle" aria-hidden="true"
                                                    style="font-size:15px; color:#69d3b0"></i></a>
                                        </div>
                                        <div class="col-8 mt-3">
                                            <span class="detalis_option_text">&nbsp Report</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-3 text-center">
                        <img class="d-block mx-auto mb-2" src="<?php echo base_url();?>assets/images/product_banner.png"
                            alt="" width=100%>
                    </div>


                </div>

                <div class="col-md-6 mb-4 details_box_content">
                    <div class="row margin_top_css ms-4">
                        <div class="col-5">
                            <p class="details_title"> <?php echo ucfirst($product_detail->title); ?></p>
                        </div>
                        <div class="col-2">
                            <i lass="bi bi-suit-heart" aria-hidden="true"
                                style="font-size:18px; color:#69d3b0; padding: 0px;"
                                <?php if (empty($user) || !isset($user)) { ?>
                                href="<?php echo base_url(); ?>welcome/login" <?php } else { ?>
                                data-uid="<?php echo $user["user_id"]; ?>" <?php } ?>
                                class="<?php echo ($wishlist == 0) ? 'fa fa-heart-o' : 'fa fa-heart'; ?> dddssaaf dddssaaf<?php echo $product_detail->id; ?>"
                                data-pid="<?php echo $product_detail->id; ?>"
                                data-cid="<?php echo $product_detail->category_id; ?>"
                                data-wishlist="<?php echo $wishlist; ?>"></i>
                        </div>
                        <div class="col-5">
                            <?php if(isset($product_detail->price)){
                                if( $product_detail->pay_type == 0 || $product_detail->pay_type == 1){ ?>
                            <p class="details_price">$<span><?php echo $product_detail->price; ?></span></p>
                            <?php  } }?>

                        </div>
                    </div>
                    <div class="row  mt-3 ms-4">
                        <p class="details_handing">General Details</p>
                    </div>
                    <div class="row  mt-2" style="margin-left: 2.5rem!important;">
                        <hr class="hr " style="width: 200px; border: 1px solid #69D3B0; " />
                    </div>
                    <?php if($product_detail->category_id==1){?>
                    <div class="row  ms-4">
                        <div class="col-3">
                            <p class="details_text">Brand</p>
                        </div>
                        <div class="col-3">
                            <p class="details_text"><?php echo $product_detail->brand; ?></p>
                        </div>
                    </div>
                    <?php } else if($product_detail->category_id==2){ ?>
                    <div class="row   ms-4">
                        <div class="col-3">
                            <p class="details_text">Tuition Location</p>
                        </div>
                        <div class="col-3">
                            <p class="details_text"><?php echo $product_detail->Tuitions_loction; ?></p>
                        </div>
                    </div>
                    <?php } else if($product_detail->category_id==3 && $product_detail->category_id==4){ ?>
                    <div class="row   ms-4">
                        <div class="col-3">
                            <p class="details_text">Job Location </p>
                        </div>
                        <div class="col-3">
                            <p class="details_text"><?php echo $product_detail->Job_Location; ?></p>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="row  ms-4">
                        <div class="col-3">
                            <p class="details_text">City</p>
                        </div>
                        <div class="col-3">
                            <p class="details_text"><?php echo $product_detail->town; ?></p>
                        </div>
                    </div>

                    <div class="row   ms-4">
                        <div class="col-3">
                            <p class="details_text">Type</p>
                        </div>
                        <div class="col-3">
                            <p class="details_text"><?php if($product_detail->category_id==1){ echo $product_detail->type;} else if($product_detail->category_id==2 ){  $type_name = get_product_type_name($product_detail->Education_Type); echo $type_name;} else if($product_detail->category_id==4 && $product_detail->category_id==3){ $type_name = get_product_type_name($product_detail->Job_type); echo $type_name;}  ?></p>
                        </div>
                    </div>


                    <div class="row  mt-3 ms-4">
                        <div class="col-12">
                            <i class="bi bi-geo-alt-fill" aria-hidden="true" style="font-size:18px; color:#69d3b0"></i>
                            <span class="ms-2 details_text"> <?php echo $product_detail->address; ?></span>
                        </div>
                    </div>

                    <div class="row  mt-2 margin_left_css">

                        <?php   $shoplist = 0;
                if (!empty($user) && isset($user)) {
                    $shop =check_shoplist($user['user_id']);
                    if(empty($shop)){  $shop_list =check_shoplist_by_productid($product_detail->id);
                    if(empty($shop_list)){ echo"";}else{
                    $shop_name= get_shop_name($shop_list->shop_id);?>
                        <div class="" style="">
                            <div class="col-12" style="text-align:center;">
                                <p class="  btn_Verified_shop_name pt-2"><span class="pe-2"><img
                                            class="btn_Verified_img"
                                            src="<?php echo base_url() ?>assets/images/check 1.png"
                                            alt="check 1.png"></span><span class="btn_Verified_text">verifed by Shop:
                                        <?php echo $shop_name;?></span></p>
                            </div>


                        </div>
                        <?php } }else{
                    $wishlit = get_shoplist($product_detail->id, $product_detail->category_id, $shop->id, $product_detail->user_id ,$user["user_id"]);
                    if (empty($wishlit)) {

                    ?> <div class="" style="">

                            <div class="">
                                <form class="" action="<?php echo base_url();?>welcome/setshoplist" method="POST">
                                    <input type="hidden" name="product_id" id="product_id"
                                        value="<?php echo $product_detail->id; ?>">
                                    <input type="hidden" name="category_id" id="category_id"
                                        value="<?php echo $product_detail->category_id; ?>">
                                    <input type="hidden" name="user_id" id="sender_id" value="<?php  $session_id = $this->session->userdata('id');
                                                            if($session_id){echo $_SESSION['id'];} ?>">
                                    <input type="hidden" name="seller_id" id="receiver_id"
                                        value="<?php echo $product_detail->user_id; ?>">
                                    <input type="hidden" name="shop_id" id="receiver_id"
                                        value="<?php echo $shop->id; ?>">
                                    <input type="hidden" name="subcategory_id" id="receiver_id"
                                        value="<?php echo $product_detail->subcategory_id; ?>">


                                    <div class="col-12" style="text-align:center;">
                                        <button class=" btn btn_Verified"><span class="pe-2"><img
                                                    class="btn_Verified_img"
                                                    src="<?php echo base_url() ?>assets/images/check 1.png"
                                                    alt="check 1.png"></span><span class="btn_Verified_text"
                                                type="submit" name="submit">Verified</span></button>
                                    </div>
                                </form>
                            </div>

                        </div>


                        <?php  } else {
                    $shop_list =check_shoplist_by_productid($product_detail->id);
                    if(empty($shop_list)) {echo"";}else{
                    $shop_name= get_shop_name($shop_list->shop_id);
                    ?>

                        <div class="" style="">

                            <div class="col-12" style="text-align:center;">
                                <p class="  btn_Verified_shop_name pt-3"><span class="pe-2"><img
                                            class="btn_Verified_img"
                                            src="<?php echo base_url() ?>assets/images/check 1.png"
                                            alt="check 1.png"></span><span class="btn_Verified_text">verifed by Shop:
                                        <?php echo $shop_name;?></span></p>
                            </div>

                        </div>
                        <?php } } }
                } 
                else { $shop_list =check_shoplist_by_productid($product_detail->id);
                    if(empty($shop_list)) {echo"";}else{
                $shop_name= get_shop_name($shop_list->shop_id);
                ?>
                        <div class="" style="">

                            <div class="col-12" style="text-align:center;">
                                <p class="  btn_Verified_shop_name pt-3"><span class="pe-2"><img
                                            class="btn_Verified_img"
                                            src="<?php echo base_url() ?>assets/images/check 1.png"
                                            alt="check 1.png"></span><span class="btn_Verified_text">verifed by Shop:
                                        <?php echo $shop_name;?></span></p>
                            </div>

                        </div>
                        <?php }} ?>

                    </div>


                    <?php $userdetail = get_users_details($product_detail->user_id); ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="details_profile ">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="details_profile_img img-fluid img-thumbnail"
                                            src="<?php echo base_url() . "uploads/profile/" . $userdetail->profile_img . ""; ?>"
                                            alt="img_cover">
                                    </div>
                                    <div class="col-4">
                                        <div class="">
                                            <p class="deatails_profile_name"> <?php echo ucfirst($userdetail->name); ?>
                                            </p>
                                            <p class="deatails_profile_name_time mt-1">Profile Created <span>
                                                    <?php function time_string($datetime, $full = false)
                      {
                        $now = new DateTime;
                        $ago = new DateTime($datetime);
                        $diff = $now->diff($ago);

                        $diff->w = floor($diff->d / 7);
                        $diff->d -= $diff->w * 7;

                        $string = array(
                          'y' => 'year',
                          'm' => 'month',
                          'w' => 'week',
                          'd' => 'day',
                          'h' => 'hour',
                          'i' => 'minute',
                          's' => 'second',
                        );
                        foreach ($string as $k => &$v) {
                          if ($diff->$k) {
                            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                          } else {
                            unset($string[$k]);
                          }
                        }

                        if (!$full)
                          $string = array_slice($string, 0, 1);
                        return $string ? implode(', ', $string) . ' ago' : 'just now';
                      }
                      echo time_string($userdetail->created); ?>
                                                </span></p>
                                            <p class="deatails_profile_name_ads mt-1">Total 20 Ads</p>
                                            <p class="deatails_profile_name_ads mt-1">Active 10 Ads</p>

                                        </div>

                                    </div>
                                    <div class="col-4">
                                        <div>
                                        <?php if($product_detail->pay_type == 0 || $product_detail->pay_type == 1){ ?>
                                            <form class="" id="chat_frm"
                                                action="<?php echo base_url();?>welcome/chat/<?php echo $product_detail->category_id; ?>"
                                                method="POST">
                                                <input type="hidden" name="product_id" id="product_id"
                                                    value="<?php echo $product_detail->id; ?>">
                                                <input type="hidden" name="category_id" id="category_id"
                                                    value="<?php echo $product_detail->category_id; ?>">
                                                <input type="hidden" name="sender_id" id="sender_id" value="<?php  $session_id = $this->session->userdata('id');
                                                 if($session_id){echo $_SESSION['id'];} ?>">
                                                <input type="hidden" name="receiver_id" id="receiver_id"
                                                    value="<?php echo $product_detail->user_id; ?>">

                                                <input class="chat_button" style="font-size:15px;border-color:#46760a"
                                                    value="Chat" <?php if(empty($user) || !isset($user)){ ?>
                                                    data-toggle="modal" data-target="#login"
                                                    <?php }else{ ?>type="submit" <?php }  ?> readonly>
                                            </form>
                                          
                                            <a
                                                href="<?php echo base_url(); ?>welcome/viewsellerprofile/<?php echo $product_detail->user_id; ?>"><b
                                                    class="View_Seller_profile" id="">View Seller profile</b></a>
                                                    <?php  } ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8  margin_top_css ms-4">
                        <p class="details_handing_Description">Description</p>
                        <p class="details_Description"> <?php echo $product_detail->Description; ?></p>
                    </div>
                </div>
            </div>
                                                    </div>

                                                    <div class="container">
            <div class="row mt-5 justify-content-center" style=" margin-right: 25px;">
                <p class="Related_Ads ml-5">Related Ads</p>

                <div class="row mt-3  row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php
   foreach($category_data as $relatedproduct){
    $session_login_id  = $this->session->userdata("id");
    $product_user_id = $relatedproduct->user_id;
    if($session_login_id !== $product_user_id){
   ?>



                    <div class="col col-sm-12 col-md-6 col-lg-6 col-xl-4 ml-4">
                        <div class="card"
                            style="border-radius: 37px 37px 37px 37px; box-shadow:rgba(0, 0, 0, 0.10) 0px 5px 15px;">
                            <img class="related_ads_card_img  img-fluid"
                                src="<?php echo base_url(); ?><?php echo $relatedproduct->cover_img; ?>"
                                alt="related_ads_card_img">
                            <div class="card-body related_ads_card">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="related_ads_card_title"> <?php
                           $title =$relatedproduct->title;
                            if(strlen($title) <= 10)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,10) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?></p>
                                    </div>
                                    <div class="col-2">
                                        <b style='font-size:18px;'><i class="fa fa-heart-o "
                                                style="font-size:18px;color:#ff6737;padding: 0px;"></i></b>
                                    </div>
                                    <div class="col-4">
                                        <?php if(isset($product_detail->price)){ if($product_detail->pay_type == 0 || $product_detail->pay_type == 1){ ?>
                                        <p class="details_price">$<span><?php echo $product_detail->price; ?></span></p>
                                        <?php  } }?>
                                    </div>

                                </div>
                                <div class="row mt-1">
                                    <div class="col-12">
                                        <small class="card-text"
                                            style="color: #575757;"> <?php
                           $title =$relatedproduct->Description;
                            if(strlen($title) <= 30)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,30) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?></small><br>
                                    </div>
                                </div>
                               
                                <div class="row mt-1">
                                    <div class="col-3">
                                        <p style="color: #575757;">Model</p>
                                    </div>
                                    <div class="col-5">
                                        <p style="color: #575757;">2015</p>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-3">
                                        <i class="bi bi-geo-alt-fill" aria-hidden="true"
                                            style="font-size:18px; color:#69d3b0"></i>
                                    </div>
                                    <div class="col-5">
                                        <p tyle="color: #575757;"><?php
                           $title =$relatedproduct->address;
                            if(strlen($title) <= 10)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,10) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?></p>
                                    </div>
                                    <div class="col-4 pe-2">
                                        <a
                                            href="<?php echo base_url(); ?>welcome/productdetail/<?php echo $relatedproduct->category_id; ?>/<?php echo $relatedproduct->id; ?>/<?php echo $relatedproduct->subcategory_id; ?>">
                                            <p class="related_ads_details_button ">
                                                <spam class="related_ads_details_button_text">Product Detail</spam>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php }} ?>

                </div>

            </div>

                            </div>
        </main>
    </div>
</body>

</html>

<div id="report_product" class="modal fade" role="dialog">

    <div class="modal modal-signin position-static d-block  py-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <button data-dismiss="modal" type="button" class="close" aria-label="Close"
                    style="margin-left: 90%; margin-top:10px;">&times;</button>


                <div class="modal-body px-5 pt-0">
                    <h5 class=" mb-0 my-3 fs-5" style="color:#13C571;text-align: center;">Report on Ads</h5>

                    <?php if ($error = $this->session->flashdata('Login_fail')) { ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-danger ">
                                <?= $error;

                  unset($_SESSION['Login_fail']);
                  ?>

                            </div>
                        </div>
                    </div>

                    <?php } ?>

                    <form class="needs-validation" novalidate enctype="multipart/form-data"
                        action="<?php echo base_url(); ?>welcome/reportproduct" method="POST" class="needs-validation"
                        novalidate>

                        <input type="hidden" name="reported_by" value="<?php echo $user['user_id'] ?>">
                        <input type="hidden" name="category_id" value="<?php echo $product_detail->category_id; ?>">
                        <input type="hidden" name="product_id" value="<?php echo $product_detail->id; ?>">
                        <div class=" input-container my-3 px-3">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control   text-dark Name" id="firstName" value=""
                                placeholder="Name" maxlength="30" style="border-radius:30px; border-color:#13C571"
                                required>
                            <div class="invalid-feedback">
                                Valid name is required.
                            </div>
                        </div>

                        <div class=" input-container my-3 px-3">
                            <label>Email</label>
                            <input name="email" type="email" class="form-control   text-dark inp-icon"
                                placeholder="Enter Email" style="border-radius:30px; border-color:#13C571" required>

                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                        </div>
                        <div class=" input-container mt-3 px-3 ">
                            <label>Mobile</label>
                            <input name="mobile" type="number" class="form-control  text-dark mobile" type="number"
                                id="mobile"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="10" minlength="10" value="" placeholder="phone"
                                style="border-radius:30px; border-color:#13C571" required>

                            <p id="mobile_error"></p>
                            <div class="invalid-feedback">
                                Valid mobile is required.
                            </div>
                        </div>

                        <div class=" input-container my-3 px-3 ">
                            <label>Report Reason (Only 150 character are allowed)</label>

                            <textarea name="report" class="form-control" id="aboutus" placeholder="Report"
                                maxlength="150" rows="4" style="border-radius:20px; border-color:#13C571"
                                required></textarea>
                            <div class="invalid-feedback">
                                Valid report is required.
                            </div>
                        </div>
                        <center><button class=" mb-2 btn btn-lg  text-white mt-2"
                                style="background-color:#13C571;border-radius:30px;width:40%;" type="submit"
                                name="submit">Report</button>

                        </center>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            var mabile = document.getElementById('mobile').value.length
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                document.getElementById("mobile_error").innerHTML = "";
            } else if (mabile < 10) {
                document.getElementById("mobile_error").innerHTML = "Please enter 10 digits";
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()


$(document).on('click', '.dddssaaf', function(e) {
    e.stopPropagation();
    var obj = $(this);
    var pid = $(this).data("pid");
    var cid = $(this).data("cid");
    var uid = $(this).data("uid");
    var status = $(this).data("wishlist");

    if (!uid == 0)
        //   alert(status);
        $.ajax({
            type: "POST",
            url: '<?php echo base_url("Welcome/setwishlist"); ?>',
            cache: false,
            data: {
                'product_id': pid,
                'user_id': uid,
                'category_id': cid
            },
            error: function() {
                alert('Something is wrong');
            },
            success: function(data) {
                $(".dddssaaf" + pid).toggleClass("fa-heart-o fa-heart");
                if (status == 0) {
                    $(this).data("wishlist", 1);
                    swal("Product Added in Wishlist Successfully!", "", "success");
                } else {
                    $(this).data("wishlist", 0);
                    swal("Product removed from Wishlist Successfully!", "", "success");
                }
            }
        });


});


$(document).on('click', '.ssaaf', function(e) {
    e.stopPropagation();
    var obj = $(this);
    var pid = $(this).data("pid");
    var cid = $(this).data("cid");
    var uid = $(this).data("uid");
    var shopid = $(this).data("shopid");
    var sellerid = $(this).data("sellerid");
    var status = $(this).data("wishlist");

    if (!uid == 0)
        //   alert(status);
        $.ajax({
            type: "POST",
            url: '<?php echo base_url("Welcome/setshoplist"); ?>',
            cache: false,
            data: {
                'product_id': pid,
                'user_id': uid,
                'category_id': cid,
                'shop_id': shopid,
                'seller_id': sellerid
            },
            error: function() {
                alert('Something is wrong');
            },
            success: function(data) {
                $(".ssaaf" + pid).toggleClass("fa-heart-o fa-heart");
                if (status == 0) {
                    $(this).data("wishlist", 1);
                    swal("Product verify Successfully!", "", "success");
                } else {
                    $(this).data("wishlist", 0);
                    swal("Product removed from Wishlist Successfully!", "", "success");
                }
            }
        });


});



function change_image(image) {

    var container = document.getElementById("main-image");

    container.src = image.src;
}
</script>

<script>
$(document).ready(function() {


    var limit = 2;
    var start = 0;
    var action = 'inactive';
    var str = window.location.href;
    str = str.split("/");
    cat = str[str.length - 3];
    sub = str[str.length - 1];

    function load_country_data(limit, start) {
        $.ajax({
            url: "<?php echo base_url();?>welcome/fetch/",
            method: "POST",
            data: {
                limit: limit,
                start: start,
                category_id: cat,
                subcategory_id: sub
            },
            cache: false,
            success: function(data) {
                $('#load_data').append(data);
                if (data == '') {
                    $('#load_data_message').html(
                        "<button type='button' class='btn btn-info'>No Data Found</button>");
                    action = 'active';
                } else {
                    $('#load_data_message').html(
                        "<button type='button' class='btn btn-warning'>Please Wait....</button>"
                    );
                    action = "inactive";
                }
            }
        });
    }

    if (action == 'inactive') {
        action = 'active';
        load_country_data(limit, start);
    }
    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() > $("#load_data").height() && action ==
            'inactive') {
            action = 'active';
            start = start + limit;
            setTimeout(function() {
                load_country_data(limit, start);
            }, 1000);
        }
    });

});
</script>