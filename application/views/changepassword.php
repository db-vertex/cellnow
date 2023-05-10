<?php include('header.php');?>
  <?php include('sidebar.php');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Change Password
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        
        <li class="active">change password</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

<div class="container">
      <div class="row">

 


   

    

         <div class="box box-primary" style="padding-right: 389px;">
            <div class="box-body box-profile" style="padding-top: 46px;">


           <?php echo form_open('admin/new_password'); ?> 

      
                    
                      <div class="form-group">
                         
                
                   <?php echo form_password(['class'=>'form-control','placeholder'=>'Enter new password','name'=>'password','value'=>set_value('password')]);  ?>
                 
                   <div>
                       <?php  echo form_error('password');  ?>
                     
                   </div>
                     </div>

                   
                   
                      <div class="form-group">
                      
                   <?php  echo form_password(['class'=>'form-control','placeholder'=>'Confirm Password','name'=>'cpassword','value'=>set_value('cpassword')]); ?>
                     <div>

                   <?php  echo form_error('cpassword');  ?>
                    
                    </div>
                    
                 
                    </div>

                     <?php  echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit']);  ?>
                
                
                    
                   
              
                   <?php echo form_close(); ?>
         </div>
         </div>
        

    
        <!-- /.col -->
     
        <!-- /.col -->
        </div>
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