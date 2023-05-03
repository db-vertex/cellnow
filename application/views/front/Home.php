<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
.button {
  background-color:white;
  border: #888B97;
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
  
}

/* .button:hover {
  background-color:#888B97;
} */



.button1 {
  background-color:white ;
  border: 1px solid;
  color: black;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 70%;
  border-color: black;
}
.button5 {border-radius: circle;}
.button1:hover {
  background-color:#888B97;
}


@media (max-width: 768px) {
    .carousel-inner .carousel-item > div {
        display: none;
    }
    .carousel-inner .carousel-item > div:first-child {
        display: block;
    }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
    display: flex;
}

/* display 3 */
@media (min-width: 768px) {
    
    .carousel-inner .carousel-item-right.active,
    .carousel-inner .carousel-item-next {
      transform: translateX(33.333%);
    }
    
    .carousel-inner .carousel-item-left.active, 
    .carousel-inner .carousel-item-prev {
      transform: translateX(-33.333%);
    }
}

.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left{ 
  transform: translateX(0);
}





</style>
    




  </head>
  <body>

    <!-- header sectioon slider -->
   <div class="container">
  <div id="banner" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url();?>images/banner.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url();?>images/banner.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url();?>images/banner.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#banner" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#banner" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!-- header -->



<div class="container">
    <div class="row">
    <p style="color: #F59E0B;"> -------Our Recomandation</p>
    </div>
   </div>

   <div class="container">
    <div class="row">
      <div class="col-md-8">
        <p style="font-size:30px" >Featured</p>
      </div>
      <div class="col-md-4">
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="rounded my-2 my-sm-0" type="submit">Search</button>
    </form>

    
      </div>
</div>
   </div>



  

<div class="container">
  <div class="row">
    <div class="col-md-2  col-sm-6">
  <button class="button">
<img class="rounded-pill me-1" width="20" height="20" src="<?php echo base_url();?>images/menu1.png" alt=""> &nbsp &nbsp All
</button>
    </div>
    <div class="col-md-3 col-sm-6">
  <button class="button">
  <img class="rounded-circle me-1" width="20" height="20" src="<?php echo base_url();?>images/reusable1.png" alt="">Reusable parts and Product
</button>
    </div>
    <div class="col-md-3 col-sm-6">
  <button class="button">
  <img class="rounded-circle me-1" width="20" height="20" src="<?php echo base_url();?>images/home1.png" alt="">  &nbsp Tuitions/Classes
</button>
    </div>
<div class="col-md-2  col-sm-6">
  <button class="button">
  <img class="rounded-circle me-1" width="20" height="20" src="<?php echo base_url();?>images/work1.png" alt="">   Part-time Jobs 
 
</button>
    </div>
    <div class="col-md-2 col-sm-6">
  <button class="button">
  <img class="rounded-circle me-1" width="20" height="20" src="<?php echo base_url();?>images/employee1.png" alt=""> &nbsp  Internships 
 </button>
    </div>
</div>
</div>





