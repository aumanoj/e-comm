   <?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/sidebar'); ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h4>Add Product</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url('admin/product-details'); ?>">Product Details</a></li>
               <li class="breadcrumb-item active">Add Product</li>
            </ol>
          </div>
        </div>
     
    </section>
    <div class="text-danger text-center">
   <?php echo $this->session->flashdata('duplicateproducturl'); ?>
</div>


    <section class="content">
    <div class="card">
<div class="card-header">
<h3 class="card-title">Add Products</h3>
</div>
           


<form method="post" action="" enctype="multipart/form-data">
  
<div class="card-body">
<div class="row">
  <!--  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo  $this->security->get_csrf_hash();?>"/>  -->        


<div class="col-sm-4">
<div class="form-group">
<label>Product Categories Name:</label>
<div class="input-group">
<select name="product_categories[]"  class="form-control" multiple>
      <option selected="selected" disabled value="">Select Product Categories</option>
   <?php    
   $all_pc = $this->db->get('product_categories');
   $res = $all_pc->result();
   foreach ($res as  $value) 
   { ?>
<option <?php if($value->products_categories_id==$this->input->post('product_categories_name')){ echo 'selected="selected"'; } ?> value="<?php echo $value->products_categories_id  ?>"><?php echo $value->name;?> </option>
   <?php }
   ?>
</select>
</div>
<div class="text-danger">
   <?php echo $this->session->flashdata('erraddproductcat'); ?>
</div>
<?php 
            if(form_error('product_categories'))
            {
              echo "<div id='error' style='color:red;'>".form_error('product_categories')."</div>";
            }
          ?>
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
<label>Product Sub Categories Name:</label>
<div class="input-group">
<select name="product_categories[]"  class="form-control" multiple>
      <option selected="selected" disabled value="">Select Product Categories</option>
   <?php    
   $all_pc = $this->db->get('product_subcategories');
   $res = $all_pc->result();
   foreach ($res as  $value) 
   { ?>
<option <?php if($value->products_categories_id==$this->input->post('product_categories_name')){ echo 'selected="selected"'; } ?> value="<?php echo $value->products_categories_id  ?>"><?php echo $value->name;?> </option>
   <?php }
   ?>
</select>
</div>
<div class="text-danger">
   <?php echo $this->session->flashdata('erraddproductcat'); ?>
</div>
<?php 
            if(form_error('product_categories'))
            {
              echo "<div id='error' style='color:red;'>".form_error('product_categories')."</div>";
            }
          ?>
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
<label>Product Brand Name:</label>
<div class="input-group">
<select name="product_brand_name" onchange="otherShow(this.value)" id="product_brand_name"  class="form-control">
      <option selected="selected" disabled value="">Select Product Brand</option>
   <?php    
   $all_bd = $this->db->get('product_brands');
   $res1 = $all_bd->result();
   foreach ($res1 as  $value1) 
   { ?>
<option <?php if($value1->products_brand_id==$this->input->post('product_brand_name')){ echo 'selected="selected"'; } ?> value="<?php echo $value1->products_brand_id  ?>"><?php echo $value1->brand_name;?> </option>
   <?php }
   ?>
</select>
</div>

<?php 
            if(form_error('product_brand_name'))
            {
              echo "<div id='error' style='color:red;'>".form_error('product_brand_name')."</div>";
            }
          ?>
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
<label>Model Name :</label>
<div class="input-group">
<input type="text" name="product_model_name" value="<?php echo set_value('product_model_name'); ?>" class="form-control" placeholder="Enter Model Name">
</div>

<?php 
            if(form_error('product_model_name'))
            {
              echo "<div id='error' style='color:red;'>".form_error('product_model_name')."</div>";
            }
          ?>
