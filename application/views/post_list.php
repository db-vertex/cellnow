<?php include('header.php');?>
  <?php include('sidebar.php');?>
<script>
    requireScript('jquery', '1.11.2', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', function(){
    // requireScript('examplejs', '0.0.3', 'example.js');
});
</script>
<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
<link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
  #sortable li span { position: absolute; margin-left: -1.3em; }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  
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
    <li class="active"><a data-toggle="tab" href="#home">Active Products</a></li>
    <li><a data-toggle="tab" href="#menu1">Boost Products</a></li>
    <li><a data-toggle="tab" href="#menu2">Donate Product</a></li>
    
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
      $allproduct =get_all_reusable();
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
                
                  <th>Posted by</th>
                  <th>Brand</th>
                  
                   <th>Price</th>

                  
                 <th>Condition</th>  
                 <th>Type</th>    
                  
                
                  
                  
                  
                </tr>
                </thead>
        <tbody id="sortable">
                
          <?php 
          $urgent = get_all_boost_product();
          print_r($urgent);
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
                 
                <img src="<?php echo base_url().$valueu->thumbnails."";?>" class="img-responsive" style="width:100px;height: 100px;" alt="Image">

               <?php  ?>




               
                 
               </td>
               <td><?=$this->db->get_where("category", "id=".($valueu->category_id))->row()->category?></td>
               
                <td><?php echo  $valueu->For_sale_by;?></td>
                 <td><?php echo  $valueu->Brand;?></td>
                       <td><?php echo  $valueu->Price;?></td>
               <td><?php echo  $valueu->Condition_product;?></td>
               <td><select  id="pay_type" data-product_id="<?php echo $valueu->id?>"  data-category_id="<?php echo $valueu->category_id?>" class="prioritydrop">
           
            <option value="2" <?=(($valueu->pay_type==2)?"selected":"")?>>Urgent</option>
            <option  value="1" <?=(($valueu->pay_type==1)?"selected":"")?>>Sponsor</option>
            <option value="0"<?=(($valueu->pay_type==0)?"selected":"")?>>Active</option>
           
        </select></td>
                </tr> 
                <?php $i++; } ?>
            </tbody>
                
            </table>

        

        </div> 	


       
 <div id="menu2" class="tab-pane fade" style="margin-top: 34px;">



        	          <table id="example4" class="table table-bordered table-striped">
                <thead>
                <tr>
               <th>S.no</th>
                  <th>Post</th>
                  <th>Image</th>
                 <th>Category</th>
                
                  <th>Posted by</th>
                  <th>Brand</th>
                  
                   <th>Price</th>

                  
                 <th>Condition</th>        
                  
                 
                  
                  
                  
                </tr>
                </thead>
        <tbody id="sortable">
                
          <?php 
          $sponsored = get_all_Sponsored_product();
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
                 
                <img src="<?php echo base_url().$valuef->thumbnails."";?>" class="img-responsive" style="width:100px;height: 100px;" alt="Image">

               <?php  ?>




               
                 
               </td>
               <td><?=$this->db->get_where("category", "id=".($valuef->category_id))->row()->category?></td>
               
                <td><?php echo  $valuef->For_sale_by;?></td>
                 <td><?php echo  $valuef->Brand;?></td>
                       <td><?php echo  $valuef->Price;?></td>
               <td><?php echo  $valuef->Condition_product;?></td>
               <td><select  id="pay_type" data-product_id="<?php echo $valuef->id?>"  data-category_id="<?php echo $valuef->category_id?>" class="prioritydrop">
           
            <option value="1" <?=(($valuef->pay_type==1)?"selected":"")?>>Sponsor</option>
            <option  value="2" <?=(($valuef->pay_type==2)?"selected":"")?>>Urgent</option>
            <option value="0"<?=(($valuef->pay_type==0)?"selected":"")?>>Active</option>
           
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
               
                  
             } 
          });
})
 </script> 
 
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/jquery.table2excel.js"></script>
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

 function togglestatus(id,category_id){
  var id = id;
  var category_id = category_id;
 alert(category_id);
  var pay_type = 1;
  
  swal({
        title: "Are you want to sure add product in product ????",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, Add it!",
        cancelButtonText: "No, cancel please!",
        closeOnConfirm: true,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
        $.ajax(
        {
      url:"<?php echo base_url('/admin/updateproductfeaturestatus')?>",
      type:"post",
      data:{'productid':id,'category_id':category_id, <td><select name="category_id">
            <?php
            foreach($category as $value){ 
                ?>
            <option value="<?=$value->id?>" <?=(($value->id==$bikes->category_id)?"selected":"")?>><?=$value->category?></option>
            <?php  } ?>
        </select></td>'pay_type':pay_type},
      success :function(data){
       
         
        
       
      }
    }
  )
} else {
          swal("Cancelled", "", "error");
          location.reload();
        }
      });
}



 function togglepaytype(id){
  var id = id;
  var pay_type = 2;
  swal({
        title: "Are you want to sure add product in product ????",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, Add it!",
        cancelButtonText: "No, cancel please!",
        closeOnConfirm: true,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
        $.ajax(
        {
      url:"<?php echo base_url('/admin/updateproducturgent')?>",
      type:"post",
      data:{'productid':id,'pay_type':pay_type},
      success :function(data){
       
          location.reload();  
        
       
      }
    }
  )
} else {
          swal("Cancelled", "", "error");
          location.reload();
        }
      });
}



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
 