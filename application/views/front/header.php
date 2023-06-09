<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script
        src="https://maps.google.com/maps/api/js?key=AIzaSyAuJlJoxTMjjeSLvb3BYmty0eEkp6oHfCU&libraries=places&callback=initAutocomplete">
    </script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <link rel="icon" sizes="196x196" href="<?php echo base_url();?>assets/images/CelNow 5 1.png" type="image/png">
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    <title>CelNow</title>
    <style>
    html,
    body {
        overflow-x: hidden;
    }

    .space-top{
margin-top: 10%;
    }
    .a:hover{
        text-decoration: none;
    }

    .image1 {
        position: relative;
        top: 0;
        left: 0;
       
      }
      .image2 {
        position: absolute;
        top: 10px;
        left: 10px;
       
      }
      .image3 {
        position: absolute;
        top: 10px;
        left: 100px;
       
      }

    .nav ul li a:hover {
        color: #555;
    }

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
    .fa {
        /* padding: 20px; */
        font-size: 30px;
        width: 50px;
        text-align: center;
        text-decoration: none;
        margin: 0px 2px;
        color: #888b97;
    }
    </style>
    <style>
    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    /*================================================*/
    @import url('https://fonts.googleapis.com/css?family=Roboto');

    .carousel-item>div {
        float: left;
    }

    /* .carousel-by-item [class*="cloneditem-"] {
  display: none;
} */
@media screen and (min-width: 375px) {

    .space-top{
margin-top: 30%;
    }

.search_input {
        flex: 1;
        padding: 10px 10px;
        font-size: 1.1em;
        -webkit-border-top-left-radius: 25px;
        -webkit-border-bottom-left-radius: 25px;
        -moz-border-radius-topleft: 25px;
        -moz-border-radius-bottomleft: 25px;
        border-top-left-radius: 25px;
        border-bottom-left-radius: 25px;
        box-shadow: none;
        border: none;
        box-shadow: 2px 4px 6px rgba(0, 0, 0, 0.19);

    }
    

    .search_b {
        padding-right: 10px;
        background-color: #fff;
        -webkit-border-top-right-radius: 25px;
        -webkit-border-bottom-right-radius: 25px;
        -moz-border-radius-topright: 25px;
        -moz-border-radius-bottomright: 25px;
        border-top-right-radius: 25px;
        border-bottom-right-radius: 25px;
        box-shadow: 5px 4px 6px rgba(0, 0, 0, 0.19);
        border: none;
        cursor: pointer;
        cursor: hand;
    }
   
    .Search_text{
       
        padding: 13px 35px;
        font-size: 0.9em;
        text-transform: uppercase;
        font-weight: 300;
        color: #fff;
        background-color: #10B981;
        border-radius: 20px;
        box-shadow: 2px 4px 6px rgba(0, 0, 0, 0.19);
        font-weight: 500;

    }
    .hide-button {
   
   display: block
   ;
 
}
  
}
    @media (min-width: 576px) {
        .space-top{
margin-top: 25%;
    }
        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 5.275rem;

        }
    }
    button.hide-button{
   display: none;
}
   
    .search_wrap {
        width: 100%;

    }

    .search_wrap .search_boxs {
        position: relative;


    }

    .search_wrap .search_boxs .btn {
        position: absolute;

        height: 80%;
        background: #10B981;
        color: white;

    }

    .search_wrap .search_boxs .btn.btn_common .fas {

        /* top: 50%;
	left: 50%;
	transform: translate(-50%,-50%); */
        /* color: #fff; */

    }

    .search_wrap.search_wrap_6 .search_boxs .btn {
        max-width: 100%;
        height: 70%;
        top: 15%;
        left: 103.3%;
        padding: 6px 0px;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card2 {
        --bs-card-spacer-y: 1rem;
        --bs-card-spacer-x: 1rem;
        --bs-card-title-spacer-y: 0.5rem;
        --bs-card-title-color: ;
        --bs-card-subtitle-color: ;
        --bs-card-border-width: var(--bs-border-width);
        --bs-card-border-color: #C5DC49;
        --bs-card-border-radius: 0.575rem;

        --bs-card-inner-border-radius: calc(var(--bs-border-radius) - (var(--bs-border-width)));
        --bs-card-cap-padding-y: 0.5rem;
        --bs-card-cap-padding-x: 1rem;
        --bs-card-cap-bg: rgba(var(--bs-body-color-rgb), 0.03);
        --bs-card-cap-color: ;
        --bs-card-height: ;
        --bs-card-color: ;
        --bs-card-bg: var(--bs-body-bg);
        --bs-card-img-overlay-padding: 1rem;
        --bs-card-group-margin: 0.75rem;
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        height: var(--bs-card-height);
        word-wrap: break-word;
        background-color: var(--bs-card-bg);
        background-clip: border-box;
        border: var(--bs-card-border-width) solid var(--bs-card-border-color);
        border-radius: var(--bs-card-border-radius);
    }

    p {
        margin-top: 0;
        margin-bottom: 0rem;
        font-family: 'Open Sans';
        font-weight: 500;
        font-size: 0.9rem;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 5.275rem;

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


    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    a {
        color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));
        text-decoration: none;
    }

    #hover:hover {
        color: white;
        background-color: #d1fae5;


    }

    .container_ {

        background-color: #fafafa;
        box-shadow: 0 1px 3px 0 rgb(175 174 165 / 50%);
    }

    .cut-list {
        list-style: none;
        color: black;
        line-height: 10px;
    }

    .cut-list>li {
        margin-left: 10px;
        margin-right: 25px;

        padding-bottom: 2px;
    }

    .cut-list__elem {
        margin-inline: auto;
        min-width: fit-content;
    }

    .with-more-items {
        justify-content: center;
    }

    .cut-list__more {
        position: absolute;
        right: 0;
        min-width: 150px;
        padding: 10px;
        margin: 0;
        text-align: left;
        background-color: #222;
        z-index: 100;
        display: none;
        border-radius: 5px;
    }


    .cut-list {
        display: flex;


    }

    .cut-list__elem {
        white-space: nowrap;
        padding-top: 10px;


    }

    .cut-list__more.cut-list__more-content.cut-list__elem {
        color: red;
    }

    .cut-list__dropdown {
        position: relative;
    }

    .cut-list__drop-toggle {
        cursor: pointer;
        user-select: none;
        font-weight: 400;
        font-size: 12px;
        text-align: center;
        margin: 0 2rem;
    }

    .cut-list__more {
        position: absolute;
        top: 100%;
        right: 0;
        min-width: 190px;
        padding: 0;
        margin: 0;
        text-align: left;
        background-color: #fff;
        border: 1px solid #ccc;
        z-index: 100;
        display: none;
        text-align: left;
    }


    .cut-list__more.is-top {
        top: auto;
        bottom: 100%;
        position: relative;
    }

    .cut-list__more.is-left {
        right: auto;
        left: 0;

    }

    .link-plain,
    .link-plain:hover,
    .link-plain:active,
    .link-plain:visited {
        text-decoration: none;
        border-radius: 0.575rem;

    }

    .link-plains,
    .link-plains:hover,
    .link-plains:active,
    .link-plains:visited {
        text-decoration: none;
        border-radius: 0.575rem;
        background-color: #fff;
        overflow: hidden;

        border-radius: 8px;
        text-align: left;
        min-height: 246px;
    }


    .pouler_Categories:hover {
        -webkit-transform: scale(1.0);
        transform: scale(1.0);
    }

    .pouler_Category:hover {
        -webkit-transform: scale(1.0);
        transform: scale(1.0);
    }

    .link-plain-f,
    .link-plain-f:hover,
    .link-plain-f:active,
    .link-plain-f:focus,
    .link-plain-f:visited {
        color: initial;
        text-decoration: none !important;
    }

    .div-center {
        display: inline-block;
        width: 100%;
        text-align: center;
    }

    #va_container {
        position: relative;

        margin: auto;
    }

    #va_container_urgent {
        position: relative;

        margin: auto;
    }

    #va_container_most_view {
        position: relative;
        /* max-width: 1140px; */
        margin: auto;
    }

    #va_container_Popular {
        position: relative;
        /* max-width: 1140px; */
        margin: auto;
    }

    .va-thumbnail {
        border-radius: 6px;
        border: 0px;
        width: 100%;
        max-height: 250px;
        min-height: 250px;
    }

    .va-thumbnail_category {
        border-radius: 5px;
        border: 0px;
        width: 100%;
        max-height: 150px;

    }

    /* .va-thumbnail:hover{
      -webkit-transform: scale(1.1);
	transform: scale(1.1);
       } */


    .va-carrousel-flexbox {

        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        scrollbar-width: none;
        justify-content: ;
    }

    .va-carrousel-flexbox .va-card {
        flex: 0 0 auto;
        padding-left: 15px;
    }

    .va-carrousel-flexbox .va-card:last-child {
        margin-right: 15px;
    }

    .va-carrousel-flexbox .va-card:last-child::after {
        content: ' ';
        display: inline-block;
    }

    .va-carrousel,
    .va-carrousel-flexbox {
        width: 100%;
        -webkit-overflow-scrolling: touch;
    }

    .va-carrousel::-webkit-scrollbar,
    .va-carrousel-flexbox::-webkit-scrollbar {
        display: none;
    }

    .va-carrousel-flexbox_most {

        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        scrollbar-width: none;
        justify-content: ;
    }

    .va-carrousel-flexbox_most .va-card {
        flex: 0 0 auto;
        padding-left: 20px;
    }

    .va-carrousel-flexbox_most .va-card:last-child {
        margin-right: 15px;
    }

    .va-carrousel-flexbox_most .va-card:last-child::after {
        content: ' ';
        display: inline-block;
    }

    .va-carrousel,
    .va-carrousel-flexbox_most {
        width: 100%;
        -webkit-overflow-scrolling: touch;
    }

    .va-carrousel::-webkit-scrollbar,
    .va-carrousel-flexbox_most::-webkit-scrollbar {
        display: none;
    }


    .va-carrousel-flexbox_urgent {

        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        scrollbar-width: none;
        justify-content: ;
    }

    .va-carrousel-flexbox_urgent .va-card {
        flex: 0 0 auto;
        padding-left: 20px;
    }

    .va-carrousel-flexbox_urgent .va-card:last-child {
        margin-right: 15px;
    }

    .va-carrousel-flexbox_urgent .va-card:last-child::after {
        content: ' ';
        display: inline-block;
    }

    .va-carrousel,
    .va-carrousel-flexbox_urgent {
        width: 100%;
        -webkit-overflow-scrolling: touch;
    }

    .va-carrousel::-webkit-scrollbar,
    .va-carrousel-flexbox_urgent::-webkit-scrollbar {
        display: none;
    }

    .va-carrousel-flexbox_popular {

        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        scrollbar-width: none;
        justify-content: ;
    }

    .va-carrousel-flexbox_popular .va-card {

        flex: 0 0 auto;
        padding-left: 20px;
    }

    .va-carrousel-flexbox_popular .va-card:last-child {
        margin-right: 15px;
    }

    .va-carrousel-flexbox_popular .va-card:last-child::after {
        content: ' ';
        display: inline-block;
    }

    .va-carrousel,
    .va-carrousel-flexbox_popular {
        width: 100%;
        -webkit-overflow-scrolling: touch;
    }

    .va-carrousel::-webkit-scrollbar,
    .va-carrousel-flexbox_popular::-webkit-scrollbar {
        display: none;
    }



    .va-card_category {
        cursor: pointer;
        user-select: none;
        outline: none;
        width: 130px;
    }

    .va-cards {
        cursor: pointer;
        user-select: none;
        outline: none;
        width: 170px;
    }

    .va-card:hover {
        user-select: none;

    }

    .va-card a {
        display: block;
    }

    .va-carrousel-title {
        display: inline-block;
        color: white;
        font-weight: 700;
        padding-bottom: 8px;
        margin-bottom: 18px;
    }

    .va-title {
        margin-top: 8px;
        font-size: 12px;
        height: 24px;
        font-weight: 700;
        letter-spacing: 1px;
        color: #3c3c3c;

    }

    .va-start-from {
        font-size: 9px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        color: black;
    }

    .btn-change:hover {
        -webkit-transform: scale(1.1);

    }

    .va-points {
        font-size: 12px;
        font-weight: 700;
        display: inline-block;
        color: white;
    }

    .deals-paddle {
        height: 38px;
        width: 38px;
        color: white;
        background-color: #0000004d;
        border-radius: 50%;
        border: 0px solid;
        margin: auto;
        position: absolute;

        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }


    .deals-paddle:focus {
        outline: none;
    }

    .deals-paddle:active {
        border-style: solid;
        outline: none;
        user-select: none;
    }

    .deals-paddle svg {
        width: 10px;
    }

    @media (min-width: 768px) {
        .space-top{
margin-top: 10%;
    }
        .other-game-button {
            width: 300px;
        }
    }

   

    .deals-scroll-left {
        top: -35px;
        left: -30px;
        bottom: 0;
    }

    .deals-scroll-right {
        top: -35px;
        bottom: 0;
        right: 0px;
    }

    .deals-scroll-left_urgent {
        top: -35px;
        left: 5px;
        bottom: 0;
    }

    .deals-scroll-right_urgent {
        top: 0;
        bottom: 0;
        right: 5px;
    }

    .deals-scroll-left_most_view {
        top: 0;
        left: 5px;
        bottom: 0;
    }

    .deals-scroll-right_most_view {
        top: 0;
        bottom: 0;
        right: 5px;
    }


    .deals-scroll-left_popular {
        top: 0;
        left: 5px;
        bottom: 0;
    }

    .deals-scroll-right_popular {
        top: 0;
        bottom: 0;
        right: 5px;
    }

    .hide-scroll {
        overflow-x: scroll;
    }

    .hide-scroll::-webkit-scrollbar {
        background: transparent;
        /* make scrollbar transparent */
        width: 0px;
    }


    .va-carrousel-section {
        font-family: "Roboto"
            padding: 0px;
        position: relative;
    }

    @media (min-width: 768px) {

        .va-carrousel-section {
            padding-left: 15px;
            padding-right: 15px;
        }
    }

    .va-whitewrap {
        /*         background-color: white; */
        padding-top: 15px;
        margin-top: 15px;
    }

    .va-seeall {
        display: block;
        font-size: 18px;
        font-weight: 700;
        border-top: 1px solid #DDDDDD;
        text-align: center;
        padding: 10px;
    }

    .hidde_optione .cut-list__elem:hover {
        background-color: rgba(197, 220, 73, 255);
        padding-left: 7px;

    }

    .hidde_optione .cut-list__elem {
        padding-left: 5px;

    }

    .hidde_optione {
        margin-top: 2px;
        margin-bottom: 4px;
    }

    .cut-list__more {
        width: max-content;

    }

    #left_view_button {
        display: none;
    }

    #left_sponser_button {
        display: none;
    }

    #left_urgent_button {
        display: none;
    }

    img.rounded-corners {
        border-radius: 50%;
    }

    p.word {
        word-wrap: break-word;
    }

    @media (min-width: 991px) {
        .padd{
padding-left: 90px;
        }
        .body_background {
            background: linear-gradient(130.02deg, #77D4B5 -15.01%, rgba(213, 253, 252, 0) 39.7%);
            background-color: white;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 100;
        }
    }

    @media (max-width: 992px) {
        .body_background {
            background: linear-gradient(130.02deg, #77D4B5 -15.01%, rgba(213, 253, 252, 0) 39.7%);
            background-color: white;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 100;
        }
    }

    .collapse.show {
        display: block;
    }

    .dropdown-menu {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        color: #10B981;
    }

    .dropdown-item {
        color: #10B981;
        font-weight: bold;
        font-size: 16px;
    }

    .navbar-toggler {
        border-color: #10B981;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='%2310B981' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .navbar-toggler {
        border: none;
    }

    .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid;
        border-right: 0.3em solid transparent;
        border-bottom: 0;
        margin-left: 1px;
        border-left: 0.3em solid transparent;
    }


    .click.form-select .bg-img {
        transform: rotate(180deg);
        transition: .3s ease-in-out;
    }

    .related_ads_details_button {
        box-sizing: border-box;

        /* Auto layout */

        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 9.42857px 12.5714px;
        gap: 4.71px;

        width: 80.43px;
        height: 30.86px;

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
        line-height: 15px;
        color: #FFFFFF;
        flex: none;
        order: 0;
        flex-grow: 0;
    }


    * {
        outline: none;
    }

    .searchbox-wrap {
        display: flex;
        margin-left: auto;
        margin-right: auto;
    }
    .search_input {
        flex: 1;
        padding: 14px 20px;
        font-size: 1.1em;
        -webkit-border-top-left-radius: 25px;
        -webkit-border-bottom-left-radius: 25px;
        -moz-border-radius-topleft: 25px;
        -moz-border-radius-bottomleft: 25px;
        border-top-left-radius: 25px;
        border-bottom-left-radius: 25px;
        box-shadow: none;
        border: none;
        box-shadow: 2px 4px 6px rgba(0, 0, 0, 0.19);

    }

    .search_b {
        padding-right: 10px;
        background-color: #fff;
        -webkit-border-top-right-radius: 25px;
        -webkit-border-bottom-right-radius: 25px;
        -moz-border-radius-topright: 25px;
        -moz-border-radius-bottomright: 25px;
        border-top-right-radius: 25px;
        border-bottom-right-radius: 25px;
        box-shadow: 5px 4px 6px rgba(0, 0, 0, 0.19);
        border: none;
        cursor: pointer;
        cursor: hand;
    }

    .Search_text{
        margin-left: 50px;
        padding: 13px 35px;
        font-size: 0.9em;
        text-transform: uppercase;
        font-weight: 300;
        color: #fff;
        background-color: #10B981;
        border-radius: 20px;
        box-shadow: 2px 4px 6px rgba(0, 0, 0, 0.19);
        font-weight: 500;

    }

    .Search_text:hover {
        background-color: #10B981;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.19);
    }
    @media (min-width: 1200px){
.navbar-nav{
    align-items: center;
}
}
@media (max-width: 1200px){
.nav-item_serach{
    margin-right: auto;
}


}
@media (min-width: 1200px){
    .dropdown:hover>.dropdown-menu {
        display: block;
    }

    .dropdown>.dropdown-toggle:active {
        pointer-events: none;
    }
.profile_name{
    margin-left: 10px;
}
.space{
    margin-left:85%;  
    width: max-content;
}
.search_box {
    margin-left:40px;
}
}
.space{
    width: max-content;
}
.category_show{
    width: max-content;
}


@media (max-width: 400px){
.deals-paddle{
  display: none;  
}
#left_sponser_button{
    display: none;     
}

}

    </style>

