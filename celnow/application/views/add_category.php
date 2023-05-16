<?php include('header.php');?>
  <?php include('sidebar.php');?>

   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<div class="content-wrapper">
    
    
    <section class="content-header">
      <h1>
        Add Category
      </h1>
  
    </section>

<div class="container" style="margin-top:20px;">
 <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> 

 <script type="text/javascript">
//<![CDATA[
bkLib.onDomLoaded(function() {
   nicEditors.allTextAreas() ;
     
       
  });



</script>

<section class="content" style="padding-left: 270px;">
<form action="<?php echo base_url();?>admin/save_category" method="post"  enctype='multipart/form-data' id="career_form" >



 <div class="row align-items-center justify-content-center">
 <div class="col-lg-6 col-xs-6">
  <div class="form-group">
    <label for="Title">Category :</label>
    <input type="text" class="form-control" id="categoryid" name="Category"  placeholder="Enter category" >
    <p id="head"  style="color:#ff0000" ></p>
  </div>
  </div>
  </div>

 <div class="row align-items-center justify-content-center">
  <div class="col-lg-6 col-xs-6">
  <div class="form-group">
    <label for="Title">Upload Icon :</label>
    <input type="file" class="form-control" id="icon" name="icon"  >
    <p id="head"  style="color:#ff0000" ></p>
  </div>
  </div>
  </div>

 <button type="submit" id="submit" class="btn btn-primary">Add</button>

</form>
</section>

</div>
</div>


<script type="text/javascript">
$(document).ready(function() {
  
$('#submit').click(function() {
  

// Initializing Variables With Form Element Values
var categoryid = $('#categoryid').val();

// To Check Empty Form Fields.
if (categoryid.length == 0 /*|| $(this).val().length == 0*/) {
  
$('#head').text("* Please fill category field! *"); 
$("#categoryid").focus();
 
return false;

}
else {
$("#career_form").submit();
//alert("Form Submitted Successfuly!");
return true;
}
});
});
</script>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>




  <?php include('footer.php'); ?>