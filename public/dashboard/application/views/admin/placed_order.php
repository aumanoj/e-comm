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
              <li class="breadcrumb-item active">Palced - Orders</li>
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
              <h3 class="card-title">Palced - Orders</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                    <tr>
                       <th>Sr No.</th>
                      <th>Order Id</th>
                        <th>Product</th> 
                        <th>Amount</th>
                        <th>Coupon Code</th>
                       <th>Name</th>
                        <th>Mobile</th>
                         <th>Email</th> 
                       <th>Order Date</th>
                        <th>Prescription</th>        
                      <th>Action</th>
                    </tr>
                  </thead>
              
                  <tbody>
<?php 
$this->db->order_by("id","desc");
$all_placeorder = $this->db->get('billing_address');
$res = $all_placeorder->result();
$sr = 1;
foreach ($res as $row)
{
  $pd = $this->db->get_where('products',array('products_id'=>$row->product_id))->row_array();
  $pc = $this->db->get_where('product_categories',array('products_categories_id'=>$pd['products_categories_id']))->row_array();
  $user = $this->db->get_where('user',array('id'=>$row->user_id))->row_array();

?>
                    <tr>
                      <td><?php echo $sr; ?></td>
                      <td><?php echo $row->order_id; ?></td>
                      <td><?php echo $pd['product_model_name']; ?></td>
                      <td><?php echo $row->product_price; ?></td>
                       <td><?php echo $row->coupon_code; ?></td>
                      <td><?php echo $row->name; ?></td>
                      <td><?php echo $row->mobile; ?></td>
                       <td><?php echo $row->email; ?></td>
                      <td><?php echo $row->created_at; ?></td>
                      <td>
                        <?php if($row->prescription)  { ?>
                        <a href="<?=base_url("uploads/prescription/"); echo $row->prescription;?>" class="btn btn-success" download>view</a>
                      <?php } else { ?>
                         <a class="btn btn-danger" download>No</a>
                       <?php } ?>
                      </td>
                      
                     <td>
                      <a href="<?php echo base_url("admin/delete-placed-order/$row->id"); ?>"class="btn btn-danger" onclick="return confirm('Do you want to DELETE this Order??')" ><i class="fas fa-trash"></i></a>
                      <a href="<?php echo base_url("admin/bill/$row->id"); ?>"class="btn btn-info"><i class="fas fa-print"></i></a>
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