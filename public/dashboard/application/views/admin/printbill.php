<?php error_reporting(1); 
$this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/sidebar');
$orderid = $id;
$setting = $this->db->get('setting')->row_array(); 
$orderd = $this->db->get_where('billing_address',array('id'=>$orderid))->row_array();


$product = $this->db->get_where('products',array('products_id'=>$orderd['product_id']))->row_array();

$productcat = $this->db->get_where('product_categories',array('products_categories_id'=>$product['products_categories_id']))->row_array();

$shipdetails= $this->db->get_where('shiping_address',array('order_id'=>$orderd['order_id']));
 ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
     
    </section>
    <div class="text-center">
      <input id="thispage" type="button" value="Print" onclick="printpage()"/>  
    </div>

    <section class="content">
    <div class="card">
<div class="card-header">
<h3 class="card-title"></h3>
<div class="text-center">
    <img src="<?=base_url('uploads/logo.jpeg');?>">

</div>


<div class="row">

<table class="table table-bordered">
<tr>
  <th>BILLING DETAILS</th>
 <!--  <th>SHIPING DETAILS</th> -->
</tr>

  <tr>
<td> <?=$orderd['name'];?></br> <?=$orderd['address1'];?></br><?=$orderd['address2'];?>,<?=$orderd['city']; ?></br><?=$billingsatate = $this->db->get_where('state',array('state_id'=>$orderd['state']))->row()->name; ?>(<?php echo  $orderd['pincode']; ?>)
            <?php echo   $billingcountry = $this->db->get_where('country',array('country_id'=>$orderd['country']))->row()->name; ?><br>
            <?php echo $orderd['email']; ?><br>
          +91 <?php echo $orderd['mobile']; ?>
          </td>

<!-- <td> <?=$orderd['address1'];?></br><?=$orderd['address2'];?>,<?=$orderd['city']; ?></br><?=$billingsatate = $this->db->get_where('state',array('state_id'=>$orderd['state']))->row()->name; ?>(<?php echo  $orderd['pincode']; ?>)
            <?php echo   $billingcountry = $this->db->get_where('country',array('country_id'=>$orderd['country']))->row()->name; ?><br>
            <?php echo $orderd['email']; ?><br>
          +91 <?php echo $orderd['mobile']; ?>
          </td> -->
</tr>
</table>
</div>


<div class="row">
<table class="table table-bordered">
 <tr>
            <th>#</th>
            <th>DESCRIPTION</th>
            <th>UNIT PRICE</th>
            <th>QUANTITY</th>
            <th>TOTAL</th>
          </tr>
 <?php 

          $arrtostr = explode(",",$orderd['product_id']);
          $arrtostrqty = explode(",",$orderd['product_qty']);
           $arrtostrprc = explode(",",$orderd['product_price']);
           $arrtostrlens = explode(",",$orderd['lensid']);
         $productcount = count($arrtostr);
         $sr = 1;
         for ($i=0; $i<$productcount; $i++) { 
        $produtdetaa = $this->db->get_where('products',array('products_id'=>$arrtostr[$i]))->row();

         $lens = $this->db->get_where('lenses',array('id'=>$arrtostrlens[$i]))->row();
          ?> 
          <tr>
            <td><?=$sr;?></td>
            <td><h5>
            <?php if($produtdetaa->product_model_name){echo $produtdetaa->product_model_name.",";}?>
            <?php if($produtdetaa->product_model_number) {echo $produtdetaa->product_model_number.",";}?>
            <br>
            <?php if ($produtdetaa->use_for) { echo $use = $this->db->get_where('use_for',array('id'=>$produtdetaa->use_for))->row()->name.",";} ?>
         
            <?php if($produtdetaa->lens_matrial) { echo $lensmatrial = $this->db->get_where('lens_matrial',array('id'=>$produtdetaa->lens_matrial))->row()->name.','; }?>
      
            <br>

             <?php if ($produtdetaa->shape) { echo $framematrial = $this->db->get_where('matrial',array('id'=>$produtdetaa->material))->row()->name.","; } ?>
           

            <?php if ($produtdetaa->shape) { echo $shape = $this->db->get_where('shape',array('id'=>$produtdetaa->shape))->row()->name;} ?>
     
            <br>


            <?php if($produtdetaa->style) {echo $style = $this->db->get_where('style',array('id'=>$produtdetaa->style))->row()->name.",";} ?>
         

            <?php if($produtdetaa->product_color) { echo $color = $this->db->get_where('lens_color',array('id'=>$produtdetaa->product_color))->row()->name; }?>

            </h5>
            </td>
        <?php $tpp = $tpp + $arrtostrprc[$i] * $arrtostrqty[$i] ?>
            <td><input style="border:none;" disabled type="number" class="calamnt" name="calamnt" value="<?=$arrtostrprc[$i];?>"></td>
            <td class="qty"><input style="border:none;" disabled  type="text" value="<?=$arrtostrqty[$i];?>"></td>
            <td><input style="border:none;" disabled type="number" class="calamnt" name="calamnt" value="<?=$arrtostrprc[$i] * $arrtostrqty[$i];?>"></td>
          </tr>
        <?php 
        $sr++;
      } ?>
</table>
</div>



