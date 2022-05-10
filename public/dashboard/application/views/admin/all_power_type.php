   <?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/sidebar'); ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a class="btn btn-primary" href="<?php echo base_url('admin/add-power-type'); ?>">Add Material Type</a>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Material Type</li>
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
              <h3 class="card-title">All Material Type</h3>
<div class="font-weight-bold text-success text-center">
    <?php echo $this->session->flashdata('addpower'); ?>
    <?php echo $this->session->flashdata('editpower'); ?>
  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                    <tr>
                       <th>Sr No.</th>
                       <th>Material CRT</th>
                        <th>Material Price</th>
                      
                <th>Action</th>
                    </tr>
                  </thead>
              
                  <tbody>
<?php 
$this->db->order_by("id","desc");
$all = $this->db->get('materials_price');
$res = $all->result();
$sr = 1;
foreach ($res as $row)
{
?>
                    <tr>
                      <td><?php echo $sr; ?></td>
                       <td><?php echo $row->material_type; ?></td>
                        <td><?php echo $row->price; ?></td>
                                         
                     <td>

                      <a href="<?php echo base_url("admin/edit-power-type/$row->id"); ?>"class="btn btn-info"><i class="fas fa-edit"></i></a>

                      <a href="<?php echo base_url("admin/delete-power-type/$row->id"); ?>"class="btn btn-danger" onclick="return confirm('Do you want to DELETE this power-type??')" ><i class="fas fa-trash"></i></a>
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