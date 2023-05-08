<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


  <!-- icon add link -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



   <!-- map icon add link -->
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 
  
  
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }




  /* search icon bar css */
  .form-control:focus {
  box-shadow: none;
}

.form-control-underlined {
  border-width: 0;
  border-bottom-width: 1px;
  border-radius: 0;
  padding-left: 0;
}
 .btn{
	position: absolute;
	top: 0;
	right: 0;
	width: 60px;
	height: 100%;
	/* background: #10B981; */
	z-index: 1;
	cursor: pointer;
    border-radius:20px;
    coloor:white;
}


/*  categery css */
.button {
  background-color:white;
  border: 1px solid black;
  color: #888B97;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 2px 2px;
  cursor: pointer;
  border-radius: 15px;
  font-size: 10px;
  font-weight: bold;
  teat-align:center;

}

/*  */
.button5
{
    border-radius:30px;
    height:20px;
    font-size:10px;
    margin-left:30px;
    /* color:#6A983C; */
    background:#F4F8EC;

}


/* bike card css */
.card 
{
    border-radius:30px;

}


/* sub catery css */
#rcorners2 {
  border-radius: 100px;
  border: 2px solid #000000;
  padding: 10px; 
  width: 50px;
  height: 50px;  
  margin-left:30px;
  /* grid-template-columns: repeat(10,1fr); */
}
.description
{
  padding: 10px; 
  width: 50px;
  height: 50px;  
  margin-left:30px;
  font-size:10px;
  display:flex;
}









  </style>
</head>
<body>



  <!-- banner -->
  <div class="container">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url();?>assets/images/banner.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url();?>assets/images/banner.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url();?>assets/images/banner.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

  <!-- banner -->



  <div class="container">
    <div class="row">
    <p style="color: #F59E0B;"> -------Our Recomandation</p>
    </div>
   </div>


   <!-- feratured part add -->
   <div class="container">
    <div class="row">
        <div class="col-md-6">
        <p style="font-size:30px;color:#1B1C57;"> Featured </p>
</div>

<div class="col-md-6">
<div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
            <div class="input-group">
              <div class="input-group-prepend">
                <button  id="button-addon2" type="submit" class="btn btn-link text-warning"><i class="material-icons" style="font-size:20px;color:red">place</i>
</i></button>
              </div>
              <input type="search" placeholder="Search for the Product you want!"  aria-describedby="button-addon2" class="form-control border-0 bg-light"><button  style="border-radius:30px; color:white; background-color:#10B981;width:100px;height:40px;" class="button" >search <i class='fas fa-angle-right' style='font-size:10px;color:#10B981'></i></button> </p>
             
            </div>
          </div>
      </div>
    </div>
   </div>

   <!-- feratured part close -->



   
   <div class="container ">
  <div class="row text-center">
    <div class="col-lg-2  col-md-3 col-sm-6">
  <button class="button">
<img class="rounded-pill me-1" width="20" height="20" src="<?php echo base_url();?>assets/images/menu1.png" alt=""> &nbsp &nbsp <a href="https://www.w3schools.com" class="w3-btn w3-black">All</a> 
</button>
    </div>
    <div class="col-lg-3 col-md-5 col-sm-6">
  <button class="button">
  <img class="rounded-circle me-1" width="20" height="20" src="<?php echo base_url();?>assets/images/reusable1.png" alt="">  &nbsp <a href="https://www.w3schools.com" style="color:#888B97">Reusable parts and Product</a> 
</button>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-4">
  <button class="button">
  <img class="rounded-circle me-1" width="20" height="20" src="<?php echo base_url();?>assets/images/home1.png" alt="">  &nbsp <a href="https://www.w3schools.com" style="color:#888B97">Tuitions/Classes </a>
</button>
    </div>
<div class="col-lg-2  col-md-5 col-sm-4">
  <button class="button">
  <img class="rounded-circle me-1" width="20" height="20" src="<?php echo base_url();?>assets/images/work1.png" alt="">     <a href="https://www.w3schools.com"style="color:#888B97">Part-time Jobs</a>
 
</button>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-4">
  <button class="button">
  <img class="rounded-circle me-1" width="20" height="20" src="<?php echo base_url();?>assets/images/employee1.png" alt=""> &nbsp   <a href="https://www.w3schools.com" style="color:#888B97">Internships </a>
 </button>
    </div>
</div>
</div>



<!-- sub catery -->

