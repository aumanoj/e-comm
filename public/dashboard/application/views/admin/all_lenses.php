   <?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/sidebar'); ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a class="btn btn-primary" href="<?php echo base_url('admin/add-lense'); ?>">Add Lense</a>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Lense Details</li>
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
              <h3 class="card-title">All Lense Details</h3>
<div class="font-weight-bold text-success text-center">
    <?php echo $this->session->flashdata('addedlense'); ?>
    <?php echo $this->session->flashdata('editdlense'); ?>
  </div>
            </div>
            
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                    <tr>
                       <th>Sl</th>
                      <th>Edit</th>
                      <th>Delete</th>
                      <th>Categories</th>
                       <th>Subcategories</th>                              
                       <th>Created On</th>
                       <th>Updated On</th>
             
                    </tr>
                  </thead>
              
                  <tbody>
<?php 
$this->db->order_by("products_subcategories_id","desc");
$all_lenses = $this->db->get('product_subcategories');
$res = $all_lenses->result();
$sr = 1;
foreach ($res as $row)
{
//$all_products_brand = $this->db->get_where('product_brands',array('products_brand_id'=>$row->products_brand_id))->row_array();
  //$productsubcat = $this->db->get_where('product_subcategories',array('products_subcategories_id'=>$row->products_subcategories_id))->row_array()
?>
                    <tr>
                      <td><b><?php echo $sr; ?>.</b></td>
                       <td>
                      <a href="<?php echo base_url("admin/edit-lense-details/$row->products_subcategories_id"); ?>"class="btn btn-info" onclick="return confirm('Do you want to Edit this Lense Details??')" ><i class="fas fa-edit"></i></a>
                    </td>
                    <td>
                      <a href="<?php echo base_url("admin/delete-lense-details/$row->products_subcategories_id"); ?>"class="btn btn-danger" onclick="return confirm('Do you want to DELETE this Lense Details??')" ><i class="fas fa-trash"></i></a>
            </td>
                      <td>
                        <?php 
                         $parr = explode(",",$row->products_categories_id);
                        $pcount = count($parr);

                         for ($i=0; $i < $pcount; $i++) 
                         { 
                          echo $all_products_cat = $this->db->get_where('product_categories',array('products_categories_id'=>$parr[$i]))->row()->name."<br>"; 
                         }

                         ?>

                </td>
                      <td><?php echo $row->name; ?> </td>
                     
                      <td><?php echo $row->created_on; ?></td>
                    
                    <td><?php echo $row->updated_on; ?></td>
                    
                    
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