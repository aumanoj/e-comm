   <?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/sidebar'); ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h4>Edit Lenses</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url('admin/lense-details'); ?>">Lenses Details</a></li>
               <li class="breadcrumb-item active">Edit Lenses</li>
            </ol>
          </div>
        </div>
     
    </section>


    <section class="content">
    <div class="card">
<div class="card-header">
<h3 class="card-title">Edit lense</h3>
</div>
           


<form method="post" action="" enctype="multipart/form-data">
<div class="card-body">
<div class="row">
  <!--  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo  $this->security->get_csrf_hash();?>"/>  -->        
<div class="col-sm-4">
<div class="form-group">
<label>Product Categories Name:</label>
<div class="input-group">
<select name="product_categories[]"   class="form-control" multiple>

   <?php    
   $all_pc = $this->db->get('product_categories');
   $res = $all_pc->result();
   foreach ($res as  $value) 
   { ?>

<option <?php 
$parr =  explode(",",$lense['products_categories_id']);
$parrcount = count($parr);
for ($i=0; $i<$parrcount ; $i++) {  
if($value->products_categories_id==$parr[$i]){ echo 'selected="selected"'; } 
}
?> value="<?php echo $value->products_categories_id  ?>"><?php echo $value->name;?></option>
   <?php }
   ?>
</select>
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
<label>Product Categories Name:</label>
<div class="input-group">
<select name="product_categories[]"   class="form-control" multiple>
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
<label>Product Sub-categories Name:</label>
<div class="input-group">
<input type="text" name="subcategories" id="sub-Categories">
</div>

<?php 
            if(form_error('product_brand_name'))
            {
              echo "<div id='error' style='color:red;'>".form_error('product_brand_name')."</div>";
            }
          ?>
</div>
</div>


</div>

 <div class="form-group text-center">
  <input class="btn btn-primary" type="submit"  value="update"  name="submit">
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