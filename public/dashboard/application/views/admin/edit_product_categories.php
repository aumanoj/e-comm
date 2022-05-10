<?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/sidebar'); ?>

<?php
$productcatid = $id;
$productcat = $this->db->get_where('product_categories',array('products_categories_id'=>$productcatid))->row_array();
 ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h4>Edit Product Categories</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url('admin/productcategories'); ?>">Product Categories</a></li>
               <li class="breadcrumb-item active">Edit Product Categories</li>
            </ol>
          </div>
        </div>
     
    </section>


    <section class="content">
    <div class="card">
<div class="card-header">
<h3 class="card-title">Edit Product Categories</h3>
</div>
           


<form method="post" action="" enctype="multipart/form-data">
  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo  $this->security->get_csrf_hash();?>"/>
<div class="row">            
<div class="col-sm-4">
<div class="card-body">
<div class="form-group">
<label>Product Categories Name:</label>
<div class="input-group">
<input type="text" name="product_categories_name" value="<?php echo set_value('product_categories_name',$productcat['name']); ?>" class="form-control" placeholder="Enter Product Categories Name">
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
<input type="number" name="position" value="<?php echo set_value('position',$productcat['position']); ?>" placeholder="Enter Position" class="form-control">
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
 <img src="<?php echo base_url();?>uploads/product_categories_images/<?php echo $productcat['image']; ?>" hight="50px" width="50px" class="img-fluid">
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