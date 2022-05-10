   <?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/sidebar'); ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <a class="btn btn-primary" href="#">Add Rating</a> -->
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active">User Rating</li>
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
              <h3 class="card-title">User Ratings</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                    <tr>
                       <th>Sr No.</th>
                       <th>Name</th>
                        <th>Email</th>
                         <th>Rating</th>
                       <th>Comment</th>
                       <th>Status</th>
                
                      
                <th>Action</th>
                    </tr>
                  </thead>
              
                  <tbody>
<?php 
$this->db->order_by("id","desc");
$all = $this->db->get('rating');
$res = $all->result();
$sr = 1;
foreach ($res as $row)
{
?>
                    <tr>
                      <td><?php echo $sr; ?></td>
                       <td><?php echo $row->name; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->rating; ?></td>
                        <td><?php echo $row->comments; ?></td>
                        

                          <?php if($row->status==0) { ?>
                           <td> 
                           <a href="<?php echo base_url("admin/confirm-rating/$row->id"); ?>"class="btn btn-warning" onclick="return confirm('Do you want to Change Status??')" >Pending</a>
                          </td>
                        <?php } else if($row->status==1) { ?>
                          <td> 
                           <a href="<?php echo base_url("admin/pending-rating/$row->id"); ?>"class="btn btn-success" onclick="return confirm('Do you want to Change Status??')" >Confirmed</a>
                          </td>
                        <?php } ?>

                    
                                         
                     <td>
                      <a href="<?php echo base_url("admin/delete-rating/$row->id"); ?>"class="btn btn-danger" onclick="return confirm('Do you want to DELETE this Rating??')" ><i class="fas fa-trash"></i></a>
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