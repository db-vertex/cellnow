<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style>
.btn:hover {
    color: var(--bs-btn-hover-color);
    background-color: #d1fae5;
    border-color: var(--bs-btn-hover-border-color);
}

.cursor-center {}

._1un4s {
    max-height: 200px;
    overflow-y: auto;
}

.details_img_cover {

    max-height: 367px;
    left: 114px;
    top: 588px;
    background: url(suzuki-gixxer-sf-150cc-bike-500x500.png);
    filter: drop-shadow(0px 0px 4.79774px #10B981);
    border-radius: 21px;
    min-width: 100%;
}

ul {
    list-style-type: none;
    padding: 0px;
    ;
}

.cover_img_div {
    text-align: center;
}

.details_img_box {
    min-width: 90.69px;
    max-width: 90.69px;
    max-height: 90.31px;
    min-height: 90.31px;
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

.img-size {
    max-height: 500px;
    min-height: 500px;


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
        padding-left: 5px;
        color: #898686;
    }


    .margin_top_css {
        margin-top: 3rem !important;
    }
}

@media (max-width: 499px) {
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

    .img-size {
        max-height: 200px;
        min-height: 200px;


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

    .img-size {
        max-height: 300px;
        min-height: 300px;


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
        padding-left: 14px;
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

    .img-size {
        max-height: 200px;
        min-height: 200px;
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
}
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script>
$(document).ready(function() {
    $("#Location").keyup(function() {
        $(".result > div [data-lat],[data-long]").show();
    });
});
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
        $div = $(this);
        var lat1 = place.geometry['location'].lat();
        var lon1 = place.geometry['location'].lng();

        $(".result > div [data-lat],[data-long]").hide().filter(function() {
            $div = $(this);
            var lat2 = parseFloat($(this).data("lat"))
            var lon2 = parseFloat($(this).data("long"))

            var R = 6371; // Radius of the earth in km
            var dLat = lat2 - lat1; // deg2rad below
            var dLon = lon2 - lon1;
            var a =
                Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                Math.cos(lat1) * Math.cos(lat2) *
                Math.sin(dLon / 2) * Math.sin(dLon / 2);
            var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
            var d = R * c; // Distance in km
            var f = d * (Math.PI / 180);



            return f <= 25;

            $("#latitudeArea").removeClass("d-none");
            $("#longtitudeArea").removeClass("d-none");
        }).show();
    });

}
</script>
<?php 
             $id = $this->uri->segment(3);
             $subcategory = get_subcategory_byid($id);
             //$category = get_categoryname_byid($id);
            

               ?>

<style>
#GFG {
    text-decoration: none;
}

.lead {
    background-color: rgba(241, 242, 235, 255);
    font-size: 14px;
}

.link {
    color: black;
    text-decoration: unset;


}

/*panel*/
.panel {
    border: none;
    box-shadow: none;
}



.panel-heading {
    border-color: #eff2f7;
    font-size: 16px;
    font-weight: 300;

}

.panel-default {
    border-color: #eff2f7;
    font-size: 16px;
    font-weight: 300;
    border: 2px solid LightGrey;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 20px;
}

.panel-title {
    color: #2A3542;
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 0;
    margin-top: 0;
    font-family: 'Open Sans', sans-serif;
}


/*product list*/

.prod-cat li a {
    border-bottom: 1px dashed #d9d9d9;
}

.prod-cat li a {
    color: #3b3b3b;
}

.prod-cat li ul {
    margin-left: 30px;
}

.prod-cat li ul li a {
    border-bottom: none;
}

/*.prod-cat li ul li a:hover,.prod-cat li ul li a:focus, .prod-cat li ul li.active a , .prod-cat li a:hover,.prod-cat li a:focus, .prod-cat li a.active{*/
/*    background: none;*/
/*    color: #ff7261;*/
/*}*/

.pro-lab {
    margin-right: 20px;
    font-weight: normal;
}

.pro-sort {
    padding-right: 20px;
    float: left;
}

.pro-page-list {
    margin: 5px 0 0 0;
}

