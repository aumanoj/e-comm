<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('admin/dashboard'); ?>" class="brand-link">
      <img src="<?php echo base_url('cmn/admin/dist/img/AdminLTELogo.png');?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('cmn/admin/dist/img/user2-160x160.jpg');?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Bansal & Sons</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url('admin/dashboard'); ?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/dashboard'); ?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
      
            </ul> -->
          </li>

            <li class="nav-item">
            <a href="<?php echo base_url('admin/product-details'); ?>" class="nav-link">
            <i class="fab fa-product-hunt"></i>
              <p>Product Details</p>
            </a>
          </li>

            <li class="nav-item">
            <a href="<?php echo base_url('admin/productcategories'); ?>" class="nav-link">
            <i class="fab fa-product-hunt"></i>
              <p>Product Categories</p>
            </a>
          </li>
        <li class="nav-item">
            <a href="<?php echo base_url('admin/lense-details'); ?>" class="nav-link">
            <i class="fab fa-product-hunt"></i>
              <p>Product Subcategories</p>
            </a>
          </li>
         <li class="nav-item">
            <a href="<?php echo base_url('admin/product-brands'); ?>" class="nav-link">
           <i class="fas fa-band-aid"></i>
              <p>Brand</p>
            </a>
          </li>




          <li class="nav-item">
            <a href="<?php echo base_url('admin/power-type'); ?>" class="nav-link">
        <i class="far fa-dot-circle"></i>
              <p>Gold Rate</p>
            </a>
          </li>
          

           <li class="nav-item">
            <a href="<?php echo base_url('admin/user-rating'); ?>" class="nav-link">
        <i class="far fa-dot-circle"></i>
              <p>User Rating</p>
            </a>
          </li>

           <li class="nav-item">
            <a href="<?php echo base_url('admin/enquiry-users'); ?>" class="nav-link">
        <i class="fas fa-address-book"></i>
              <p>Enquiry</p>

            </a>
          </li>

           <li class="nav-item">
            <a href="<?php echo base_url('admin/placed-order'); ?>" class="nav-link">
            <i class="fas fa-check-circle"></i>
              <p>Placed Order</p>
                 <span class="right badge badge-danger">New</span>
            </a>
          </li>


          <li class="nav-item">
            <a href="<?php echo base_url('admin/registered-users'); ?>" class="nav-link">
       <i class="far fa-user"></i>
              <p>Registred User</p>
            </a>
          </li>


      


          
          

         

           <li class="nav-item">
            <a href="<?php echo base_url('admin/sliders'); ?>" class="nav-link">
      <i class="fas fa-sliders-h"></i>
              <p>Sliders</p>
            </a>
          </li>

      <li class="nav-item">
            <a href="<?php echo base_url('admin/testimonials'); ?>" class="nav-link">
           <i class="fas fa-info-circle"></i>
              <p>Testmonial</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="<?php echo base_url('admin/about'); ?>" class="nav-link">
 <i class="far fa-dot-circle"></i>
              <p>About</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="<?php echo base_url('admin/blogs'); ?>" class="nav-link">
 <i class="far fa-dot-circle"></i>
              <p>Blogs</p>
            </a>
          </li>

          
          
           <li class="nav-item">
            <a href="<?php echo base_url('admin/RefundPolicy'); ?>" class="nav-link">
 <i class="far fa-dot-circle"></i>
              <p>Refund Policy</p>
            </a>
          </li>
          
           <li class="nav-item">
            <a href="<?php echo base_url('admin/TermsOfUse'); ?>" class="nav-link">
 <i class="far fa-dot-circle"></i>
              <p>Terms Of Use</p>
            </a>
          </li>
          
          
     
          
           <li class="nav-item">
            <a href="<?php echo base_url('admin/PrivacyPolicy'); ?>" class="nav-link">
 <i class="far fa-dot-circle"></i>
              <p>Privacy Policy</p>
            </a>
          </li>
          
          
            <li class="nav-item">
            <a href="<?php echo base_url('admin/DeliveryShippingTerms'); ?>" class="nav-link">
 <i class="far fa-dot-circle"></i>
              <p>Delivery & Shipping Terms</p>
            </a>
          </li>
          
            <li class="nav-item">
            <a href="<?php echo base_url('admin/cancellation'); ?>" class="nav-link">
 <i class="far fa-dot-circle"></i>
              <p>Cancellation</p>
            </a>
          </li>



          
          
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>