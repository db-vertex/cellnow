<?php include('header.php');?>
  <?php include('sidebar.php');?>
<!--   <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> -->
<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
<link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
 <section class="content-header">
      <h1>
        Banner
      </h1>
     <!--  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Category</li>
      </ol> -->
</section>



<section class="content">
<div class="row">
<a href="<?=  base_url('Admin/add_banner'); ?>" class="btn btn-primary btn-md"style="margin-left: 16px;margin-bottom: 10px;">Add Banner</a>

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
<table id="example3" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>S no.</th>
                  <!-- <th>Title</th>
 -->                  <th>Banner</th>
                  <!-- <th>Video Link</th> -->
                  <th>Action</th>
                </tr>
              </thead>
        <tbody>

          <?php 
          
         // print_r($agent);

          foreach ($banner as $value) { 

          ?>

                <tr id="<?php echo $value->id; ?>">

                <td><?php echo  $value->id;?></td>
                <!-- <td><?php echo  $value->title;?></td> -->
                
                <td style="text-align: center;">

                  <!-- <?php echo  $value->agent_mobile;?> -->
                        
                        <?php if(!empty($value->banner_image)){ ?>
                        <img src="<?php echo base_url().'/uploads/banner/'.$value->banner_image?>" style="height: 50px;width: 53px;">

                        <?php } ?> 

                </td>
                  <!--     <td>

                        <?php echo  $value->videolink;?>

                      </td> -->
                

                <td> <!--  <a href="<?php echo base_url("admin/editbanner/{$value->id}")?>" class=""  title="Edit">
                    <span class="glyphicon glyphicon-pencil"></span>
                </a> -->
 
  
 <a href="javascript:void(0)" class="delete" title="Delete" style="margin-left: 10px;"><span class="glyphicon glyphicon-trash"></span>
</a>

 </td>
                </tr> 
                <?php } ?>
            </tbody>
                
            </table>
        </div>
    </div>
  </div>
</section>

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
         url: '<?php echo base_url("admin/deletebanner/")?>'+id,
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
<script>

    $('#example3').DataTable({
            "columnDefs": [{
                "orderSequence": ["desc", "asc"],
                "searchable": false,
                "orderable": false,
                "targets": 0
            }]
            ,
            "order": [[0, 'desc' ]]
        } );
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
 
</script>


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
 