.product-list img {
    width: 100%;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
}

.product-list .pro-img-box {
    position: relative;
}

.adtocart {
    background: #fc5959;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    color: #fff;
    display: inline-block;
    text-align: center;
    border: 3px solid #fff;
    left: 45%;
    bottom: -25px;
    position: absolute;
}

.adtocart i {
    color: #fff;
    font-size: 25px;
    line-height: 42px;
}

.pro-title {
    color: #5A5A5A;
    display: inline-block;
    margin-top: 20px;
    font-size: 16px;
}

.product-list .price {
    color: #fc5959;
    font-size: 15px;
}

.pro-img-details {
    margin-left: -15px;
}

.pro-img-details img {
    width: 100%;
}

.pro-d-title {
    font-size: 16px;
    margin-top: 0;
}

.product_meta {
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
    padding: 10px 0;
    margin: 15px 0;
}

.product_meta span {
    display: block;
    margin-bottom: 10px;
}

.product_meta a,
.pro-price {
    color: #fc5959;
}

.pro-price,
.amount-old {
    font-size: 18px;
    padding: 0 10px;
}

.amount-old {
    text-decoration: line-through;
}

.quantity {
    width: 120px;
}

.pro-img-list {
    margin: 10px 0 0 -15px;
    width: 100%;
    display: inline-block;
}

.pro-img-list a {
    float: left;
    margin-right: 10px;
    margin-bottom: 10px;
}

.pro-d-head {
    font-size: 18px;
    font-weight: 300;
}

#no_product {
    display: none;
}

img.center {
    display: block;
    margin: 0 auto;
}


@media screen and (min-width: 992px) {
    .button_add_details {
        margin-top: 50%;
    }
}

.pagination {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem;
    justify-content: center;
}

.pagination>.active>a,
.pagination>.active>a:focus,
.pagination>.active>a:hover,
.pagination>.active>span,
.pagination>.active>span:focus,
.pagination>.active>span:hover {
    z-index: 3;
    color: #fff;
    cursor: default;
    background-color: #337ab7;
    border-color: #337ab7;
}

.pagination>li:last-child>a,
.pagination>li:last-child>span {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}

.pagination>li>a,
.pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}

.cut-list>li {

    margin-right: 55px;

    padding-bottom: 2px;
}

.deals-scroll-left {
    top: -35px;
    left: -0px;
    bottom: 0;
}
</style>

<style>
#loading {
    text-align: center;
    background: url('<?php echo base_url(); ?>assets/images/loader.gif') no-repeat center;
    height: 600px;
}

.list-group-item {
    position: relative;
    display: block;

    background-color: #fff;
    border: 3px solid rgba(0, 0, 0, .125);
    border-top: none;
}

a:hover,
a:visited,
a:link,
a:active {
    text-decoration: none;
}

.common_s {
    font-weight: 500;
}

.common_h {
    font-weight: bold;
}

.panel-default {
    background-image: url('https://dbvertex.com/classified/assets/images/arrow-down-sign-to-navigate.png');
    background-position-x: right;
    background-repeat: no-repeat;
    background-origin: content-box;
    padding-right: 20px;
}

.temporery_hide {
    display: none;
}

.fa-heart-o:before {
    content: "\f08a";
    font-size: 24px;
}

.fa-heart:before {
    content: "\f004";
    font-size: 24px;
}

@media screen and (min-width: 992px) {
    .add_datiles_button {
        margin-top: 40%;
    }

    .small_type {
        margin-top: 10px;
    }

    .small_location {
        margin-top: 10px;
    }

    .small_price {
        margin-top: 1.5rem !important
    }

}

