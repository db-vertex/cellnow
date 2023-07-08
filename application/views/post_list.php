<?php include('header.php');?>
  <?php include('sidebar.php');?>

<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
<link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">


  

  
<style type="text/css">

.dt-buttons{

	float: right!important;
}

	.buttons-excel{

      float: right!important;
    margin-left: 10px!important;
    margin-right: 10px!important;
    border-radius: 39px!important;
    background-color: #00c0ef!important;
    color: #fff!important;

	}
table{
    overflow:scroll;
}	
table td {
max-width: 120px;
white-space: nowrap;
text-overflow: ellipsis;
word-break: break-all;
overflow: hidden;
}
.ratingbtn{
    border: none;
    padding:15px;
    background:none;
}
.ratingbtn:hover{
    background:#ddd;
    border-radius:10px;
}


.btn-grey{
    background-color:#D8D8D8;
	color:#FFF;
}
.rating-block{
	background-color:#FAFAFA;
	border:1px solid #EFEFEF;
	padding:15px 15px 20px 15px;
	border-radius:3px;
}
.bold{
	font-weight:700;
}
.padding-bottom-7{
	padding-bottom:7px;
}

.review-block{
	background-color:#FAFAFA;
	border:1px solid #EFEFEF;
	padding:15px;
	border-radius:3px;
	margin-bottom:15px;
	overflow-y: scroll;
    height: 500px;
}

.review-block-name{
	font-size:12px;
	margin:10px 0;
}
.review-block-date{
	font-size:12px;
}
.review-block-rate{
	font-size:13px;
	margin-bottom:15px;
}
.review-block-title{
	font-size:15px;
	font-weight:700;
	margin-bottom:10px;
}
.review-block-description{
	font-size:13px;
}

