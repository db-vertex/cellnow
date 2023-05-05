
  <!-- Left side column. contains the logo and sidebar -->
 <?php include('header.php');?>
  <?php include('sidebar.php');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
       <!-- <small>Control panel</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
<?php 

            	$activeproduct = get_all_product_active_count();
            	$deactiveproduct = get_all_product_deactive_count();
            	$addeactiveproduct = get_all_product_admin_deactive_count();
            	$featuredproduct = get_all_product_featured_count();
            	?>
      <div class="row">
      	<div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            	<?php 

            	$product = get_all_product_count();
            	//print_r($product);

            	?>
              <h3><?php echo ($activeproduct+$deactiveproduct+$addeactiveproduct+$featuredproduct); ?></h3>

              <p>Product</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/products" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
           
          </div>
        </div>

        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            	
              <h3><?php echo $activeproduct; ?></h3>

              <p>Active Product</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/products" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            
          </div>
        </div>

        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
            
              <h3><?php echo $deactiveproduct; ?></h3>

              <p>Waiting Product</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/products" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

                <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
            
              <h3><?php echo $addeactiveproduct; ?></h3>

              <p>Deactive Product</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/products" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $featuredproduct; ?></h3>

              <p>Featured Product</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/products" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            
          </div>
        </div>


        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            	<?php 

            	$agent = get_all_agent_count();
            	//print_r($product);
            	?>
              <h3><?php echo $agent; ?></h3>

              <p>Agent</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/agent" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
            	<?php 

            	$buyer = get_all_buyer_count();
            	
            	?>
              <h3><?php echo $buyer; ?></h3>

              <p>Buyer</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            	<?php 

            	$buyer = get_all_seller_count();
            	
            	?>
              <h3><?php echo $buyer; ?></h3>

              <p>Seller</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="<?php echo base_url(); ?>admin/user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            
          </div>
        </div>

       


      </div>



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
<?php include('footer.php');?>
