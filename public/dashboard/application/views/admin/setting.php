<?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/sidebar'); ?>
<?php 
$sd = $this->db->get('setting')->row_array();
?>
<div class="content-wrapper">
<section class="content">
<div class="container-fluid" style="margin-top: 10px;">
<div class="card card-danger">
<div class="card-header">
<h3 class="card-title">Setting</h3>
<div class="font-weight-bold text-success text-center">
    <?php echo $this->session->flashdata('setting'); ?>
  </div>
 <div class="text-right">
   Last Update : <?php echo  $sd['updated_on']; ?>
  </div> 
</div>
<div class="card-body">
<!-----Form start--------------->
<form method="post" action="" enctype="multipart/form-data"> 
  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo  $this->security->get_csrf_hash();?>"/>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<div class="input-group">
  <div class="input-group-prepend">
  <button type="button" class="btn btn-dark">Company Name &nbsp;</button>
</div>
<input type="text" placeholder="Enter Name" value="<?php echo set_value('company_name',$sd['name']);?>" name="company_name" class="form-control">

</div>
<?php 
            if(form_error('company_name'))
            {
              echo "<div style='color:red;'>".form_error('company_name')."</div>";
            }
          ?>
</div>
</div>
<div class="col-md-6">

<div class="form-group">

<div class="input-group">
 <div class="input-group-prepend">
  <button type="button" class="btn btn-dark">Company Email Id</button>
</div>
<input type="text" name="company_email" value="<?php echo set_value('company_email',$sd['email']);?>" placeholder="Enter Email" class="form-control" >
</div>
<?php 
            if(form_error('company_email'))
            {
              echo "<div style='color:red;'>".form_error('company_email')."</div>";
            }
          ?>
</div>

</div>
</div>



<div class="row">
<div class="col-md-6">
<div class="form-group">
<div class="input-group">
  <div class="input-group-prepend">
  <button type="button" class="btn btn-dark">Company Mobile</button>
</div>
<input type="number" value="<?php echo set_value('phone_number',$sd['mobile']);?>" name="phone_number" placeholder="Enter Mobile" class="form-control">
</div>
<?php 
            if(form_error('phone_number'))
            {
              echo "<div style='color:red;'>".form_error('phone_number')."</div>";
            }
          ?>
</div>
</div>
<div class="col-md-6">

<div class="form-group">

<div class="input-group">
 <div class="input-group-prepend">
  <button type="button" class="btn btn-dark">Company Address</button>
</div>
<input type="text" name="company_address" value="<?php echo set_value('company_address',$sd['address']);?>" placeholder="Enter Address" class="form-control" >
</div>
<?php 
            if(form_error('company_address'))
            {
              echo "<div style='color:red;'>".form_error('company_address')."</div>";
            }
          ?>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group">
<div class="input-group">
  <div class="input-group-prepend">
  <button type="button" class="btn btn-dark">Company FB Id &nbsp;&nbsp;&nbsp;</button>
</div>
<input type="text" name="facebook" value="<?php echo set_value('facebook',$sd['facebook']);?>" placeholder="Enter Facebook Id" class="form-control">
</div>
</div>
</div>
<div class="col-md-6">

<div class="form-group">

<div class="input-group">
 <div class="input-group-prepend">
  <button type="button" class="btn btn-dark">Company Insta Id &nbsp;</button>
</div>
<input type="text" name="instagram" value="<?php echo set_value('instagram',$sd['instagram']);?>" placeholder="Enter Instagram Id" class="form-control" >
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group">
<div class="input-group">
  <div class="input-group-prepend">
  <button type="button" class="btn btn-dark">Company Twitter</button>
</div>
<input type="text" name="twitter" value="<?php echo set_value('twitter',$sd['twitter']);?>" placeholder="Enter Facebook Id" class="form-control">
</div>
</div>
</div>
<div class="col-md-6">

<div class="form-group">

<div class="input-group">
 <div class="input-group-prepend">
  <button type="button" class="btn btn-dark">Company Google+ </button>
</div>
<input type="text" value="<?php echo set_value('googleplush',$sd['googleplush']);?>" name="googleplush" placeholder="Enter Google +" class="form-control" >
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-md-6">
<div class="form-group">
<div class="input-group">
  <div class="input-group-prepend">
  <button type="button" class="btn btn-dark">Company Logo &nbsp; &nbsp;</button>
</div>
<input type="file" name="img" class="form-control">
</div>
<img style="background-color: black;" src="<?php echo base_url();?>uploads/logo/<?php echo $sd['image']; ?>" width="150" height="150" class="img-fluid">
</div>
</div>
<div class="col-md-6">

<div class="form-group">

<div class="input-group">
 <div class="input-group-prepend">
  <button type="button" class="btn btn-dark">Open Close Timing</button>
</div>
<input type="text" name="openclosetiming" value="<?php echo set_value('openclosetiming',$sd['openclosetiming']);?>"  placeholder="Company Open Close Timing" class="form-control" >
</div>
<?php 
            if(form_error('openclosetiming'))
            {
              echo "<div style='color:red;'>".form_error('openclosetiming')."</div>";
            }
          ?>
</div>
</div>
</div>

<div class="row">
  <div style="margin-left: 500px;">
    <input type="submit" name="submit" class="btn btn-primary">
  </div>
  
</div>
</form>
<!-----Form End--------------->
</div>
</div>
</div>
</section>
</div>
  


<?php $this->load->view('admin/include/footer'); ?>
