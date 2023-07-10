 
<style type="text/css">
  .pd_top{
    padding: 7px 0px 7px 0px;
  }
</style>


 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
         <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
        </div>
        <div class="pull-left info">
      
        </div>
      </div>
      <!-- search form -->
  
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <!--<li class="header">MAIN NAVIGATION</li>-->
        <li class="<?php echo ($this->uri->segment(2) == 'dashboard')?'active':''; ?>">
          <a href="<?=  base_url('admin/dashboard'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
        
            </span>
          </a>


        <li class="<?php echo ($this->uri->segment(2) == 'user')?'active':''; ?>">
          <a href="<?=  base_url('admin/user'); ?>">
            <i class="fa fa-group"></i> <span>Users</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
      
        </li>

        <li class="<?php echo ($this->uri->segment(2) == 'products')?'active':''; ?>">
          <a href="<?=  base_url('admin/products'); ?>">
            <i class="fa fa-group"></i> <span>Products</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
      
        </li>

       

        
        <!-- <li class="<?php echo ($this->uri->segment(2) == 'videos')?'active':''; ?>">

          <a href="<?=  base_url('admin/videos'); ?>">

            <i class="fa fa-group"></i> <span>Video</span>

            <span class="pull-right-container">

              <small class="label pull-right bg-green"></small>

            </span>

          </a>

        </li> -->


        <li class="<?php echo ($this->uri->segment(2) == 'banner')?'active':''; ?>">

          <a href="<?=  base_url('admin/banner'); ?>">

            <i class="fa fa-group"></i> <span>Banner</span>

            <span class="pull-right-container">

              <small class="label pull-right bg-green"></small>

            </span>

          </a>

        </li>





         <!-- <li class="<?php echo ($this->uri->segment(2) == 'reportedposts')?'active':''; ?>">

          <a href="<?=  base_url('admin/reportedposts'); ?>">

            <i class="fa fa-group"></i> <span>Reported Products</span>

            <span class="pull-right-container">

              <small class="label pull-right bg-green"></small>

            </span>

          </a>

        </li> -->


       



        <!--<li class="<?php echo ($this->uri->segment(2) == 'Contact_us')?'active':''; ?>">-->
        <!--  <a href="<?=  base_url('admin/Contact_us'); ?>">-->
        <!--    <i class="fa fa-group"></i> <span>Contact us</span>-->
        <!--    <span class="pull-right-container">-->
        <!--      <small class="label pull-right bg-green"></small>-->
        <!--    </span>-->
        <!--  </a>-->
        <!--</li>-->
    

         <!-- <li class="<?php echo ($this->uri->segment(2) == 'Category')?'active':''; ?>">
          <a href="<?=  base_url('admin/shopCategory'); ?>">
            <i class="fa fa-group"></i> <span>Shop Category</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li> -->

        <!-- <li class="<?php echo ($this->uri->segment(2) == 'Category')?'active':''; ?>">
          <a href="<?=  base_url('admin/Category'); ?>">
            <i class="fa fa-group"></i> <span> Category</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>  -->

        

        <li class="<?php echo ($this->uri->segment(2) == 'about_us')?'active':''; ?>">
          <a href="<?=  base_url('admin/about_us'); ?>">
            <i class="fa fa-group"></i> <span>About Us</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
      
        </li>

        <!-- <li class="<?php echo ($this->uri->segment(2) == 'about_us')?'active':''; ?>">
          <a href="<?=  base_url('admin/verified_content'); ?>">
            <i class="fa fa-group"></i> <span>Product verified content</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
      
        </li> -->

        <li class="<?php echo ($this->uri->segment(2) == 'about_us')?'active':''; ?>">
          <a href="<?=  base_url('admin/meta'); ?>">
            <i class="fa fa-group"></i> <span>Meta tag</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
      
        </li>


        <li class="<?php echo ($this->uri->segment(2) == 'privacy_policy')?'active':''; ?>">
          <a href="<?=  base_url('admin/privacy_policy'); ?>">
            <i class="fa fa-group"></i> <span>Privacy Policy</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
      
        </li>

        <li class="<?php echo ($this->uri->segment(2) == 'terms_condition')?'active':''; ?>">
          <a href="<?=  base_url('admin/terms_condition'); ?>">
            <i class="fa fa-group"></i> <span>Terms & Condition</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
      
        </li> 

        <li class="<?php echo ($this->uri->segment(2) == 'help_support')?'active':''; ?>">
          <a href="<?=  base_url('admin/help_support'); ?>">
            <i class="fa fa-group"></i> <span>Help and Support</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
      
        </li>

        <li class="<?php echo ($this->uri->segment(2) == 'FAQs')?'active':''; ?>">
          <a href="<?=  base_url('admin/FAQs'); ?>">
            <i class="fa fa-group"></i> <span>FAQs</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
      
        </li>



        </li> 
      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>
