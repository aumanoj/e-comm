   <?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/sidebar'); ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h4>Add Team Member</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url('admin/teams'); ?>">Team Members</a></li>
               <li class="breadcrumb-item active">Add Team Member</li>
            </ol>
          </div>
        </div>
     
    </section>


    <section class="content">
    <div class="card">
<div class="card-header">
<h3 class="card-title">Add Team Member</h3>
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
<div class="col-sm-6">
<div class="form-group">
<label>Facebook : </label>
<div class="input-group">
<input type="text" name="facebook" value="<?php echo set_value('facebook'); ?>" class="form-control" placeholder="Enter facebook Id">
</div>
<?php 
            if(form_error('facebook'))
            {
              echo "<div id='error' style='color:red;'>".form_error('facebook')."</div>";
            }
          ?>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Twitter : </label>
<div class="input-group">
<input type="text" name="twitter" value="<?php echo set_value('twitter'); ?>" class="form-control" placeholder="Enter twitter Id">
</div>
<?php 
            if(form_error('twitter'))
            {
              echo "<div id='error' style='color:red;'>".form_error('twitter')."</div>";
            }
          ?>
</div>
</div>
</div>


<div class="row">            
<div class="col-sm-6">
<div class="form-group">
<label>Linkedin : </label>
<div class="input-group">
<input type="text" name="linkedin" value="<?php echo set_value('linkedin'); ?>" class="form-control" placeholder="Enter linkedin Id">
</div>
<?php 
            if(form_error('linkedin'))
            {
              echo "<div id='error' style='color:red;'>".form_error('linkedin')."</div>";
            }
          ?>
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<label>Instagram : </label>
<div class="input-group">
<input type="text" placeholder="Enter Instagram Id" value="<?php echo set_value('instagram'); ?>" name="instagram" class="form-control">
</div>
<?php 
            if(form_error('instagram'))
            {
              echo "<div id='error' style='color:red;'>".form_error('instagram')."</div>";
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