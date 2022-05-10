   <?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/sidebar'); ?>
<?php 
$product = $this->db->get_where('products',array('products_id'=>$id))->row_array();
?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h4>Edit Product</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url('admin/product-details'); ?>">Product Details</a></li>
               <li class="breadcrumb-item active">Edit Product</li>
            </ol>
          </div>
        </div>
     
    </section>


    <section class="content">
    <div class="card">
<div class="card-header">
<h3 class="card-title">Edit Products</h3>
</div>
          
<form method="post"  enctype="multipart/form-data">
<div class="card-body">
<div class="row">
            
<div class="col-sm-4">
<div class="form-group">
<label>Product Categories Name:</label>
<div class="input-group">
<select name="product_categories[]"   class="form-control" multiple>
     <!--  <option selected="selected" disabled value="">Select Product Categories</option> -->
   <?php    
   $all_pc = $this->db->get('product_categories');
   $res = $all_pc->result();
   foreach ($res as  $value) 
   { ?>

<option <?php 
$parr =  explode(",",$product['products_categories_id']);
$parrcount = count($parr);
for ($i=0; $i<$parrcount ; $i++) {  
if($value->products_categories_id==$parr[$i]){ echo 'selected="selected"'; } 
}
?> value="<?php echo $value->products_categories_id  ?>"><?php echo $value->name;?></option>
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
<select name="product_brand_name" id="product_brand_name"  class="form-control">
      <option selected="selected" disabled value="">Select Product Brand</option>
   <?php    
   $all_bd = $this->db->get_where('product_brands');
   $res1 = $all_bd->result();
   foreach ($res1 as  $value1) 
   { ?>
<option  value="<?php echo $value1->products_brand_id  ?>" <?php if($value1->products_brand_id==$product['products_brand_id']){ echo 'selected="selected"'; } ?>><?php echo $value1->brand_name;?> </option>
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
<input type="text" name="product_model_name" value="<?php echo set_value('product_model_name',$product['product_model_name']); ?>" class="form-control" placeholder="Enter Model Name">
</div>

<?php 
            if(form_error('product_model_name'))
            {
              echo "<div id='error' style='color:red;'>".form_error('product_model_name')."</div>";
            }
          ?>
</div>
</div>
</div>

<div class="row">
 <div class="col-sm-4">
<div class="form-group">
<label>MRP :</label>
<div class="input-group">
<input type="number" name="product_price" value="<?php echo set_value('product_price',$product['product_price']); ?>" class="form-control" placeholder="Enter Product MRP">
</div>

<?php 
            if(form_error('product_price'))
            {
              echo "<div id='error' style='color:red;'>".form_error('product_price')."</div>";
            }
          ?>
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
<label>Selling Price :</label>
<div class="input-group">
<input type="number" name="discounted_price" value="<?php echo set_value('discounted_price',$product['discounted_price']); ?>" class="form-control" placeholder="Enter Product Selling Price">
</div>

<?php 
            if(form_error('discounted_price'))
            {
              echo "<div id='error' style='color:red;'>".form_error('discounted_price')."</div>";
            }
          ?>
</div>
</div>
<div class="col-sm-4">
<div class="form-group">
<label>Offer:</label>
<div class="input-group">
<input type="text" name="offer" placeholder="eg- 60 % Off" value="<?php echo set_value('offer',$product['offer']) ?>" class="form-control">
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
<?php 

if($product['products_brand_id']!==8) { ?>

<div class="row">

<div class="col-sm-12">
<div class="form-group">
<label>Model  Number :</label>
<div class="input-group">
<input type="text" name="product_model_number" value="<?php echo set_value('product_model_number',$product['product_model_number']); ?>" class="form-control" placeholder="Enter Model Number">
</div>

<?php 
            if(form_error('product_model_number'))
            {
              echo "<div id='error' style='color:red;'>".form_error('product_model_number')."</div>";
            }
          ?>
</div>
</div>

<!-- <div class="col-sm-6">
<div class="form-group">
<label>Dimensions:</label>
<div class="input-group">
<input type="text" name="dimensions" value="<?php echo set_value('dimensions',$product['dimensions']); ?>" class="form-control" placeholder="Enter Dimensions">
</div>

<?php 
            if(form_error('dimensions'))
            {
              echo "<div id='error' style='color:red;'>".form_error('dimensions')."</div>";
            }
          ?>
</div>
</div> -->
</div>



<div class="row">
<div class="col-sm-4">
<div class="form-group">
<label>For :</label>
<div class="input-group">
<select name="use_for" class="form-control">
      <option selected="selected" disabled value="">Choose One</option>
   <?php    
   $uses = $this->db->get('use_for')->result();
   foreach ($uses as  $use) 
   { ?>
<option  value="<?php echo $use->id; ?>"<?php if($use->id==$product['use_for']){ echo 'selected="selected"'; } ?>><?php echo $use->name;?> </option>
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

<div class="col-sm-4">
<div class="form-group">
<label>Lens Material :</label>
<div class="input-group">
<select name="lens_matrial"  class="form-control">
<option selected="selected" disabled value="">Select Lens Material</option>
   <?php    
  foreach ($lensmatrials = $this->db->get('lens_matrial')->result() as $lensmatrial)  { ?>
<option  value="<?php echo $lensmatrial->id  ?>" <?php if($lensmatrial->id==$product['lens_matrial']){ echo 'selected="selected"'; } ?>><?php echo $lensmatrial->name;?> </option>
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

<div class="col-sm-4">
<div class="form-group">
<label>Frame Material :</label>
<div class="input-group">
  <select name="material"  class="form-control">
<option selected="selected" disabled value="">Select Frame Material</option>
   <?php    
  foreach ($matrials = $this->db->get('matrial')->result() as $matrial)  { ?>
<option  value="<?php echo $matrial->id  ?>"<?php if($matrial->id==$product['material']){ echo 'selected="selected"'; } ?>><?php echo $matrial->name;?> </option>
   <?php }
   ?>
</select>
</div>

<?php 
            if(form_error('material'))
            {
              echo "<div id='error' style='color:red;'>".form_error('material')."</div>";
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
<option  value="<?php echo $shape->id  ?>" <?php if($shape->id==$product['shape']){ echo 'selected="selected"'; } ?>><?php echo $shape->name;?> </option>
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
<label>Style:</label>
<div class="input-group">
  <select name="style"  class="form-control">
<option selected="selected" disabled value="">Select Style</option>
   <?php    
  foreach ($styles = $this->db->get('style')->result() as $style)  { ?>
<option  value="<?php echo $style->id  ?>" <?php if($style->id==$product['style']){ echo 'selected="selected"'; } ?>><?php echo $style->name;?> </option>
   <?php }
   ?>
</select>
</div>

<?php 
            if(form_error('style'))
            {
              echo "<div id='error' style='color:red;'>".form_error('style')."</div>";
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
<option  value="<?php echo $productcolor->id  ?>"<?php if($productcolor->id==$product['product_color']){ echo 'selected="selected"'; } ?>><?php echo $productcolor->name;?> </option>
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
<option <?php if($origin->country_id==$product['country_of_origin']){ echo 'selected="selected"'; } ?> value="<?php echo $origin->country_id; ?>"><?php echo $origin->name;?> </option>
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

<div class="col-sm-6">
<div class="form-group">
<label>Raw Material Sourced from :</label>
<div class="input-group">
<select name="row_metrial_source_from" class="form-control">
      <option selected="selected" disabled value="">Choose One</option>
   <?php    
   foreach ($source_froms = $this->db->get_where('country',array('country_id'=>248))->result() as  $source_from) 
   { ?>
<option <?php if($source_from->country_id==$product['row_metrial_source_from']){ echo 'selected="selected"'; } ?> value="<?php echo $source_from->country_id; ?>"><?php echo $source_from->name;?> </option>
   <?php }
   ?>
</select>
</div>
<?php 
            if(form_error('row_metrial_source_from'))
            {
              echo "<div id='error' style='color:red;'>".form_error('row_metrial_source_from')."</div>";
            }
          ?>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Product Rating:</label>
<div class="input-group">
<input type="text" name="rating" id="rate" value="<?php echo set_value('rating',$product['rating']); ?>" class="form-control" placeholder="Enter Rating 0-5 ">
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
<input type="text" name="bought" value="<?php echo set_value('bought',$product['bought']); ?>" class="form-control" placeholder="Eg- 10000 people bought this">
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
 <div class="col-sm-3">
<div class="form-group">
<label>Frame Width:</label>
<div class="input-group">
<input type="text" name="frame_width" value="<?php echo set_value('frame_width',$product['frame_width']); ?>" class="form-control" placeholder="Enter Frame Width">
</div>

<?php 
            if(form_error('frame_width'))
            {
              echo "<div id='error' style='color:red;'>".form_error('frame_width')."</div>";
            }
          ?>
</div>
</div> 
<div class="col-sm-3">
<div class="form-group">
<label>Lens Width:</label>
<div class="input-group">
<input type="text" name="temple_length" value="<?php echo set_value('temple_length',$product['temple_length']); ?>" class="form-control" placeholder="Enter Lens Width">
</div>

<?php 
            if(form_error('temple_length'))
            {
              echo "<div id='error' style='color:red;'>".form_error('temple_length')."</div>";
            }
          ?>
</div>
</div> 

<div class="col-sm-3">
<div class="form-group">
<label>Lens Height:</label>
<div class="input-group">
<input type="text" name="lens_height" value="<?php echo set_value('lens_height',$product['lens_height']); ?>" class="form-control" placeholder="Enter Lens Height">
</div>

<?php 
            if(form_error('lens_height'))
            {
              echo "<div id='error' style='color:red;'>".form_error('lens_height')."</div>";
            }
          ?>
</div>
</div> 

<div class="col-sm-3">
<div class="form-group">
<label>Product Size:</label>
<div class="input-group">
<select name="size"  class="form-control">
<option selected="selected" disabled value="">Select Product Size</option>
   <?php    
   foreach ($sizes =$this->db->get('size')->result() as  $size) 
   { ?>
<option  value="<?php echo $size->id  ?>"<?php if($size->id==$product['glasses_size']){ echo 'selected="selected"'; } ?>><?php echo $size->name;?> </option>
   <?php }
   ?>
</select>
</div>
<?php 
            if(form_error('size'))
            {
              echo "<div id='error' style='color:red;'>".form_error('size')."</div>";
            }
          ?>
</div>
</div>
</div>

<?php } ?>


<div class="row">
<div class="col-sm-3">
<div class="form-group">
<label>Image :</label>
<div class="input-group">
<input type="file" name="img[]" multiple  class="form-control">
<input type="hidden" name="relatedinsertedimg" value="<?php echo $product['product_images']; ?>">
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
  <?php 
                      
                       $allimg = explode(",",$product['product_images']);
                       foreach ($allimg as $img) 
                       {
                       
                      ?>
                        <img src="<?php echo base_url();?>uploads/product_images/<?php echo $img; ?>" width="100px" height="70px"> 
                      <?php } ?>
  </div>
  <div class="col-sm-3">
<div class="form-group">
<label>Main Image :</label>
<div class="input-group">
<input type="file" name="mainimg"  class="form-control">
<input type="hidden" name="maininsertedimg" value="<?php echo $product['image']; ?>">
</div>

<?php 
            if(form_error('mainimg'))
            {
              echo "<div id='error' style='color:red;'>".form_error('mainimg')."</div>";
            }
          ?>
</div>
</div>
<div class="col-sm-2">
<img src="<?php echo base_url();?>uploads/main_product_images/<?php echo $product['image']; ?>"  width="100px" height="70px">
</div>
</div>


<div class="row">

  <div class="col-sm-12">
<div class="form-group">
<label>Show lens list / Warranty:</label>
<div class="input-group">
<select name="show_lens_list" onchange="Showlenslist(this.value)"  class="form-control">
      <option selected="selected" disabled value="">Choose One</option>
   <?php    
   foreach ($show_lens_lists = $this->db->get('comman')->result() as  $show_lens_list) 
   { ?>
<option <?php if($show_lens_list->id==$product['show_lens_list']){ echo 'selected="selected"'; } ?> value="<?php echo $show_lens_list->id  ?>"><?php echo $show_lens_list->name;?> </option>
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
<label>Warranty :</label>
<div class="input-group">
<select name="warranty[]" class="form-control"  multiple>
<option disabled value="">Choose One</option>
   <?php 
    
   foreach ($lensess = $this->db->get('lenses')->result() as  $lenses) 
   {
     

    ?>
<option <?php 
$arr =  explode(",",$product['warranty']);
$arrcount = count($arr);
for ($i=0; $i<$arrcount ; $i++) {  
if($lenses->id==$arr[$i]){ echo 'selected="selected"'; } 
}
?> value="<?php echo $lenses->id; ?>"><?php echo $lenses->heading;?> </option>
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
<input type="text" name="coupon_code" value="<?php echo set_value('coupon_code',$product['coupon_code']); ?>" class="form-control" placeholder="Eg- AKC100">
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
<input type="number" name="coupon_amount" value="<?php echo set_value('coupon_amount',$product['coupon_amount']); ?>" class="form-control" placeholder="Eg- 100">
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
<input type="number" name="stokke" value="<?php echo set_value('stokke',$product['stokke']); ?>" class="form-control" placeholder="Eg- 10">
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
<input type="text" name="product_url" value="<?php echo set_value('product_url',$product['product_url']); ?>" class="form-control" placeholder="Eg- suprol-bolt-uv-hi-index-electra">
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
<input type="text" name="seo_title" value="<?php echo set_value('seo_title',$product['seo_title']); ?>" class="form-control" placeholder="Eg- Best glasses of India">
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
                <textarea class="textarea form-control" name="product_description" style="width: 500%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo set_value('product_description',$product['product_description']); ?></textarea>
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
  <input class="btn btn-primary" type="submit"  value="Update"  name="submit">
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
     var urli="<?php echo base_url('AdminController/') ?>/show_product_brand";
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