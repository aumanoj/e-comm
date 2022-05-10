<?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/sidebar'); 
?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h4>Size-Guide</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              
               <li class="breadcrumb-item active">Size-Guide</li>
            </ol>
          </div>
        </div>
     
    </section>

 <?php if($this->session->flashdata('size_guide')) {echo "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>×</button>Size-Guide Update Sucessfully</div>";} ?>   
    <section class="content">
    <div class="card">
<div class="card-header">
<h3 class="card-title">Size-Guide</h3>
</div>
   
<form method="post" action="" enctype="multipart/form-data">
<div class="card-body">
<div class="row">
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo  $this->security->get_csrf_hash();?>"/>            
<div class="col-sm-12">
<div class="form-group">
<label>Heading:</label>
<div class="input-group">
<input type="text" name="heading" value="<?php echo set_value('heading',$size_guide['heading']); ?>" class="form-control" placeholder="Enter Heading">
</div>

<?php 
            if(form_error('heading'))
            {
              echo "<div id='error' style='color:red;'>".form_error('heading')."</div>";
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
                <textarea class="textarea form-control" name="description" style="width: 500%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo set_value('description',$size_guide['description']); ?></textarea>
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

  </div>
</form>
</div>
</section>
</div>

<?php $this->load->view('admin/include/footer'); ?>