<div class="row">
<table class="table table-bordered">
 <tr>
            <th>#</th>
            <th>LENS DETAILS</th>
            <th>UNIT PRICE</th>
            <th>QUANTITY</th>
            <th>TOTAL</th>
          </tr>
 <?php 

           $arrtostrlens = explode(",",$orderd['lensid']);
         $lenscount = count($arrtostrlens);
         $sr1 = 1;
         for ($i=0; $i<$lenscount; $i++) { 

         $lens = $this->db->get_where('lenses',array('id'=>$arrtostrlens[$i]))->row();
          ?> 
          <tr>
            <td><?=$sr1;?></td>
            <td><h5>
            <?=$powertype = $this->db->get_where('power_type',array('id'=>$lens->power_type))->row()->name; ?><br>

         <?php if($lens->heading){echo $lens->heading.",";}?>
         <?php if($lens->thickness){echo $lens->thickness.",";}?><br>
              <?php if($lens->power_range){echo $lens->power_range;}?><br>
               
         <?php  $lp = $lp + $lens->price * $lenscount;?>
            <br>
           
            </h5>
            </td>
        
            <td><input style="border:none;" disabled type="number" class="calamnt" name="calamnt" value="<?=$lens->price;?>"></td>
            <td class="qty"><input style="border:none;" disabled  type="text" value="<?=$lenscount;?>"></td>
            <td><input style="border:none;" disabled type="number" class="calamnt" name="calamnt" value="<?=$lens->price * $lenscount;?>"></td>

            
          </tr>
        <?php 
        $sr1++;
      } ?>
</table>
</div>

<div class="row">
<table class="table table-bordered">
<tr>
     <th>Total</th>
      <!--<th>GST<span style="font-size:13px;">(12 %)</span></th>-->
       <th>Grand Total ( GST inc.)</th>
 <tr>
    <tr>
        <td><?=$paybleamount = $tpp + $lp;?>.00</td>
        
        <!--<td><?php $gst = $paybleamount * 0.12;?></td>-->
        <td><?=$paybleamount?>.00</td>
    </tr>
</table>
</div>


<div class="row">
<table class="table table-bordered">
<tr>
     <th>OrderType</th>
     <th>OrderId</th>
     <th>OrderDate</th>
 <tr>
    <tr>
        <td class="text-success text-bold"><?=$orderd['txnid'] ?></td>
        <td class="text-danger text-bold"><?=$orderd['order_id'] ?></td>
        <td class="text-bold"><?=$orderd['created_at'] ?></td>
    </tr>
</table>
</div>


<div class="row">
<table class="table table-bordered">
<tr>
    <th>Shop</th><td>Akkukachasma</td>
    <th>GSTIN</th><td>09BXXPA6300E1ZJ</td>
</tr>
<tr>
    <th>Phone</th><td><?php echo $setting['mobile']; ?></td>
    <th>Email</th><td><?php echo $setting['email']; ?></td>
    
</tr>
<tr>
    <th>Order By</th><td>Website</td>
    <th>Address</th><td>22E, Jawaharlal Nehru Rd, Tagore Town,,Uttar Pradesh,Prayagraj,211002(INDIA)</td>
</tr>
</table>
</div>
<!-- 
<div class="row">
<table class="table table-bordered">
<tr>
<?=$setting->description;?>
</tr>
</table>

    
</div>
 -->





</div>
</div>
</section>
</div>

<script type="text/javascript">
    function printpage() {
        var print = document.getElementById("thispage");
        print.style.visibility = 'hidden';
        window.print()
        print.style.visibility = 'visible';
    }
</script>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('cmn/admin/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('cmn/admin/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('cmn/admin/plugins/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('cmn/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js');?>"></script>
<script src="<?php echo base_url('cmn/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js');?>"></script>
<script src="<?php echo base_url('cmn/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('cmn/admin/dist/js/adminlte.min.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('cmn/admin/dist/js/demo.js');?>"></script>

<!-- old to past jQuery UI 1.11.4 -->
<script src="<?php echo base_url('cmn/admin/plugins/jquery-ui/jquery-ui.min.js');?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- ChartJS -->
<script src="<?php echo base_url('cmn/admin/plugins/chart.js/Chart.min.js');?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('cmn/admin/plugins/sparklines/sparkline.js');?>"></script>
<!-- JQVMap -->
<script src="<?php echo base_url('cmn/admin/plugins/jqvmap/jquery.vmap.min.js');?>"></script>
<script src="<?php echo base_url('cmn/admin/plugins/jqvmap/maps/jquery.vmap.usa.js');?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('cmn/admin/plugins/jquery-knob/jquery.knob.min.js');?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('cmn/admin/plugins/moment/moment.min.js');?>"></script>
<script src="<?php echo base_url('cmn/admin/plugins/daterangepicker/daterangepicker.js');?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('cmn/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js');?>"></script>
<!-- Summernote -->
<script src="<?php echo base_url('cmn/admin/plugins/summernote/summernote-bs4.min.js');?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('cmn/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js');?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('cmn/admin/dist/js/pages/dashboard.js');?>"></script>
<script src="<?php echo base_url('cmn/admin/dist/js/demo.js');?>"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>

