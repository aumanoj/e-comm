   <?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/sidebar'); ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a class="btn btn-primary" href="<?php echo base_url('admin/add-product-brand'); ?>">Add Brand</a>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Product Brands</li>
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
              <h3 class="card-title">All Product Brands</h3>
<div class="font-weight-bold text-success text-center">
    <?php echo $this->session->flashdata('addproductbrands'); ?>
    <?php echo $this->session->flashdata('editproductbrands'); ?>
  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
              <thead>
                    <tr>
                       <th>Sr No.</th>
                      <th>Product Categories</th>
                      <th>Product SubCategories</th>
                       <th>Product Brands</th>
                       <th>Created On</th>
                       <th>Updated On</th>
                <th>Action</th>
                    </tr>
                  </thead>
              
                  <tbody>
<?php 
$this->db->order_by("products_brand_id","desc");
$all_products_brand = $this->db->get('product_brands');
$res = $all_products_brand->result();
$sr = 1;
foreach ($res as $row)
{
$productcat = $this->db->get_where('product_categories',array('products_categories_id'=>$row->products_categories_id))->row_array();
$productsubcat = $this->db->get_where('product_subcategories',array('products_subcategories_id'=>$row->products_subcategories_id))->row_array();
?>
                    <tr>
                      <td><?php echo $sr; ?></td>
                      <td><?php echo $productcat['name']; ?> </td>
                      <td><?php echo $productsubcat['name']; ?> </td>
                      <td><?php echo $row->brand_name; ?></td>
                    
                      <td><?php echo $row->created_on; ?></td>
                      <td><?php echo $row->updated_on; ?></td>
                     <td>
                      <a href="<?php echo base_url("admin/edit-product-brand/$row->products_brand_id"); ?>"class="btn btn-info" onclick="return confirm('Do you want to Edit this Product Brand??')" ><i class="fas fa-edit"></i></a>
                      <a href="<?php echo base_url("admin/delete-product-brand/$row->products_brand_id"); ?>"class="btn btn-danger" onclick="return confirm('Do you want to DELETE this Product Brand??')" ><i class="fas fa-trash"></i></a>
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