<div class="container mt-5">
  <div class="row">
  <div class="col-lg-1 col-md-3  col-sm-6">
  <p id="rcorners2">
    <img src="<?php echo base_url();?>assets/images/menu1.png" alt="">
    <p class="description">All</p>
  </p>
 
  </div>
  <div class="col-lg-1 col-md-3  col-sm-6">
  <p id="rcorners2">
    <img src="<?php echo base_url();?>assets/images/Vector (1).png" alt="">
    <p class="description">Tours</p>
  </p>
  </div>

  <div class="col-lg-1 col-md-3 col-sm-6">
  <p id="rcorners2">
    <img src="<?php echo base_url();?>assets/images/Vector (4).png" alt="">
    <p class="description">Pets</p>
  </p>
  </div>


  <div class="col-lg-1 col-md-3  col-sm-6">
  <p id="rcorners2">
    <img src="<?php echo base_url();?>assets/images/Vector4.png" alt="">
    <p class="description">Apparels</p>
  </p>
  </div>


  <div class="col-lg-1  col-md-3  col-sm-6">
  <p id="rcorners2">
    <img src="<?php echo base_url();?>assets/images/Vector (3).png" alt="">
    <p class="description">Books & Magazines</p>
  </p>
  </div>

  <div class="col-lg-1  col-md-3  col-sm-6">
  <p id="rcorners2">
    <img src="<?php echo base_url();?>assets/images/vector3.png" alt="">
    <p class="description">Dairy Products</p>
  </p>
  </div>

  <div class="col-lg-1  col-md-3  col-sm-6">
  <p id="rcorners2">
    <img src="<?php echo base_url();?>assets/images/vectorr.png" alt="">
    <p class="description">Decoratie Items</p>
  </p>
  </div>
  <div class="col-lg-1  col-md-3  col-sm-6">
  <p id="rcorners2">
    <img src="<?php echo base_url();?>assets/images/Vector (5).png" alt="">
    <p class="description">Electronics</p>
  </p>
  </div>

  <div class="col-lg-1  col-md-3  col-sm-6">
  <p id="rcorners2">
    <img src="<?php echo base_url();?>assets/images/Vector (6).png" alt="">
    <p class="description">Fruits & Vegetables</p>
  </p>
  </div>

  
  <div class="col-lg-1  col-md-3  col-sm-6">
  <p id="rcorners2">
    <img src="<?php echo base_url();?>assets/images/vector10.png" alt="">
    <p class="description">Grocery Items</p>
  </p>
  </div>
  </div>
</div>









