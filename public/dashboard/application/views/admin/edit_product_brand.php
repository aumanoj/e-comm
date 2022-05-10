   <?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/sidebar'); ?>

<?php 
$bid = $id; 
$bd = $this->db->get_where('product_brands',array('products_brand_id'=>$bid))->row_array();
?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h4>Edit Product Brand</h4>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url('admin/product-brands'); ?>">Product Brands</a></li>
               <li class="breadcrumb-item active">Edit Product Brand</li>
            </ol>
          </div>
        </div>
     
    </section>


    <section class="content">
    <div class="card">
<div class="card-header">
<h3 class="card-title">Edit Product Brand Name</h3>
</div>
           


<form method="post" action="" enctype="multipart/form-data">
  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo  $this->security->get_csrf_hash();?>"/>
<div class="row">            
<div class="col-sm-6">
<div class="card-body">
<div class="form-group">
<label>Product Categories Name:</label>
<div class="input-group">
<select name="product_categories_name"  class="form-control">
      <option selected="selected" disabled value="">Select Product Categories</option>
   <?php    
   $all_pc = $this->db->get('product_categories');
   $res = $all_pc->result();
   foreach ($res as  $value) 
   { ?>
<option  value="<?php echo $value->products_categories_id  ?>" <?php if($value->products_categories_id==$bd['products_categories_id']){ echo 'selected="selected"'; } ?>><?php echo $value->name;?> </option>
   <?php }
   ?>
</select>
</div>
<div class="text-danger">
   <?php echo $this->session->flashdata('erraddproductcat'); ?>
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


<div class="col-sm-6">
<div class="card-body">
<div class="form-group">
<label>Product SubCategories Name:</label>
<div class="input-group">
<select name="product_subcategories_name"  class="form-control">
      <option selected="selected" disabled value="">Select Product Categories</option>
   <?php    
   $all_pc = $this->db->get('product_subcategories');
   $res = $all_pc->result();
   foreach ($res as  $value) 
   { ?>
<option  value="<?php echo $value->products_subcategories_id  ?>" <?php if($value->products_subcategories_id==$bd['products_subcategories_id']){ echo 'selected="selected"'; } ?>><?php echo $value->name;?> </option>
   <?php }
   ?>
</select>
</div>
<div class="text-danger">
   <?php echo $this->session->flashdata('erraddproductcat'); ?>
</div>
<?php 
            if(form_error('product_subcategories_name'))
            {
              echo "<div id='error' style='color:red;'>".form_error('product_subcategories_name')."</div>";
            }
          ?>
</div>
</div>
</div>


<div class="col-sm-6">
<div class="card-body">
<div class="form-group">
<label>Product Brand :</label>
<div class="input-group">
<input type="text" name="product_brand" value="<?php echo set_value('product_brand',$bd['brand_name']); ?>" class="form-control" placeholder="Enter Product Brand Name">
</div>
<div class="text-danger">
   <?php echo $this->session->flashdata('erraddproductbrands'); ?>
</div>
<?php 
            if(form_error('product_brand'))
            {
              echo "<div id='error' style='color:red;'>".form_error('product_brand')."</div>";
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