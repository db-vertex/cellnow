<?php include('header.php');?>
  <?php include('sidebar.php');?>
    <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
<link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"/>
<style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
  #sortable li span { position: absolute; margin-left: -1.3em; }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  } );
  </script>
  <style>
     .details_img_cover {

max-height: 167px;
min-height: 167px;
left: 114px;
top: 588px;
background: url(suzuki-gixxer-sf-150cc-bike-500x500.png);
margin-bottom: 20px;
border-radius: 15px;
min-width: 100%;
}

      .deletebtn{
              color: red;
    transform: translate(20px, 50px);
    background: #ffffff66;
    border: none;
    border-radius: 50%;
    width: 30px;
    height: 30px;
      }
    .editebtn{
    background: #ffffffaa;
    transform: translate(20px, 50px);
    border: none;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    }
    .image-uploade{
    background:url('https://www.freeiconspng.com/uploads/no-image-icon-11.PNG'); 
    border: 2px solid grey;
    border-radius: 10px;
    height: 150px; 
    width:  100%;
    margin: 8px 8px 8px 8px; 
    object-fit: cover; 
    background-size: cover;
    background-repeat: no-repeat;
    padding:10px;
    }
    
    .image-upload>input, .image-uploade>input {
  display: none;
}

.editiconbackground{
  background:#ffffffaa;
  border-radius:50%;
  padding:10px;
  transition:1s;  
}
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product Detail
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        
        <li class="active">Product Detail</li>
      </ol>
    </section>
 <?php  if($error=$this->session->flashdata('msg')){  ?>
<div class="row">
<div class="col-lg-6">
<div class="alert alert-success">
<?= $error; ?>
</div>
</div>
</div>

<?php } ?>
    <!-- Main content -->
    <section class="content">

<div class="container">
      <div class="row">

<div class="container-fluid bg-3 divpad">    
  <!-- <h3>Product Detail</h3><br> -->




  <div class="row no-margin">
       <?php  if($msg =$this->session->flashdata('msg')){  ?>

              <div class="row" style="margin-top: 10px;">
               
              <div class="col-lg-12">
              <div class="alert alert-success">
              <?

                echo $msg; 
                             
                unset($_SESSION['msg']);
              ?>
              </div>
              </div>
                          </div>


          <?php } ?>
         
 <div class="col-sm-6">
      <form action="/admin/updateproduct" enctype='multipart/form-data' method="post">
 
        

 
  <div class="col-sm-4">
      <?php if ($categories_data->cover_img !== NULL) { ?>
     
        <a href="<?php echo base_url() . $categories_data->cover_img . ""; ?>"><img class="details_img_cover" src="<?php echo base_url() . $categories_data->cover_img . ""; ?>" style="width:50%"></a>
        <?php } ?>
      </div>
      <div class="col-sm-4">
        <?php if ($categories_data->images_2 !== NULL) { ?>
     
   
  
      <a href="<?php echo base_url() . $categories_data->images_2 . ""; ?>"><img class="details_img_cover" src="<?php echo base_url() . $categories_data->images_2 . ""; ?>" style="width:50%"></a>
      <?php } ?>
        </div>
       
        
        <div class="col-sm-4">
   <?php if ($categories_data->images_3 !== NULL) { ?>
     
  
    
      <a href="<?php echo base_url() . $categories_data->images_3 . ""; ?>"><img class="details_img_cover" src="<?php echo base_url() . $categories_data->images_3 . ""; ?>" style="width:50%"></a>
        </div>
   <?php } ?>
     
   <?php if ($categories_data->images_4 !== NULL) { ?>
    <div class="col-sm-4">
      <a href="<?php echo base_url() . $categories_data->images_4 . ""; ?>"><img class="details_img_cover" src="<?php echo base_url() . $categories_data->images_4 . ""; ?>" style="width:50%"></a>
        </div><?php } ?>
  
        <?php if ($categories_data->images_5 !== NULL) { ?>
            <div class="col-sm-4">
       <a href="<?php echo base_url() . $categories_data->images_5 . ""; ?>"><img class="details_img_cover" src="<?php echo base_url() . $categories_data->images_5 . ""; ?>" style="width:50%"></a>
       </div><?php } ?>
       
 
    
   
  

    </div>  





 
  <div class="col-sm-4">

 
  
  <div class="col-sm-12" style="padding-left: 50px;border: 1px solid gray;
    border-radius: 25px;padding-right: 50px;margin-top: 20px;
    margin-bottom: 20px;">

    <h4 style="color: #012F53;">Product Detail</h4> 
       <table class="table">
    <input type="hidden" name="pid" value="<?php echo $categories_data->id; ?>">
    <tbody>
      <tr>
        <td style="float: right;">Name:</td>
        <td><input style="border: none;" type="text" name="product_name" value="<?php echo ucfirst($categories_data->title); ?>"></td>
        
      </tr>
    <tr>
        <td style="float: right;">Category :</td>
        <?php
        $category = $this->db->get("category")->result(); ?>
        <td><select name="category_id">
            <?php
            foreach($category as $value){ 
                ?>
            <option value="<?=$value->id?>" <?=(($value->id==$categories_data->category_id)?"selected":"")?>><?=$value->category?></option>
            <?php  } ?>
        </select></td>
        
      </tr>
      <tr>
        <td style="float: right;">Price:</td>
        <td><input style="border: none;" type="text" name="price" value="<?php echo $categories_data->price; ?>"> /-</td>
        
      </tr>
     
     
      <tr>
        <td style="float: right;">Location:</td>
        <td><input style="border: none;" type="text" name="price" value="<?php echo $categories_data->address; ?>"></td>
        
      </tr>
     
      <tr>
        <td style="float: right;">Postal code:</td>
        <td><input style="border: none;" type="text" name="city" value="<?php echo $categories_data->postal_code; ?>"></td>
        
      </tr>
      <tr>
        <td style="float: right;">Description:</td>
        <td><p><Textarea style="height: 80px; border: none;" name="description"><?php echo $categories_data->Description; ?></Textarea></p></td>
      </tr>

      <!--<tr>-->
      <!--  <td style="float: right;">Specification:</td>-->
      <!--  <td><p><Textarea style="height:120px; border: none;" name="specification"><?php echo $product_detail->specification; ?></Textarea></p></td>-->
       
      <!--</tr>-->
 <!-- <tr>
     <td colspan=2><input type="submit" value="Update Product" style="width: auto; background: #00267c; color: white; border-radius: 30px;" class="form-control" ></td>
     </tr> -->
    </tbody>
  </table>