@media screen and (max-width: 992px) {
    .small_decription {
        display: none;
    }

    .small_img {
        max-height: 100px;
    }

    .dddssaaf {
        margin-top: -15px;
        margin-left: 10px;
        margin-bottom: 10px;
    }

    .small_title {}

    .small_title {
        font-size: 16px;
    }

    .small_Condition {
        margin-bottom: 0px;
    }

    .small_type {
        margin-bottom: 0px;
        margin-top: 2px;
    }

    .small_location {
        margin-bottom: 0px;
        margin-top: 2px;
    }

    .small_price {
        margin-bottom: 0px;
        margin-top: 2px;
    }

    .small_loction_img {
        max-height: 20px;
    }

    .small_price_size {
        font-size: 17px;
        margin-left: -10px;
    }

    .add_datiles_button {
        max-width: fit-content;
    }

}

.Categories_header {
    padding-bottom: 0px;
    border-bottom: 6px solid #10B981;
    width: fit-content;
}

.icon_slider {
    flex: 0 0 auto;
    width: 3.333333%;
}

.icon_cetgory {
    flex: 0 0 auto;
    width: 91.333333%;
}

.price-input {
    width: 100%;

    margin: 30px 0 35px;
}

.price-input .field {
    display: flex;
    width: 100%;
    height: 45px;
    align-items: center;
}

.field input {
    width: 100%;
    height: 100%;
    outline: none;
    font-size: 19px;
    margin-left: 2px;
    border-radius: 5px;
    text-align: center;
    border: 1px solid #999;
    -moz-appearance: textfield;
}

input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
}

.price-input .separator {
    width: 10px;
    display: flex;
    font-size: 19px;
    align-items: center;
    justify-content: center;
}

.slider {
    height: 5px;
    position: relative;
    background: #ddd;
    border-radius: 5px;
}

.slider .progress {
    height: 100%;
    left: 0%;
    right: 0%;
    position: absolute;
    border-radius: 5px;
    background: #17a2b8;
}

.range-input {
    position: relative;
}

.range-input input {
    position: absolute;
    width: 100%;
    height: 5px;
    top: -5px;
    background: none;
    pointer-events: none;
    -webkit-appearance: none;
    -moz-appearance: none;
}

input[type="range"]::-webkit-slider-thumb {
    height: 17px;
    width: 17px;
    border-radius: 50%;
    background: #17a2b8;
    pointer-events: auto;
    -webkit-appearance: none;
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
}

input[type="range"]::-moz-range-thumb {
    height: 17px;
    width: 17px;
    border: none;
    border-radius: 50%;
    background: #17a2b8;
    pointer-events: auto;
    -moz-appearance: none;
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
}

/* Support */
.support-box {
    top: 2rem;
    position: relative;
    bottom: 0;
    text-align: center;
    display: block;
}

.b-btn {
    color: white;
    text-decoration: none;
    font-weight: bold;
}

.b-btn.paypal i {
    color: blue;
}

.b-btn:hover {
    text-decoration: none;
    font-weight: bold;
}

.b-btn i {
    font-size: 20px;
    color: yellow;
    margin-top: 2rem;
}
</style>

<!-- <div class="container-fluid home_background" style=" margin-top: 125px;">
    <div class="container px-0">
        <div id="carouselExampleControlss" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php  $id = $this->uri->segment(3); 
    ?>
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
    </div><br>
</div> -->



<!-- search bar -->
<div class="container" style=" margin-top: 125px;">
    <div class="row">
        <div class="col-lg-7 col-md-5 col-sm-4 ">
            <p style="font-size:30px;color:#1B1C57;"> </p>
        </div>
        <div class="col-lg-5 col-md-7 col-sm-8">
            <div class="search_wrap search_wrap_6 m-0">
                <div class="search_box">


                    <input type="search" name="anything" class="form-control rounded-5 search"
                        placeholder="Search for the Product you want!" aria-label="Search"
                        aria-describedby="search-addon" style="padding:12px 22px" />
                    <button type="submit" class="btn btn-success rounded-5 search"
                        style="padding:6px 10px">search</button>

                </div>
                <div class="row">
                    <div id="display"></div>



                </div>
            </div>
        </div>
    </div>
</div><br>

