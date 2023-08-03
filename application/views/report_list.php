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
            Reported Product
        </h1>
        <!--  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Category</li>
      </ol> -->
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
                <table id="example3" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S no.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Message</th>
                            <th>Product Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($reportedposts as $value) {
                             ?>

                        <tr id="<?php echo $value->report_id; ?>">

                            <td><?php echo  $value->report_id;?></td>
                            <td><?php echo  $value->name;?></td>
                            <td><?php echo  $value->email;?></td>
                            <td><?php echo  $value->mobile;?></td>
                            <td><?php echo  $value->report;?></td>

                            <td style="text-align: center;"><a
                                    href="<?php echo base_url()."admin/productdetail/".$value->category_id.'/'.$value->product_id."";?>">
                                    <?php if($value->category_id==1){
                           $name= get_reusableproductname_byid($value->product_id,$value->category_id);
                        }
                           else if($value->category_id==2){
                           $name= get_tuitionproductname_byid($value->product_id,$value->category_id);
                          }
                          
                          else if($value->category_id==3){
                             $name= get_jobproductname_byid($value->product_id,$value->category_id);
                          }
                          else if($value->category_id==4){
                            $name= get_internshipproductname_byid($value->product_id,$value->category_id);
                         }
                        echo $name->title; 
                        ?>

                                </a> </td>


                            <td>
                                <?php if($value->active_status == 1){?>
                                <input type="button" name="active_status" value="Deactive"
                                    class="btn btn-danger adminactive"
                                    data-productid="<?php echo $value->product_id ;?>"
                                    data-categoryid="<?php echo $value->category_id ;?>">
                                    <?php }else{?>
                                      <input type="button" name="active_status" value="Active"
                                    class="btn btn-success admindeactive"
                                    data-productid="<?php echo $value->product_id ;?>"
                                    data-categoryid="<?php echo $value->category_id ;?>">
                                      <?php }?> 
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
$(document).ready(function() {


    $('#status').click(function() {

        var productid = $(this).data("productid");
        //alert(userid);
        if ($(this).is(':checked')) {

            var status = 0;

        } else {

            var status = 1;

        }



        $.ajax({
            type: "POST",
            url: '<?php echo base_url("Admin/updateproductstatus")?>',
            cache: false,
            data: {
                'productid': productid,
                'status': status
            },
            error: function() {
                alert('Something is wrong');
            },
            success: function(data) {

                if (status) {
                    swal("Post De-active Successfully!", "", "success");
                } else {
                    swal("Post Active Successfully!", "", "success");
                }



            }
        });


    });


    $(".admindeactive").click(function() {
        var statusd = 1;
        let product_id = $(this).data("productid");
        let category_id = $(this).data("categoryid");
        $.ajax({
            url: '<?php echo base_url("admin/updateproductactivestatus/")?>',
            type: 'POST',
            data: {
                'active_status': statusd,
                "product_id": product_id,
                "category_id": category_id
            },
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
    })


    $(".admindeactive").click(function() {
        var statusd = 1;
        let product_id = $(this).data("productid");
        let category_id = $(this).data("categoryid");
        $.ajax({
            url: '<?php echo base_url("admin/update_product_deactive_report/")?>',
            type: 'POST',
            data: {
                'active_status': statusd,
                "product_id": product_id,
                "category_id": category_id
            },
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
    })


    $(".adminactive").click(function() {
        var statusd = 0;
        let product_id = $(this).data("productid");
        let category_id = $(this).data("categoryid");
        $.ajax({
            url: '<?php echo base_url("admin/updateproductactivestatus/")?>',
            type: 'POST',
            data: {
                'active_status': statusd,
                "product_id": product_id,
                "category_id": category_id
            },
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
    })


    $(".adminactive").click(function() {
        var statusd = 0;
        let product_id = $(this).data("productid");
        let category_id = $(this).data("categoryid");
        $.ajax({
            url: '<?php echo base_url("admin/update_product_deactive_report/")?>',
            type: 'POST',
            data: {
                'active_status': statusd,
                "product_id": product_id,
                "category_id": category_id
            },
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
    })











    $(".delete").click(function() {
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
                        url: '<?php echo base_url("admin/deletereport/")?>' + id,
                        type: 'DELETE',
                        error: function() {
                            alert('Something is wrong');
                        },
                        success: function(data) {

                            $("#" + id).remove();

                            swal("Deleted!", "", "success");

                        }
                    });
                } else {
                    swal("Cancelled", "", "error");
                }
            });

    });


});
</script>
<script>
$('#example3').DataTable({
    "columnDefs": [{
        "orderSequence": ["asc", "desc"],
        "searchable": false,
        "orderable": false,
        "targets": 0
    }],
    "order": [
        [0, 'asc']
    ]
});
$('#example2').DataTable({
    'paging': true,
    'lengthChange': false,
    'searching': false,
    'ordering': true,
    'info': true,
    'autoWidth': false
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