</form>
  </div>



  </div>



  </div>



<style type="text/css">
  
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{

  border-top: 0px solid #ddd;
}


</style>

    
<!-- <input type="button" class="btn btn-sellersignup add_interest" onclick="return add_interest()" style="width: auto;margin-bottom: 5px;float:right;" name="" value="Report"> -->


 </div>
</div>

<script>
 $(document).on("change",".fileinputimg", function()
    {
        console.log("fff");
        var parent = $(this).closest("div");
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){ // set image data as background of div
                //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
        parent.css("background-image", "url("+this.result+")");
            }
        }
      
    });
</script>  
<script type="text/javascript">
 $(".deletebtn").click(function(){
     var imageid=$(this).data("imageid");
     var pid = $(this).data("productid");
     console.log(pid);
     swal({
        title: "Are you sure?",
        text: "You will not be able to recover!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel plx!",
        closeOnConfirm: true,
        closeOnCancel: true 
    },
    function(isConfirm) {
        if (isConfirm) {
             $.ajax({
      url: 'https://www.pahadiuncle.com/admin/deleteproductimage/'+imageid+'/'+pid,
      type: 'post',
      data: {},
      contentType: false,
      processData: false,
      error:function(err){
         console.log(err);
      },
      beforeSend:function(){
      
    },
      success: function(response){
          console.log(response);
          $("#productimage"+imageid).replaceWith('<div class="col-sm-4"><button type="button" class="editebtn" onclick="fileinputimg'+imageid+'.click();" for="fileinputimg'+imageid+'"><i class="fa fa-edit" aria-hidden="true"></i></button><a  style="width: 100%;"><div  style=" height: 150px; width: inherit; margin: 8px 8px 8px 8px; object-fit: cover; "><div for="fileinputimg'+imageid+'" class="image-uploade"><input id="fileinputimg'+imageid+'" class="fileinputimg" name="backimg[]" type="file" accept="image/*"  /></div></div></a></div>');     
         swal("Deleted!", "Poses has been deleted.", "success");
      }
    });
        } else {
            
        }
    }
);
 })   
</script>










































<!--  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
       <div class="carousel-inner">
  <?php 
       
       $product_image =   get_product_image($product['id']);

       $count = count($product_image);

        foreach ($product_image as $key => $pro_img) {

          $ext = pathinfo($pro_img->product_image, PATHINFO_EXTENSION);

          if($ext != "mp4"){
           
          ?>
   
 
      <div class="item active">
        <img src="<?php echo base_url();?>assets/images/download.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>assets/images/download.png" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="<?php echo base_url();?>assets/images/download.png" alt="New york" style="width:100%;">
      </div>
    
      <?php

        }else{
          
      ?>
     
        <div class="item">
        <img src="<?php echo base_url();?>assets/images/Notification.png" alt="New york" style="width:100%;">
      </div>
  



       <?php

        }
      }
          
      ?>
  
     </div>
  
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> -->

  </div>
  
  </div>
</div>
        
        </div>
     </div>
  


    </section>

  </div>

  

   <script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
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
  <?php include('footer.php'); ?>