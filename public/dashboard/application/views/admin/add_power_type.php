   <?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/sidebar'); ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h4>Add Matrial Type</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url('admin/power-type'); ?>">matrial-Type</a></li>
               <li class="breadcrumb-item active">Add Material Type</li>
            </ol>
          </div>
        </div>
     
    </section>


    <section class="content">
    <div class="card">
<div class="card-header">
<h3 class="card-title">Add Material Type</h3>
</div>
           


<form method="post" action="" enctype="multipart/form-data">
  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo  $this->security->get_csrf_hash();?>"/>
<div class="card-body">
<div class="row">            
<div class="col-sm-4">
<div class="form-group">
<label>Material Type : </label>
<div class="input-group">
<input type="text" name="material_type" value="<?php echo set_value('material_type'); ?>" class="form-control" placeholder="Enter Power-Type Title">
</div>
<?php 
            if(form_error('material_type'))
            {
              echo "<div id='error' style='color:red;'>".form_error('material_type')."</div>";
            }
          ?>
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
<label>Live Price : </label>
<div class="input-group">
<input type="text" name="live_price" value="<?php echo set_value('live_price'); ?>" class="form-control" placeholder="Enter Live Price">
</div>
<?php 
            if(form_error('live_price'))
            {
              echo "<div id='error' style='color:red;'>".form_error('live_price')."</div>";
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