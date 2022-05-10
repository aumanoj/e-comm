   <?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/sidebar'); ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h4>Add Product Categories</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url('admin/productcategories'); ?>">Product Categories</a></li>
               <li class="breadcrumb-item active">Add Product Categories</li>
            </ol>
          </div>
        </div>
     
    </section>


    <section class="content">
    <div class="card">
<div class="card-header">
<h3 class="card-title">Add Product Categories</h3>
</div>
           


<form method="post" action="" enctype="multipart/form-data">
<div class="row"> 
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo  $this->security->get_csrf_hash();?>"/>           
<div class="col-sm-4">
<div class="card-body">
<div class="form-group">
<label>Product Categories Name:</label>
<div class="input-group">
<input type="text" name="product_categories_name" value="<?php echo set_value('product_categories_name'); ?>" class="form-control" placeholder="Enter Product Categories Name">
</div>
<div class="text-danger">
   <?php echo $this->session->flashdata('erraddproductscat'); ?>
</div>
<?php 
            if(form_error('product_categories_name'))
            {
              echo "<div id='error' style='color:red;'>".form_error('product_categories_name')."</div>";
            }
          ?>
</div>
</div>
</div>

<div class="col-sm-4">
<div class="card-body">
<div class="form-group">
<label>Position:</label>
<div class="input-group">
<input type="number" name="position" placeholder="Enter Position" class="form-control">
</div>
<?php 
            if(form_error('position'))
            {
              echo "<div id='error' style='color:red;'>".form_error('position')."</div>";
            }
          ?>
</div>
</div>
</div>

<div class="col-sm-4">
<div class="card-body">
<div class="form-group">
<label>Image:</label>
<div class="input-group">
<input type="file" name="img" class="form-control">
</div>
<?php 
            if(form_error('img'))
            {
              echo "<div id='error' style='color:red;'>".form_error('img')."</div>";
            }
          ?>
</div>
</div>
</div>
</div>

 <div class="form-group text-center">
  <input class="btn btn-primary" type="submit"  value="Add"  name="submit">
  </div>
</form>
</div>
</section>
</div>

<?php $this->load->view('admin/include/footer'); ?>