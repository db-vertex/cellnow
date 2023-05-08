<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Checkout example · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>
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
  opacity: 0.75;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: 13px;
  text-align: -webkit-center;
}
.my-box {
        width: 100px;
        height: 100px;
        margin-top:24%;
        background: #FFFFFF;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        text-align: -webkit-center;
        border-radius:50%;
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
 .images_small_box{
    text-align: -webkit-center;
  width: 78.17px;
  height: 96px;
  background: #DDFBEC;
  box-shadow: 0px 3px 3px 1px rgba(0, 0, 0, 0.25);
  padding-right:0px;
  padding-left:0px;
}

/* Set the position and spacing for the row element */
.images_small_box_row {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 96px;
  
}
.images_small_box__plus{
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
.post_input_fild{
  text-align-last:left;
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
.post_input_lable{
 font-family: 'Open Sans';
font-size: 18px;
font-weight: 700;
line-height: 25px;
letter-spacing: 0em;
text-align: left;
color:#000000;
}
.product_submit_button{
background: #10B981;
border-radius: 30px;
font-family: 'Open Sans';
font-size: 23px;
font-weight: 700;
line-height: 32px;
letter-spacing: 0em;
text-align: center;
color:#F5F5F5;
}
.product_submit_button:hover {
  background: #F5F5F5;
  color:#10B981;
border:1px solid #10B981;
}
.product_reset_button{
background: #F5F5F5;
border-radius: 30px;
font-family: 'Open Sans';
font-size: 23px;
font-weight: 700;
line-height: 32px;
letter-spacing: 0em;
text-align: center;
color:#10B981;
border:1px solid #10B981;
}
.product_reset_button:hover {
background: #10B981;
  color:#F5F5F5;
}
select {
  text-align: center;
  text-align-last: center;
}
option {
  text-align: left;
}

 @media (max-width: 992px) {
  .inputform_colume{
    margin-top: 8%;
  }
}
@media (max-width: 500px) {
  .inputform_colume{
    margin-top: 25%;
  }
}
@media (max-width: 400px){
  .inputform_colume{
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
.form-check-input{

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
.hiddens{
      display:none;
  }
  #ImgPreview{
    width: -webkit-fill-available;
    height: -webkit-fill-available;
    display:none;
  }
  #ImgPreview2,#ImgPreview3,#ImgPreview4, #ImgPreview5{
    width: -webkit-fill-available;
    height: -webkit-fill-available;
    display:none;
  }
  .btn-rmv1{
    font-size: 34px;
    float: right;
    position: absolute;
    margin-left: 85%;
    color:#10B981;
    display:none;
  }  
  .btn-rmv2, .btn-rmv3, .btn-rmv4, .btn-rmv5{
    font-size: 16px;
    float: right;
    position: absolute;
    color:#10B981;
    display:none;
    margin-left: 55px;
  }  
    
  </style>

    
    <!-- Custom styles for this template -->
    <link href="checkout.css" rel="stylesheet">
  </head>
  <body class="">
   

  <div class="py-4 text-center">
      <img class="d-block mx-auto mb-4" src="<?php echo base_url();?>assets/images/product_banner.png" alt="" width=100%>
    </div> 
  <div class="container">
  <main>
  <div class="breadcrumb_container container mb-5">
  <div class="row breadcrumb_row">
    <div class="breadcrumb_col col">
    <div class="breadcrumbs">
 <span class="me-2">Homepage</span>/<span class="ms-2">Post Ads </span>
   </div>
    </div>
  </div>
  </div>
     
  <form class="needs-validation" action="<?php echo base_url();?>welcome/saveproduct" method="post" novalidate>
    <div class="row g-5 justify-content-center">
   
      <div class=" offset-lg-1 col-lg-5">
        <div class=" images_container  mt-3 me-2">
          <div class=" images_row">
             <div class=" images_col mx-2">
              <i class="bi bi-x-circle-fill btn-rmv1 me-3 " id="removeImage1"></i>
              <img id="ImgPreview" src="" class="preview1" />
              <div class="box a">
              <div class="my-box" id="cover_images_box">
              <label class="pluse form-label" for="cover_images" class="btn">
                +
              </label>
              <input type="file" class="form-control-file form-control" id="cover_images" required>
              </div>
             </div>
            </div>
        </div>
        </div>
     
      <div class="row images_small_box_row ms-1 ">
     
        <div class="col-3 images_small_box m-2">
        <i class="bi bi-x-circle-fill btn-rmv2 me-3" id="removeImage2"></i>
        <img id="ImgPreview2" src="" class="preview2" />
        <label class="images_small_box__plus" id="images_small_box__plus_2" for="images_2" class="btn">+</label>
        <input type="file" class="form-control-file" id="images_2" style="visibility:hidden;"  >
        </div>
        <div class="col-3 images_small_box m-2">
        <i class="bi bi-x-circle-fill btn-rmv3 me-3" id="removeImage3"></i>
        <img id="ImgPreview3" src="" class="preview3" />
        <label class="images_small_box__plus" id="images_small_box__plus_3" for="images_3" class="btn">+</label>
        <input type="file" class="form-control-file" id="images_3" style="visibility:hidden;"  >
        </div>
        <div class="col-3 images_small_box m-2">
        <i class="bi bi-x-circle-fill btn-rmv4 me-3" id="removeImage4"></i>
        <img id="ImgPreview4" src="" class="preview4" />
        <label class="images_small_box__plus"  id="images_small_box__plus_4" for="images_4" class="btn">+</label>
        <input type="file" class="form-control-file" id="images_4" style="visibility:hidden;"  >
        </div>
        <div class="col-3 images_small_box m-2">
        <i class="bi bi-x-circle-fill btn-rmv5 me-3" id="removeImage5"></i>
        <img id="ImgPreview5" src="" class="preview5" />
        <label class="images_small_box__plus" id="images_small_box__plus_5" for="images_5" class="btn">+</label>
        <input type="file" class="form-control-file" id="images_5" style="visibility:hidden;"  >
        </div>
        </div>
        </div>
      <div class=" col-lg-5 order-lg-first inputform_colume">
    
          <div class="row g-3">

          <div class="col-12">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="Sponsor" id="inlineRadio1" value="0" checked>
            <label class="form-check-label" for="inlineRadio1">Normal</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="Sponsor" id="inlineRadio2" value="1">
            <label class="form-check-label" for="inlineRadio2">Bost Ads(Rs. 125)</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="Sponsor" id="inlineRadio3" value="2">
            <label class="form-check-label" for="inlineRadio3">Donate</label>
          </div>
            </div>

          <div class="col-12">
              <label for="firstName" class="form-label post_input_lable">Title</label>
              <input type="text" class="form-control post_input_fild" id="Title" name="Title" placeholder="Please Enter Title" required> 
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
              </select>
              <div class="invalid-feedback">
                Please provide a valid Category.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="subcategory" class="form-label post_input_lable">Sub Category</label>
              <select class="form-select post_input_fild" id="subcategory"  value="" name="subcategory"  required>
                <option value="">Select Sub Category</option>

              </select>
              <div class="invalid-feedback">
                Please provide a valid Sub Category.
              </div>
            </div>
           
            <div class="col-sm-12 hiddens" id="reusable_parts_Product_Brand_div">
              <label for="Product_Brand" class="form-label post_input_lable">Product Brand</label>
              <input type="text" class="form-control post_input_fild" id="Product_Brand" name="Product_Brand"  placeholder="Please Enter Product Brand" > 
              </select>
              <div class="invalid-feedback">
                Please provide a valid Product Brand.
              </div>
            </div>

            <div class="col-sm-6 hiddens" id="reusable_parts_Publisher_div">
              <label for="state" class="form-label post_input_lable">Publisher</label>
              <select class="form-select post_input_fild" id="reusable_parts_Publisher" name="reusable_parts_Publisher">
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
              <select class="form-select post_input_fild" id="reusable_parts_Select_Type" name="reusable_parts_Select_Type">
                <option value="">Select Type</option>
                <option value="Product/Desktop">Product/Desktop</option>
                <option value="parts">parts</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid Select Type.
              </div>
            </div>


            <div class="col-sm-6 hiddens" id="reusable_parts_product_Type_div">
              <label for="state" class="form-label post_input_lable">Product Type</label>
              <select class="form-select post_input_fild" id="reusable_parts_product_Type" name="reusable_parts_product_Type">
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
              <label for="reusable_parts_Laptops_product_Type" class="form-label post_input_lable">Product Type</label>
              <select class="form-select post_input_fild" id="reusable_parts_Laptops_product_Type" name="reusable_parts_Laptops_product_Type">
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
              <label for="reusable_parts_computer_product_Type" class="form-label post_input_lable">Product Type</label>
              <select class="form-select post_input_fild" id="reusable_parts_computer_product_Type" name="reusable_parts_computer_product_Type">
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
              <label for="reusable_parts_Electronics_product_Type" class="form-label post_input_lable">Product Type</label>
              <select class="form-select post_input_fild" id="reusable_parts_Electronics_product_Type" name="reusable_parts_Electronics_product_Type">
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
              <label for="reusable_parts_Home_Appliances_product_Type" class="form-label post_input_lable">Product Type</label>
              <select class="form-select post_input_fild" id="reusable_parts_Home_Appliances_product_Type" name="reusable_parts_Home_Appliances_product_Type">
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
              <label for="reusable_parts_Kitchen_Appliances_product_Type" class="form-label post_input_lable">Product Type</label>
              <select class="form-select post_input_fild" id="reusable_parts_Kitchen_Appliances_product_Type" name="reusable_parts_Kitchen_Appliances_product_Type">
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
              <label for="reusable_parts_Automobiles_product_Type" class="form-label post_input_lable">Product Type</label>
              <select class="form-select post_input_fild" id="reusable_parts_Automobiles_product_Type" name="reusable_parts_Automobiles_product_Type">
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
              <label for="reusable_parts_Furniture_product_Type" class="form-label post_input_lable">Product Type</label>
              <select class="form-select post_input_fild" id="reusable_parts_Furniture_product_Type" name="reusable_parts_Furniture_product_Type">
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
              <label for="reusable_parts_Musical_product_Type" class="form-label post_input_lable">Product Type</label>
              <select class="form-select post_input_fild" id="reusable_parts_Musical_product_Type" name="reusable_parts_Musical_product_Type">
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
              <label for="reusable_parts_Sports_product_Type" class="form-label post_input_lable">Product Type</label>
              <select class="form-select post_input_fild" id="reusable_parts_Sports_product_Type" name="reusable_parts_Sports_product_Type">
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
              <label for="reusable_parts_Publisher_type" class="form-label post_input_lable">Publisher Type</label>
              <select class="form-select post_input_fild" id="reusable_parts_Publisher_type" name="reusable_parts_Publisher_type">
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
              <label for="Tuitions_loction" class="form-label post_input_lable">Tuitions loction</label>
              <select class="form-select post_input_fild" id="Tuitions_loction" name="Tuitions_loction">
                <option value="">Select Tuitions loction</option>
                <option value="Clients home">Clients home</option>
                <option value="Tuition Center">Tuition Center</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid Tuitions loction.
              </div>
            </div>

            <div class="col-sm-6 hiddens" id="Tuitions_Education_Type_div">
              <label for="Tuitions_Education_Type" class="form-label post_input_lable">Education Type</label>
              <select class="form-select post_input_fild" id="Tuitions_Education_Type" name="Tuitions_Education_Type">
                <option value="">Select Education Type</option>
                <option value="Academic based">Academic based</option>
                <option value="Dance Classes">Dance Classes</option>
                <option value="Self-defence Classes">Self-defence Classes</option>
                <option value="Sports">Sports</option>
                <option value="Swimming Classes">Swimming Classes </option>
                <option value="Typing">Typing</option>
                <option value="Computer Classes">Computer Classes</option>
                <option value="Special abled Teachers">Special abled Teachers</option>
                <option value="Computer Classes">Others</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid Tuitions loction.
              </div>
            </div>

            <div class="col-sm-6 hiddens" id="school_eduction_div">
              <label for="school_eduction" class="form-label post_input_lable">Eduction category</label>
              <select class="form-select post_input_fild" id="school_eduction" name="school_eduction">
                <option value="">Select Eduction category</option>
                <option value="Playschool (Below 1st class)">Playschool (Below 1st class)</option>
                <option value="Junior (1 to 6th class)">Junior (1 to 6th class)</option>
                <option value="Senior (7th to 10th Classes)">Senior (7th to 10th Classes)</option>
                <option value="Higher Secondary (11th and 12th classes)">Higher Secondary (11th and 12th classes)</option>
                <option value="Competitive exams">Competitive exams</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid Eduction category.
              </div>
            </div>


            <div class="col-sm-6 hiddens" id="Tuitions_gender_div">
              <label for="Tuitions_gender" class="form-label post_input_lable">Gander</label>
              <select class="form-select post_input_fild" id="Tuitions_gender" name="Tuitions_gender">
                <option value="">Select Gander</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Both">Both</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid Tuitions loction.
              </div>
            </div>  

            <div class="col-sm-6 hiddens" id="Tuitions_Teachers_Experience_div">
              <label for="Tuitions_Teachers_Experience" class="form-label post_input_lable">Experience required</label>
              <select class="form-select post_input_fild" id="Tuitions_Teachers_Experience" name="Tuitions_Teachers_Experience">
                <option value="">Select Experience</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid Experience required .
              </div>
            </div>

            
            <div class="col-sm-6 hiddens" id="Tuitions_Teachers_type_div">
              <label for="Tuitions_Teachers_type" class="form-label post_input_lable">Teachers type</label>
              <select class="form-select post_input_fild" id="Tuitions_Teachers_type" name="Tuitions_Teachers_type">
                <option value="">Select type</option>
                <option value="Student">Student</option>
                <option value="Teacher">Teacher</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid Teachers type.
              </div>
            </div>


            <div class="col-sm-6 hiddens" id="Tuitions_Years_Experience_div"> 
            <label for="Tuitions_Years_Experience" class="form-label post_input_lable">Years of Experience</label>
              <input type="number" class="form-control post_input_fild" id="Tuitions_Years_Experience" name="Tuitions_Years_Experience" placeholder="Please Enter Years of Experience" > 
              <div class="invalid-feedback">
              Please select Years of Experience.
              </div>
            </div>

            <div class="col-sm-6 hiddens" id="Tuitions_Available_Timings_div">
            <label for="Tuitions_Available_Timings" class="form-label post_input_lable">Available Timings</label>
              <input type="text" class="form-control post_input_fild" id="Tuitions_Available_Timings" name="Tuitions_Available_Timings" placeholder="Please select Available_Timings" > 
              <div class="invalid-feedback">
              Please select Available Timings.
              </div>
            </div>

            
            <div class="col-sm-6 hiddens" id="Tuitions_person_Fees_div"> 
            <label for="Tuitions_person_Fees" class="form-label post_input_lable">Par Person Fees</label>
              <input type="number" class="form-control post_input_fild" id="Tuitions_person_Fees" name="Tuitions_person_Fees" placeholder="Please Enter Fees" > 
              <div class="invalid-feedback">
              Please Enter person Fees.
              </div>
            </div>

            <div class="col-sm-6 hiddens" id="Tuitions_Teachers_Qualifications_div"> 
            <label for="Tuitions_Teachers_Qualifications" class="form-label post_input_lable">Teachers Qualifications</label>
              <input type="text" class="form-control post_input_fild" id="Tuitions_Teachers_Qualifications" name="Tuitions_Teachers_Qualifications" placeholder="Please Enter Teachers Qualifications" > 
              <div class="invalid-feedback">
              Please Enter Teachers Qualifications.
              </div>
            </div> 
              
            <div class="col-sm-6 hiddens" id="Tuitions_Joining_criteria_div"> 
            <label for="Tuitions_Joining_criteria" class="form-label post_input_lable">Joining criteria</label>
              <input type="text" class="form-control post_input_fild" id="Tuitions_Joining_criteria" name="Tuitions_Joining_criteria" placeholder="Please Enter Teachers Qualifications" > 
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
            <label for="job_Office_Address" class="form-label post_input_lable">Office Address</label>
              <input type="text" class="form-control post_input_fild" id="job_Office_Address" name="job_Office_Address" placeholder="Please Enter Office Address" > 
              <div class="invalid-feedback">
              Please Enter Office Address.
              </div>
            </div>

            <div class="col-sm-6 hiddens" id="Job_type_div">
              <label for="Job_type" class="form-label post_input_lable">Job Type</label>
              <select class="form-select post_input_fild" id="Job_type" name="Job_type">
                <option value="">Select Job Type</option>
                <option value="Photographer">Photographer</option>
                <option value="Videographer">Videographer</option>
                <option value="Event planers">Event planers</option>
                <option value="Event execution helpers">Event execution helpers</option>
                <option value="Painters">Painters</option>
                <option value="Legal assistant">Legal assistant</option>
                <option value="Billing manager">Billing manager</option>
                <option value="Sales Executing">Sales Executing</option>
                <option value="Marketing Executive">Marketing Executive</option>
                <option value="Brand Manager">Brand Manager</option>
                <option value="Babysitter">Babysitter</option>
                <option value="Nurse">Nurse</option>
                <option value="Elderly Helpers">Elderly Helpers</option>
                <option value="Personal Drivers">Personal Drivers</option>
                <option value="Special abled helper and teacher">Special abled helper and teacher</option>
                <option value="NGO">NGO</option>
                <option value="Web development">Web development</option>
                <option value="Digital Marketing">Digital Marketing</option>
                <option value="App Development">App Development</option>
                <option value="SCO">SCO</option>
                <option value="Copywriter">Copywriter</option>
                <option value="Graphic Designer">Graphic Designer</option>
                <option value="Animator/Video game designers">Animator/Video game designers</option>
                <option value="Logo Designers">Logo Designers</option>
                <option value="Other jobs">Other jobs</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid Job Type.
              </div>
            </div>


            
            <div class="col-sm-6 hiddens" id="intership_Job_type_div">
              <label for="intership_Job_type" class="form-label post_input_lable">Job Type</label>
              <select class="form-select post_input_fild" id="intership_Job_type" name="intership_Job_type">
                <option value="">Select Job Type</option>
                <option value="Field Marketing">Field Marketing</option>
                <option value="Sales Manager">Sales Manager</option>
                <option value="Human Resources">Human Resources</option>
                <option value="Event Management">Event Management</option>
                <option value="Software">Software</option>
                <option value="Digital marketing">Digital marketing</option>
                <option value="Accounts executive">Accounts executive</option>
                <option value="Data Management">Data Management</option>
                <option value="Fashion design">Fashion design</option>
                <option value="Architecture">Architecture</option>
                <option value="Engineering">Engineering</option>
                <option value="Para legal">Para legal</option>
                <option value="Lawyer">Lawyer</option>
                <option value="Dental Assistant">Dental Assistant</option>
                <option value="Nurse">Nurse</option>
                <option value="Laboratory Technician">Laboratory Technician</option>
                <option value="Journalist">Journalist</option>
                <option value="Copywriter">Copywriter</option>
                <option value="Communications manager">Communications manager</option>
                <option value="Public relations specialist">Public relations specialist</option>
                <option value="Meeting/event planner">Meeting/event planner</option>
                <option value="Social media manager">Social media manager</option>
                <option value="Brand manager">Brand manager</option>
                <option value="Graphic designer">Graphic designer</option>
                <option value="Animator/video game designer">Animator/video game designer</option>
                <option value="Photographer">Photographer</option>
                <option value="Others">Others</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid Job Type.
              </div>
            </div>  

           
            <div class="col-sm-6 hiddens" id="intership_Skills_Qualifications_div">
            <label for="intership_Skills_Qualifications" class="form-label post_input_lable">Skills Qualifications</label>
              <input type="text" class="form-control post_input_fild" id="intership_Skills_Qualifications" name="intership_Skills_Qualifications" placeholder="Please Enter Skills Qualifications" > 
              <div class="invalid-feedback">
              Please Enter Skills Qualifications.
              </div>
            </div>

            <div class="col-sm-6 hiddens" id="intership_Need_Stipend_div">
              <label for="intership_Need_Stipend" class="form-label post_input_lable">Need Stipend</label>
              <select class="form-select post_input_fild" id="intership_Need_Stipend" name="intership_Need_Stipend">
                <option value="">Select Need Stipend</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              <div class="invalid-feedback">
                Please Select a valid Need Stipend.
              </div>
            </div>

            <div class="col-sm-6 hiddens" id="intership_Post_Vacant_div">
            <label for="intership_Post_Vacant" class="form-label post_input_lable">Post Vacant</label>
              <input type="text" class="form-control post_input_fild" id="intership_Post_Vacant" name="intership_Post_Vacant" placeholder="Please Enter Post Vacant" > 
              <div class="invalid-feedback">
              Please Enter Post Vacant.
              </div>
            </div>



            <div class="col-sm-6 hiddens" id="job_Experience_div">
            <label for="job_Experience" class="form-label post_input_lable">Experience</label>
              <input type="text" class="form-control post_input_fild" id="job_Experience" name="job_Experience" placeholder="Please Enter Experience" > 
              <div class="invalid-feedback">
              Please Enter Experience.
              </div>
            </div> 

            <div class="col-sm-6 hiddens" id="Job_Pitching_Experience_div">
              <label for="Job_Pitching_Experience" class="form-label post_input_lable">Experience</label>
              <select class="form-select post_input_fild" id="Job_Pitching_Experience" name="Job_Pitching_Experience">
                <option value="">Select Job Location</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              <div class="invalid-feedback">
                Please Select a valid Experience.
              </div>
            </div>
            
            <div class="col-sm-6 hiddens" id="job_Salery_div">
            <label for="job_Salery" class="form-label post_input_lable">Salery</label>
              <input type="number" class="form-control post_input_fild" id="job_Salery" name="job_Salery" placeholder="Please Enter Salery" > 
              <div class="invalid-feedback">
              Please Enter Salery.
              </div>
            </div>
         
            <div class="col-sm-6 hiddens" id="job_amount_div">
            <label for="job_amount" class="form-label post_input_lable">Amount</label>
              <input type="number" class="form-control post_input_fild" id="job_amount" name="job_amount" placeholder="Please Enter Amount" > 
              <div class="invalid-feedback">
              Please Enter Amount.
              </div>
            </div>
      

            <div class="col-sm-6 hiddens" id="Price_div">
            <label for="Price" class="form-label post_input_lable">Price</label>
              <input type="text" class="form-control post_input_fild" id="Price" name="Price" placeholder="Please Enter Price" > 
              <div class="invalid-feedback">
              Please Enter Price.
              </div>
            </div>

            <div class="col-sm-6 hiddens" id="use_years_div">
            <label for="Price" class="form-label post_input_lable">In use years</label>
              <input type="text"   class="form-control post_input_fild" name="use_years" placeholder="Please choose years" id="use_years" />
              <div class="invalid-feedback"> 
              Please choose  years.
              </div>
            </div>

            <div class="col-sm-6 hiddens" id="Have_Bill_div">
              <label for="Have_Bill" class="form-label post_input_lable">Have Bill</label>
              <select class="form-select post_input_fild" id="Have_Bill" name="Have_Bill" >
                <option value="">Select Have Bill</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid Have Bill.
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
              <label for="address" class="form-label post_input_lable">Why should the company select you. ?</label>
              <textarea type="intership_qustions" class="form-control post_input_fild" id="intership_qustions" name="intership_qustions"   rows="5" cols="50" placeholder="Enter Your Answer"></textarea>
              <div class="invalid-feedback">
                Please Enter Your Answer.
              </div>
            </div>


            <div class="col-12 hiddens" id="Tuitions_Positives_Outcomes_div">
              <label for="Tuitions_Positives_Outcomes" class="form-label post_input_lable">Positives Outcomes</label>
              <textarea type="text" class="form-control post_input_fild" id="Tuitions_Positives_Outcomes" name="Tuitions_Positives_Outcomes"   rows="5" cols="50" placeholder="Enter Positives Outcomes"></textarea>
              <div class="invalid-feedback">
                Please Enter Positives Outcomes.
              </div>
            </div>


            <div class="col-12 hiddens" id="Tuitions_Requirements_Teachers_div">
              <label for="Tuitions_Requirements_Teachers" class="form-label post_input_lable">Requirements for Teachers</label>
              <textarea type="text" class="form-control post_input_fild" id="Tuitions_Requirements_Teachers" name="Tuitions_Requirements_Teachers"   rows="5" cols="50" placeholder="Enter Requirements for Teachers"></textarea>
              <div class="invalid-feedback">
                Please Enter Requirements for Teachers.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="address" class="form-label post_input_lable">Town</label>
              <input type="text" class="form-control post_input_fild" id="address" name="Town"  placeholder="Enter Town" required>
              <div class="invalid-feedback">
                Please Enter Town.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="address" class="form-label post_input_lable">Postal code</label>
              <input type="text" class="form-control post_input_fild" id="address" name="Postal_code" placeholder="Enter Postal code" required>
              <div class="invalid-feedback">
                Please Enter Postal code.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label post_input_lable">Address</label>
              <input type="text" class="form-control post_input_fild" id="address" name="Address" placeholder="Enter Address" required>
              <div class="invalid-feedback">
                Please Enter Product Address.
              </div>
            </div>
 

            <div class="col-12">
              <label for="address" class="form-label post_input_lable">Description</label>
              <textarea type="text" class="form-control post_input_fild" id="address" name="Description"   rows="10" cols="50" placeholder="Enter Description" required></textarea>
              <div class="invalid-feedback">
                Please Enter Product Description.
              </div>
            </div>

            <div class="col-12">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
            Terms and Conditions 
            </label>
          </div>
          </div>
          <input  type="text" class="form-control "  name="user_id" id="user_id" placeholder="" value="<?php echo $user['user_id']; ?>"  rows="8" hidden/>
       <input type="text" class="form-control" name="latitude" id="latitude" hidden/>
         <input type="text" class="form-control" name="longitude" id="longitude" hidden/>
          <div class="my-4"> </div>

          <div class="col-sm-6 col-6 ">
          <button class="w-100 btn product_submit_button " type="submit">Submit</button>
            </div>

            <div class="col-sm-6 col-6">
            <button class="w-100 btn  product_reset_button " type="">Reset</button>
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
            if(stateID) {
                $.ajax({
                    url: '<?php echo base_url();?>welcome/subcategorydropdown/'+stateID,
                    type: "POST",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="subcategory"]').empty();
                         $('select[name="subcategory"]').append('<option  value="">Choose</option>');
                        $.each(data, function(key, value) {
                            $('select[name="subcategory"]').append('<option  value="'+ value.sub_id +'">'+ value.sub_category +'</option>');
                          
                        });
                    }
                });
            }else{
                $('select[name="subcategory"]').empty();
            }
        });
    });