<div class="container mt-3">
<div class="row">
          <div class="col-lg-1 col-md-4  col-sm-6 ">
         <button class="button1 button5">
         <img class="rounded-pill me-1" width="20" height="20" src="<?php echo base_url();?>images/menu1.png" alt="">
        
         </button>
         <p class="description">All</p>
          </div>

          <div class="col-lg-1 col-md-4 col-sm-6 ">
         <button class="button1 button5">
         <img class="rounded-pill me-1"width="20" height="20" src="<?php echo base_url();?>images/Vector (1).png" alt="">
         
         </button>
         <p class="description">Tours</p>
          </div>

          
          <div class="col-lg-1 col-md-4  col-sm-6">
         <button class="button1 button5">
         <img class="rounded-pill me-1" width="20" height="20" src="<?php echo base_url();?>images/Vector (4).png" alt="">
         
         </button>
         <p class="description">Pets</p>
          </div>

          
          <div class="col-lg-1 col-md-4  col-sm-6 ">
         <button class="button1 button5">
         <img class="rounded-pill me-1" width="20" height="20" src="<?php echo base_url();?>images/Vector (4).png" alt="">
 </button>
        
         <p class="description">Apparels</p>
          </div>

          
          <div class="col-lg-1 col-md-4   col-sm-6 ">
         <button class="button1 button5">
         <img class="rounded-pill me-1" width="20" height="20" src="<?php echo base_url();?>images/Vector (3).png" alt="">
       
         </button>
         <p class="description">Books & Magazines</p>
          </div>

          
          <div class="col-lg-1 col-md-4   col-sm-6 ">
         <button class="button1 button5">
         <img class="rounded-pill me-1" width="20" height="20" src="<?php echo base_url();?>images/vector3.png" alt="">
       
         </button>
         <p class="description">Dairy Products</p>
          </div>

          
          <div class="col-lg-1 col-md-4   col-sm-6 ">
         <button class="button1 button5">
      <img class="rounded-pill me-1" width="20" height="20" src="<?php echo base_url();?>images/vectorr.png" alt="">
        
         </button>
         <p class="description">Decoratie Items</p>
          </div>

          
          <div class="col-lg-1 col-md-4  col-sm-6 ">
         <button class="button1 button5">
         <img class="rounded-pill me-1" width="20" height="20" src="<?php echo base_url();?>images/Vector (5).png" alt="">
       
         </button>
         <p class="description">Electronics</p>
          </div>

           
          <div class="col-lg-1 col-md-4   col-sm-6 ">
         <button class="button1 button5">
         <img class="rounded-pill me-1" width="20" height="20" src="<?php echo base_url();?>images/Vector (6).png" alt="">
       
         </button>
         <p class="description">Fruits & Vegetables</p>
          </div>



           
          <div class="col-lg-2 col-md-4   col-sm-6 ">
         <button class="button1 button5">
         <img class="rounded-pill me-1" width="20" height="20" src="<?php echo base_url();?>images/Vector (7).png" alt="">
      
         </button>
         <p class="description">Grocery Items</p>
          </div>
         </div>
        </div>


        <div class="container text-center my-3">
    <div class="row mx-auto my-auto">
        <div id="bike" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="<?php echo base_url();?>images/bike1.png" alt="Second slide">
                           
                          </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="<?php echo base_url();?>images/bike2.png" alt="Second slide">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="<?php echo base_url();?>images/bike3.png" alt="Second slide">
                        </div>
                    </div>
                </div>

                
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="<?php echo base_url();?>images/bike1.png" alt="Second slide">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="<?php echo base_url();?>images/bike2.png" alt="Second slide">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="<?php echo base_url();?>images/bike3.png" alt="Second slide">
                        </div>
                    </div>
                </div>
               
            </div>
            <a class="carousel-control-prev w-auto" href="#bike" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next w-auto" href="#bike" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
   
</div>


<script>
$('#bike').carousel({
  interval: 10000
})

$('.carousel .carousel-item').each(function(){
    var minPerSlide = 3;
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<minPerSlide;i++) {
        next=next.next();
        if (!next.length) {
        	next = $(this).siblings(':first');
      	}
        
        next.children(':first-child').clone().appendTo($(this));
      }
});
</script>




<div class="container mt-3">
  <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12">
    <div class="divideo">
    <iframe width="350" height="315" src="https://www.youtube.com/embed/JrnQ-915czY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>  </div>
 </div>

 <div class="col-lg-6  col-md-12 col-sm-12  mt-5">
    <h1>Customer flow</h1>

    <p style="color: #565656;">Our Business Plan is a written document describing a company's core business activites, Objectives, and how it plans to achieve its goals. Our goal is to provide our client high quality Product with modern idea accordingly their budgets and according thir reuirements.</p>
 </div>
  </div>
</div>



<!-- store -->
<div class="container  mt-3">
  <div class="row">
    <div class="col-12">
      <p style="color: #F59E0B;">Search  Near  By Store</p>
      <p style="color: #1B1C57; font-size:30px;">Shops</p>
    </div>
  </div>
</div>

<div class="container-fluid text-center my-3">
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-3">
                        <div class="card card-body">
                            <img class="img-fluid" src="<?php echo base_url();?>images/shop1.png" alt="Second slide">
                            <h4 class="card-title">John Doe</h4>
                          </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card card-body">
                            <img class="img-fluid" src="<?php echo base_url();?>images/shop1.png" alt="Second slide">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-body">
                            <img class="img-fluid" src="<?php echo base_url();?>images/shop1.png" alt="Second slide">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-body">
                            <img class="img-fluid" src="<?php echo base_url();?>images/shop1.png" alt="Second slide">
                        </div>
                    </div>
                    
                </div>

                
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card card-body">
                            <img class="img-fluid" src="<?php echo base_url();?>images/shop1.png" alt="Second slide">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card card-body">
                            <img class="img-fluid" src="<?php echo base_url();?>images/shop1.png" alt="Second slide">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card card-body">
                            <img class="img-fluid" src="<?php echo base_url();?>images/shop1.png" alt="Second slide">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card card-body">
                            <img class="img-fluid" src="<?php echo base_url();?>images/shop1.png" alt="Second slide">
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
   
