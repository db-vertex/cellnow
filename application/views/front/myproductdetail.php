<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- link for map -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    <title>Verify product details</title>
    <style>

img {
  vertical-align: middle;
}

.pointer {cursor: pointer;}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.btn_Verified {
        margin-right:90px;
        width: 192px;
        height: 54px;
        left: 988px;
        top: 941px;
        background: #D1FAE5;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 32px;
    }

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
    .breadcrumb_container {
        box-sizing: border-box;
        width: 100%;
        max-width: 1126px;
        margin: 0 auto;
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
        filter: drop-shadow(0px 0px 4.79774px #10B981);
        border-radius: 15px;
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
            max-width: 620.7px;
            left: 112px;
            top: 1373.5px;
            padding:20px;
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
            height: 34px;
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
    width: 436px;
    height: 100px;
    left: 826px;
    margin-top: 30px;
    float: right;
    background: linear-gradient(91.25deg, #A3E9D2 5.31%, rgba(145, 188, 174, 0.32) 63.47%, rgba(105, 211, 176, 0) 115.15%);
    filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
    border-radius: 80px 0px 0px 80px;
}
.small{
    padding-right: 0!important;
    padding-left: 0!important;
}

.View_Seller_profile {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 8px;
        line-height: 14px;

        color: #000000;
        margin-top: 10px;
    }
    }

    @media (min-width: 359px) and (max-width: 459px){

        
        .img-size{
    max-width: 12px;
    min-width: 12px;
    color:#69D3B0;
}

.small{
    padding-right: 0!important;
    padding-left: 0!important;
}

.View_Seller_profile {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 8px;
        line-height: 14px;

        color: #000000;
        margin-top: 10px;
    }

    

.handline {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 12px;
        line-height: 16px;

        color: #0C0B0B;


        /* Inside auto layout */

        flex: none;
        order: 0;
        flex-grow: 0;
    }


    .detalis_option_text {
    font-family: 'Roboto';
    font-style: normal;
    font-weight: 400;
    font-size: 5px;
    line-height: 0px;
   
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
min-width: 50.69px;
max-width: 50.69px;
max-height: 50.31px;
min-height: 50.31px;
left: 100px;
top: 1213.13px;
filter: drop-shadow(0px 0px 1.07571px #10B981);
border-radius: 11.8328px;
}

.btn_Verified_shop_name {
    width: 250px;
    height: 34px;
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
width: 256px;
height: 100px;
left: 826px;
margin-top: 30px;
float: right;
background: linear-gradient(91.25deg, #A3E9D2 5.31%, rgba(145, 188, 174, 0.32) 63.47%, rgba(105, 211, 176, 0) 115.15%);
filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
border-radius: 80px 0px 0px 80px;
}

.deatails_profile_name_ads {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 10px;
        line-height: 20px;

        color: #000000;
    }

}

    @media (min-width: 500px) and (max-width: 768px) {
        .btn_Verified_shop_name {
            width: 300px;
            height: 34px;
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

        .small{
    padding-right: 0!important;
    padding-left: 0!important;
}
.details_profile {
            width: 334px;
            height: 140px;
            left: 426px;
            margin-top: 30px;
            float: right;
            background: linear-gradient(91.25deg, #A3E9D2 5.31%, rgba(145, 188, 174, 0.32) 63.47%, rgba(105, 211, 176, 0) 115.15%);
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
            border-radius: 80px 0px 0px 80px;
        }

    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .btn_Verified_shop_name {
            width: 269px;
            height: 34px;
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

    }

    @media (min-width: 991.98px) and (max-width: 1199.98px) {
        .btn_Verified_shop_name {
            width: 335px;
            height: 44px;
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
            width: 300px;
            height: 34px;
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
            margin-left: 8rem !important;
        }
        .detalis_option {
            max-width: 620.7px;
            left: 90px;
            top: 1373.5px;
            background: #FFFFFF;
            box-shadow: 0px 0px 4px #69D3B0;
        }

        .btn_Verified {
        margin-right:90px;
        width: 192px;
        height: 54px;
        left: 988px;
        top: 941px;
        background: #D1FAE5;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 32px;
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
            width: 350px;
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
            line-height: 20px;

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
        margin-top: 25px;
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
        border-radius: 0px 0px 0px 0px;
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
        margin-right:90px;
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
    .container .master,
.container .thumbnails {
    margin: auto;
    width: 100%;
  margin-top: 20px;
    padding: 5px;
}

.container .master {
    padding-bottom: 0;
    position: relative;
}

.container .master img {
    z-index: 1;
    width: 100%;
    height: 99%;
    border-radius: 20px;
}

.container .master .fa-chevron-left,
.container .master .fa-chevron-right {
    position: absolute;
    left: 5px;
    top: 50%;
    background-color: rgb(0,0,0, .7);
    color: #fff;
    padding: 10px 15px;
    z-index: 2;
    cursor: pointer;
}

.container .master .fa-chevron-right {
    right: 5px;
    left: auto;
}

.container .thumbnails {
    overflow: hidden;
}

.container .thumbnails img {
    float: left;
    width: 19.2%;
   
    cursor: pointer;
    transition: all .6s ease-in-out;
}

.container .thumbnails img:last-child {
    margin-right: 0!important;
}

.container .thumbnails img.active {
    outline: 2px solid #e63946;
   
}


.verifid-right {
    position: absolute;
    right: 2px;
   
    color: #fff;
    padding: 10px 15px;
   
    cursor: pointer;
    max-width: 30%;
    max-height: 15%;
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


    <div class=" text-center " style="margin-top:5%">
        <img class="d-block mx-auto mb-2" src="<?php echo base_url();?>assets/images/product_banner.png" alt=""
            width=100%>
    </div>
    <div class="container mt-4" >
        <main>
            <div class=" container mb-4 ">
                <div class="row ">
                   
                        <div class="breadcrumbs">
                            <span class="me-2 handline"><a class="text-dark link-underline-opacity-0"
                                    href="<?php echo base_url();?>">Home</a></span>/<span
                                class="ms-2 handline"><?php echo ucfirst($product_detail->title); ?></span>
                        </div>
                    
                </div>
            </div>
<div class="container">
            <div class="row" >
                <div class="col-md-6 small">
                <?php if ($product_detail->cover_img !== NULL) { ?>
      <div class="mySlides">
        <img class="details_img_cover" src="<?php echo base_url() . $product_detail->cover_img . ""; ?>" style="width:100%">
        <?php if ($product_detail->verified_product == 1) { ?>
            <img class="verifid-right img-fluid"  src="<?php echo base_url(); ?>assets/images/verified.png">

           <?php } ?></div> <?php } ?>
       
       
        <?php if ($product_detail->images_2 !== NULL) { ?>
      <div class="mySlides">
   
  
        <img class="details_img_cover" src="<?php echo base_url() . $product_detail->images_2 . ""; ?>" style="width:100%">
        <?php if ($product_detail->verified_product == 1) { ?>
            <img class="verifid-right img-fluid"  src="<?php echo base_url(); ?>assets/images/verified.png" 
         >
   
     <?php } ?> </div><?php } ?>
        
   <?php if ($product_detail->images_3 !== NULL) { ?>
      <div class="mySlides">
  
    
        <img class="details_img_cover" src="<?php echo base_url() . $product_detail->images_3 . ""; ?>" style="width:100%">
        <?php if ($product_detail->verified_product == 1) { ?>
            <img class="verifid-right img-fluid"  src="<?php echo base_url(); ?>assets/images/verified.png">

     <?php } ?>  </div>
   <?php } ?>
     
   <?php if ($product_detail->images_4 !== NULL) { ?>
      <div class="mySlides">
        <img class="details_img_cover" src="<?php echo base_url() . $product_detail->images_4 . ""; ?>" style="width:100%">
        <?php if ($product_detail->verified_product == 1) { ?>
            <img class="verifid-right img-fluid"  src="<?php echo base_url(); ?>assets/images/verified.png">

     <?php } ?> </div><?php } ?>
      
        <?php if ($product_detail->images_5 !== NULL) { ?>
      <div class="mySlides">
         <?php if ($product_detail->verified_product == 1) { ?>
              <img class="verifid-right img-fluid"  src="<?php echo base_url(); ?>assets/images/verified.png" >

       <?php } ?><img class="details_img_cover" src="<?php echo base_url() . $product_detail->images_5 . ""; ?>" style="width:100%">
       </div><?php } ?>
       
 
    
  <a style="color:#69d3b0;" class="prev" onclick="plusSlides(-1)">❮</a>
  <a style="color:#69d3b0;" class="next" onclick="plusSlides(1)">❯</a>

  

  <div class="row mt-3">
  <?php if ($product_detail->cover_img !== NULL) { ?>
      <div class="column">
   
        <img class="demo cursor details_img_box" src="<?php echo base_url() . $product_detail->cover_img . ""; ?>" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
        </div>
      <?php } ?>
       <?php if ($product_detail->images_2 !== NULL) { ?>
        <div class="column">
            <img class="demo cursor details_img_box" src="<?php echo base_url() . $product_detail->images_2 . ""; ?>" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
          </div> 
        <?php } ?>
        <?php if ($product_detail->images_3 !== NULL) { ?>
        <div class="column">
    
          <img class="demo cursor details_img_box" src="<?php echo base_url() . $product_detail->images_3 . ""; ?>" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
          </div>
        <?php } ?>
        <?php if ($product_detail->images_4 !== NULL) { ?>
        <div class="column">
            <img class="demo cursor details_img_box" src="<?php echo base_url() . $product_detail->images_4 . ""; ?>" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
            </div>
        <?php } ?>
   
    <?php if ($product_detail->images_5 !== NULL) { ?>
        <div class="column">
        <img class="demo cursor details_img_box" src="<?php echo base_url() . $product_detail->images_5 . ""; ?>" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
        </div>    
        <?php } ?>
    
  </div>

  <div class="container">
                    <div class="row mt-3">
                        <div class="detalis_option">
                        <div class="d-flex justify-content-between align-items-center">
                            
                                       <p> <img class="img-size" src="<?php echo base_url(); ?>assets/images/calendar.png"> <span class="detalis_option_text"> <?php function time_elapsed_string($datetime, $full = false)
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
                                          echo time_elapsed_string($product_detail->created_at); ?></span></p>
                                        
                                        <p><img class="img-size" src="<?php echo base_url(); ?>assets/images/eye.png"> <span class="detalis_option_text"><?php echo $product_detail->Count ?>views</span></p>
                                       
                                       <p> <img class="img-size"  src="<?php echo base_url(); ?>assets/images/hearts.png"><span class="detalis_option_text"> <?php $product_wishlist = get_wishlist_count($product_detail->id, $product_detail->category_id);
                                          echo $product_wishlist; ?></span></p>
                                       
                                            <a class="btn-change" style="color:black;text-decoration:unset;" id="GFG"
                                                <?php if (empty($user) || !isset($user)) { ?>
                                                    href="<?php echo base_url(); ?>welcome/login" <?php } else { ?>   id="share_desk"
                                                    onclick="window.open('mailto:?subject=<?php echo base_url() . 'welcome/productdetail/' . $product_detail->category_id . '/' . $product_detail->id; ?>');"
                                             <?php } ?>
                                               >
                                               <img class="img-size" src="<?php echo base_url(); ?>assets/images/share.png"><span class="detalis_option_text">&nbsp Share</span></a>

                                      
                                            <a class="btn-change" style="color:black;text-decoration:unset; " id="GFG"
                                                <?php if (empty($user) || !isset($user)) { ?>
                                                    href="<?php echo base_url(); ?>welcome/login" <?php } else { ?>
                                                    data-toggle="modal" data-target="#report_product" <?php } ?>><img class="img-size" src="<?php echo base_url(); ?>assets/images/report.png"><span  class="detalis_option_text"> Report</span></a>
                                      
                                </div>
                            </div>
                        </div>
                                                    </div>  <div class="py-3 text-center">
                        <img class="d-block mx-auto mb-2" src="<?php echo base_url();?>assets/images/product_banner.png"
                            alt="" width=100%>
                    </div>


                </div>

                <div class="col-md-6 mb-4 details_box_content">
                    <div class="row margin_top_css ms-4">
                        <div class="col-5">
                            <p class="details_title"> <?php echo ucfirst($product_detail->title); ?></p>
                        </div>
                        <div class="col-3">
                          
                        </div>
                        <div class="col-4">
                        <?php if(isset($product_detail->price)){  if (($product_detail->pay_type == 0 || $product_detail->pay_type == 1) && ($product_detail->category_id == 1 || $product_detail->category_id == 2 || $product_detail->category_id == 3)) { 
                                     
                                     ?>
                                 <p class="details_price">₹<span><?php echo $product_detail->price; ?></span></p>
                                 <?php  } }?>
                                 <?php if ($product_detail->pay_type == 2) { 
                              
                              ?>
                              <p class="details_price"><span>Donate</span></p>
                              <?php   }?>

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
                            <p class="details_text"><b>Brand</b></p>
                        </div>
                        <div class="col-3">
                            <p class="details_text"><?php echo $product_detail->brand; ?></p>
                        </div>
                    </div>
                    <?php } else if($product_detail->category_id==2){ ?>
                    <div class="row   ms-4">
                        <div class="col-3">
                            <p class="details_text"><b>Tuition Location</b></p>
                        </div>
                        <div class="col-3">
                            <p class="details_text"><?php echo $product_detail->Tuitions_loction; ?></p>
                        </div>
                    </div>
                    <?php } else if($product_detail->category_id==3 && $product_detail->category_id==4){ ?>
                    <div class="row   ms-4">
                        <div class="col-3">
                            <p class="details_text"><b>Job Location </b></p>
                        </div>
                        <div class="col-3">
                            <p class="details_text"><?php echo $product_detail->Job_Location; ?></p>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="row  ms-4">
                        <div class="col-3">
                            <p class="details_text"><b>City</b></p>
                        </div>
                        <div class="col-3">
                            <p class="details_text"><?php echo $product_detail->town; ?></p>
                        </div>
                    </div>

                    <div class="row   ms-4">
                        <div class="col-3">
                            <p class="details_text"><b>Type</b></p>
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
                         if($product_detail->verified_product){
                            if(empty($shop)){
                                $shop_list =check_shoplist_by_productid($product_detail->id);
                           
                          if(empty($shop_list)){ echo"";}else{  
                          $shop_name= get_shop_name($shop_list->shop_id);?>
                              <div class="" style="">
                                  <div class="col-12" style="text-align:center;">
                                      <a href="<?php echo base_url() ?>welcome/shopdetail/<?php echo $shop_list->shop_id; ?>"><p class="btn_Verified_shop_name pt-1"><span class="pe-2"><img
                                                  class="btn_Verified_img"
                                                  src="<?php echo base_url() ?>assets/images/check 1.png"
                                                  alt="check 1.png"></span><span class="btn_Verified_text">verifed by Shop:
                                              <?php echo $shop_name;?></span></p></a>
                                  </div>
      
      
                              </div>
                              <?php } }   
                        }
                        else{
                }?>

                    </div>


                    <?php $userdetail = get_users_details($product_detail->user_id); ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="details_profile">
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
                                            <p class="deatails_profile_name_ads">Active 10 Ads</p>

                                        </div>

                                    </div>
                                    <div class="col-4">
                                        
                                                
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-10  margin_top_css ms-4">
                        <p class="details_handing_Description">Description</p>
                        <p class="details_Description"> <?php echo $product_detail->Description; ?></p>
                    </div>
                </div>
            </div>
                                                    </div>

                                                    <div class="container">
            <div class="row mt-5 justify-content-center" >
                <p class="Related_Ads">Related Ads</p>

                <div class="row mt-3  row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php
              if(!empty($category_data)){
   foreach($category_data as $relatedproduct){
   
   
    $session_login_id  = $this->session->userdata("id");
    $product_user_id = $relatedproduct->user_id;
    if($session_login_id !== $product_user_id){
       
           

        

        
   ?>



<div class="col-lg-3 col-md-4 col-sm-6 mb-4 ">
                        <div class="card"
                           >
                            <img class="related_ads_card_img  img-fluid"
                                src="<?php echo base_url(); ?><?php echo $relatedproduct->cover_img; ?>"
                                alt="related_ads_card_img">
                            <div class="card-body ">
                                <div class="row">
                                <div class="col-8">
                                        <?php if(isset($product_detail->price)){  if (($product_detail->pay_type == 0 || $product_detail->pay_type == 1) && ($product_detail->category_id == 1 || $product_detail->category_id == 2 || $product_detail->category_id == 3)) { 
                                     
                                            ?>
                                        <p class="details_price">₹<span><?php echo $product_detail->price; ?></span></p>
                                        <?php  } }?>
                                        <?php if ($product_detail->pay_type == 2) { 
                                     
                                     ?>
                                     <p class="details_price"><span>Donate</span></p>
                                     <?php   }?>
                                    </div>
                                    <div class="col-2">
                                        <b style='font-size:18px;'><i class="fa fa-heart-o "
                                                style="font-size:18px;color:#69d3b0;padding: 0px;"></i></b>
                                    </div>
                                   

                                </div>
                                <div class="row mt-1">
                                    <div class="col-12">
                                        <small class="card-text"
                                            style="color: #575757;"> <?php
                           $title =$relatedproduct->title;
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
                                    <div class="col-2">
                                        <i class="bi bi-geo-alt-fill" aria-hidden="true"
                                            style="font-size:18px; color:#69d3b0"></i>
                                    </div>
                                    <div class="col-5">
                                        <p style="color: #575757;"><?php
                           $title =$relatedproduct->address;
                            if(strlen($title) <= 15)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,15) . '...';
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
<?php } } }else{?>
    <center><img  src="<?php echo base_url();?>assets/images/no_product .png"></center>

                    <?php } ?>

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
                        <input type="hidden" name="subcategory_id" value="<?php echo $product_detail->subcategory_id; ?>">
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


$(function() {
    /*make the master div has a static height to prevent it from disppearing while the master img is feading in,
    this step is important if you use a fadeIn duration for the master img more than 1s, but if you use a duration less than 1s
    you don't need to make the height of the master div is static, and it is preferred to make the duration less than 1s to prevent the
    user to choose 2 images at the same time, so the implementation of the code will be faster than the user selection*/
   

    //make the width of the thumbnails images is dynamic
    var imagesNumber        = $(".thumbnails").children().length,
        marginBetweenImages =  6,
        totalMargins        = marginBetweenImages * (imagesNumber - 1),
        imageWidth          = (100 - totalMargins) / (imagesNumber);
        
    $(".thumbnails img").css({
        width: imageWidth + "%",
        marginRight: marginBetweenImages + "%"
    });


    //remove the active class from all thumbnails images and add it to the selected one, then add this selected as the master image in the master div
    $(".thumbnails img").on("click", function() {
        $(this).addClass("active").siblings().removeClass("active");
        $(".master img").hide().attr("src", $(this).attr("src")).fadeIn(300);
    });


    //use the chevron left and right to select images and translate between them
    $(".master .fas").on("click", function() {
        if($(this).hasClass("fa-chevron-left")) {
            if($(".thumbnails img.active").is(":first-child")) {
                $(".thumbnails img:last-child").click();
            } else {
                $(".thumbnails img.active").prev().click();
            }
        } else {
            if($(".thumbnails img.active").is(":last-child")) {
                $(".thumbnails img:first-child").click();
            } else {
                $(".thumbnails img.active").next().click();
            }
        }
    })
})
</script>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
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
    