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
  margin-top: 50%;
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

opacity: 0.5;
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

@media (min-width: 200px) {
  .images_small_box_row {
  margin-top: 150%;
  }
}
@media (min-width: 300px) {
  .images_small_box_row {
  margin-top: 120%;
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
            <div class="box a">
            <div class="my-box">
            <label class="pluse" for="cover_images" class="btn">
              +
            </label>
            <input type="file" class="form-control-file" id="cover_images" style="visibility:hidden;"  >
            </div>
            </div>
            </div>
        </div>
        </div>
     
      <div class="row images_small_box_row ms-1 ">
     
        <div class="col-3 images_small_box m-2">
        <label class="images_small_box__plus" for="images_2" class="btn">+</label>
        <input type="file" class="form-control-file" id="images_2" style="visibility:hidden;"  >
        </div>
        <div class="col-3 images_small_box m-2">
        <label class="images_small_box__plus" for="images_3" class="btn">+</label>
        <input type="file" class="form-control-file" id="images_3" style="visibility:hidden;"  >
        </div>
        <div class="col-3 images_small_box m-2">
        <label class="images_small_box__plus" for="images_4" class="btn">+</label>
        <input type="file" class="form-control-file" id="images_4" style="visibility:hidden;"  >
        </div>
        <div class="col-3 images_small_box m-2">
        <label class="images_small_box__plus" for="images_5" class="btn">+</label>
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
              <label for="state" class="form-label post_input_lable">Publisher Type</label>
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



            <div class="col-sm-6">
            <label for="Price" class="form-label post_input_lable">Price</label>
              <input type="text" class="form-control post_input_fild" id="Price" name="Price" placeholder="Please Enter Price" required> 
              <div class="invalid-feedback">
              Please Enter Price.
              </div>
            </div>

            <div class="col-sm-6">
            <label for="Price" class="form-label post_input_lable">In use years</label>
              <input type="text"   class="form-control post_input_fild" name="use_years" placeholder="Please choose years" id="datepicker" required/>
              <div class="invalid-feedback"> 
              Please choose  years.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="state" class="form-label post_input_lable">Have Bill</label>
              <select class="form-select post_input_fild" id="state" name="Have_Bill" required>
                <option value="">Select Have Bill</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid Have Bill.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="state" class="form-label post_input_lable">Warrenty</label>
              <select class="form-select post_input_fild" id="state" name="Warrenty" required>
                <option value="">Select Warrenty</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid Warrenty.
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

      $("#datepicker").datepicker({
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
<script  type="text/javascript">
 $(document).ready(function() { 

   
  $('select[name="subcategory"]').on('change', function() {
            $('#reusable_parts_Select_Type').prop('required',false); 
            $('#Product_Brand').prop('required',false); 
            $('#reusable_parts_Publisher').prop('required',false); 

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
            }
            }).trigger('change.reusable_parts_Publisher,reusable_parts_Publisher_type');           
  });

  $('select[name="reusable_parts_Select_Type"]').on('change', function() {
            $('#reusable_parts_Select_Type').prop('required',false); 
            $('#reusable_parts_Publisher').prop('required',false); 
            $('#reusable_parts_product_Type').prop('required',false); 
            $('#reusable_parts_Laptops_product_Type').prop('required',false);  
            $('#reusable_parts_computer_product_Type').prop('required',false);
            $('#reusable_parts_Home_Appliances_product_Type').prop('required',false);  
            $('#reusable_parts_Electronics_product_Type').prop('required',false); 
             $('#reusable_parts_Kitchen_Appliances_product_Type').prop('required',false); 
             $('#reusable_parts_Automobiles_product_Type').prop('required',false); 
             $('#reusable_parts_Furniture_product_Type').prop('required',false); 
             $('#reusable_parts_Sports_product_Type').prop('required',false);
             $('#reusable_parts_Musical_product_Type').prop('required',false);
            
            
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