</div>


<script>
$('#recipeCarousel').carousel({
  interval: 10000
})

$('.carousel .carousel-item').each(function(){
    var minPerSlide = 3;
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<minPerSlide;i++) {
        next=next.next();
        if (!next.length) {
        	next = $(this).siblings(':first');
      	}
        
        next.children(':first-child').clone().appendTo($(this));
      }
});
</script>





<div class="container mt-3">
  <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12">
    <div class="divideo">
    <iframe width="350" height="315" src="https://www.youtube.com/embed/JrnQ-915czY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>  </div>
 </div>

 <div class="col-lg-6  col-md-12 col-sm-12  mt-5">
    <h1>How the store works?
</h1>

    <p style="color: #565656;">Our Business Plan is a written document describing a company's core business activites, Objectives, and how it plans to achieve its goals. Our goal is to provide our client high quality Product with modern idea accordingly their budgets and according thir reuirements..</p>
 </div>
  </div>
</div>



<div class="container  mt-3">
  <div class="row">
    <div class="col-12">
      <p style="color: #1B1C57; font-size:30px;">Donate</p>
    </div>
  </div>
</div>




                
      
      <div class="container-fluid text-center my-3">
    <div class="row mx-auto my-auto">
        <div id="bike1" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="<?php echo base_url();?>images/bike1.png" alt="Second slide">
                           
                          </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="<?php echo base_url();?>images/bike2.png" alt="Second slide">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="<?php echo base_url();?>images/bike3.png" alt="Second slide">
                        </div>
                    </div>
                   
                    
                </div>

                
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="<?php echo base_url();?>images/bike1.png" alt="Second slide">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="<?php echo base_url();?>images/bike2.png" alt="Second slide">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="<?php echo base_url();?>images/bike3.png" alt="Second slide">
                        </div>
                    </div>
                </div>
               
            </div>
            <a class="carousel-control-prev w-auto" href="#bike1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next w-auto" href="#bike1" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
   
</div>


<script>
$('#bike1').carousel({
  interval: 10000
})

$('.carousel .carousel-item').each(function(){
    var minPerSlide = 3;
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<minPerSlide;i++) {
        next=next.next();
        if (!next.length) {
        	next = $(this).siblings(':first');
      	}
        
        next.children(':first-child').clone().appendTo($(this));
      }
});
</script>


<div class="container mt-5">
  <div class="row">
    <div class="col-12">
    <img class="img-fluid" src="<?php echo base_url();?>images/carbanner2.png" alt="Second slide">
    </div>
  </div>
</div>


<div class="container mt-5">
  <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12">
    <div class="divideo">
    <iframe width="350" height="315" src="https://www.youtube.com/embed/JrnQ-915czY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>  </div>
 </div>

 <div class="col-lg-6  col-md-12 col-sm-12  mt-5">
    <h1>About us
</h1>

    <p style="color: #565656;">Our Business Plan is a written document describing a company's core business activites, Objectives, and how it plans to achieve its goals. Our goal is to provide our client high quality Product with modern idea accordingly their budgets and according thir reuirements.</p>
 </div>
  </div>
</div>



<div class="container mt-5">
  <div class="row">
    <div class="col-12">
    <img class="img-fluid" src="<?php echo base_url();?>images/carbanner.png" alt="Second slide">
    </div>
  </div>
</div>





<div class="container mt-3">
  <div class="row">
    <div class="col">
      <p style="color:#000000; text-align:center; font-weight:bolder; font-size:30px;">What our happy client say</p>
       <p style="color:#757575; text-align:center; font-weight:bolder; font-size:20px;">Several selected clients, who already believe in our service.</p>
    </div>
  </div>
</div>




<div class="container">
    <div class="row">
        <div class="col-3">
        <img class="img-fluid" src="<?php echo base_url();?>images/mathewpal.png" alt="Second slide">

        </div>
        <div class="col-5 mt-3">
        <p style="color: #000000; font-weight:bolder">Matthew Paul</p>
        <p>Perfect, very good job! Thank you for the amazing design and work. Really impressed with the high quality and quick turnaround time. Highly recommend.</p>

        </div>
    </div>
</div>




</body>
</html>