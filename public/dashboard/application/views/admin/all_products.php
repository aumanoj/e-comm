   <?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/sidebar'); ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a class="btn btn-primary" href="<?php echo base_url('admin/add-product-details'); ?>">Add Product Details</a>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Product Details</li>
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
              <h3 class="card-title">All Product Details</h3>
<div class="font-weight-bold text-success text-center">
    <?php echo $this->session->flashdata('addproducts'); ?>
    <?php echo $this->session->flashdata('editproductcat'); ?>
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
                       <th>Brand</th>
                        <th>Model Name</th>
                         <th>Model Number</th>
                        <th>MRP</th>
                          <th>Selling Price</th>
                            
                              <th>For</th>
                               <th>Dimensions</th>
                                <th>Lens Material </th>
                                <th>Frame Material</th>
                                <th>Shape</th>
                                <th>Style</th>
                                 <th>Frame Width</th>
                                 <th>Temple Length:</th>
                                 <th>Lens Height:</th>


               <th>Color:</th>
                <th>show lens list</th>
                                <th>Warranty</th>
                                 <th>Offer</th>
                                 <th>Size</th>
                                  <th>Rating</th>
                                   <th>Bought</th>
                                <th>Country of Origin</th>
                                <th>Raw Material Sourced from</th>
                                  <th>Description</th>

                       <th>Images</th>

                       <th>Product URL</th>
                       <th>Page Title</th>

                        <th>Coupon-Code</th>
                         <th>Coupon Amount</th>
                          <th>In Stokke</th>

                      
                       
                       <th>Created On</th>
                       <th>Updated On</th>
             
                    </tr>
                  </thead>
              
                  <tbody>
<?php 
$this->db->order_by("products_id","desc");
$all_products = $this->db->get('products');
$res = $all_products->result();
$sr = 1;
foreach ($res as $row)
{
$all_products_brand = $this->db->get_where('product_brands',array('products_brand_id'=>$row->products_brand_id))->row_array();
?>
                    <tr>
                      <td><b><?php echo $sr; ?>.</b></td>
                       <td>
                      <a href="<?php echo base_url("admin/edit-product-details/$row->products_id"); ?>"class="btn btn-info" onclick="return confirm('Do you want to Edit this Product Details??')" ><i class="fas fa-edit"></i></a>
                    </td>
                    <td>
                      <a href="<?php echo base_url("admin/delete-product-details/$row->products_id"); ?>"class="btn btn-danger" onclick="return confirm('Do you want to DELETE this Product Details??')" ><i class="fas fa-trash"></i></a>
            </td>
                      <td>
                        <?php 
                         $parr = explode(",",$row->products_categories_id);
                        $pcount = count($parr);

                         for ($i=0; $i < $pcount; $i++) 
                         { 
                          echo $all_products_cat = $this->db->get_where('product_categories',array('products_categories_id'=>$parr[$i]))->row()->name."<br>"; 
                         }

                         ?></td>
                      <td><?php echo $all_products_brand['brand_name']; ?></td>
                      <td><?php echo $row->product_model_name; ?></td>

                      <td><?php if($row->product_model_number){ echo $row->product_model_number ;} ?></td>
                     <td><?php echo $row->product_price; ?></td>
                      <td><?php echo $row->discounted_price; ?></td>
                      
                      <td><?php

                      if($row->use_for) {echo $use = $this->db->get_where('use_for',array('id'=>$row->use_for))->row()->name;}
                      
                       ?></td>
                      
                      <td><?=$row->dimensions; ?></td>
                      <td><?php 
                      if($row->lens_matrial){ echo $lensmatrial = $this->db->get_where('lens_matrial',array('id'=>$row->lens_matrial))->row()->name;}

                       ?></td>
                       <td><?php 
                       if($row->material){ echo 
                       $framematrial = $this->db->get_where('matrial',array('id'=>$row->material))->row()->name;} ?></td>
                      <td><?php 

                      if ($row->shape) {
                       echo $shape = $this->db->get_where('shape',array('id'=>$row->shape))->row()->name;
                      }
                       ?></td>
                      
                      <td><?php if($row->style){echo 

                      $style = $this->db->get_where('style',array('id'=>$row->style))->row()->name;} ?></td>
                      <td><?=$row->frame_width?></td>
                      <td><?=$row->temple_length?></td>
                       <td><?=$row->lens_height?></td>
                       <td><?php if($row->product_color){echo $color = $this->db->get_where('lens_color',array('id'=>$row->product_color))->row()->name;} ?></td>

                       <td><?php if($row->show_lens_list){echo $show_lens_list = $this->db->get_where('comman',array('id'=>$row->show_lens_list))->row()->name;} ?></td>

                       <td>
                        <?php
                       if($row->warranty)
                       {
                        $arr = explode(",",$row->warranty);
                         $arrcount = count($arr);
                        for ($i=0; $i < $arrcount; $i++) { 
                       
                        
                        $ld = $this->db->get_where('lenses',array('id'=>$arr[$i]))->row();
                         $wp = $this->db->get_where('warranty_period',array('id'=>$ld->warranty_period))->row()->name;
                       echo $ld->heading."-".$ld->price."-".$wp.","; 
                      
                     }
                   }
                         ?>
                       
                          

                        </td>
                        <td><?=$row->offer; ?></td>
                        <td><?php 
if($row->glasses_size){echo 
                         $sizes = $this->db->get_where('size',array('id'=>$row->glasses_size))->row()->name;} ?></td>
                        <td><?=$row->rating; ?></td>
                        <td><?=$row->bought; ?></td>
                       <td><?php if($row->country_of_origin){echo $country_of_origin = $this->db->get_where('country',array('country_id'=>$row->country_of_origin))->row()->name;} ?></td>
                       <td><?php if($row->row_metrial_source_from) {echo $row_metrial_source_from = $this->db->get_where('country',array('country_id'=>$row->row_metrial_source_from))->row()->name;} ?></td>
                       <td><?=$row->product_description; ?></td>



                     
                      <td>
                        <img src="<?php echo base_url();?>uploads/main_product_images/<?php echo $row->image; ?>" width="100px" height="70px"> 

                         <?php 
                      
                       $allimg = explode(",",$row->product_images);
                       foreach ($allimg as $img) 
                       {
                    
                      ?>
                        <img src="<?php echo base_url();?>uploads/product_images/<?php echo $img; ?>" width="100px" height="70px"> 
                      <?php } ?>

                      </td>

                      <td><?=$row->product_url?></td>
                      <td><?=$row->seo_title?></td>
                      <td><?php echo $row->coupon_code; ?></td>
                      <td><?php echo $row->coupon_amount; ?></td>
                      <td><?php echo $row->stokke; ?></td>
                     
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