</div>
</div>
<div class="col-sm-4">
<div class="form-group">
<label>Material Type :</label>
<div class="input-group">
<select name="lens_matrial"  class="form-control">
<!--<option selected="selected" disabled value="">Select Lens Material</option>-->
   <?php    
  foreach ($lensmatrials = $this->db->get('lens_matrial')->result() as $lensmatrial)  { ?>
<option <?php if($lensmatrial->id==$this->input->post('lens_matrial')){ echo 'selected="selected"'; } ?> value="<?php echo $lensmatrial->id  ?>"><?php echo $lensmatrial->name;?> </option>
   <?php }
   ?>
</select>
</div>

<?php 
            if(form_error('lens_matrial'))
            {
              echo "<div id='error' style='color:red;'>".form_error('lens_matrial')."</div>";
            }
          ?>
</div>
</div>

</div>

<div class="row">
<div class="col-sm-4">
<div class="form-group">
<label>Main Image :</label>
<div class="input-group">
<input type="file" name="mainimg"  class="form-control">
</div>

<?php 
            if(form_error('mainimg'))
            {
              echo "<div id='error' style='color:red;'>".form_error('mainimg')."</div>";
            }
          ?>
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
<label>Related Image :</label>
<div class="input-group">
<input type="file" name="img[]" multiple  class="form-control">
</div>

<?php 
            if(form_error('img'))
            {
              echo "<div id='error' style='color:red;'>".form_error('img')."</div>";
            }
          ?>
</div>
</div>
<div class="col-sm-4">
<div class="form-group">
<label>Offer:</label>
<div class="input-group">
<input type="text" name="offer" placeholder="eg- 60 % Off"  class="form-control">
</div>

<?php 
            if(form_error('offer'))
            {
              echo "<div id='error' style='color:red;'>".form_error('offer')."</div>";
            }
          ?>
</div>
</div>
</div>

<div class="row">
  <div class="col-sm-6">
<div class="form-group">
<label>Making Price in %  :</label>
<div class="input-group">
<input type="number" name="product_price" value="<?php echo set_value('product_price'); ?>" class="form-control" placeholder="Enter Product Making charge in %">
</div>

<?php 
            if(form_error('product_price'))
            {
              echo "<div id='error' style='color:red;'>".form_error('product_price')."</div>";
            }
          ?>
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<label>Sale Making Price in %:</label>
<div class="input-group">
<input type="number" name="discounted_price" value="<?php echo set_value('discounted_price'); ?>" class="form-control" placeholder="Enter Product Selling Price in %">
</div>

<?php 
            if(form_error('discounted_price'))
            {
              echo "<div id='error' style='color:red;'>".form_error('discounted_price')."</div>";
            }
          ?>
</div>
</div>

</div>






<div class="row">
<div class="col-sm-4">
<div class="form-group">
<label>Type :</label>
<div class="input-group">
<select name="use_for" class="form-control">
      <option selected="selected" disabled value="">Choose One</option>
   <?php    
   $uses = $this->db->get('use_for')->result();
   foreach ($uses as  $use) 
   { ?>
<option <?php if($use->id==$this->input->post('use_for')){ echo 'selected="selected"'; } ?> value="<?php echo $use->id; ?>"><?php echo $use->name;?> </option>
   <?php }
   ?>
</select>
</div>
<?php 
            if(form_error('use_for'))
            {
              echo "<div id='error' style='color:red;'>".form_error('use_for')."</div>";
            }
          ?>
</div>
</div>



</div>

<div class="row">
<div class="col-sm-4">
<div class="form-group">
<label>Shape:</label>
<div class="input-group">
  <select name="shape"  class="form-control">
<option selected="selected" disabled value="">Select Shape</option>
   <?php    
  foreach ($shapes = $this->db->get('shape')->result() as $shape)  { ?>
<option <?php if($shape->id==$this->input->post('shape')){ echo 'selected="selected"'; } ?> value="<?php echo $shape->id  ?>"><?php echo $shape->name;?> </option>
   <?php }
   ?>
</select>
</div>

<?php 
            if(form_error('shape'))
            {
              echo "<div id='error' style='color:red;'>".form_error('shape')."</div>";
            }
          ?>
</div>
</div>