.rate {
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
.modal-body {
    margin-left: 10%;
    margin-right: 10%;
    background-color: #012F53!important;
    border-radius: 15px;
    padding-left: 30px;
    padding-right: 30px;
}
</style>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
 <section class="content-header">
      <h1>
        Products
      </h1>
   
</section>



<section class="content">
<div class="row">


<?php  if($msg=$this->session->flashdata('msg')): 

$msg_class=$this->session->flashdata('msg_class')

 ?>
<div class="row">
<div class="col-lg-6">
<div class="alert <?= $msg_class ?>">
<?= $msg; 
unset($_SESSION['msg']);?>
</div>
</div>
</div>

<?php endif; ?>
</div>

<div class="box">
<div class="box-body">

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Normal Products</a></li>
    <li><a data-toggle="tab" href="#menu1">Boost Products</a></li>
    <li><a data-toggle="tab" href="#menu2">Donate Product</a></li>
    <li><a data-toggle="tab" href="#menu3">Active Product</a></li>
    <li><a data-toggle="tab" href="#menu4">De-Active Product</a></li>
    
  </ul>

    <div class="tab-content" style="overflow: scroll !important;">
    <div id="home" class="tab-pane fade in active" style="margin-top: 34px;">
<table id="example3" class="table table-bordered table-striped" style="width: 100% !important;overflow: scroll !important;">
                <thead>
                <tr>
               <th>S.no</th>
                  <th>Post</th>
                  <th>Image</th>
                 <th>Category</th>
                
                  <th>Type</th>
                  <th>Brand</th>
                  
                   <th>Price</th>

                  
                 <th>Description</th>        
                  
                  <th>Pay Type</th>
                 
                  
                  
                  
                </tr>
                </thead>
        <tbody>
  
          <?php
      $allproduct =get_all_normal();
      $i=1;
          foreach ($allproduct as $value) {

       
           // print_r($posts);

            ?>


                <tr id="<?php echo $value->id; ?>">

                <td><?php echo $i;?></td>
                <td><a href="<?php echo base_url()."welcome/productdetail/".$value->category_id.'/'.$value->id.'/'.$value->subcategory_id."";?>"><?php echo  $value->title;?></a></td>
                <td> <?php 

                // $image = get_product_image($value->product_id); 

               // print_r($image); 

                ?>

                <?php ?>
                 
                <img src="<?php echo base_url().$value->cover_img."";?>" class="img-responsive" style="width:100px;height: 100px;" alt="Image">

               <?php  ?>

               </td>
               <td><?=$this->db->get_where("category", "id=".($value->category_id))->row()->category?></td>
               
                <td><?php echo  $value->type;?></td>
                 <td><?php echo  $value->brand;?></td>
                       <td><?php echo  $value->price;?></td>
               <td><?php echo  $value->Description;?></td>

         
                  
               
                 <td><select  id="pay_type" data-product_id="<?php echo $value->id?>"  data-category_id="<?php echo $value->category_id?>" class="prioritydrop">
           
            <option value="0" <?=(($value->pay_type==0)?"selected":"")?>>Normal</option>
            <option  value="1" <?=(($value->pay_type==1)?"selected":"")?>>Bost</option>
            <option value="2"<?=(($value->pay_type==2)?"selected":"")?>>Donate</option>
           
        </select></td>
              
                </tr> 
                <?php $i++;} ?>
            </tbody>
                
            </table>

          </div>

        
        
        




        <div id="menu1" class="tab-pane fade" style="margin-top: 34px;">



        	          <table id="example4" class="table table-bordered table-striped">
                    <thead>
                <tr>
               <th>S.no</th>
                  <th>Post</th>
                  <th>Image</th>
                 <th>Category</th>
                
                  <th>Type</th>
                  <th>verified option</th>
                  <th>Brand</th>
                  
                   <th>Price</th>

                  
                 <th>Description</th>        
                  
                  <th>Pay Type</th>
                  <th>verify</th>
                 
                  
                  
                  
                </tr>
                </thead>
        <tbody id="sortable">
                
          <?php 
          $urgent = get_all_boost_admin();
         
$i=1;
foreach($urgent as $valueu){
           // print_r($posts);

            ?>


                <tr class="featuredpro" id="<?php echo $valueu->id; ?>">
                           <td><?php echo $i;?></td>
                <td><a href="<?php echo base_url()."welcome/productdetail/".$valueu->category_id.'/'.$valueu->id."";?>"><?php echo  $valueu->title;?></a></td>
                <td> <?php 

                // $image = get_product_image($value->product_id); 

               // print_r($image); 

                ?>

                <?php ?>
                 
                <img src="<?php echo base_url().$valueu->cover_img."";?>" class="img-responsive" style="width:100px;height: 100px;" alt="Image">

               <?php  ?>




               
                 
               </td>
               <td><?=$this->db->get_where("category", "id=".($valueu->category_id))->row()->category?></td>
               
               <td><?php echo  $valueu->type;?></td>
               <td><?php if(isset($valueu->verified_admin)) { echo  $valueu->verified_admin ; } ?></td>
                 <td><?php echo  $valueu->brand;?></td>
                       <td><?php echo  $valueu->price;?></td>
               <td><?php echo  $valueu->Description;?></td>
               <td><select  id="pay_type" data-product_id="<?php echo $valueu->id?>"  data-category_id="<?php echo $valueu->category_id?>" class="prioritydrop">
           
            <option value="2" <?=(($valueu->pay_type==2)?"selected":"")?>>Donate</option>
            <option  value="1" <?=(($valueu->pay_type==1)?"selected":"")?>>Boost</option>
            <option value="0"<?=(($valueu->pay_type==0)?"selected":"")?>>Normal</option>
           
        </select></td>
        <td> 
   
   <input type="button" name="active_status" value="verify" class="btn btn-info" data-productid = "">

</td>  
                </tr> 
                <?php $i++; } ?>
            </tbody>
                
            </table>

        

        </div> 	


       
 <div id="menu2" class="tab-pane fade" style="margin-top: 34px;">



        	          <table id="example5" class="table table-bordered table-striped">
                <thead>
                <tr>
               <th>S.no</th>
                  <th>Post</th>
                  <th>Image</th>
                 <th>Category</th>
                
                  <th>Type</th>
                  <th>Brand</th>
                  
                   <th>Price</th>

                  
                 <th>Description</th>        
                  
                 
                 <th>Paytype</th>   
                  
                  
                </tr>
                </thead>
        <tbody id="sortable">
                
          <?php 
          $sponsored = get_all_donate_admin();
$i=1;
foreach($sponsored as $valuef){
           // print_r($posts);

            ?>


                <tr class="featuredpro" id="<?php echo $valuef->id; ?>">
                         <td><?php echo $i;?></td>  
                <td><a href="<?php echo base_url()."welcome/productdetail/".$valuef->category_id.'/'.$valuef->id."";?>"><?php echo  $valuef->title;?></a></td>
                <td> <?php 

                // $image = get_product_image($value->product_id); 

               // print_r($image); 

                ?>

                <?php ?>
                 
                <img src="<?php echo base_url().$valuef->cover_img."";?>" class="img-responsive" style="width:100px;height: 100px;" alt="Image">

               <?php  ?>

                 
               </td>
               <td><?=$this->db->get_where("category", "id=".($valuef->category_id))->row()->category?></td>
               
                <td><?php echo  $valuef->type;?></td>
                 <td><?php echo  $valuef->brand;?></td>
                       <td><?php echo  $valuef->price;?></td>
               <td><?php echo  $valuef->Description;?></td>
               <td><select id="pay_type" data-product_id="<?php echo $valuef->id?>"  data-category_id="<?php echo $valuef->category_id?>" class="prioritydrop">
           
            <option value="1" <?=(($valuef->pay_type==1)?"selected":"")?>>Boost</option>
            <option  value="2" <?=(($valuef->pay_type==2)?"selected":"")?>>Donate</option>
            <option value="0"<?=(($valuef->pay_type==0)?"selected":"")?>>Normal</option>
           
        </select></td>
                </tr> 
                <?php $i++; } ?>
            </tbody>
                
            </table>

        

        </div> 	
        <div id="menu3" class="tab-pane fade" style="margin-top: 34px;">



<table id="example6" class="table table-bordered table-striped">
<thead>
<tr>
<th>S.no</th>
<th>Post</th>
<th>Image</th>
<th>Category</th>

<th>Type</th>
<th>Brand</th>

<th>Price</th>


<th>Description</th>        

<th>Action</th> 
<th>Paytype</th>   


</tr>
</thead>
<tbody id="sortable">

<?php 
$active = get_all_active_Product();
$i=1;
foreach($active as $valuea){
// print_r($posts);

?>


<tr class="featuredpro" id="<?php echo $valuea->id; ?>">
     <td><?php echo $i;?></td>  
<td><a href="<?php echo base_url()."welcome/productdetail/".$valuea->category_id.'/'.$valuea->id."";?>"><?php echo  $valuea->title;?></a></td>
<td> <?php 

// $image = get_product_image($value->product_id); 

// print_r($image); 

?>

<?php ?>

<img src="<?php echo base_url().$valuea->cover_img."";?>" class="img-responsive" style="width:100px;height: 100px;" alt="Image">

<?php  ?>


</td>
<td><?=$this->db->get_where("category", "id=".($valuea->category_id))->row()->category?></td>

<td><?php echo  $valuea->type;?></td>
<td><?php echo  $valuea->brand;?></td>
   <td><?php echo  $valuea->price;?></td>
<td><?php echo  $valuea->Description;?></td>
<td> 
   

   <input type="button" name="active_status" value="Deactive" class="btn btn-info" onclick="return admindeactive(<?php echo $valuea->id ;?>);" data-productid = "<?php echo $valuea->id ;?>">



</td>  
<td><select id="pay_type" data-product_id="<?php echo $valuea->id?>"  data-category_id="<?php echo $valuea->category_id?>" class="prioritydrop">

<option value="1" <?=(($valuea->pay_type==1)?"selected":"")?>>Boost</option>
<option  value="2" <?=(($valuea->pay_type==2)?"selected":"")?>>Donate</option>
<option value="0"<?=(($valuea->pay_type==0)?"selected":"")?>>Normal</option>

</select></td>
</tr> 
<?php $i++; } ?>
</tbody>

</table>



</div> 	
<div id="menu4" class="tab-pane fade" style="margin-top: 34px;">



<table id="example7" class="table table-bordered table-striped">
<thead>
<tr>
<th>S.no</th>
<th>Post</th>
<th>Image</th>
<th>Category</th>

<th>Type</th>
<th>Brand</th>

<th>Price</th>


<th>Description</th>        


<th>Paytype</th>   
<th>Action</th> 

</tr>
</thead>
<tbody id="sortable">

<?php 
$deactive = get_all_deactive_Product();
$i=1;
foreach($deactive as $valued){
// print_r($posts);

?>


<tr class="featuredpro" id="<?php echo $valued->id; ?>">
     <td><?php echo $i;?></td>  
<td><a href="<?php echo base_url()."welcome/productdetail/".$valued->category_id.'/'.$valued->id."";?>"><?php echo  $valued->title;?></a></td>
<td> <?php 

// $image = get_product_image($value->product_id); 

// print_r($image); 

?>

<?php ?>

<img src="<?php echo base_url().$valued->cover_img."";?>" class="img-responsive" style="width:100px;height: 100px;" alt="Image">

<?php  ?>


</td>
<td><?=$this->db->get_where("category", "id=".($valued->category_id))->row()->category?></td>

<td><?php echo  $valued->type;?></td>
<td><?php echo  $valued->brand;?></td>
   <td><?php echo  $valued->price;?></td>
<td><?php echo  $valued->Description;?></td>
<td> 
   

   <input type="button" name="admin_approved" value="Active" class="btn btn-info" onclick="return adminactive(<?php echo $valued->id ;?>);" data-productid = "<?php echo $valued->id ;?>">



</td>  
<td><select id="pay_type" data-product_id="<?php echo $valued->id?>"  data-category_id="<?php echo $valued->category_id?>" class="prioritydrop">

<option value="1" <?=(($valued->pay_type==1)?"selected":"")?>>Boost</option>
<option  value="2" <?=(($valued->pay_type==2)?"selected":"")?>>Donate</option>
<option value="0"<?=(($valued->pay_type==0)?"selected":"")?>>Normal</option>

</select></td>

</tr> 
<?php $i++; } ?>
</tbody>

</table>



</div> 	

</div>


        </div>
    </div>
  </div>
<!-- Modal -->
<div class="modal fade" id="showRatingModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width: fit-content;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Ratings</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   <div class="container">
    			
		<div class="row">
			<div class="col-sm-3">
				<div class="rating-block">
					<h4>Average user rating</h4>
					<h2 class="bold padding-bottom-7"><span id="ratinginmodel"></span> <small>/ 5</small></h2>
					<button type="button" id="ratingstar1" class="btn" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" id="ratingstar2" class="btn" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" id="ratingstar3" class="btn" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" id="ratingstar4" class="btn" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" id="ratingstar5" class="btn" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
				</div>
			</div>
			<div style="color: white;" class="col-sm-3">
				<h4>Product Rating breakdown</h4>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
						  </div>
						</div>
					</div>
					<div class="pull-right" id="ratingbar5" style="margin-left:10px;">0</div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
						  </div>
						</div>
					</div>
					<div class="pull-right" id="ratingbar4" style="margin-left:10px;">0</div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
						  </div>
						</div>
					</div>
					<div class="pull-right" id="ratingbar3" style="margin-left:10px;">0</div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
						  </div>
						</div>
					</div>
					<div class="pull-right" id="ratingbar2" style="margin-left:10px;">0</div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">1<span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
						  </div>
						</div>
					</div>
					<div class="pull-right" id="ratingbar1" style="margin-left:10px;">0</div>
				</div>
			</div>			
		</div>			
		
		<div class="row">
			<div class="col-sm-9">
				<hr/>
				<div id="review-block" class="review-block">
			
				
				</div>
			</div>
		</div>
		
    </div> <!-- /container -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>  
</section>
<script type="text/javascript">
  $(document).on('change', ".prioritydrop", function(){
   
    let thisval = $(this).val();
   
    let product_id = $(this).data("product_id");
    let category_id = $(this).data("category_id");
   
  
     $.ajax({
         url: '<?php echo base_url("admin/updateproductfeaturestatus/")?>',
             type: 'POST',
             data: {"pay_type":thisval, "product_id":product_id,"category_id":category_id},
             error: function() {
                alert('Something is wrong');
             },
             success: function(data) {
               
                  location.reload();
             } 
          });
})
 </script> 

<script>
function admindeactive(product_id){
  
                 var statusd = 1;
               
alert(product_id);
                 $.ajax({
                   type: "POST",
                   url: '<?php echo base_url("admin/updateproductactivestatus")?>',
                   cache:false,
                  data: {'product_id':product_id,'category_id':category_id'active_status':statusd},
                   error: function() {
                      alert('Something is wrong');
                   },
             success: function(data) {

              swal({
                          title: "Post De-active Successfully",
                          text: "",
                          type: "success"
                      }, function() {
                         location.reload();                      
                       });

                  
             } 
          });
}


function adminactive(productid){
  
              
  var statusd = 0;

  $.ajax({
    type: "POST",
    url: '<?php echo base_url("Admin/updateproductactivestatus")?>',
    cache:false,
   data: {'productid':productid,'status':statusd},
    error: function() {
       alert('Something is wrong');
    },
success: function(data) {

swal({
           title: "Post active Successfully",
           text: "",
           type: "success"
       }, function() {
          location.reload();                      
        });

   
} 
});
}
</script>
 
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script>

//     $('#example30,#example5').DataTable({
// 'paging'      : true,'autoWidth'   : true,
// 'lengthChange': true,
//             dom: 'Bfrtip',
//         buttons: [
 
//             'excelHtml5',
          
//         ]
//         });
$('#example4').DataTable({
      
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true,

    })

    $('#example5').DataTable({
      
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true,

    })

    $('#example6').DataTable({
      
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true,

    })

    $('#example7').DataTable({
      
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true,

    })


    $('#example3, example5').DataTable({
      
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true,

    })

    
    
 function _cacheScript(c,d,e){var a=new XMLHttpRequest;a.onreadystatechange=function(){4==a.readyState&&(200==a.status?localStorage.setItem(c,JSON.stringify({content:a.responseText,version:d})):console.warn("error loading "+e))};a.open("GET",e,!0);a.send()}function _loadScript(c,d,e,a){var b=document.createElement("script");b.readyState?b.onreadystatechange=function(){if("loaded"==b.readyState||"complete"==b.readyState)b.onreadystatechange=null,_cacheScript(d,e,c),a&&a()}:b.onload=function(){_cacheScript(d,e,c);a&&a()};b.setAttribute("src",c);document.getElementsByTagName("head")[0].appendChild(b)}function _injectScript(c,d,e,a){var b=document.createElement("script");b.type="text/javascript";c=JSON.parse(c);var f=document.createTextNode(c.content);b.appendChild(f);document.getElementsByTagName("head")[0].appendChild(b);c.version!=e&&localStorage.removeItem(d);a&&a()}function requireScript(c,d,e,a){var b=localStorage.getItem(c);null==b?_loadScript(e,c,d,a):_injectScript(b,c,d,a)};
</script>

<script type="text/javascript">


$(".delete").click(function(){
        var id = $(this).parents("tr").attr("id");
       // alert(id);
    
       swal({
        title: "Are you sure?",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel please!",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          $.ajax({
         url: '<?php echo base_url("admin/deletepost/")?>'+id,
             type: 'DELETE',
             error: function() {
                alert('Something is wrong');
             },
             success: function(data) {

                  $("#"+id).remove();

            swal("Deleted!","", "success");
                  
             } 
          });
        } else {
          swal("Cancelled", "", "error");
        }
      });
     
    });
    
</script>


<!-- <script src="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" /> -->

<!-- <script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script> -->
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

  <?php include('footer.php'); ?>
 