</head>


<body>
    <!-- <h1 >Hello, world!</h1> -->
    <div class="container-fluid body_background " id="body_background">

        <div class="container">
            <nav class="navbar navbar-expand-xl bg-body-">

                <a href="<?php echo base_url();?>"> <img src="<?php echo base_url();?>assets/images/CelNow 5 1.png"
                        class="img-fluid" style="width:180px;">
                </a>



                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" id="myelement"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation" style="border: none;color: #10B981;">

                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav  mb-2 mb-lg-0" style="">
                        <li class="nav-item nav-item_serach" style="padding-right:200px" ;>
                            <div class="search_wrap search_wrap_6 m-0 ">
                                <div class="search_box mt-3" style="width:130%; margin-right:170px;">
                                <form method="post" action="<?php echo base_url();?>welcome/searchproduct/">
         
         <input type="text" value="<?php $location= $this->session->userdata("location"); if($this->session->userdata("location")){ echo $location;} ; ?>" name="location" class="form-control rounded-5"  placeholder="Search for location" id="Location" aria-label="Search" aria-describedby="search-addon"  style="padding:12px 22px" />
        <button type="submit" class="btn btn-success rounded-5" style="padding:6px 10px">Search </button>
       </form>
                                    <!-- <form method="post" action="<?php echo base_url();?>welcome/searchproduct/">
                                    <div class="searchbox-wrap">
                                        <input type="text" value="<?php echo set_value('location'); ?>" id="locate" name="location"  class="search_input form-input" placeholder="Search for location...">
                                        <input type="text" class="form-control" name="latitude" id="latitude" hidden />
                                        <input type="text" class="form-control" name="longitude" id="longitude"
                                            hidden />
                                        <button type="submit" class="search_b"><span class="Search_text">Search </span> </button>
                                    </div>
                                    </form> -->



                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown" style="padding-right:10px" ;>
                            <a class="nav-link dropdown-toggle  Categories_header" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" style=" color:#10B981;font-weight:bold;"
                                id="ab">
                                Categories
                            </a>
                            <ul class="dropdown-menu category_show " style="margin-bottom:10px;min-width:80px;">
 
                                <li><a id="" class="dropdown-item"
                                        href="<?php echo base_url();?>welcome/fillter_product/1">Reusable Parts and
                                        Products</a>
                                </li>
                                <li><a id="" class="dropdown-item"
                                        href="<?php echo base_url();?>welcome/fillter_product/2">Tuitions/Classes</a>
                                </li>
                                <li><a id="" class="dropdown-item"
                                        href="<?php echo base_url();?>welcome/fillter_product/3">freelancing/Parttime
                                        Jobs</a>
                                </li>
                                <li><a id="" class="dropdown-item"
                                        href="<?php echo base_url();?>welcome/fillter_product/4">Internships</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown" style="padding-right:10px" ;>
                            <a class="nav-link dropdown-toggle  Services_header" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" style="color:#10B981;font-weight:bold;"
                                id="ab">
                                Services
                            </a>
                            <a></a>
                            <ul class="dropdown-menu" style="margin-bottom:0px; width: max-content;">
                                <?php
                                $shopcategory = get_all_shopcategory();
                                foreach ($shopcategory as $key => $shopcat) {
                                ?>
                                <li><a class="dropdown-item" style="color:#10B981;font-weight:bold;"
                                        href="<?php echo base_url();?>welcome/store/<?php echo $shopcat->id; ?>"><?php echo $shopcat->shop_category; ?></a>
                                </li>
                                <?php }?>

                            </ul>
                        </li>

                        <li class="nav-item" style="padding-right:10px; min-width: fit-content;">
                            <a class="nav-link  Post_header" href="<?php echo base_url();?>welcome/postproduct"
                                style="color:#10B981;font-weight:bold;" id="ab">Post Ad</a>
                        </li>

                        <li class="nav-item" style="padding-right:10px;">
                            <a class="nav-link  Shop_header" href="<?php echo base_url();?>welcome/shop"
                                style="color:#10B981;font-weight:bold;" id="ab">Shop</a>
                        </li>

                        <?php  if(!empty($user)){
                                            $profile = get_seller_profile($user['user_id']);
                                        ?>


                        <img class="img-fluid rounded-corners  d-block" style="height: 30.9px;
                                      width: 30.9px; margin-top: 5px;"
                            src="<?php echo base_url()."uploads/profile/".$profile->profile_img."";?>">

                        <a class="nav-link dropdown dropdown-toggle profile_name " href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"
                            style="font-size:15px;color:#10B981;font-weight:bold; padding-left: 0px;">
                             <?php echo ucfirst($profile->name);?>
                        </a>
                        <ul class="dropdown-menu space" style="margin-top:-30px;">

                            <li><a class="dropdown-item" href="<?php echo base_url();?>welcome/buyerprofile">My
                                    profile</a></li>

                            <li><a class="dropdown-item" href="<?php echo base_url();?>welcome/chat">My Chat</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url();?>welcome/fav_list">My
                                    Favorites</a></li>
                            <?php if($profile->login_type == 'normal'){ ?>
                            <li> <a class="dropdown-item" href="<?php echo base_url();?>welcome/changepassword"
                                    class="">Change Password</a></li>
                            <?php } ?>
                            <li><a class="dropdown-item btnSweetalert" href="javascript:void(0)">Logout</a></li>
                        </ul>
                        <?php  }

                           else{ ?>



                        <li class="nav-item" style="padding-right:10px" ;>
                            <a class="nav-link login_header" href="<?php echo base_url();?>welcome/login"
                                style="color:#10B981;font-weight:bold;"> Login
                            </a>
                        </li>
                        <!-- <li class="nav-item" style="padding-right:10px" ;>
                            <a class="nav-link fs-5 Signup_header" href="<?php echo base_url();?>welcome/signup"
                                style="color:#10B981;font-weight:bold;">Signup</a>
                        </li> -->
                        <?php }?>
                    </ul>
                    
                </div>
            </nav>
        </div>
    </div>
    <!-- </nav> -->










</body>

</html>
<script>
"use strict";
/ Start of use strict /
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
</script>
<script>
$(document).ready(function() {
    $("#latitudeArea").addClass("d-none");
    $("#longtitudeArea").addClass("d-none");
});

google.maps.event.addDomListener(window, 'load', initialize);

function initialize() {
    var input = document.getElementById('location');
    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
        $('#addshopdetail').modal('show');
        $('#latitude').val(place.geometry['location'].lat());
        $('#longitude').val(place.geometry['location'].lng());

        $("#latitudeArea").removeClass("d-none");
        $("#longtitudeArea").removeClass("d-none");
    });
}


</script>