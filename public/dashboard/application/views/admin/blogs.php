
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
        <a class="btn btn-primary" href="<?=base_url('admin/add-blog'); ?>">Add Blog</a>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Blogs</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<?php if($this->session->flashdata('updated')) {echo "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>×</button>Update Sucessfully</div>";} ?>  

<?php if($this->session->flashdata('added')) {echo "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>×</button>Added Sucessfully</div>";} ?>  

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
         
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Blogs</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                    <tr>
                       <th>SNo.</th>
                       <th>Heading</th>
                        <th>Thumb</th>
                        <th>Description</th>
                         <th>URL</th>
                          <th>Seo Title</th>
                       <th>Updated</th>    
                     <th>Action</th>
                    </tr>
                  </thead>
              
                  <tbody>
<?php 
$sr = 1;
foreach ($blogs as $blog)
{
?>
                    <tr>
                      <td><?=$sr;?></td>
                      
                       <td><?=$blog->heading;?></td>
                        <td><img src="<?=base_url();?>uploads/blogs/thumb/<?=$blog->thumb?>" height="70" width="140"></td>
                         <td><?=$blog->description;?></td>
                          <td><?=$blog->url;?></td>
                           <td><?=$blog->seo_title;?></td>
                       
                      <td><?=$blog->created_on; ?></td>
                      
                     <td>

                      <a href="<?php echo base_url("admin/edit-blog/$blog->id"); ?>"class="btn btn-info"><i class="fas fa-edit"></i></a>
                      <a href="<?php echo base_url("admin/delete-blog/$blog->id"); ?>"class="btn btn-danger" onclick="return confirm('Do you want to DELETE this Data??')" ><i class="fas fa-trash"></i></a>
            </td>
                    </tr>
<?php
$sr++;
}
?>
                  </tbody>
                </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>