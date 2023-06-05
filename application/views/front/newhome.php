<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>

    <style>


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
.search_wrap{
	width: 100%;
	
}

.search_wrap .search_box{
	position: relative;
	
	height: 64px;
}

.search_wrap .search_box .btn{
	position: absolute;
	
	height: 80%;
	background: #10B981;
  color: white;
	
}
.search_wrap .search_box .btn.btn_common .fas{
	
	/* top: 50%;
	left: 50%;
	transform: translate(-50%,-50%); */
	/* color: #fff; */
 
}
.search_wrap.search_wrap_6 .search_box .btn{
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
  input::placeholder  {
     font-size: 12px;
     font-weight: bold;
  }
  img.fix{
    position: absolute;
    margin-top: 19%;
    height: 25px;
  }
}
  @media screen and (max-width: 776px) {
  input::placeholder  {
     font-size: 10px;
     font-weight: bold;
  }


}
@media screen and (max-width: 560px) {
  input::placeholder  {
     font-size: 12px;
    font-weight: bold;
  }
} 

.col-lg-4{
  display: none;
}
.mores
 {
  display: none;
}
 

    </style>
  
  
 

  <div class="container-fluid home_background"  style=" margin-top: 125px;">

<div class="container">
  <div id="carouselExampleControlss" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  <?php
      $all_banner = get_all_banner();
      $j = 1;
      foreach ($all_banner as $key => $banner) {
        ?>  
    <div class="carousel-item <?php if ($j == 1){echo "active";} ?>">
      <a href="<?php echo $banner->url; ?>" target="_blank"><img style="border-radius:30px; max-height:500px;
    min-height:500px;" class="d-block w-100"  id='<?php  echo $banner->url ?>' src="<?php echo base_url(); ?>uploads/banner/<?php echo $banner->banner_image; ?>" alt="First slide"></a>
    </div>
    <?php

        $j++;

      }
      ?>
   
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlss" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlss" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
    </div><br>

<div class="container">
    <div class="row pl-4">
    <p style="color: #F59E0B;"></p>
    </div>
   </div><br>


    <!-- search bar -->
    <div class="container">
    <div class="row pl-4">
      <div class="col-lg-7 col-md-5 col-sm-4 ">
        <p style="font-size:30px;color:#1B1C57;"> Search Products </p>
      </div>
      <div class="col-lg-5 col-md-7 col-sm-8 pr-4">
      <div class="search_wrap search_wrap_6 m-0">
			<div class="search_box">
         <form method="post" action="<?php echo base_url();?>welcome/searchproduct/">
		       <input type="search"  name="anything" class="form-control rounded-5"  placeholder="Search for the Product you want!" aria-label="Search" aria-describedby="search-addon"  style="padding:12px 22px" />
          <button type="submit" class="btn btn-success rounded-5" style="padding:6px 10px">search ></button>
         </form></div>
        <div class="row">
                                    <div id="display"></div>
                                   
   
                              
                           
                    </div>
  </div>
</div>
</div>
 </div><br>

 <!-- new -->



<div class="container">
   <ul class="pt-0 pb-0 mb-0 cut-list hide-scroll" >

       <?php

              $category = get_all_category();

              foreach ($category as $key => $cat) {


                ?>
                 <li class="" id=""  onclick="return getsubcategory(<?php echo $cat->id; ?>)">
                      <p  class="new<?php echo $cat->id; ?> btn shadow  rounded-pill"  role="button"><img class="rounded-circle me-1"  src="<?php echo base_url();?>uploads/category/<?php echo $cat->icon;?>" alt=""> &nbsp  <?php echo $cat->category; ?> </p>

                </li> &nbsp  &nbsp &nbsp  
          
            <?php
                      
                      }

                ?> 
</ul>
    
</div>






<div id="sub-list">
  
</div>