</script>

<script>
    $('#Tuitions_Education_Type').change(function() {
      if ($(this).val() ==  "Academic based") {
          document.getElementById("school_eduction_div").style.display = "block";
          school_eduction.required = true;
          
      } 
      else{
          document.getElementById("school_eduction_div").style.display = "none";
      }
      });

      $('#Job_Location').change(function() {
        if ($(this).val() ==  "Office") {
            document.getElementById("job_Office_Address_div").style.display = "block";
            job_Office_Address.required = true;
            
        } 
        else{
            document.getElementById("job_Office_Address_div").style.display = "none";
        }
      });


 </script>
<script  type="text/javascript">
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



             document.getElementById("school_eduction_div").style.display = "none";
             document.getElementById("job_Office_Address_div").style.display = "none";
            $('#category').on('change.Price,use_years,Have_Bill,Warrenty', function() {
            $("#Price_div,#use_years_div,#Have_Bill_div,#Warrenty_div").toggle($(this).val() == 1);
           
             if($(this).val() == 1){
              Price.required = true; 
              use_years.required = true;  
              Have_Bill.required = true;  
              Warrenty.required = true;  
            }
            }).trigger('change.Price,use_years,Have_Bill,Warrenty'); 
            
            
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


             document.getElementById("school_eduction_div").style.display = "none";
          
            $('#subcategory').on('change.reusable_parts_Select_Type,Product_Brand', function() {
              $("#reusable_parts_Select_Type_div,#reusable_parts_Product_Brand_div").toggle( $(this).val() == 1||$(this).val() == 2|| $(this).val() == 3||$(this).val() == 4 ||
               $(this).val() == 5||$(this).val() == 6|| $(this).val() == 7||$(this).val() == 8|| $(this).val() == 9||$(this).val() == 10 ||$(this).val() == 16);
             if($(this).val() == 1||$(this).val() == 2|| $(this).val() == 3||$(this).val() == 4 ||
               $(this).val() == 5||$(this).val() == 6|| $(this).val() == 7||$(this).val() == 8|| $(this).val() == 9||$(this).val() == 10 ||$(this).val() == 16){
                reusable_parts_Select_Type.required = true;  
              Product_Brand.required = true;  
              }
            }).trigger('change.reusable_parts_Select_Type,Product_Brand');  

            
            $('#subcategory').on('change.reusable_parts_Publisher,reusable_parts_Publisher_type', function() {
                $("#reusable_parts_Publisher_div,#reusable_parts_Publisher_type_div").toggle($(this).val() == 11);
                if($(this).val() == 11){
                    reusable_parts_Publisher.required = true; 
                    reusable_parts_Publisher_type.required = true;   
                }
            }).trigger('change.reusable_parts_Publisher,reusable_parts_Publisher_type');  

            $('#subcategory').on('change.Tuitions_loction,Tuitions_gender,Tuitions_Education_Type,Tuitions_Available_Timings,Tuitions_Years_Experience,Tuitions_person_Fees,Tuitions_Teachers_Qualifications,Tuitions_Positives_Outcomes,Tuitions_Joining_criteria', function() {
              $("#Tuitions_loction_div,#Tuitions_gender_div,#Tuitions_Education_Type_div,#Tuitions_Available_Timings_div,#Tuitions_Years_Experience_div,#Tuitions_person_Fees_div,#Tuitions_Teachers_Qualifications_div,#Tuitions_Positives_Outcomes_div,#Tuitions_Joining_criteria_div").toggle($(this).val() == 12);
              if($(this).val() == 12){
                Tuitions_loction.required = true; 
                Tuitions_gender.required = true;  
                Tuitions_Education_Type.required = true; 
                Tuitions_Available_Timings.required = true;  
                Tuitions_Years_Experience.required = true;  
                Tuitions_person_Fees.required = true;  
                Tuitions_Teachers_Qualifications.required = true;    
                Tuitions_Positives_Outcomes.required = true;  
                Tuitions_Joining_criteria.required = true;       
              }
            }).trigger('change.Tuitions_loction,Tuitions_gender,Tuitions_Education_Type,Tuitions_Available_Timings,Tuitions_Years_Experience,Tuitions_person_Fees,Tuitions_Teachers_Qualifications,Tuitions_Positives_Outcomes,Tuitions_Joining_criteria'); 
            
         
            $('#subcategory').on('change.Tuitions_loction,Tuitions_gender,Tuitions_Education_Type,Tuitions_Available_Timings,Tuitions_Teachers_Experience,Tuitions_person_Fees,Tuitions_Teachers_type,Tuitions_Requirements_Teachers', function() {
              $("#Tuitions_loction_div,#Tuitions_gender_div,#Tuitions_Education_Type_div,#Tuitions_Available_Timings_div,#Tuitions_Teachers_Experience_div,#Tuitions_person_Fees_div,#Tuitions_Teachers_type_div,#Tuitions_Requirements_Teachers_div").toggle($(this).val() == 13);
              if($(this).val() == 13){
                Tuitions_loction.required = true; 
                Tuitions_gender.required = true;  
                Tuitions_Education_Type.required = true; 
                Tuitions_Available_Timings.required = true;  
                Tuitions_Teachers_Experience.required = true;       
                Tuitions_person_Fees.required = true;  
                Tuitions_Teachers_type.required = true;    
                Tuitions_Requirements_Teachers.required = true;  
              }
            }).trigger('change.Tuitions_loction,Tuitions_gender,Tuitions_Education_Type,Tuitions_Available_Timings,Tuitions_person_Fees,Tuitions_Teachers_type,Tuitions_Requirements_Teachers,Tuitions_Teachers_Experience'); 
            

            $('#subcategory').on('change.Job_type,Job_Location', function() {
                $("#Job_type_div,#Job_Location_div").toggle($(this).val() == 14|| $(this).val() == 15);
                if($(this).val() == 14|| $(this).val() == 15){
                  Job_type.required = true; 
                  Job_Location.required = true;   
                
                }
             }).trigger('change.Job_type,Job_Location');  


             
            $('#subcategory').on('change.intership_Job_type,Job_Location,intership_Need_Stipend,Tuitions_Available_Timings', function() {
                $("#intership_Job_type_div,#Job_Location_div,#intership_Need_Stipend_div,#Tuitions_Available_Timings_div").toggle($(this).val() == 17 || $(this).val() == 18);
                if($(this).val() == 17 || $(this).val() == 18){
                  intership_Job_type.required = true; 
                  Job_Location.required = true;   
                  intership_Need_Stipend.required = true;  
                  Tuitions_Available_Timings.required = true;    
                
                }
             }).trigger('change.intership_Job_type,Job_Location,intership_Need_Stipend,Tuitions_Available_Timings');  
             

             $('#subcategory').on('change.job_Salery,job_Experience', function() {
                $("#job_Salery_div,#job_Experience_div").toggle($(this).val() == 14);
                if($(this).val() == 14){
                  job_Salery.required = true;  
                  job_Experience.required = true;    
                }
             }).trigger('change.job_Salery,job_Experience');   

             $('#subcategory').on('change.job_amount,Job_Pitching_Experience', function() {
                $("#job_amount_div,#Job_Pitching_Experience_div").toggle($(this).val() == 15);
                if($(this).val() == 15){
                  job_amount.required = true;   
                  Job_Pitching_Experience.required = true;  
                }
             }).trigger('change.job_amount,Job_Pitching_Experience');  
             
             $('#subcategory').on('change.intership_qustions', function() {
                $("#intership_qustions_div").toggle($(this).val() == 17);
                if($(this).val() == 17){
                  intership_qustions.required = true;   
                }
             }).trigger('change.intership_qustions');  

             $('#subcategory').on('change.intership_Skills_Qualifications,intership_Post_Vacant', function() {
                $("#intership_Skills_Qualifications_div,#intership_Post_Vacant_div").toggle($(this).val() == 18);
                if($(this).val() == 18){
                  intership_Skills_Qualifications.required = true;   
                  intership_Post_Vacant.required = true;   
                }
             }).trigger('change.intership_Skills_Qualifications,intership_Post_Vacant');  
             


   }); 

  
  $('select[name="reusable_parts_Select_Type"]').on('change', function() {
    $('#reusable_parts_Select_Type').prop('required',false);         
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
            
            $('#reusable_parts_Select_Type,#subcategory').on('change.reusable_parts_product_Type', function() {
            
            $("#reusable_parts_product_Type_div").toggle( $("#reusable_parts_Select_Type").val() == "parts" && ($("#subcategory").val() == 1 || $("#subcategory").val() == 2));
            if($("#reusable_parts_Select_Type").val() == "parts" && ($("#subcategory").val() == 1 || $("#subcategory").val() == 2)){
                reusable_parts_product_Type.required = true;  
            }
            }).trigger('change.reusable_parts_product_Type');   

            $('#reusable_parts_Select_Type,#subcategory').on('change.reusable_parts_Laptops_product_Type', function() {
            $("#reusable_parts_Laptops_product_Type_div").toggle( $("#reusable_parts_Select_Type").val() == "parts" && $("#subcategory").val() == 3);
            if($("#reusable_parts_Select_Type").val() == "parts" && $("#subcategory").val() == 3){
              reusable_parts_Laptops_product_Type.required = true;  
            }
            }).trigger('change.reusable_parts_Laptops_product_Type');  

            $('#reusable_parts_Select_Type,#subcategory').on('change.reusable_parts_computer_product_Type', function() {
            $("#reusable_parts_computer_product_Type_div").toggle( $("#reusable_parts_Select_Type").val() == "parts" && $("#subcategory").val() == 4);
            if($("#reusable_parts_Select_Type").val() == "parts" && $("#subcategory").val() == 4){
              reusable_parts_computer_product_Type.required = true;  
            }
            }).trigger('change.reusable_parts_computer_product_Type');  


            $('#reusable_parts_Select_Type,#subcategory').on('change.reusable_parts_Electronics_product_Type', function() {
            $("#reusable_parts_Electronics_product_Type_div").toggle( $("#reusable_parts_Select_Type").val() !== "" && $("#subcategory").val() == 5);
            if($("#reusable_parts_Select_Type").val() !== "" && $("#subcategory").val() == 5){
              reusable_parts_Electronics_product_Type.required = true;  
            }
            }).trigger('change.reusable_parts_Electronics_product_Type');  


            $('#reusable_parts_Select_Type,#subcategory').on('change.reusable_parts_Home_Appliances_product_Type', function() {
            $("#reusable_parts_Home_Appliances_product_Type_div").toggle( $("#reusable_parts_Select_Type").val() !== "" && $("#subcategory").val() == 16);
            if($("#reusable_parts_Select_Type").val() !== "" && $("#subcategory").val() == 16){
              reusable_parts_Home_Appliances_product_Type.required = true;  
            }
            }).trigger('change.reusable_parts_Home_Appliances_product_Type'); 


            $('#reusable_parts_Select_Type,#subcategory').on('change.reusable_parts_Kitchen_Appliances_product_Type', function() {
            $("#reusable_parts_Kitchen_Appliances_product_Type_div").toggle( $("#reusable_parts_Select_Type").val() !== "" && $("#subcategory").val() == 6);
            if($("#reusable_parts_Select_Type").val() !== "" && $("#subcategory").val() == 6){
              reusable_parts_Kitchen_Appliances_product_Type.required = true;  
            }
            }).trigger('change.reusable_parts_Kitchen_Appliances_product_Type'); 


            $('#reusable_parts_Select_Type,#subcategory').on('change.reusable_parts_Automobiles_product_Type', function() {
            $("#reusable_parts_Automobiles_product_Type_div").toggle( $("#reusable_parts_Select_Type").val() !== "" && $("#subcategory").val() == 7);
            if($("#reusable_parts_Select_Type").val() !== "" && $("#subcategory").val() == 7){
              reusable_parts_Automobiles_product_Type.required = true;  
            }
            }).trigger('change.reusable_parts_Automobiles_product_Type');  

            $('#reusable_parts_Select_Type,#subcategory').on('change.reusable_parts_Furniture_product_Type', function() {
            $("#reusable_parts_Furniture_product_Type_div").toggle( $("#reusable_parts_Select_Type").val() !== "" && $("#subcategory").val() == 8);
            if($("#reusable_parts_Select_Type").val() !== "" && $("#subcategory").val() == 8){
              reusable_parts_Furniture_product_Type.required = true;  
            }
            }).trigger('change.reusable_parts_Furniture_product_Type'); 

            $('#reusable_parts_Select_Type,#subcategory').on('change.reusable_parts_Sports_product_Type', function() {
            $("#reusable_parts_Sports_product_Type_div").toggle( $("#reusable_parts_Select_Type").val() !== "" && $("#subcategory").val() == 9);
            if($("#reusable_parts_Select_Type").val() !== "" && $("#subcategory").val() == 9){
              reusable_parts_Sports_product_Type.required = true;  
            }
            }).trigger('change.reusable_parts_Sports_product_Type'); 

            $('#reusable_parts_Select_Type,#subcategory').on('change.reusable_parts_Musical_product_Type', function() {
            $("#reusable_parts_Musical_product_Type_div").toggle( $("#reusable_parts_Select_Type").val() !== "" && $("#subcategory").val() == 10);
            if($("#reusable_parts_Select_Type").val() !== "" && $("#subcategory").val() == 10){
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