<!-- new -->
<div class="container ">
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
                    <div class="col-10 pe-0 icon_cetgory">
                        <div class="va-carrousel-flexbox_most" style="padding-bottom: 10px;">

                            <?php

              $category = get_all_category();

              foreach ($category as $key => $cat) {


                ?>
                            <div class="va-card cut-list mt-2">
                                <a href="<?php echo base_url();?>welcome/donatefillter_product/<?php echo $cat->id;?>"
                                    <?php if($id== $cat->id){ ?>style="background:#d1fae5;" <?php }else{ echo""; } ?>
                                    class="new<?php echo $cat->id; ?> btn border  rounded-pill" role="button"><img
                                        class="me-1" style="height:30px; width:30px;"
                                        src="<?php echo base_url();?>uploads/category/<?php echo $cat->icon;?>" alt="">
                                    &nbsp
                                    <?php echo $cat->category; ?> </a>

                                </li>
                            </div>
                            <?php }  ?>
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
                        <div class="va-carrousel-flexbox" id="sub-list">
                            <?php
					  $cateory =  $this->uri->segment(3);
                     $sub_ = '';
                     if($cateory==8){
                        $subcategory = get_all_product_type();  
                        
                     }
                     else{
                        $subcategory = get_producttype_byid($cateory);  
                     }
                      
					  
					  foreach($subcategory as $sub){
					?>

                            <div class="va-card va-card_category mt-2 px-0" style="">
                                <p style="text-align:center;" class="my-auto pouler_Categories "
                                    <?php if ($category == 1 || $category==5 || $category==6 || $category==7) { ?>
                                    onclick="return getproduct( <?php echo $sub->subcategory_id; ?>,<?php echo $cateory; ?>)"
                                    <?php } else { ?>
                                    onclick="return getproduct( <?php echo $sub->id; ?>,<?php echo $cateory; ?>)"
                                    <?php } ?>>

                                    <img  width="41" height="41" class="<?php  if($sub->id==7 || $sub->id==13 || $sub->id==43 || $sub->id==53 || $sub->id==77 || $sub->id==87 || $sub->id==90 || $sub->id==39){ ?> select <?php } ?>btn-change common_selector sub_category sub_new<?php echo $sub->id; ?>"
                                        data-sub-id="<?php if ($category == 1) { echo $sub->subcategory_id; } else{ echo $sub->id; } ?>"
                                        src="<?php echo base_url(); ?>uploads/shopcategory/<?php echo $sub->icon;?>"
                                        alt="">
                                    <center style="color:black; font-size:12px; font-weight:500">
                                        <?php echo $sub->product_type; ?></center>
                                </p>

                            </div>

                            <?php 
					
                }
               ?>

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




