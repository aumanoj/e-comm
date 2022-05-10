   <?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/sidebar'); ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h4>Add Testimonials</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url('admin/testimonials'); ?>">Testimonials</a></li>
               <li class="breadcrumb-item active">Add Testimonial</li>
            </ol>
          </div>
        </div>
     
    </section>


    <section class="content">
    <div class="card">
<div class="card-header">
<h3 class="card-title">Add Testimonial</h3>
</div>
           


<form method="post" action="" enctype="multipart/form-data">
  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo  $this->security->get_csrf_hash();?>"/>
<div class="card-body">
<div class="row">            
<div class="col-sm-4">
<div class="form-group">
<label>Name : </label>
<div class="input-group">
<input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control" placeholder="Enter Name">
</div>
<?php 
            if(form_error('name'))
            {
              echo "<div id='error' style='color:red;'>".form_error('name')."</div>";
            }
          ?>
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
<label>Position : </label>
<div class="input-group">
<input type="text" name="position" value="<?php echo set_value('position'); ?>" class="form-control" placeholder="Enter Position">
</div>
<?php 
            if(form_error('position'))
            {
              echo "<div id='error' style='color:red;'>".form_error('position')."</div>";
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
<?php 
            if(form_error('img'))
            {
              echo "<div id='error' style='color:red;'>".form_error('img')."</div>";
            }
          ?>
</div>
</div>
</div>


<div class="row">            
<div class="col-sm-12">
<div class="form-group">
<label>Description : </label>
<div class="input-group">
<textarea type="text" name="description" placeholder="Enter Description" class="form-control"><?php echo set_value('description'); ?></textarea>
</div>
<?php 
            if(form_error('description'))
            {
              echo "<div id='error' style='color:red;'>".form_error('description')."</div>";
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