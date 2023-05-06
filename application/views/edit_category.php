<?php include('header.php');?>
  <?php include('sidebar.php');?>
<!--   <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> -->

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Category
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        
        <li class="active">Category</li>
      </ol> -->
     </section>

<section class="content">
  <div class="container">
  	
  <form action="<?php echo base_url();?>admin/updatecategory" method="post"  enctype="multipart/form-data" id="testimonial_form">

     <div class="row">

     <div class="box box-primary" style="padding-right: 389px;">
     <div class="box-body box-profile" style="padding-top: 46px;">
     <div class="form-group">


<input type="hidden"  name="did" value="<?php echo $test->id; ?>">

<div class="row align-items-center justify-content-center">
<div class="col-lg-6 col-xs-6">
  <div class="form-group">
  <label for="testimonial">Shop Category:</label>

  <input id='categoryid' type="text" class="form-control" name='shop_category' value="<?php echo $test->shop_category; ?>" >
  <p id="head"  style="color:#ff0000"></p>
   </div>
 </div>
 
</div>

 <div class="row align-items-center justify-content-center">

  <!-- <div class="col-lg-6 col-xs-6">
  <div class="form-group">
    <img src="<?php echo base_url().'/uploads/category/'.$test->icon?>" style="height: 50px;width: 53px;float: right;">
    <label for="Title">Upload Icon :</label>
    <input type="file" class="form-control" id="icon" name="icon"  >
    <p id="head"  style="color:#ff0000" ></p>
  </div>
  </div> -->
  </div>

<button type="submit" id="submit" class="btn btn-primary">Update</button>
       
   </div>
   </div>
   </div>
 </div>
</section>

</div>
</form>
</section>

<script type="text/javascript">
$(document).ready(function() {
$('#submit').click(function() {
  
// Initializing Variables With Form Element Values
var categoryid = $('#categoryid').val();

 //var length = $.trim($("#categoryid").val()).length;
 
// To Check Empty Form Fields.
if (categoryid.length == 0) {
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


<script type="text/javascript">
function check_category() {
    
var category = $('#categoryid').val();

//alert(category); 
$.ajax(
    {
        type:"post",
        url: "<?php echo base_url("admin/exist_category/")?>",

        data:{'categorydata':category},
        success:function(response)
        { 

          //alert(response);
          
          $('#head').html(response);
            /*if (response == "true") 
            {
          $('#head').html('<span style="color:green;">Category does exist</span>');
            }
            else 
            {
          $('#head').html('<span style="color:red;">Category does not exist</span>');
            }  */
        }
    
});
}

</script>

<script type="text/javascript">

/*$("#submit").on('click',function() 
   {
     var length = $.trim($("#categoryid").val()).length;
     alert(length);
     if(length == 0)
     {
       alert("null"); 
     }
     else
     {
       alert("not null");
     }
   });
*/
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<?php include('footer.php'); ?>