<section >
  <div class="text-center container py-5">
    

    <div class="row" id="product_list" style="margin-left:20px; margin-right:20px;">
    <?php
                  
                  if(empty($location) && !empty($anything)){
                  $product =  get_all_search_product($anything); 
                  $allcount = get_all_search_product_count($anything);
              
                  }
                  else if(!empty($location) && empty($anything)){
                  $product= get_all_locationsearch_product($location);
                 
                  }
              if(!empty($product)){
              $i = 1;
              $j = 1;
            foreach($product as $pro){
            
             $session_login_id  = $user['user_id'] ?? null;
              $product_user_id = $pro->user_id;
              if($session_login_id !== $product_user_id){
                  if($i > 0){
            
            ?>  
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4 post" >
        <div class="card">
          <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
            <a  href="<?php echo base_url();?>welcome/productdetail/<?php echo $pro->category_id; ?>/<?php echo $pro->id; ?>/<?php echo $pro->subcategory_id; ?>"><img src="<?php echo base_url(); ?><?php echo $pro->cover_img ?>"
              class="w-100 va-thumbnail" /></a>
              <p style="margin-left:-90px;"> <img class="img-fluid"  src="<?php echo base_url(); ?>assets/images/sponsor.png" style="
   margin-top: -20%; width:80px; ">
    <?php if($pro->verified_product ==1){ ?>
      <img class="img-fluid"  src="<?php echo base_url(); ?>assets/images/verified.png" style="
   margin-top: -20%; width:80px; "><p>

   <?php }?>       
                  </p>
            <a href="#!">
             
              <div class="hover-overlay">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </div>
            </a>
          </div>
          <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
          <h6 class="mb-3">
             <strong class="ms-2 ">$50.99</strong>
            </h6>
                  </div>
          <div class="d-flex justify-content-between align-items-center">

<h6 class="dress-name"><?php
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
                           
                           ?></h6>



</div>
<div class="d-flex justify-content-between align-items-center"> 
            <a href="" class="text-reset">
              <h6><?php
                           $title = $pro->address;
                            if(strlen($title) <= 20)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,20) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?></h6>
            </a>
            </div>
          </div>
        </div>
      </div>
    
    <?php $i++;} } else if($j == 1) {?>
                   
                   <?php   }  $j++; };  ?>  
    <?php }
              else {?>
            <center><img  src="<?php echo base_url();?>assets/images/no_product .png"></center>
            <?php }?>
            </div>
            <?php if($allcount >4){ ?> 
            <button class="btn btn-danger load-more">See All</button>
            <?php } ?>
            <input type="hidden" id="row" value="0">
            <input type="hidden" id="all" value="<?php echo $allcount; ?>">
  </div>
</section>


<!-- <div class="container">
<div class="va-carrousel-section">
    <div class="va-whitewrap">
       

        <div id="va_container_most_view">
            <button class="deals-scroll-left_most_view deals-paddle" id="left_view_button">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                    class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                    </path>
                </svg>
            </button>

            <div class="va-carrousel-flexbox_most" id="product_list">
                   <?php
                  
            
                  $product = get_all_boost();   
              
            
              if(!empty($product)){
              $i = 1;
              $j = 1;
            foreach($product as $pro){
            
             $session_login_id  = $user['user_id'] ?? null;
              $product_user_id = $pro->user_id;
              if($session_login_id !== $product_user_id){
                  if($i > 0){
            
            ?>  
            
                  <div class="va-card va-cards "> <a class="link-plain link-plains"  href="<?php echo base_url();?>welcome/productdetail/<?php echo $pro->category_id; ?>/<?php echo $pro->id; ?>/<?php echo $pro->subcategory_id; ?>" style=""> 
                  <p  class="my-auto">
                 
                  <?php if($pro->cover_img !== NULL) { ?> 
                                          <img class="va-thumbnail" src="<?php echo base_url(); ?><?php echo $pro->cover_img ?>">
                            <?php } else { ?>
						          <img class=" rounded-5 va-thumbnail" src="<?php echo base_url();?>assets/images/Group 486.png" />

						       <?php }?>
                  <p> <img class="img-fluid"  src="<?php echo base_url(); ?>assets/images/sponsor.png" style="
   margin-top: -40%; width:50px; margin-left:10px;">
    <?php if($pro->verified_product ==1){ ?>
      <img class="img-fluid"  src="<?php echo base_url(); ?>assets/images/verified.png" style="
   margin-top: -70%; width:50px; margin-left:62px;"><p>

   <?php }?>       
                  </p>

                            <p class="ms-1 mt-3 ms-3" style="color:black; font-weight:800;">$<?php echo $pro->price ?></p>
                        <div class="va-title ms-3">  <?php
                           $title = $pro->title;
                            if(strlen($title) <= 10)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,10) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?>
                           </div>
                           <div class="ms-3 align-items-center">
                                        <p class="text-muted mb-2"
                                            style="color:black;cursor: pointer; width: 100%; overflow:clip; line-height: 1.4; white-space:nowrap; text-overflow: ellipsis; line-height: 1.4; display:inline-block">
                                             <span class="ms-0"><?php echo ucfirst($pro->address) ?></span></p><br>
                                    
                                    </div>
                    </a> 
                
                    </div>
                    
                    <?php $i++;} } else if($j == 1) {?>
                   
                  <?php   }  $j++; };  ?>  
            
              
            <button class="deals-scroll-right_most_view deals-paddle" id="right_view_button">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                    class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                    </path>
                </svg>
            </button>
            <?php }
              else {?>
            <center><img  src="<?php echo base_url();?>assets/images/no_product .png"></center>
            <?php }?>
            </div>
        </div>

    </div>
