<?php $this->load->view('admin/include/header'); ?>

  <?php $this->load->view('admin/include/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div>
          <div class="col-sm-4">
           
          </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    

   
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
          <!--product Catagories start--------->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $pc = $this->db->get('product_categories')->num_rows();?></h3>

                <p>Total Product Catagories</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url('admin/productcategories'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
            <!--product Catagories end--------->
         
           <!--product Brand start--------->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $pb = $this->db->get('product_brands')->num_rows();?><!-- <sup style="font-size: 20px">%</sup> --></h3>

                <p>Total Product Brands</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url('admin/product-brands'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
             <!--product brand end--------->

              <!--product  start--------->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php echo $pdt = $this->db->get('products')->num_rows();?><!-- <sup style="font-size: 20px">%</sup> --></h3>

                <p>Total Product Details</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url('admin/product-details'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
             <!--product end--------->
     
          <div class="col-lg-3 col-6">
         
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $user = $this->db->get('user')->num_rows();?></h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo base_url('admin/registered-users'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

            <div class="col-lg-3 col-6">
         
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $enq = $this->db->get('enquiry')->num_rows();?></h3>

                <p>Enquiry</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo base_url('admin/enquiry-users'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


           <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $pord = $this->db->get('placed_order')->num_rows();?></h3>

                <p>Total Order</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url('admin/placed-order'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

           <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $se = $this->db->get('subscribe_email')->num_rows();?></h3>

                <p>Total Subscribed Email</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url('admin/subscribed-email'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
        </div>
        
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('admin/include/footer'); ?>