<div class="col-sm-4">
<div class="form-group">
<label>Color:</label>
<div class="input-group">
 <select name="product_color"  class="form-control">
<option selected="selected" disabled value="">Select Product Color</option>
   <?php    
  foreach ($productcolors = $this->db->get('lens_color')->result() as $productcolor)  { ?>
<option <?php if($productcolor->id==$this->input->post('product_color')){ echo 'selected="selected"'; } ?> value="<?php echo $productcolor->id  ?>"><?php echo $productcolor->name;?> </option>
   <?php }
   ?>
</select>
</div>

<?php 
            if(form_error('product_color'))
            {
              echo "<div id='error' style='color:red;'>".form_error('product_color')."</div>";
            }
          ?>
</div>
</div>
</div>


<div class="row">
<!-- <div class="col-sm-6">
<div class="form-group">
<label>Country of Origin :</label>
<div class="input-group">
<select name="country_of_origin" class="form-control">
      <option selected="selected" disabled value="">Choose One</option>
   <?php    
   foreach ($origins = $this->db->get('country')->result() as  $origin) 
   { ?>
<option <?php if($origin->country_id==$this->input->post('country_of_origin')){ echo 'selected="selected"'; } ?> value="<?php echo $origin->country_id; ?>"><?php echo $origin->name;?> </option>
   <?php }
   ?>
</select>
</div>
<?php 
            if(form_error('country_of_origin'))
            {
              echo "<div id='error' style='color:red;'>".form_error('country_of_origin')."</div>";
            }
          ?>
</div>
</div> -->


</div>

<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Product Rating:</label>
<div class="input-group">
<input type="text" name="rating" id="rate" value="<?php echo set_value('rating'); ?>" class="form-control" placeholder="Enter Rating 0-5 ">
</div>

<?php 
            if(form_error('rating'))
            {
              echo "<div id='error' style='color:red;'>".form_error('rating')."</div>";
            }
          ?>
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<label>Bought This:</label>
<div class="input-group">
<input type="text" name="bought" value="<?php echo set_value('bought'); ?>" class="form-control" placeholder="Eg- 10000 people bought this">
</div>

<?php 
            if(form_error('bought'))
            {
              echo "<div id='error' style='color:red;'>".form_error('bought')."</div>";
            }
          ?>
</div>
</div>
</div>



<div class="row">

  <div class="col-sm-12">
<div class="form-group">
<label>Show product list / Warranty:</label>
<div class="input-group">
<select name="show_lens_list" onchange="Showlenslist(this.value)"  class="form-control">
      <option selected="selected" disabled value="">Choose One</option>
   <?php    
   foreach ($show_lens_lists = $this->db->get('comman')->result() as  $show_lens_list) 
   { ?>
<option <?php if($show_lens_list->id==$this->input->post('show_lens_list')){ echo 'selected="selected"'; } ?> value="<?php echo $show_lens_list->id  ?>"><?php echo $show_lens_list->name;?> </option>
   <?php }
   ?>
</select>
</div>

<?php 
            if(form_error('show_lens_list'))
            {
              echo "<div id='error' style='color:red;'>".form_error('show_lens_list')."</div>";
            }
          ?>
</div>
</div>
</div>

<div class="row" id="Showlens" style="display:none;">
<div class="col-sm-12">
<div class="form-group">
<label>Warranty / Lenses :</label>
<div class="input-group">

<select name="warranty[]" class="form-control"  multiple>
<option selected="selected" disabled value="">Choose One</option>
   <?php    
   foreach ($lensess = $this->db->get('lenses')->result() as  $lenses) 
   { ?>
<option <?php if($lenses->id==$this->input->post('warranty')){ echo 'selected="selected"'; } ?> value="<?php echo $lenses->id; ?>"><?php echo $lenses->heading;?> </option>
   <?php }
   ?>
</select>
</div>
</div>
</div>
</div>


<div class="row">
 <div class="col-sm-4">
<div class="form-group">
<label>Coupon Code:</label>
<div class="input-group">
<input type="text" name="coupon_code" value="<?php echo set_value('coupon_code'); ?>" class="form-control" placeholder="Eg- AKC100">
</div>

