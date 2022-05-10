   <?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/sidebar'); ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a class="btn btn-primary" href="<?php echo base_url('admin/add-slider'); ?>">Add Slider</a>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Slider</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
         
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Slider</h3>
<div class="font-weight-bold text-success text-center">
    <?php echo $this->session->flashdata('addslider'); ?>
    <?php echo $this->session->flashdata('editproductcat'); ?>
  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                    <tr>
                       <th>Sr No.</th>
                      <th>Title</th>
                       <th>Heading</th>
                        <th>Description</th>
                       <th>Images</th>
                       <th>Created On</th>
                      
                <th>Action</th>
                    </tr>
                  </thead>
              
                  <tbody>
<?php 
$this->db->order_by("id","desc");
$all_slider = $this->db->get('slider');
$res = $all_slider->result();
$sr = 1;
foreach ($res as $row)
{
?>
                    <tr>
                      <td><?php echo $sr; ?></td>
                      <td><?php echo $row->title; ?></td>
                       <td><?php echo $row->heading; ?></td>
                        <td><?php echo $row->description; ?></td>
                      <td><img src="<?php echo base_url();?>uploads/slider/<?php echo $row->image; ?>" width="100px" height="70px"> </td>
                      <td><?php echo $row->created_on; ?></td>
                      
                     <td>
                      <a href="<?php echo base_url("admin/delete-slider/$row->id"); ?>"class="btn btn-danger" onclick="return confirm('Do you want to DELETE this Slider??')" ><i class="fas fa-trash"></i></a>
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

<?php $this->load->view('admin/include/footer'); ?>