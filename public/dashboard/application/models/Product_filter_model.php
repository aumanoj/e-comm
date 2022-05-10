<?php
class Product_filter_model extends CI_Model
{
	function fetch_filter_type($type)
	{
		$this->db->distinct();
		$this->db->select($type);
		$this->db->from('products');
		$this->db->where('products_categories_id', '1');
		$this->db->order_by('products_id', 'DESC');
		return $this->db->get();
	}

	function make_query($minimum_price, $maximum_price, $brand, $style, $size,$shape)
	{
		$query = "
		SELECT * FROM products 
		WHERE products_categories_id = '1' 
		";
		
		// if(isset($minimum_price, $maximum_price) && !empty($minimum_price) && !empty($maximum_price))
		// {
		// 	$query .= "
		// 	 AND product_price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		// 	";
		// }

		if(isset($brand))
		{
			$brand_filter = implode("','", $brand);
			$query .= "
			 AND use_for IN('".$brand_filter."')
			";
		}
		if(isset($style))
		{
			$style_filter = implode("','", $style);
			$query .= "
			 AND style IN('".$style_filter."')
			";
		}
		if(isset($size))
		{
			$size_filter = implode("','", $size);
			$query .= "
			 AND glasses_size IN('".$size_filter."')
			";
		}
		if(isset($shape))
		{
			$shape_filter = implode("','", $shape);
			$query .= "
			 AND shape IN('".$shape_filter."')
			";
		}
		return $query;
	}

	function fetch_data($limit, $start, $minimum_price, $maximum_price, $brand, $style, $size,$shape)
	{
		$query = $this->make_query($minimum_price, $maximum_price, $brand, $style, $size,$shape);

		$query .= ' LIMIT '.$start.', ' . $limit;

		$data = $this->db->query($query);

		$output = '';
		if($data->num_rows() > 0)
		{
			foreach($data->result_array() as $row)
			{
				$imagechange = explode(",",$row['product_images']);
			$output .='<div class="col-xl-4 col-md-4 col-6  col-grid-box">
                      <div class="product-box">
                         <div class="product-imgbox">
                             <div class="product-front">
                               <a href="'.base_url().'eyewear/'.$row['product_url'].'"> <img  src="'.base_url().'uploads/main_product_images/'. $row['image'] .'" class="img-fluid  " alt="product"> </a>
                                            </div>
                                            <div class="product-back">
                                          <a href="'.base_url().'eyewear/'.$row['product_url'].'"> <img src="'.base_url().'uploads/product_images/'. $imagechange[0] .'" class="img-fluid  " alt="product"> </a>
                                            </div>
                                          </div>
                                          <div class="product-detail detail-center detail-inverse">
                                            <div class="detail-title">
                                              <div class="detail-left">
                                                <div class="rating-star"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                       <p>'.$row['product_description'].'</p>
                                               
                                                <a href="'.base_url().'eyewear/'.$row['product_url'].'">
                                                  <h6 class="price-title">
                                                    '.$row['product_model_name'].'
                                                  </h6> </a>
                                              </div>
                                              <div class="detail-center">
                                                
                                                <div class="price">
                                                  <div class="price">  Rs.'.$row['discounted_price'].' </div>
                                                </div>
                                              </div>
                                            </div>
                                            
                                          </div>
                                        </div>
                                      </div>';



				// $output .= '
				// <div class="col-sm-4 col-lg-3 col-md-3">
				// 	<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
				// 	<img src="'.base_url().'images/'. $row['product_image'] .'" alt="" class="img-responsive" >
				// 	<p align="center"><strong><a href="#">'. $row['product_name'] .'</a></strong></p>
				// 	<h4 style="text-align:center;" class="text-danger" >'. $row['product_price'] .'</h4>
				// 	<p>Camera : '. $row['product_camera'].' MP<br />
				// 	Brand : '. $row['product_brand'] .' <br />
				// 	RAM : '. $row['product_ram'] .' GB<br />
				// 	Storage : '. $row['product_storage'] .' GB </p>
				// 	</div>
				// </div>
				// ';
			}
		}
		else
		{
			$output = '<h3 style="color:red;margin-left:200px;">No Data Found</h3>';
		}
		return $output;
	}

	function count_all($minimum_price, $maximum_price, $brand, $style, $size,$shape)
	{
		$query = $this->make_query($minimum_price, $maximum_price, $brand, $style, $size,$shape);
		$data = $this->db->query($query);
		return $data->num_rows();
	}

}
?>