</div>
</div> -->


<!-- new  -->
<div class="container">
  <div class="row align-items-center pl-4 pr-4 pt-5">
    <div class="col-md-6 " >
    <div class="ratio ratio-16x9">
  <iframe style="border-radius: 15px;" class="embed-responsive-item" src="https://www.youtube.com/embed/JrnQ-915czY"></iframe>
</div>
 </div>

 <div class="col-md-6 ">
    <h1>Customer flow</h1><br>

    <p style="color: #565656;">Our Business Plan is a written document describing a company's core business activites, Objectives, and how it plans to achieve its goals. Our goal is to provide our client high quality Product with modern idea accordingly their budgets and according thir reuirements.</p>
 </div>
  </div>
</div><br>

<!-- new  -->
<div class="container">
    <div class="row pl-4">
    <p style="color: #F59E0B;">Search  Near  By Store</p>
    </div>
</div>




<div class="container">
  <div class="row p-4">
    <div class="col-12">
    <img class="img-fluid" src="<?php echo base_url();?>assets/images/img/carbanner2.png" width="100%" alt="Second slide">
    </div>
  </div>
</div><br>

<div class="container">
  <div class="row align-items-center pl-4 pr-4 pt-3">
    <div class="col-md-6 ">
    <div class="ratio ratio-16x9">
  <iframe style="border-radius: 15px;" class="embed-responsive-item" src="https://www.youtube.com/embed/JrnQ-915czY"></iframe>
</div>
 </div>

 <div class="col-md-6">
    <h1>About us
</h1>

    <p style="color: #565656;">Our Business Plan is a written document describing a company's core business activites, Objectives, and how it plans to achieve its goals. Our goal is to provide our client high quality Product with modern idea accordingly their budgets and according thir reuirements.</p>
 </div>
  </div>
</div><br>

<div class="container ">
  <div class="row p-4">
    <div class="col-12">
    <img class="img-fluid" src="<?php echo base_url();?>assets/images/img/carbanner.png" width="100%" alt="Second slide">
    </div>
  </div>
</div><br>

<div class="container ">
  <div class="row p-4">
    <div class="col">
      <p style="color:#000000; text-align:center; font-weight:bolder; font-size:28px;">What our happy client say</p>
       <p style="color:#757575; text-align:center; font-weight:bolder; font-size:20px;">Several selected clients, who already believe in our service.</p>
    </div>
  </div>
</div><br>

<!-- new  -->

<div class="container">
<div id="carouselExampleControlsl" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  
    <div class="carousel-item active">
      <div class="row pl-4">
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/mathewpal.png" class="d-block w-100" alt="..."></div>
        <div class="col align-self-center"> 
          <h5><b >Matthew Paul</b></h5>
                  <p style="color: #000000;font-size:1.3vw">Perfect, very good job! Thank you for the amazing design and work. Really impressed with the high quality and quick turnaround time. Highly recommend.</p>
        </div>
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/mathewpal.png" class="d-block w-100" alt="..."></div>
      </div>
        
      
      </div>

      <div class="carousel-item ">
      <div class="row p-4">
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/mathewpal.png" class="d-block w-100" alt="..."></div>
        <div class="col align-self-center"> 
          <h5><b >Matthew Paul</b></h5>
                  <p style="color: #000000;font-size:1.3vw">Perfect, very good job! Thank you for the amazing design and work. Really impressed with the high quality and quick turnaround time. Highly recommend.</p>
        </div>
        <div class="col"> <img src="<?php echo base_url();?>assets/images/img/mathewpal.png" class="d-block w-100" alt="..."></div>
      </div>
         </div>
    </div>

  <!-- </div> -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsl" data-bs-slide="prev" >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsl" data-bs-slide="next" >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div><br>

