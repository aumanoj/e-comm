   <?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/sidebar'); ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h4>Edit Power-Type</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url('admin/power-type'); ?>">Power-Type</a></li>
               <li class="breadcrumb-item active">Add Power-Type</li>
            </ol>
          </div>
        </div>
     
    </section>


    <section class="content">
    <div class="card">
<div class="card-header">
<h3 class="card-title">Edit Power-Type</h3>
</div>
           


<form method="post" action="" enctype="multipart/form-data">
  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo  $this->security->get_csrf_hash();?>"/>
<div class="card-body">
<div class="row">            
<div class="col-sm-4">
<div class="form-group">
<label>Title : </label>
<div class="input-group">
<input type="text" name="title" value="<?php echo set_value('title',$power_type->name); ?>" class="form-control" placeholder="Enter Power-Type Title">
</div>
<?php 
            if(form_error('title'))
            {
              echo "<div id='error' style='color:red;'>".form_error('title')."</div>";
            }
          ?>
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
<label>Use For : </label>
<div class="input-group">
<input type="text" name="uses" value="<?php echo set_value('uses',$power_type->uses); ?>" class="form-control" placeholder="Enter Power Power-Type Use">
</div>
<?php 
            if(form_error('uses'))
            {
              echo "<div id='error' style='color:red;'>".form_error('uses')."</div>";
            }
          ?>
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
<label>Image : </label>
<div class="input-group">
<input type="file" name="img" class="form-control">
</div>
<img src="<?php echo base_url();?>uploads/power_type/<?php echo $power_type->image; ?>" width="100px" height="70px">
</div>
</div>
</div>



</div>

 <div class="form-group text-center">
  <input class="btn btn-primary" type="submit"  value="Update"  name="submit">
  </div>
</form>
</div>
</section>
</div>

<?php $this->load->view('admin/include/footer'); ?>