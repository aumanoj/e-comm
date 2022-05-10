<?php
class AdminModel extends CI_Model 
{
	public function adminlogin($email,$password)
	{
	   $this->db->where('email',$email);
	   $this->db->where('password',$password);
	   $res = $this->db->get('admin');
	   if($res->num_rows() == 1)
	   {
	   	return true;
	   }
	   	else{
	   		return false;
	   	}
	}

	//Admin Can Edit Setting Start
	public function setting($settingdata)
	{
		// $this->db->where('id',$settingid);
		// $result = $this->db->get('setting')->row_array();
		// $logo = $result['image'];
		// unlink("uploads/logo/$logo");
		$this->db->get('setting');
		$query = $this->db->update('setting',$settingdata);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	//Admin Can Edit Setting End


	//Admin Can Add products categories Start
	public function add_product_categories($products_categoriesdata)
	{
		$pc=$products_categoriesdata['name'];
		$sql=$this->db->get_where('product_categories',array('name'=>$pc));
		if($sql->num_rows()>0)
		{
			return 0;
		}
		else
		{
			$this->db->insert('product_categories',$products_categoriesdata);
			return 1;
		}
	}
	//Admin Can Add product categories End

	//Admin Can Delete Products categories Start
	public function delete_product_categories($id)
	{
		$imageunlink = $this->db->get_where('product_categories',array('products_categories_id'=>$id))->row_array();
		  $img = $imageunlink['image'];
		  @unlink(base_url.'uploads/product_categories_images/'.$img); 
		$this->db->where('products_categories_id',$id);
		$this->db->delete('product_categories');
	}
	//Admin Can Delete products categories End




	//Admin Can Edit Product Start
	public function edit_product_categories($productcatid,$products_categoriesdata)
	{
		$this->db->where('products_categories_id',$productcatid);
		$query = $this->db->update('product_categories',$products_categoriesdata);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	//Admin Can Edit Product categories End



//Admin Can Add products barnd Start
	public function add_product_brand($products_brandsdata)
	{
		$pc=$products_brandsdata['products_categories_id'];
		$bn=$products_brandsdata['brand_name'];
		$wherecond = "(((products_categories_id ='".$pc."') AND (brand_name='".$bn."')))";
		 $this->db->where($wherecond);
		$sql=$this->db->get('product_brands');
		$chk = $sql->num_rows();
		if($chk>0)
		{
			return 0;
		}
		else
		{
			$this->db->insert('product_brands',$products_brandsdata);
			return 1;
		}
	}
	//Admin Can Add product barnd End

	//Admin Can Delete Products barnd Start
	public function delete_product_brand($id)
	{ 
		$this->db->where('products_brand_id',$id);
		$this->db->delete('product_brands');
	}
	//Admin Can Delete products barnd End


	

	//Admin Can Edit Product barnd Start
	public function edit_product_brand($productbrandid,$products_brandsdata)
	{
		$this->db->where('products_brand_id',$productbrandid);
		$query = $this->db->update('product_brands',$products_brandsdata);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	//Admin Can Edit Product barnd End




	//Admin Can Add products Start
	public function add_products($productcat,$warranty,$mainimage,$date,$all_img)
	{
		 
		
			
		$sql=$this->db->get_where('products',array('product_url'=>$producturl));
		if($sql->num_rows()>0)
		{
			return 0;
		}
		else
		{

			$arr = explode(",",$productcat);
			for ($i=0; $i < count($arr); $i++) { 
			$products_data = array(
			'products_categories_id'=>$arr[$i],
			'products_brand_id'=>$this->input->post('product_brand_name'),
			'show_lens_list'=>$this->input->post('show_lens_list'),
            'lens_height'=>$this->input->post('lens_height'),
			'product_model_name'=>$this->input->post('product_model_name'),
			'product_model_number'=>$this->input->post('product_model_number'),
			'product_color'=>$this->input->post('product_color'),
			'use_for'=>$this->input->post('use_for'),
			'shape'=>$this->input->post('shape'),
			'glasses_size'=>$this->input->post('size'),
			'style'=>$this->input->post('style'),
			'dimensions'=>$this->input->post('dimensions'),
			'country_of_origin'=>$this->input->post('country_of_origin'),
			'row_metrial_source_from'=>$this->input->post('row_metrial_source_from'),
			'lens_matrial'=>$this->input->post('lens_matrial'),
			'material'=>$this->input->post('material'),
			'warranty'=>$warranty,
			'image'=>$mainimage,
			'product_description'=>$this->input->post('product_description'),
			'product_price'=>$this->input->post('product_price'),
			'discounted_price'=>$this->input->post('discounted_price'),
			'offer'=>$this->input->post('offer'),
			'rating'=>$this->input->post('rating'),
			'bought'=>$this->input->post('bought'),
			'frame_width'=>$this->input->post('frame_width'),
			'temple_length'=>$this->input->post('temple_length'),
			'product_url'=>$this->input->post('product_url'),
			'seo_title'=>$this->input->post('seo_title'),
				'coupon_code'=>$this->input->post('coupon_code'),
			'coupon_amount'=>$this->input->post('coupon_amount'),
			'stokke'=>$this->input->post('stokke'),
			'created_on'=>$date,
			'updated_on'=>$date,
			'product_images'=>$all_img);
			$query = $this->db->insert('products',$products_data);
			}



			
			return 1;
		}
	}
	//Admin Can Add products End

	//Admin Can Delete Products Start
	public function delete_products($id)
	{
		$this->db->where('products_id',$id);
		$this->db->delete('products');
	}
	//Admin Can Delete products End

	//Admin Can Edit Product Start
	public function edit_products($productid,$products_data)
	{
		$this->db->where('products_id',$productid);
		$query = $this->db->update('products',$products_data);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	//Admin Can Edit Product End


	//Admin Can Add Slider Start
	public function add_slider($data)
	{
		$query = $this->db->insert('slider',$data);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	//Admin Can Add Slider End

	//Admin Can Delete Slider Start
	public function deleteslider($id)
	{
		$imageunlink = $this->db->get_where('slider',array('id'=>$id))->row_array();
		  $img = $imageunlink['image'];
		  @unlink(base_url.'uploads/slider/'.$img); 
		$this->db->where('id',$id);
		$this->db->delete('slider');
	}
	//Admin Can Delete Slider  End

	//Admin Can Delete enquiry_details Start
	public function delete_enquiry_details($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('enquiry');
	}
	//Admin Can Delete enquiry_details End

	//Admin Can delete_subscribe_email Start
	public function delete_subscribe_email($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('subscribe_email');
	}
	//Admin Can delete_subscribe_email End



	

//Admin Can Add testimonials Start
	public function add_testimonial($data)
	{
		$query = $this->db->insert('testimonials',$data);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	//Admin Can Add testimonials End

	//Admin Can Delete testimonials Start
	public function deletetestimonial($id)
	{

		$imageunlink = $this->db->get_where('testimonials',array('testimonial_id'=>$id))->row_array();
		  $img = $imageunlink['image'];
		  @unlink(base_url.'uploads/testimonials/'.$img); 
		$this->db->where('testimonial_id',$id);
		$this->db->delete('testimonials');
	}
	//Admin Can Delete testimonials  End

	//Admin Can Add teams Start
	public function add_team($data)
	{
		$query = $this->db->insert('teams',$data);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	//Admin Can Add teams End

	//Admin Can Delete testimonials Start
	public function deleteteams($id)
	{

		$imageunlink = $this->db->get_where('teams',array('teams_id'=>$id))->row_array();
		  $img = $imageunlink['image'];
		  @unlink(base_url.'uploads/teams/'.$img); 
		$this->db->where('teams_id',$id);
		$this->db->delete('teams');
	}
	//Admin Can Delete testimonials  End
	
	
	//Admin Can Edit terms condintion Start
	public function edit_terms_condition($data)
	{
		$this->db->get('terms_and_condition');
		$query = $this->db->update('terms_and_condition',$data);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	//Admin Can Edit terms condintion End


	//Admin Can Delete registered - user Start
	public function deleteuser($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('user');
	}
	//Admin Can Delete registered  End

	//Admin Can Delete enquiry - user Start
	public function delete_enquiry_user($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('enquiry');
	}
	//Admin Can Delete enquiry  End

	//Admin Can Delete placed_order Start
	public function delete_placed_order($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('billing_address');
	}
	//Admin Can Delete placed_order  End

	//Admin Can Add branch Start
	public function add_branch($branchdata)
	{
		$email=$branchdata['email'];
		$sql=$this->db->get_where('branchs',array('email'=>$email));
		if($sql->num_rows()>0)
		{
			return 0;
		}
		else
		{
			$this->db->insert('branchs',$branchdata);
			return 1;
		}
	}
	//Admin Can Add branch End

	//Admin Can Delete branch Start
	public function delete_branch($id)
	{
		$imageunlink = $this->db->get_where('product_categories',array('products_categories_id'=>$id))->row_array();
		  $img = $imageunlink['image'];
		  @unlink(base_url.'uploads/product_categories_images/'.$img); 
		$this->db->where('products_categories_id',$id);
		$this->db->delete('product_categories');
	}
	//Admin Can Delete branch End




	//Admin Can Edit branch Start
	public function edit_branch($branchid,$branchdata)
	{
		$this->db->where('branch_id',$branchid);
		$query = $this->db->update('branchs',$branchdata);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	//Admin Can Edit branch End


	public function active_branch($id)
	{
	$this->db->set('status',1);
	$this->db->where('branch_id',$id);
	$this->db->update('branchs');
	}

	public function deactive_branch($id)
	{
	$this->db->set('status',0);
	$this->db->where('branch_id',$id);
	$this->db->update('branchs');
	}

	public function about($data)
	{
		$this->db->get('about');
		$query = $this->db->update('about',$data);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function franchise_contant($data)
	{
		$this->db->get('franchise_contant');
		$query = $this->db->update('franchise_contant',$data);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function add_product_subcategories($data)
	{
	$query = $this->db->insert('product_subcategories',$data);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}	
	}
	public function edit_product_subcategories($lid,$data)
	{
		$this->db->where('products_subcategories_id',$lid);
		$query = $this->db->update('product_subcategories',$data);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	public function add_lense($data)
	{
	$query = $this->db->insert('lenses',$data);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}	
	}

	//update for lense details
	public function edit_lense($lid,$data)
	{
		$this->db->where('products_subcategories_id',$lid);
		$query = $this->db->update('product_subcategories',$data);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	//delete lnses details
	public function delete_lense_details($id)
	{ 
		$this->db->where('id',$id);
		$this->db->delete('lenses');
	}
	//size-guide
	public function size_guide($data)
	{
		$this->db->get('size_guide');
		$query = $this->db->update('size_guide',$data);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function add_power_type($power_type)
	{
		$query = $this->db->insert('materials_price',$power_type);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function edit_power_type($power_type,$id)
	{
		$query = $this->db->where('id',$id)->update('materials_price',$power_type);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function deletepowertype($id)
	{
		$imageunlink = $this->db->get_where('materials_price',array('id'=>$id))->row_array();
		  $img = $imageunlink['image'];
		  @unlink(base_url.'uploads/power_type/'.$img); 
		$this->db->where('id',$id);
		$this->db->delete('power_type');
	}

	public function reating_pending($sid)
	{
	$this->db->set('status',0);
	$this->db->where('id',$sid);
	$this->db->update('rating');
	}

	public function reating_confirm($sid)
	{
	$this->db->set('status',1);
	$this->db->where('id',$sid);
	$this->db->update('rating');
	}
	public function reating_delete($sid)
	{
	$this->db->where('id',$sid);
	$this->db->delete('rating');
	}

	public function deleteFranchiseEnquiry($id)
	{
	$this->db->where('id',$id);
	$this->db->delete('franchies_enquiry');
	}

	public function easyReturnPolicy($data)
	{
		$this->db->get('easy_return_policy');
		$query = $this->db->update('easy_return_policy',$data);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function deleteTryhome($id)
	{
	$this->db->where('id',$id);
	$this->db->delete('tryhome');
	}
	
		public function getBlogs()
	{
	 return	$this->db->order_by('id','desc')->get('blogs')->result();
	}

	public function addBlog($data)
	{
	 $query = $this->db->insert('blogs',$data);
	 if ($query)
	  {
	 	return 1;
	 }
	 else
	 {
	 	return 0;
	 }
	}

	public function getBlog($id)
	{
		return $this->db->get_where('blogs',array('id'=>$id))->row();
	}

	public function editBlog($id,$data)
	{
	 $query = $this->db->where('id',$id)->update('blogs',$data);
	 if ($query)
	  {
	 	return 1;
	 }
	 else
	 {
	 	return 0;
	 }
	}

	public function deleteBlog($id)
	{
	$this->db->where('id',$id);
	$this->db->delete('blogs');
	}


    	public function RefundPolicy($data)
	    {
		$this->db->get('refund_policy');
		$query = $this->db->update('refund_policy',$data);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
    	}
	
		public function TermsOfUse($data)
    	{
		$this->db->get('terms_of_uses');
		$query = $this->db->update('terms_of_uses',$data);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
    	}
    	
    	public function PrivacyPolicy($data)
    	{
		$this->db->get('privacy_policy');
		$query = $this->db->update('privacy_policy',$data);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
    	}
    	
    	public function DeliveryShippingTerms($data)
    	{
		$this->db->get('delivery_shipping_terms');
		$query = $this->db->update('delivery_shipping_terms',$data);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
    	}
    	
    	public function cancellation($data)
    	{
		$this->db->get('cancellation');
		$query = $this->db->update('cancellation',$data);
		if ($query) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
    	}
    	
    	
    	
    	
    	
    

}
?>