<div class="container mt-5">
  <div class="row">
    <div class=" col-lg-4  col-md-12 " >
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
            <div class="card">
              <img src="<?php echo base_url();?>assets/images/bike1.png" style="img-fluid" alt="" >
              <div class="card-body">
                <div class="row">
                  <div class="  col-md-6    col-sm-6">
                 <p style="font-size:18px;">Suzuki </p> 
                  </div>
                  <div class="   col-md-6 col-sm-6">
                  <i class='far fa-heart' style='font-size:12px;color:red'></i> &nbsp
                     <span style="font-size:10px;">$2500</span>
                      </div>

                  <div class="row">
                    <div class="col-12">
                   <p> Space for a small product description </p>
                    </div>
                 </div>
                </div>

                <div class="row">
                      <div class=" col-lg-4 col-md-4 col-sm-4" style="font-size:10px;">
                        <p>Fresheness</p>
                        <p>Model</p>
                        <p>Color</p>
                        <p><i class='fas fa-map-marker-alt' style='font-size:20px;color:red'></i></p>
                    </div>
                      <div class=" col-lg-8 col-md-8 col-sm-8" style="font-size:10px;">
                        <p>New (Extra fresh)</p>
                        <p>2015</p>
                        <p>Red</p>
                        <p>West India  <button  style="color:white; background-color:#46760A;" class="button" >Ads Detail <i class='fas fa-angle-right' style='font-size:10px;color:white'></i></button> </p>
                      </div>
                    </div>
 
              </div>
            </div>
          </div>

          
          <div class="col-lg-6  col-md-6  col-sm-6">
            <div class="card">
              <img src="<?php echo base_url();?>assets/images/bike1.png"  alt="">
              <div class="card-body">
              <div class="row">
                  <div class="  col-md-6    col-sm-6">
                 <p style="font-size:18px;">Suzuki </p> 
                  </div>
                  <div class="   col-md-6 col-sm-6">
                  <i class='far fa-heart' style='font-size:12px;color:red'></i> &nbsp
                     <span >$2500</span>
                     
                  </div>

                  
                  <div class="row">
                    <div class="col-12 ">
                   <p> Space for a small product description </p> 
                    </div>
                 </div>
                </div>

              
                <div class="row">
                      <div class=" col-lg-4 col-md-4 col-sm-4" style="font-size:10px;">
                        <p>Fresheness</p>
                        <p>Model</p>
                        <p>Color</p>
                        <p><i class='fas fa-map-marker-alt' style='font-size:20px;color:red'></i></p>
                      </div>
                      <div class=" col-lg-8 col-md-8 col-sm-8" style="font-size:10px;">
                        <p>New (Extra fresh)</p>
                        <p>2015</p>
                        <p>Red</p>
                        <p>West India  <button  style="color:white; background-color:#46760A;" class="button" >Ads Detail <i class='fas fa-angle-right' style='font-size:10px;color:white'></i></button> </p>
                      </div>
                    </div>
 

              </div>
            </div>
          </div>





          <div class="col-lg-6   col-sm-6 mt-3">
            <div class="card" style="height:600px;">
              <img src="<?php echo base_url();?>assets/images/bike1.png" alt="">
              <div class="card-body">

              <div class="row">
                  <div class="  col-md-6    col-sm-6">
                 <p style="font-size:18px;">Suzuki </p> 
                  </div>
                  <div class="   col-md-6 col-sm-6">
                  <i class='far fa-heart' style='font-size:12px;color:red'></i> &nbsp
                     <span >$2500</span>
                     
                  </div>
                  <div class="row">
                    <div class="col-12 ">
                    Space for a small product description 
                    </div>
                 </div>
                </div>
                <div class="row">
                      <div class="col-4">
                        <p>Fresheness</p>
                        <p>Model</p>
                        <p>Color</p>
                        <p><i class='fas fa-map-marker-alt' style='font-size:20px;color:red'></i></p>

                      </div>
                      <div class="col-8">
                        <p>New (Extra fresh)</p>
                        <p>2015</p>
                        <p>Red</p>
                        <p>West India  <button  style="color:white; background-color:#46760A;" class="button" >Ads Detail <i class='fas fa-angle-right' style='font-size:12px;color:white'></i></button> </p>
                      </div>
                    </div>
 

              </div>
            </div>
          </div>
          <div class="col-lg-6   col-sm-6 mt-3">
            <div class="card" style="height:600px;">
              <img src="<?php echo base_url();?>assets/images/bike1.png" alt="">
              <div class="card-body">
              <div class="row">
                  <div class="  col-md-6    col-sm-6">
                 <p style="font-size:18px;">Suzuki </p> 
                  </div>
                  <div class="   col-md-6 col-sm-6">
                  <i class='far fa-heart' style='font-size:12px;color:red'></i> &nbsp
                     <span >$2500</span>
                     
                  </div>
                  <div class="row">
                    <div class="col-12 ">
                    Space for a small product description 
                    </div>
                 </div>
                </div>
                <div class="row">
                      <div class="col-4">
                        <p>Fresheness</p>
                        <p>Model</p>
                        <p>Color</p>
                        <p><i class='fas fa-map-marker-alt' style='font-size:20px;color:red'></i></p>

                      </div>
                      <div class="col-8">
                        <p>New (Extra fresh)</p>
                        <p>2015</p>
                        <p>Red</p>
                        <p>West India  <button  style="color:white; background-color:#46760A;" class="button" >Ads Detail <i class='fas fa-angle-right' style='font-size:12px;color:white'></i></button> </p>
                      </div>
                    </div>
 

              </div>
            </div>
          </div>
          <div class="col-lg-6   col-sm-6 mt-3">
            <div class="card" style="height:600px;">
              <img src="<?php echo base_url();?>assets/images/bike1.png" alt="">
              <div class="card-body">
              <div class="row">
                  <div class="  col-md-6    col-sm-6">
                 <p style="font-size:18px;">Suzuki </p> 
                  </div>
                  <div class="   col-md-6 col-sm-6">
                  <i class='far fa-heart' style='font-size:12px;color:red'></i> &nbsp
                     <span >$2500</span>
                     
                  </div>
                  <div class="row">
                    <div class="col-12 ">
                    Space for a small product description 
                    </div>
                 </div>
                </div>
                <div class="row">
                      <div class="col-4">
                        <p>Fresheness</p>
                        <p>Model</p>
                        <p>Color</p>
                        <p><i class='fas fa-map-marker-alt' style='font-size:20px;color:red'></i></p>

                      </div>
                      <div class="col-8">
                        <p>New (Extra fresh)</p>
                        <p>2015</p>
                        <p>Red</p>
                        <p>West India  <button  style="color:white; background-color:#46760A;" class="button" >Ads Detail <i class='fas fa-angle-right' style='font-size:12px;color:white'></i></button> </p>
                      </div>
                    </div>
 

              </div>
            </div>
          </div>
          <div class="col-lg-6   col-sm-6 mt-3">
            <div class="card" style="height:600px;">
              <img src="<?php echo base_url();?>assets/images/bike1.png" alt="">
              <div class="card-body">
              <div class="row">
                  <div class="  col-md-6    col-sm-6">
                 <p style="font-size:18px;">Suzuki </p> 
                  </div>
                  <div class="   col-md-6 col-sm-6">
                  <i class='far fa-heart' style='font-size:12px;color:red'></i> &nbsp
                     <span >$2500</span>
                     
                  </div>
                  <div class="row">
                    <div class="col-12 ">
                    Space for a small product description 
                    </div>
                 </div>
                </div>
                <div class="row">
                      <div class="col-4">
                        <p>Fresheness</p>
                        <p>Model</p>
                        <p>Color</p>
                        <p><i class='fas fa-map-marker-alt' style='font-size:20px;color:red'></i></p>

                      </div>
                      <div class="col-8">
                        <p>New (Extra fresh)</p>
                        <p>2015</p>
                        <p>Red</p>
                        <p>West India  <button  style="color:white; background-color:#46760A;" class="button" >Ads Detail <i class='fas fa-angle-right' style='font-size:12px;color:white'></i></button> </p>
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








 
</body>
</html>
