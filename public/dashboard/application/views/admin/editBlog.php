
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h4>Edit Blog</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('admin/dashboard'); ?>">Home</a></li>
              
               <li class="breadcrumb-item active">Edit Blog</li>
            </ol>
          </div>
        </div>
     
    </section>

  
    <section class="content">
    <div class="card">
<div class="card-header">
<h3 class="card-title">Blog</h3>
</div>
   
<form method="post"  enctype="multipart/form-data">
<div class="card-body">
<div class="row">          
<div class="col-sm-6">
<div class="form-group">
<label>Heading:</label>
<div class="input-group">
<input type="text" name="heading" value="<?php echo set_value('heading',$blog->heading); ?>" class="form-control" placeholder="Enter Heading">
</div>

<?php 
            if(form_error('heading'))
            {
              echo "<div id='error' style='color:red;'>".form_error('heading')."</div>";
            }
          ?>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Main Image :</label>
<div class="input-group">
<input type="file" name="thumb"  class="form-control">
</div>
<p><img src="<?=base_url();?>uploads/blogs/thumb/<?=$blog->thumb?>" height="70" width="140">
  </p>

<?php 
            if(form_error('thumb'))
            {
              echo "<div id='error' style='color:red;'>".form_error('thumb')."</div>";
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
                <textarea class="textarea form-control" name="description" style="width: 500%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo set_value('description',$blog->description); ?></textarea>
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

    <div class="row">          
<div class="col-sm-6">
<div class="form-group">
<label>URL:</label>
<div class="input-group">
<input type="text" name="url" value="<?php echo set_value('url',$blog->url); ?>" class="form-control" placeholder="Enter URL Eg: best-blog-of-aaku-ka-chasama">
</div>

<?php 
            if(form_error('url'))
            {
              echo "<div id='error' style='color:red;'>".form_error('url')."</div>";
            }
          ?>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>SEO Title:</label>
<div class="input-group">
<input type="text" name="seo_title" value="<?php echo set_value('seo_title',$blog->seo_title); ?>" class="form-control" placeholder="Enter Seo Title">
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



 <div class="form-group text-center">
  <input class="btn btn-primary" type="submit"  value="Update"  name="submit">
  </div>

  </div>
</form>
</div>
</section>
</div>