<div class="container">
    <div class="row p-4">
        <div class="col-sm-4">
            <div class="row">
                <div class="col"> <img src="<?php echo base_url();?>assets/images/img/chairimg.png" class="img-fluid" alt="..."></div>
                <div class="col"><img src="<?php echo base_url();?>assets/images/img/mtimg.png" class="img-fluid" alt="..."></div>
            </div>
            <div class="row">
                <div class="col"><img src="<?php echo base_url();?>assets/images/img/gi.png" class="img-fluid" alt="..."></div>
                <div class="col"><img src="<?php echo base_url();?>assets/images/img/house.png" class="img-fluid" alt="..."></div>
            </div>
        </div>
        <div class="col-sm-4">
            <h2><b style="color:#1b1c57">Subscribe For More Info
            And Update For Celnow</b></h2>
        </div>
        <div class="col-sm-4">
        <div class="row">
                <div class="col"> <img src="<?php echo base_url();?>assets/images/img/h2.png" class="img-fluid" alt="..."></div>
                <div class="col"><img src="<?php echo base_url();?>assets/images/img/gimg.png" class="img-fluid" alt="..."></div>
            </div>
            <div class="row">
                <div class="col"><img src="<?php echo base_url();?>assets/images/img/bimg.png" class="img-fluid" alt="..."></div>
                <div class="col"><img src="<?php echo base_url();?>assets/images/img/c2.png" class="img-fluid" alt="..."></div>
            </div>
        </div>
    </div>
</div>



 

<script>
  function getsubcategory(category_id){

 
//var res = "";
 $("p").removeClass("selected");
 $(".new"+category_id).addClass("selected");

    // var allch =  $("#").val();

  jQuery.ajax({
  type: "POST",
  url: "<?php echo base_url('/welcome/getsubcategory'); ?>",
  data: { category_id:category_id},
  success: function(res) 
  {

    
   


 
    

    $("#sub-list").html(res);
       
  

    // $('#load_cound').val("10");
    
  }
  });

}


function getproduct(subcategory_id){

 
//var res = "";
 $("img").removeClass("select");
 $(".sub_new"+subcategory_id).addClass("select");

    // var allch =  $("#").val();

  jQuery.ajax({
  type: "POST",
  url: "<?php echo base_url('/welcome/getproduct'); ?>",
  data: { subcategory_id:subcategory_id},
  success: function(res) 
  {


    $("#product_list").html(res);
       
  

    // $('#load_cound').val("10");
    
  }
  });

}


  </script>

<script type='text/javascript'>
    
    $(document).ready(function() {
    $( "#search" ).autocomplete({
 
        source: function(request, response) {
            $.ajax({ 
            url: "<?php echo base_url();?>welcome/search",
            data: {term : request.term},
            dataType: "json",
            success: function(data){
             
              var resp = $.map(data,function(obj){
                  var id = obj.id;
                   var category_id = obj.category_id;
                     var subcategory_id = obj.subcategory_id;
                   var add = category_id +'/'+id +'/'+subcategory_id;
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
                        location.href="<?php echo base_url();?>welcome/productdetail/" +ui.item.value ;
            },
    minLength: 2
 });
 

});



 
$(document).ready(function(){

// Load more data
$('.load-more').click(function(){
    var row = Number($('#row').val());
    var allcount = Number($('#all').val());
    var rowperpage = 4;
    row = row + rowperpage;

    if(row <= allcount){
        $("#row").val(row);

        $.ajax({
            url: '<?php echo base_url();?>welcome/getsearchroduct',
            type: 'post',
            data: {row:row},
            beforeSend:function(){
                $(".load-more").text("Loading...");
            },
            success: function(response){

                // Setting little delay while displaying new content
                setTimeout(function() {
                    // appending posts after last post with class="post"
                    $(".post:last").after(response).show().fadeIn("slow");

                    var rowno = row + rowperpage;

                    // checking row value is greater than allcount or not
                    if(rowno > allcount){

                        // Change the text and background
                        $('.load-more').hide();
                      
                    }else{
                        $(".load-more").text("Load more");
                    }
                }, 1000);

            }
        });
    }else{
        $('.load-more').text("Loading...");

        // Setting little delay while removing contents
        setTimeout(function() {

            // When row is greater than allcount then remove all class='post' element after 3 element
            $('.post:nth-child(3)').nextAll('.post').remove();

            // Reset the value of row
            $("#row").val(0);

            // Change the text and background
            $('.load-more').text("Load more");
           
            
        }, 1000);


    }

});

});
    </script>