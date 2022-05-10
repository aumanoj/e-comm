   <?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/sidebar'); ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <!--   <a class="btn btn-primary" href="<?php echo base_url('admin/add-team'); ?>">Add Team Member</a> -->
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active">enquiry - User</li>
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
              <h3 class="card-title">Enquiry User</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                    <tr>
                       <th>Sr No.</th>
                      <th>Name</th>
                       <th>Email</th>
                        <th>Mobile</th>
                         <th>Subject</th> 
                         <th>Message</th> 
                       <th>Created On</th>    
                     <th>Action</th>
                    </tr>
                  </thead>
              
                  <tbody>
<?php 
$this->db->order_by("id","desc");
$all_enquser = $this->db->get('enquiry');
$res = $all_enquser->result();
$sr = 1;
foreach ($res as $row)
{
?>
                    <tr>
                      <td><?php echo $sr; ?></td>
                      <td><?php echo $row->name; ?></td>
                       <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->mobile; ?></td>
                        <td><?php echo $row->subject; ?></td>
                         <td><?php echo $row->message; ?></td>
                      <td><?php echo $row->created_on; ?></td>
                      
                     <td>
                      <a href="<?php echo base_url("admin/delete-enquiry-user/$row->id"); ?>"class="btn btn-danger" onclick="return confirm('Do you want to DELETE this enquiry User??')" ><i class="fas fa-trash"></i></a>
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