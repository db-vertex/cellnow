<?php include('header.php');?>
  <?php include('sidebar.php');?>
  <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Privacy Policy
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        
        <li class="active">Privacy Policy</li>
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

  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> 
  
  
  
  <script type="text/javascript">
//<![CDATA[
bkLib.onDomLoaded(function() {
   nicEditors.allTextAreas() ;
   
       
  });



</script>


         <div class="box box-primary" style="padding-right: 389px;">
            <div class="box-body box-profile" style="padding-top: 46px;">


           <?php echo form_open('admin/add_privacy'); ?> 


 
          <div class="form-group">
            <label for="privacy_text">Privacy Policy</label>
                <textarea class="form-control" name="privacy_text"  id="privacy_text" rows="10"><?php if(!empty($privacy->privacy_policy)){echo $privacy->privacy_policy ;}?></textarea>
                        <div style="color:red;">
                               <?php  echo form_error('privacy_text');  ?>
                             
                           </div>
         
          </div>
 
             <button type="submit" class="btn btn-primary">Submit</button>

                   <?php echo form_close(); ?>
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
  <?php include('footer.php'); ?>