<?php 
            if(form_error('coupon_code'))
            {
              echo "<div id='error' style='color:red;'>".form_error('coupon_code')."</div>";
            }
          ?>
</div>
</div> 

<div class="col-sm-4">
<div class="form-group">
<label>Coupon Amount:</label>
<div class="input-group">
<input type="number" name="coupon_amount" value="<?php echo set_value('coupon_amount'); ?>" class="form-control" placeholder="Eg- 100">
</div>

<?php 
            if(form_error('coupon_amount'))
            {
              echo "<div id='error' style='color:red;'>".form_error('coupon_amount')."</div>";
            }
          ?>
</div>
</div> 


<div class="col-sm-4">
<div class="form-group">
<label>Stokke Qty:</label>
<div class="input-group">
<input type="number" name="stokke" value="<?php echo set_value('stokke'); ?>" class="form-control" placeholder="Eg- 10">
</div>

<?php 
            if(form_error('stokke'))
            {
              echo "<div id='error' style='color:red;'>".form_error('stokke')."</div>";
            }
          ?>
</div>
</div> 

</div>

<div class="row">
 <div class="col-sm-12">
<div class="form-group">
<label>Product URL:</label>
<div class="input-group">
<input type="text" name="product_url" value="<?php echo set_value('product_url'); ?>" class="form-control" placeholder="Eg- suprol-bolt-uv-hi-index-electra">
</div>

<?php 
            if(form_error('product_url'))
            {
              echo "<div id='error' style='color:red;'>".form_error('product_url')."</div>";
            }
          ?>
</div>
</div> 
</div>


<div class="row">
 <div class="col-sm-12">
<div class="form-group">
<label>SEO Title:</label>
<div class="input-group">
<input type="text" name="seo_title" value="<?php echo set_value('seo_title'); ?>" class="form-control" placeholder="Eg- Best glasses of India">
</div>

<?php 
            if(form_error('seo_title'))
            {
              echo "<div id='error' style='color:red;'>".form_error('seo_title')."</div>";
            }
          ?>
</div>
</div> 
</div>


<div class="row">
        <div class="col-md-12">
          <label>Description :</label>
          <div class="card card-outline card-info">
          
            <div class="card-body pad">
              <div class="mb-3">
                <textarea class="textarea form-control" name="product_description" style="width: 500%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo set_value('product_description'); ?></textarea>
              </div>
              <?php 
            if(form_error('product_description'))
            {
              echo "<div id='error' style='color:red;'>".form_error('product_description')."</div>";
            }
          ?>
            </div>
     
        </div>
      </div>
    </div>



 <div class="form-group text-center">
  <input class="btn btn-primary" type="submit"  value="Add"  name="submit">
  </div>

  </div>
</form>
</div>
</section>
</div>

<?php $this->load->view('admin/include/footer'); ?>
<script type="text/javascript"> 
function select_brand(str)
      {
    //alert(str);
     var datastr={"product_categories_id":str};
       var urli="<?php echo base_url();?>AdminController/show_product_brand";
     $.ajax({
        url:urli,
        type:'post',
        data:datastr,
        success:function(str1)
        {
          //alert(str);
          $("#product_brand_name").html(str1);
          
        }
    
      });
      

      }
</script>

<script>  
      function otherShow(x)
      {
      if(x==8)
      {
      document.getElementById("Showothertype").style="display:none";
      }
      else
      {
      document.getElementById("Showothertype").style="display:block";
      }
    }
 </script>

 <script>  
      function Showlenslist(y)
      {
      if(y==1)
      {
      document.getElementById("Showlens").style="display:block";
      }
      else
      {
      document.getElementById("Showlens").style="display:none";
      }
    }
 </script>

<script type="text/javascript">
  $("#rate").blur(function(){
  var fn = $(this).val();
  if($(this).val() > 5)
  {
  swal('accept 1-5')
  $(this).val('');

  }
  });
</script>