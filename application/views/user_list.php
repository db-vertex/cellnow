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
input{
    border:none;
}
</style>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
 <section class="content-header">
      <h1>
        Users
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
<?= $msg; ?>
</div>
</div>
</div>

<?php endif; ?>
</div>

<div class="box">
<div class="box-body">

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Buyer/Seller</a></li>
    <li><a data-toggle="tab" href="#menu1">Shop</a></li>
   </ul>

    <div class="tab-content">
    <div id="home" class="tab-pane fade in active" style="margin-top: 34px;">
<table id="example3" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S no.</th>
                   <th>Mobile</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Registered on</th>
                </tr>
                </thead>
        <tbody>

          <?php $i=0; foreach ($buyer as $value) {

            $i++;
     
            ?>


                <tr id="<?php echo $value->user_id; ?>">

                <td><?php echo  $i;?></td>
                <td><?php echo  $value->phone;?></td>
                <td><?php echo  $value->name;?></td>
                <td><?php echo  $value->email;?></td>
                <td><?php echo  $value->Address;?></td>
                <td><?=date("d M, Y", strtotime($value->created))?></td>
                </tr> 
                <?php } ?>
            </tbody>
                
            </table>

          </div>

        
        <div id="menu1" class="tab-pane fade" style="margin-top: 34px;">
          

          	<table id="example5" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S no.</th>
                  <th>Phone</th>
                  <th>Shopname</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>GST</th>
                  <th>Timeing</th>
                  <th>Service Type</th>
                 
              

                    <th>Registered on</th>
                  <th>Shop Image</th>
                  <th>Approval</th>
                  
                </tr>
                </thead>
        <tbody>

        <?php $i=0; foreach ($shop as $valued) {

$i++;

?>


                <tr id="<?php echo $valued->id; ?>">

                <td><?php echo  $i;?></td>
                <td><?php echo  $valued->mobile;?></td>
                <td><?php echo  $valued->name;?></td>
                <td><?php echo  $valued->Address;?></td>
                <td><?php echo  $valued->email;?></td>
                <td><?php echo  $valued->GST;?></td>
                <td><?php echo  $valued->open_close_time;?></td>

                <td><?php echo  $valued->service_type;?></td>
               

               <td><?=date("d M, Y", strtotime($valued->created_at))?></td>
               <td><img height="70" width="70" src="<?php echo base_url();?>uploads/shop/<?php echo $valued->shop_images?>"></td>
               <td>  <select  id="pay_type" data-id="<?php echo $valued->id?>"   class="btn btn-info prioritydrop">
           
           <option value="0" <?=(($valued->admin_approval==0)?"selected":"")?>>Unverified</option>
           <option  value="1" <?=(($valued->admin_approval==1)?"selected":"")?>>Verified</option>
           <option value="2"<?=(($valued->admin_approval==2)?"selected":"")?>>Rejected</option>
          
       </select></td>
       <!-- <td>  <?php echo  date("d-m-Y",strtotime($valued->created));?> </td> -->

            <!--     <td> <label class="switch">

                        <input type="checkbox" name="status" id="deactivestatusssss" onclick="return test(<?php echo $valued->id ;?>);" data-productid = "<?php echo $valued->id ;?>" <?php if($valued->status == "0"){ echo "checked"; } ?>>
                        <span class="slider round"></span>
                      </label></td>
                
                

                <td> <label class="switch">

                        <input type="checkbox" name="status" id="featured" data-productid = "<?php echo $valued->id ;?>" <?php if($valued->featured == "1"){ echo "checked"; } ?>>
                        <span class="slider round"></span>
                      </label></td> -->
                
                <!--<td>  -->
                 
  
                     <!--<a href="javascript:void(0)" class="deleteseller" title="Delete" style="margin-left: 10px;"><span class="glyphicon glyphicon-trash"></span>-->
                <!--    </a>-->

                <!-- </td>-->
                </tr> 
                <?php } ?>
            </tbody>
                
            </table>


        </div>
        


</div>


        </div>
    </div>
  </div>
</section>
<script>
   $(document).on('change', ".prioritydrop", function(){
   
   let thisval = $(this).val();
  
   let id = $(this).data("id");
  
 
    $.ajax({
        url: '<?php echo base_url("admin/adminapproved/")?>',
            type: 'POST',
            data: {"admin_approval":thisval, "id":id},
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
function test(productid){
  //alert(productid);
  //var productid = $(this).data("dproductid");
            //alert(userid);
            if($(this).is(':checked')){
                
               
                 var statusd = 1;
            
            }else{
           
                var statusd = 0;
            
            }
//alert(statusd);


                 $.ajax({
                   type: "POST",
                   url: '<?php echo base_url("Admin/updateproductstatus")?>',
                   cache:false,
                  data: {'productid':productid,'status':statusd},
                   error: function() {
                      alert('Something is wrong');
                   },
             success: function(data) {

                   if(status){
                      swal("Post De-active Successfully!","", "success");
                    }else{
                      swal("Post Active Successfully!","", "success");
                    }

                  
                  
             } 
          });
}


    $(document).ready(function(){


           $('#deactivestatusssss').click(function(){

//alert(productid);
/*var productid = $(this).data("dproductid");
            //alert(userid);
            if($(this).is(':checked')){
                
                var statusd = 0;
            
            }else{
           
                var statusd = 1;
            
            }



                 $.ajax({
                   type: "POST",
                   url: '<?php echo base_url("Admin/updateproductstatus")?>',
                   cache:false,
                  data: {'productid':productid,'status':statusd},
                   error: function() {
                      alert('Something is wrong');
                   },
             success: function(data) {

                   if(status){
                      swal("Post De-active Successfully!","", "success");
                    }else{
                      swal("Post Active Successfully!","", "success");
                    }

                  
                  
             } 
          });*/


        });





    });
</script>

<script type="text/javascript">
    $(".deletebuyer").click(function(){
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
         url: '<?php echo base_url("admin/deletebuyer/")?>'+id,
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
    

        $(".deleteseller").click(function(){
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
         url: '<?php echo base_url("admin/deleteseller/")?>'+id,
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>







<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>




<script>

    $('#example3,#example4,#example5').DataTable({

            dom: 'Bfrtip',
        buttons: [
            'excel', 
        ],"columnDefs": [{
                "orderSequence": ["desc", "asc"],
                "searchable": false,
                "orderable": false,
                "targets": 0
            }],
            "order": [[0, 'asc' ]]
        });

/*$('#example3,#example4,#example5').DataTable({
          dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
        });*/


  
    $('#example2').DataTable({
       "order": [ 0, "desc" ]
      /*'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,*/

    })
 
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
 