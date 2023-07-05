<?php include('header.php');?>
  <?php include('sidebar.php');?>
  <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Verified Content
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        
        <li class="active">Verified Content</li>
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
<!-- <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>-->
  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> 
  
  
  
  <script type="text/javascript">
//<![CDATA[
bkLib.onDomLoaded(function() {
   nicEditors.allTextAreas() ;
       //new nicEditor({fullPanel : false}).panelInstance('area2');
        //new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough']});
          /*new nicEditor({iconsPath : '../nicEditorIcons.gif'}).panelInstance('about_us_text');
        
           new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('about_us_text');*/
       
  });


/*bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
 new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html']}).panelInstance('about_us_text');*/
   /*bkLib.onDomLoaded(function() {
        //new nicEditor().panelInstance('area1');
       // new nicEditor({fullPanel : true}).panelInstance('area2');
        //new nicEditor({iconsPath : '../nicEditorIcons.gif'}).panelInstance('area3');
        new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('about_us_text');
        //new nicEditor({maxHeight : 100}).panelInstance('area5');
  });
  //]]>*/
</script>




    

         <div class="box box-primary" style="padding-right: 389px;">
            <div class="box-body box-profile" style="padding-top: 46px;">


           <?php echo form_open('admin/add_verified_content'); ?> 


 
              <div class="form-group">
                          <label for="about_us_text">Verified Content</label>
                          <textarea class="form-control" name="verified_content"  id="about_us_text" rows="10"><?php if(!empty($verified_content->verified_content)){ echo $verified_content->verified_content ; } ?></textarea>
                           <div style="color:red;">
                                   <?php  echo form_error('about_us_text');  ?>
                                 
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