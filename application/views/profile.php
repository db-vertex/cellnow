<?php include('header.php');?>
  <?php include('sidebar.php');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    
    
    
    <?php  if($error=$this->session->flashdata('msg')){  ?>
<div class="row">
<div class="col-lg-6">
<div class="alert alert-success" style="margin-left: 14px;margin-top: 10px;">
<?= $error; ?>
</div>
</div>
</div>

<?php } ?>
    
    <section class="content">

      <div class="row">


    <div class="col-md-2">
    </div>

        <div class="col-md-7">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>assets/dist/img/user.png" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo($admin_detail->first_name." ".$admin_detail->last_name); ?></h3>

              <p class="text-muted text-center">Admin</p>

              <ul class="list-group list-group-unbordered">
                  
                  <li class="list-group-item">
                  <b>First Name</b> <a class="pull-right"><?php echo($admin_detail->first_name); ?></a>
                </li>
                  
                  <li class="list-group-item">
                  <b>Last Name</b> <a class="pull-right"><?php echo($admin_detail->last_name); ?></a>
                </li>
                  
                  
                  
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right"><?php echo($admin_detail->email); ?></a>
                </li>
                
                   <li class="list-group-item">
                  <b>Phone</b> <a class="pull-right"><?php echo($admin_detail->mobile); ?></a>
                </li>
               <!--  <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li> -->
              </ul>
 
             <?=  anchor("admin/edit_admin/{$admin_detail->id}",'Edit',['class'=>'btn btn-primary']);  ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
       
          <!-- /.box -->
        </div>

        <div class="col-md-3">
    </div>
        <!-- /.col -->
     
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
  <?php include('footer.php'); ?>