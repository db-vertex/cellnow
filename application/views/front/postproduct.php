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
  width: 450px;
  height: 350px;
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
 background: #FFFFFF;
border: 1px solid #10B981;
border-radius: 20px; 
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
 @media (max-width: 992px) {
  .inputform_colume{
    margin-top: 8%;
  }
}
@media (min-width: 300px) {
  .images_small_box_row {
  margin-top: 70%;
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
     
   
    <div class="row g-5 justify-content-center">
      <div class=" offset-lg-1 col-lg-5 ">
       <div class=" images_container mt-3">
         <div class=" images_row">
            <div class=" images_col">
            <div class="box a">
            <div class="my-box">
            <div class="pluse">+</div>
            </div>
            </div>
            </div>
        </div>
        </div>
     
      <div class="row images_small_box_row ms-1 ">
        <div class="col-3 images_small_box m-2">
        <div class="images_small_box__plus">+</div>
        </div>
        <div class="col-3 images_small_box m-2">
        <div class="images_small_box__plus">+</div>
        </div>
        <div class="col-3 images_small_box m-2">
        <div class="images_small_box__plus">+</div>
        </div>
        <div class="col-3 images_small_box m-2">
        <div class="images_small_box__plus">+</div>
        </div>
        </div>
        </div>
      <div class=" col-lg-5 order-lg-first inputform_colume">
        <form class="needs-validation" novalidate>
          <div class="row g-3">

          <div class="col-12">
              <label for="firstName" class="form-label post_input_lable">Title</label>
              <input type="text" class="form-control post_input_fild" id="Title" placeholder="Please Enter Title" required> 
              <div class="invalid-feedback">
              Please Enter Title.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="state" class="form-label post_input_lable">Category</label>
              <select class="form-select post_input_fild" id="state" required>
                <option value="">Select Category</option>
                <option>California</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid Category.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="state" class="form-label post_input_lable">Sub Category</label>
              <select class="form-select post_input_fild" id="state" required>
                <option value="">Select Sub Category</option>
                <option>California</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid Sub Category.
              </div>
            </div>
           
            <div class="col-sm-12">
              <label for="state" class="form-label post_input_lable">Product Brand</label>
              <select class="form-select post_input_fild" id="state" required>
                <option value="">Select Product Brand</option>
                <option>California</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid Product Brand.
              </div>
            </div>


            <div class="col-12">
              <label for="address" class="form-label post_input_lable">Stock Quantity</label>
              <input type="text" class="form-control post_input_fild" id="address" placeholder="Enter Stock Quantity" required>
              <div class="invalid-feedback">
                Please Enter Stock Quantity.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label post_input_lable">Select Product Condition</label>
              <input type="text" class="form-control post_input_fild" id="address" placeholder="Enter Product Condition" required>
              <div class="invalid-feedback">
                Please Enter Product Condition.
              </div>
            </div>


            <div class="col-sm-6">
              <label for="address" class="form-label post_input_lable">Town</label>
              <input type="text" class="form-control post_input_fild" id="address" placeholder="Enter Town" required>
              <div class="invalid-feedback">
                Please Enter Town.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="address" class="form-label post_input_lable">Postal code</label>
              <input type="text" class="form-control post_input_fild" id="address" placeholder="Enter Postal code" required>
              <div class="invalid-feedback">
                Please Enter Postal code.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label post_input_lable">Address</label>
              <input type="text" class="form-control post_input_fild" id="address" placeholder="Enter Address" required>
              <div class="invalid-feedback">
                Please Enter Product Address.
              </div>
            </div>


            <div class="col-12">
              <label for="address" class="form-label post_input_lable">Description</label>
              <textarea type="text" class="form-control post_input_fild" id="address" rows="10" cols="50" required>Enter Description</textarea>
              <div class="invalid-feedback">
                Please Enter Product Description.
              </div>
            </div>
         
          <div class="my-4"> </div>

          <div class="col-sm-6">
          <button class="w-100 btn product_submit_button " type="submit">Submit</button>
            </div>

            <div class="col-sm-6">
            <button class="w-100 btn  product_reset_button " type="submit">Reset</button>
            </div>
            </div>
        </form>
      </div>
     
  
    </div>
  </main>

</div>




      <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
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
