   <?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/sidebar'); ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h4>Bill</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
             <!--  <li class="breadcrumb-item active"><a href="<?php echo base_url('admin/product-brands'); ?>">Product Brands</a></li> -->
               <li class="breadcrumb-item active">Bill</li>
            </ol>
          </div>
        </div>
     
    </section>


    <section class="content">
    <div class="card">
<div class="card-header">
<h3 class="card-title">Bill</h3>
</div>
           


<form method="post" action="" enctype="multipart/form-data">
<div class="row">            
<div class="col-sm-12">
<div class="card-body">
<div class="form-group">
<label>Product  Name:</label>
<div class="input-group">
<select name="products"  onchange="showproductdetails(this.value)" class="form-control">
      <option selected="selected" disabled value="">Select Product </option>
   <?php    
   $all_p = $this->db->get('products');
   $res = $all_p->result();
   foreach ($res as  $value) 
   { ?>
<option <?php if($value->products_id==$this->input->post('products')){ echo 'selected="selected"'; } ?> value="<?php echo $value->products_id  ?>"><?php echo $value->product_model_name;?> </option>
   <?php }
   ?>
</select>
</div>

<?php 
            if(form_error('products'))
            {
              echo "<div id='error' style='color:red;'>".form_error('products')."</div>";
            }
          ?>
</div>
</div>
</div>
</div>

<div class="row" >
 <div class="card-body" id="productdetails">


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
<script type="text/javascript"> 
function showproductdetails(str)
      {
    //alert(str);
     var datastr={"products":str};
     var urli="<?php echo base_url('AdminController/') ?>/show_productdetails";
     $.ajax({
        url:urli,
        type:'post',
        data:datastr,
        success:function(str1)
        {
          //alert(str);
          $("#productdetails").html(str1);
          
        }
    
      });
      

      }
</script>