<div class="container mb-5">
    <div class="row">
        <div class="col-md-3">

            <br />
            <center>
                <h5>Filters</h5>
            </center>
            <br />

            <?php
					  $cateory =  $this->uri->segment(3);
                      if($cateory!=4){
                        ?>
            <div class="list-group m-2 mx-3 d-none">
                <div class="price-input">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-md-12 col-6 m-0">
                            <div class="field mb-2">
                                <span>Min </span>
                                <input type="number" class="input-min input_price ms-2" id="hidden_minimum_price"
                                    value="1">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-12 col-6 ms-0">
                            <div class="field mb-2">
                                <span>Max </span>
                                <input type="number" class="input-max input_price ms-2" id="hidden_maximum_price"
                                    value="100000">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider">
                    <div class="progress"></div>
                </div>
                <div class="range-input">
                    <input type="range" class="range-min" id="hidden_minimum_price" min="0" max="10000" value="1"
                        step="100">
                    <input type="range" class="range-max" id="hidden_maximum_price" min="0" max="10000" value="100000"
                        step="100">
                </div>
            </div>


            <?php } ?>




            <?php if($cateory == 1 )
                { ?>
            <div class="panel-group mt-4 ">
                <div class="panel panel-default">
                    <div class="panel-heading ">
                        <a data-toggle="collapse" class="under" href="#TYPEs">
                            <h4 class="panel-title common_h ">
                                BRAND
                            </h4>
                        </a>
                    </div>
                    <div id="TYPEs" class="panel-collapse collapse">
                        <div class="list-group mt-2">

                            <input type="text"
                                style="border-left:none; border-top:none; border-right:none; margin-bottom: 15px;"
                                id="myInput" onkeyup="filterFunction()" class="cursor-center "
                                placeholder="Search Brand" value="">
                            <i class="fa fa-search" aria-hidden="true" style="margin-top: -36px; font-size:20px; text-align: right;
"></i>

                            <?php
// Sample array of brands for demonstration purposes
$brands = array(
    "Acer", "Alcatel", "Allview", "Amazon", "Amoi", "Apple", "Archos", "Asus", "AT&T", "Benefon", "BenQ",
    "BenQ-Siemens", "Bird", "BlackBerry", "Blackview", "BLU", "Bosch", "BQ", "Casio", "Cat", "Celkon", "Chea",
    "Coolpad", "Dell", "Doogee", "Emporia", "Energizer", "Ericsson", "Eten", "Fairphone", "Fujitsu Siemens",
    "Garmin-Asus", "Gigabyte", "Gionee", "Google", "Haier", "Honor", "HP", "HTC", "Huawei", "mate", "mobile",
    "Icemobile", "Infinix", "Innostream", "iNQ", "Intex", "Jolla", "Karbonn", "Kyocera", "Lava", "LeEco", "Lenovo",
    "LG", "Maxon", "Maxwest", "Meizu", "Micromax", "Microsoft", "Mitac", "Mitsubishi", "Modu", "Motorola", "MWg",
    "NEC", "Neonode", "NIU", "Nokia", "Nothing", "Nvidia", "O2", "OnePlus", "Oppo", "Orange", "Palm", "Panasonic",
    "Pantech", "Parla", "Philips", "Plum", "Posh", "Prestigio", "QMobile", "Qtek", "Razer", "Realme", "Sagem",
    "Samsung", "Sendo", "Sewon", "Sharp", "Siemens", "Sonim", "Sony", "Sony Ericsson", "Spice", "T-Mobile", "TCL",
    "Tecno", "Tel.Me.", "Telit", "Thuraya", "Toshiba", "Ulefone", "Unnecto", "Vertu", "verykool", "Vivo", "VK Mobile",
    "Vodafone", "Wiko", "WND", "XCute", "Xiaomi", "XOLO", "Yezz", "Yota", "YU", "ZTE"
);
?>

                            <!-- Loop through the brands array and generate checkboxes with labels -->
                            <div id="myDropdown">
                                <ul class="_1un4s">
                                    <?php foreach ($brands as $brand) : ?>
                                    <li>
                                        <label>
                                            <input type="checkbox" class="common_select brand"
                                                value="<?php echo $brand; ?>">
                                            <?php echo ucfirst($brand); ?>
                                        </label>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel-group mt-4 ">
                <div class="panel panel-default">
                    <div class="panel-heading ">
                        <a data-toggle="collapse" class="under" href="#TYPE">
                            <h4 class="panel-title common_h ">
                                Type
                            </h4>
                        </a>
                    </div>
                    <div id="TYPE" class="panel-collapse collapse">
                        <div class="list-group mt-2">
                            <?php 
				      $v = $select_Type->result_array();
                     if($v !== Array( )){ ?>

                            <?php
                     }
					
                      
					foreach($select_Type->result_array() as $row)
					{
					 
					?>
                            <div class="checkbox" style="padding:3px; border-top: none;">
                                <label class="common_s"><input type="checkbox" class="common_select select_type"
                                        value="<?php echo $row['Select_Type']; ?>">
                                    <?php echo ucfirst($row['Select_Type']); ?></label>
                            </div>
                            <?php 
					} 
					?>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
					
                }
               ?>
            <?php if($cateory == 2 )
                { ?>
            <div class="panel-group mt-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" href="#test">
                            <h4 class="panel-title common_h">
                                Sub Category
                            </h4>
                        </a>
                    </div>
                    <div id="test" class="panel-collapse collapse">
                        <div class="list-group mt-2">

                            <?php
					  $cateory =  $this->uri->segment(3);
               
                  
                     $sub_ = '';
                      $subcategory = get_subcategory_byid($cateory);  
					  
					  foreach($subcategory as $sub){
					?>

                            <div class="checkbox" style="padding:3px; border-top: none;">
                                <label class="common_s"><input type="checkbox" class="common_select sub_category"
                                        value="<?php echo $sub->sub_id;?>"> <?php  echo $sub->sub_category;?></label>
                            </div>
                            <?php 
					
					 }
					?>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
					
					 }
					?>

            <?php if ($cateory == 3)
                { ?>
            <div class="panel-group mt-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" href="#test">
                            <h4 class="panel-title common_h">
                                Sub Category
                            </h4>
                        </a>
                    </div>
                    <div id="test" class="panel-collapse collapse">
                        <div class="list-group mt-2">

                            <?php
					  $cateory =  $this->uri->segment(3);
               
             
                     $sub_ = '';
                      $subcategory = get_subcategory_byid($cateory);  
					  
					  foreach($subcategory as $sub){
					?>

                            <div class="checkbox" style="padding:3px; border-top: none;">
                                <label class="common_s"><input type="checkbox" class="common_select sub_category"
                                        value="<?php echo $sub->sub_id;?>"> <?php  echo $sub->sub_category;?></label>
                            </div>
                            <?php 
					
					 }
					?>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
					
					 }
					?>

            <?php if($cateory == 4 )
                { ?>
            <div class="panel-group mt-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" href="#test">
                            <h4 class="panel-title common_h">
                                Sub Category
                            </h4>
                        </a>
                    </div>
                    <div id="test" class="panel-collapse collapse">
                        <div class="list-group mt-2">

                            <?php
					  $cateory =  $this->uri->segment(3);
               
              
                     $sub_ = '';
                      $subcategory = get_subcategory_byid($cateory);  
					  
					  foreach($subcategory as $sub){
					?>

                            <div class="checkbox" style="padding:3px; border-top: none;">
                                <label class="common_s"><input type="checkbox" class="common_select sub_category"
                                        value="<?php echo $sub->sub_id;?>"> <?php  echo $sub->sub_category;?></label>
                            </div>
                            <?php 
					
					 }
					?>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
		    	} 
		    	
		  
			
			?>

            <?php if($cateory == 5 )
                { ?>
            <div class="panel-group mt-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" href="#test">
                            <h4 class="panel-title common_h">
                                Filter
                            </h4>
                        </a>
                    </div>
                    <div id="test" class="panel-collapse collapse">
                        <div class="list-group mt-2">



                            <div class="checkbox" style="padding:3px; border-top: none;">
                                <label class="common_s"><input type="checkbox" class="common_select filter"
                                        value="Rent">
                                    Rent</label>

                            </div>
                            <div class="checkbox" style="padding:3px; border-top: none;">
                                <label class="common_s"><input type="checkbox" class="common_select filter"
                                        value="Sale">
                                    Sale</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
		    	} 
		    	
		  
			
			?>
            <?php if($cateory == 6 )
                { ?>
            <div class="panel-group mt-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" href="#test">
                            <h4 class="panel-title common_h">
                                Filter
                            </h4>
                        </a>
                    </div>
                    <div id="test" class="panel-collapse collapse">
                        <div class="list-group mt-2">



                            <div class="checkbox" style="padding:3px; border-top: none;">
                                <label class="common_s"><input type="checkbox" class="common_select filter"
                                        value="Rent">
                                    Rent</label>

                            </div>
                            <div class="checkbox" style="padding:3px; border-top: none;">
                                <label class="common_s"><input type="checkbox" class="common_select filter"
                                        value="Sale">
                                    Sale</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
		    	} 
		    	
		  
			
			?>
            <?php if($cateory == 7 )
                { ?>
            <div class="panel-group mt-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" href="#test">
                            <h4 class="panel-title common_h">
                                Filter
                            </h4>
                        </a>
                    </div>
                    <div id="test" class="panel-collapse collapse">
                        <div class="list-group mt-2">
                            <div class="checkbox" style="padding:3px; border-top: none;">
                                <label class="common_s"><input type="checkbox" class="common_select filter"
                                        value="Rent">Rent</label>

                            </div>
                            <div class="checkbox" style="padding:3px; border-top: none;">
                                <label class="common_s"><input type="checkbox" class="common_select filter"
                                        value="Sale">Sale</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
		    	} 
		    	
		  
			
			?>


        </div>
        <div class="col-md-9">

            <br />

            <?php  if(!empty($products)){ ?>
            <div class="row" id="product_list">
                <?php
                  
            
                  if(!empty($products)){
             
              $i = 1;
              $j = 1;
            foreach($products as $pro){
            
                $wishlist = 0;
  if (!empty($user) && isset($user)) {
    $wishlit = get_wishlist($pro->id, $pro->category_id, $user["user_id"]);

    if (empty($wishlit)) {

      $wishlist = 0;


    } else {

      $wishlist = 1;

    }
  } else {
    $wishlist = 0;
  }
             $session_login_id  = $user['user_id'] ?? null;
              $product_user_id = $pro->user_id;
              if($session_login_id !== $product_user_id){
                  if($i > 0){
            
            ?>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4 post">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                            <a
                                href="<?php echo base_url();?>welcome/productdetail/<?php echo $pro->category_id; ?>/<?php echo $pro->id; ?>/<?php echo $pro->subcategory_id; ?>"><img
                                    src="<?php echo base_url(); ?><?php echo $pro->cover_img ?>"
                                    class="w-100 va-thumbnail" /></a>

                            <a href="#!">

                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="dress-name"><?php
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
                           
                           ?></p>
                                <a style="font-size:10px; color:#69d3b0; padding: 0px;"
                                    <?php if (empty($user) || !isset($user)) { ?>
                                    href="<?php echo base_url(); ?>welcome/login" <?php } else { ?>><i
                                        lass="bi bi-suit-heart" aria-hidden="true"
                                        style="font-size:10px; color:#69d3b0; padding: 0px;"
                                        data-uid="<?php echo $user["user_id"]; ?>" <?php } ?>
                                        class="<?php echo ($wishlist == 0) ? 'fa fa-heart-o' : 'fa fa-heart'; ?> dddssaaf dddssaaf<?php echo $pro->id; ?>"
                                        data-pid="<?php echo $pro->id; ?>" data-cid="<?php echo $pro->category_id; ?>"
                                        data-wishlist="<?php echo $wishlist; ?>"></i></a>
                                <?php if($pro->category_id != 4 && $pro->pay_type !=2){ ?>
                                <p class="details_price">₹<?php echo $pro->price; ?>
                                </p>

                                <?php } ?>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">

                                <p><?php
                           $title = $pro->Description;
                            if(strlen($title) <= 20)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,20) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?></p>

                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="<?php echo base_url();?>assets/images/location .png">
                                    </div>
                                    <div class="col-9 mt-1">
                                        <p tyle="color: #575757;"><?php
                           $title =$pro->address;
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

                                </div>

                                <a
                                    href="<?php echo base_url();?>welcome/productdetail/<?php echo $pro->category_id; ?>/<?php echo $pro->id; ?>/<?php echo $pro->subcategory_id; ?>">
                                    <p class="related_ads_details_button ">
                                        <spam class="related_ads_details_button_text">Product Detail</spam>
                                    </p>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <?php $i++;} } else if($j == 1) {?>

                <?php   }  $j++; };  ?>
                <?php }
              else {?>
                <center><img src="<?php echo base_url();?>assets/images/no_product.png"></center>
                <?php }?>
                <?php }else{ ?> <div class="row filter_data">
                    <?php } ?>
                </div>

                <br />
                <div align="center" id="pagination_link">

                </div>
            </div>



        </div>

    </div>
    <script>
   $(document).ready(function() {
    var category_id = 1;  // Change this to the appropriate category ID

    var defaultSubId;
    if (category_id === 1) {
        defaultSubId = 7;
    } else if (category_id === 2) {
        defaultSubId = 13;
    } else if (category_id === 3) {
        defaultSubId = 39;
    }

    var filters = get_filter('sub_category', defaultSubId);

});
    </script>
    <script>
    $(document).ready(function() {
        filter_data(1);

        function filter_data(page) {
            $('.filter_data').html('<div id="loading" style="" ></div>');
            document.getElementById("pagination_link").style.display = "none";
            var action = 'fetch_data';
            //var page = 1;
            var minimum_price = $('#hidden_minimum_price').val();
            var maximum_price = $('#hidden_maximum_price').val();
            var select_type = get_select_type('select_type');
            var brand = get_brand('brand');
            var type = get_type_filter('sub_category');
            var rent_filter = get_rent_filter('filter');

            var search = get_search('search');
            var donate = "donate_fillter";
            var sub_category = get_filter('sub_category');


            $.ajax({
                url: "<?php echo base_url(); ?>welcome/fetch_data/" + page,
                method: "POST",
                dataType: "JSON",
                data: {
                    action: action,
                    minimum_price: minimum_price,
                    maximum_price: maximum_price,
                    sub_category: sub_category,
                    brand: brand,
                    select_type: select_type,
                    type: type,
                    search: search,
                    donate: donate,
                    rent_filter: rent_filter
                },
                success: function(data) {
                    document.getElementById("pagination_link").style.display = "block";
                    $('.filter_data').html(data.product_list);
                    $('#pagination_link').html(data.pagination_link);
                }
            })
        }

        var selectedSubId = null;

        function get_filter(class_name, defaultSubId) {
            var filter = [];

            if (class_name === 'sub_category') {
                if (defaultSubId !== null) {
                    filter.push(defaultSubId);
                }
            } else {
                $('.' + class_name + ':checked').each(function() {
                    filter.push($(this).val());
                });
            }
            return filter;
        }


        function get_type_filter(class_name) {
            var filter = [];
            $('.' + class_name + ':checked').each(function() {
                filter.push($(this).val());

            });
            console.log(filter)
            return filter;
        }

        function get_rent_filter(class_name) {
            var filter = [];
            $('.' + class_name + ':checked').each(function() {
                filter.push($(this).val());

            });
            console.log(filter)
            return filter;
        }

        function get_brand(class_name) {
            var filter = [];
            $('.' + class_name + ':checked').each(function() {
                filter.push($(this).val());

            });
            console.log(filter)
            return filter;
        }

        function get_select_type(class_name) {
            var filter = [];
            $('.' + class_name + ':checked').each(function() {
                filter.push($(this).val());

            });
            console.log(filter)
            return filter;
        }


        $(document).on('click', '.sub_category', function() {
            var subId = $(this).data('sub-id');

            selectedSubId = subId;
            $('.sub_category').removeClass('active');
            $(this).addClass('active');
            filter_data(1);
        });

        function get_search(class_name) {
            var filter = [];
            $('input .search').each(function() {
                filter.push($(this).val());
            });

            return filter;
        }

        $(document).on("click", ".pagination li a", function(event) {
            event.preventDefault();
            var page = $(this).data("ci-pagination-page");
            filter_data(page);
        });



        $('.common_select').click(function() {
            filter_data(1);
        });





    });
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





    function getproduct(subcategory_id, category) {
        //var res = "";
        $("img").removeClass("select");
        $(".sub_new" + subcategory_id).addClass("select");
        var donate = "donate_fillter";


        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url('/welcome/getproduct'); ?>",
            data: {
                subcategory_id: subcategory_id,
                category_id: category,
                donate: donate
            },
            success: function(res) {


                $("#product_list").html(res);



                // $('#load_cound').val("10");

            }
        });

    }
    </script>
    <script>
    function filterFunction() {
        var input, filter, div, li, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdown");
        li = div.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            var txtValue = li[i].textContent || li[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
    </script>