<?php 
//error_reporting(1);
if (!defined('BASEPATH')) exit('No direct script access allowed');
class AdminController extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form'));
		$this->load->library('table');
		$this->load->Model('AdminModel');
	}
	public function index()
	{
		if($this->input->post('submit'))
		{
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()==false)
		{
		}
		else
		{
		 $email=$this->input->post('email');
		$password=$this->input->post('password');
		$res = $this->AdminModel->adminlogin($email,$password);
		if($res)
		{
			$this->session->set_userdata('admin_login',$email);
			redirect(base_url('admin/dashboard'));
		}
		else
		{
			$this->session->set_flashdata('msg','Invalid login Details');
		    
		}
		}
			
		}
		$this->load->view('admin/login');
	}
	//Admin Dashbord
  	public function Dashboard()
  	{
   		$this->load->view('admin/dashboard');
  	}


  	// public function table()
  	// {
   // 	$this->load->view('admin/table');
  	// }


  	//Admin Can Setting Start
  		public function setting()
  		{
			if($this->input->post('submit'))
		{
		$this->form_validation->set_rules('company_name','Company Name','required');
		$this->form_validation->set_rules('company_address','Company Address','required');
		$this->form_validation->set_rules('phone_number','Company Mobile','required');
		$this->form_validation->set_rules('company_email','Company Email','required');
		$this->form_validation->set_rules('openclosetiming','Company open close timing','required');

		if($this->form_validation->run()==false)
		{}
		else 
		{
			//echo $this->input->post('facebook'); die();
			date_default_timezone_set("Asia/Kolkata");
			$date =  Date('Y-m-d h:i:s');
		
			$config['upload_path'] = "./uploads/logo/";
    		$config['allowed_types'] = 'gif|jpg|jpeg|png';	
    		$config['max_size'] = '';
    		$config['remove_spaces'] = TRUE;        
   			$config['encrypt_name'] = TRUE;  
    		$this->load->library('upload', $config);

		if(!$this->upload->do_upload('img'))
   	 	{
    		$settingdata = array(
    		'name'=>$this->input->post('company_name'),
			'address'=>$this->input->post('company_address'),
			'mobile'=>$this->input->post('phone_number'),
			'facebook'=>$this->input->post('facebook'),
			'instagram'=>$this->input->post('instagram'),
			'twitter'=>$this->input->post('twitter'),
			'googleplush'=>$this->input->post('googleplush'),
			'openclosetiming'=>$this->input->post('openclosetiming'),
			'updated_on'=>$date,
			'email'=>$this->input->post('company_email'));
    	}
		else
		{
			$settingdata = array(
			'name'=>$this->input->post('company_name'),
			'address'=>$this->input->post('company_address'),
			'mobile'=>$this->input->post('phone_number'),
			'facebook'=>$this->input->post('facebook'),
			'instagram'=>$this->input->post('instagram'),
			'twitter'=>$this->input->post('twitter'),
			'googleplush'=>$this->input->post('googleplush'),
			'openclosetiming'=>$this->input->post('openclosetiming'),
			'updated_on'=>$date,
			'email'=>$this->input->post('company_email'),
			'image'=>$this->upload->data('file_name'));
		}
			$res = $this->AdminModel->setting($settingdata);
		if($res==1)
		{
			$this->session->set_flashdata('setting','Setting Update Sucessfully');
			redirect(base_url('AdminController/setting'));
		}	
		}
	 	}
  		$this->load->view('admin/setting');
  		}
		//Admin Can Setting End

  		//all Sliders Start
  		public function all_slider()
  		{
   		$this->load->view('admin/all_slider');
  		}
  		//all Sliders End


  		//Admin Add Slider Start
		public function add_slider()
	 	{
		if($this->input->post('submit'))
		{
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('heading','Heading','required');
		$this->form_validation->set_rules('description','Description','required');
		if (empty($_FILES['img']['name']))
		{
		$this->form_validation->set_rules('img','Image','required');
		}
		
	
		if($this->form_validation->run()==false)
		{
			
		}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');

		$config['upload_path'] = "./uploads/slider/";
    	$config['allowed_types'] = 'gif|jpg|jpeg|png';  
    	$config['max_size'] = '';
    	$config['remove_spaces'] = TRUE;        
    	$config['encrypt_name'] = TRUE;  
    	$this->load->library('upload', $config);
    	$this->upload->do_upload('img');
						
		$slider_img = array(
		'title'=>$this->input->post('title'),
		'heading'=>$this->input->post('heading'),
		'description'=>$this->input->post('description'),
		'created_on'=>$date,
		'image'=>$this->upload->data('file_name'));

	  	$res1=$this->AdminModel->add_slider($slider_img);
		if($res1==1)
		{
		$this->session->set_flashdata('addslider','Slider Added Sucessfully.');
			redirect(base_url('admin/sliders'));
		}
		}
		}	
		$this->load->view('admin/add_slider');
		}
		//Admin Add Slider End

		//Admin Delete Slider Start
	 	public function deleteslider($id)
	 	{
	 	$this->AdminModel->deleteslider($id);
	 	redirect(base_url('admin/sliders'));
	 	}
	 	//Admin Delete Slider End

	 	//Admin All enquiry  Start
  		public function all_enquiry_details()
  		{
   		$this->load->view('admin/all_enquiry_details');
  		}
  		//Admin All enquiry User End


  		//Admin Can Delete enquiry Start
  		public function delete_enquiry_details()
  		{
  		$id=$this->input->get('id'); 
		$this->AdminModel->delete_enquiry_details($id);
		redirect(base_url('AdminController/all_enquiry_details'));
  		}
  		//Admin Can Delete enquiry End



  		//Admin All Products categories  Start
  		public function all_product_categories()
  		{
   		$this->load->view('admin/all_product_categories');
  		}
  		//Admin All Products categories End

  		//Admin Can  Add  Products categories Start
		public function add_product_categories()
	 	{
		if($this->input->post('submit'))
		{
		$this->form_validation->set_rules('product_categories_name','Product Categories Name','required');
		$this->form_validation->set_rules('position','Position','required|is_unique[product_categories.position]',array('required' => 'The %s is required.', 'is_unique' => 'This %s already exists.'));
		if (empty($_FILES['img']['name']))
		{
		$this->form_validation->set_rules('img','Image','required');
		}
	
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');

		$config['upload_path'] = "./uploads/product_categories_images/";
    	$config['allowed_types'] = 'gif|jpg|jpeg|png';  
    	$config['max_size'] = '';
    	$config['remove_spaces'] = TRUE;        
    	$config['encrypt_name'] = TRUE;  
    	$this->load->library('upload', $config);
    	$this->upload->do_upload('img');
						
		$products_categoriesdata = array(
			'name'=>$this->input->post('product_categories_name'),
			'position'=>$this->input->post('position'),
			'created_on'=>$date,
			'updated_on'=>$date,
			'image'=>$this->upload->data('file_name'));

	  	$res1=$this->AdminModel->add_product_categories($products_categoriesdata);
		if($res1==0)
		{
		$this->session->set_flashdata('erraddproductscat','Product Categories Already Exist');
		}

		else if($res1==1)
		{
		$this->session->set_flashdata('addproductscat','Product Categories Added Sucessfully.');
			redirect(base_url('admin/productcategories'));
		}


		}
		}	
		$this->load->view('admin/add_product_categories');
		}
		//Admin Add   Products categories End

		//Admin Can Edit  Products categories Start
		public function edit_product_categories($productcatid)
	 	{
		if($this->input->post('submit'))	
		{
		$this->form_validation->set_rules('product_categories_name','Product Categories Name','required');
		$this->form_validation->set_rules('position','Position','required');
	
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');

		$config['upload_path'] = "./uploads/product_categories_images/";
    	$config['allowed_types'] = 'gif|jpg|jpeg|png';  
    	$config['max_size'] = '';
    	$config['remove_spaces'] = TRUE;        
    	$config['encrypt_name'] = TRUE;  
    	$this->load->library('upload', $config);


		if(!$this->upload->do_upload('img'))
   	 	{				
		$products_categoriesdata = array(
			'position'=>$this->input->post('position'),
			'name'=>$this->input->post('product_categories_name'),
			'updated_on'=>$date);
		}
		else
		{
			$products_categoriesdata = array(
			'name'=>$this->input->post('product_categories_name'),
			'updated_on'=>$date,
			'image'=>$this->upload->data('file_name'));

		}
	  	$res1=$this->AdminModel->edit_product_categories($productcatid,$products_categoriesdata);
		if($res1==1)
		{
		$this->session->set_flashdata('editproductcat','Product Categories  Updated Sucessfully.');
			redirect(base_url('admin/productcategories'));
		}
		}
		}	
		$data1['id'] = $productcatid;
		$this->load->view('admin/edit_product_categories',$data1);
		}
		//Admin Edit   Products categories End

		//Admin Can Delete Products categories Start
  		public function delete_product_categories($id)
  		{
		$this->AdminModel->delete_product_categories($id);
		redirect(base_url('admin/productcategories'));
  		}
  		//Admin Can Delete Products categories End


  		//Admin All Products brands  Start
  		public function all_product_brands()
  		{
   		$this->load->view('admin/all_product_brands');
  		}
  		//Admin All Products brands End

  		//Admin Can  Add  Products brands Start
		public function add_product_brand()
	 	{
	 		// print_r($this->input->post());
	 		// exit;
		if($this->input->post('submit'))
		{
		$this->form_validation->set_rules('product_categories_name','Product Categories Name','required');
		$this->form_validation->set_rules('product_subcategories_name','Product SubCategories Name','required');
		$this->form_validation->set_rules('product_brand','Product Brand Name','required');
		
	
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');
						
		$products_brandsdata = array(
			'products_categories_id'=>$this->input->post('product_categories_name'),
			'products_subcategories_id'=>$this->input->post('product_subcategories_name'),
			'brand_name'=>$this->input->post('product_brand'),
			'created_on'=>$date,
			'updated_on'=>$date);

	  	$res1=$this->AdminModel->add_product_brand($products_brandsdata);
		if($res1==0)
		{
		$this->session->set_flashdata('erraddproductbrands','Product Brands Already Exist');
		$this->session->set_flashdata('erraddproductcat','Product Categories  Already Exist');
		}

		else if($res1==1)
		{
		$this->session->set_flashdata('addproductbrands','Product Brands Added Sucessfully.');
			redirect(base_url('admin/product-brands'));
		}


		}
		}	
		$this->load->view('admin/add_product_brand');
		}
		//Admin Add   Products brands End

		//Admin Can Edit  Products brands Start
		public function edit_product_brand($productbrandid)
	 	{
		if($this->input->post('submit'))	
		{
		$this->form_validation->set_rules('product_categories_name','Product Categories Name','required');
		$this->form_validation->set_rules('product_brand','Product Brand Name','required');
	
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');
		
			$products_brandsdata = array(
			'products_categories_id'=>$this->input->post('product_categories_name'),
			'brand_name'=>$this->input->post('product_brand'),
			'created_on'=>$date,
			'updated_on'=>$date);

		
	  	$res1=$this->AdminModel->edit_product_brand($productbrandid,$products_brandsdata);
		if($res1==1)
		{
		$this->session->set_flashdata('editproductbrands','Product Brands  Updated Sucessfully.');
			redirect(base_url('admin/product-brands'));
		}
		}
		}	
		$data1['id'] = $productbrandid;
		$this->load->view('admin/edit_product_brand',$data1);
		}
		//Admin Edit   Products brands End

		//Admin Can Delete Products brands Start
  		public function delete_product_brand($id)
  		{
		$this->AdminModel->delete_product_brand($id);
		redirect(base_url('admin/product-brands'));
  		}
  		//Admin Can Delete Products brands End


  			public function show_product_brand()
			{
			$productcatid = $this->input->post('product_categories_id');
			$data=$this->db->get_where("product_brands",array("products_categories_id"=>$productcatid));
		 	$res = $data->result();
		 	//print_r($res);
			?>
			<option  value="">Select Brand Name</option>
			<?php
			foreach($res as $row)
			{?>
          <option value="<?php echo $row->products_brand_id;?>"> <?php echo $row->brand_name; ?></option>      
			<?php
			}
			}

  		//Admin All Products  Start
  		public function all_products()
  		{
   		$this->load->view('admin/all_products');
  		}
  		//Admin All Products End

  		//Admin Can  Add  Products Start
		public function add_products()
	 	{
	 		// echo "<pre>";
	 		// print_r($this->input->post());
	 		// echo "</pre>";
	 		// return;
		if($this->input->post('submit'))
		{
		$this->form_validation->set_rules('product_categories[]','Product Categories Name','required');
	    $this->form_validation->set_rules('product_brand_name','Product Brand Name','required');
		
		//  $this->form_validation->set_rules('product_model_name','Product Model Name','required');
		//  $this->form_validation->set_rules('product_model_number','Product Model No','required');
		// if (empty($_FILES['img']['name']))
		// {
		// $this->form_validation->set_rules('img','Image','required');
		// }
		// if (empty($_FILES['mainimg']['name']))
		// {
		// $this->form_validation->set_rules('mainimg','Main Image','required');
		// }
	
		// $this->form_validation->set_rules('offer','offer','required');
		// $this->form_validation->set_rules('dimensions','Dimensions','required');
		// $this->form_validation->set_rules('use_for','Gender ','required');
		// $this->form_validation->set_rules('lens_matrial','Lens Matrial','required');
		// $this->form_validation->set_rules('material','Material','required');
		// $this->form_validation->set_rules('shape','Shape','required');
		// $this->form_validation->set_rules('style','Style','required');
		// $this->form_validation->set_rules('product_color','Color','required');
		//  $this->form_validation->set_rules('product_price','MRP','required');
		//  $this->form_validation->set_rules('size','Size','required');
		
		//  $this->form_validation->set_rules('product_description','Product Description','required');
		//  // $this->form_validation->set_rules('warranty','Warranty','required');
		//  $this->form_validation->set_rules('discounted_price','Selling Price','required');

		//  $this->form_validation->set_rules('country_of_origin','country of origin','required');
		
		// $this->form_validation->set_rules('row_metrial_source_from','metrial source from','required');
		// $this->form_validation->set_rules('rating','rating','required');
		// $this->form_validation->set_rules('bought','bought','required');

		// $this->form_validation->set_rules('frame_width','Frame-Width','required');
		// $this->form_validation->set_rules('temple_length','Temple-Length','required');
		// $this->form_validation->set_rules('product_url','Product Url','required');
		// $this->form_validation->set_rules('seo_title','SEO Title','required');
	
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');


		$countfiles = count($_FILES['img']['name']);
			for($i=0;$i<$countfiles;$i++)
			{
            $image[$i]=uniqid().$_FILES['img']['name'][$i];
             move_uploaded_file($_FILES['img']['tmp_name'][$i], 'uploads/product_images/'.$image[$i]);
        	}
            
            $all_img = implode(",",$image);

            $mainimage=uniqid().$_FILES['mainimg']['name'];
             move_uploaded_file($_FILES['mainimg']['tmp_name'], 'uploads/main_product_images/'.$mainimage);


            
            if($this->input->post('show_lens_list')==1){
            $warranty = implode(",",$this->input->post('warranty'));
            }
            else
            {
                $warranty = "";
            }


         $productcat = implode(",",$this->input->post('product_categories'));
         

		
		

	  	$res1=$this->AdminModel->add_products($productcat,$warranty,$mainimage,$date,$all_img);
		if($res1==0)
		{
		$this->session->set_flashdata('duplicateproducturl','Products URL is Already Exit.');
		}
		else if($res1==1)
		{
		$this->session->set_flashdata('addproducts','Products Added Sucessfully.');
			redirect(base_url('admin/product-details'));
		}
		}
		}	
		$this->load->view('admin/add_products');
		}
		//Admin Add   Products End

		//Admin Can Edit  Products Start
		public function edit_products($productid)
	 	{
	 	//$productid=$this->input->get('id');
		if($this->input->post('submit'))	
		{
		$this->form_validation->set_rules('product_categories[]','Product Categories Name','required');
	 $this->form_validation->set_rules('product_brand_name','Product Brand Name','required');
		
		//  $this->form_validation->set_rules('product_model_name','Product Model Name','required');
		//  $this->form_validation->set_rules('product_model_number','Product Model No','required');
		//  $this->form_validation->set_rules('size','Size','required');
		// //  if (empty($_FILES['img']['name']))
		// // {
		// // $this->form_validation->set_rules('img','Image','required');
		// // }
		// // if (empty($_FILES['mainimg']['name']))
		// // {
		// // $this->form_validation->set_rules('mainimg','Main Image','required');
		// // }
		// $this->form_validation->set_rules('dimensions','Dimensions','required');
		// $this->form_validation->set_rules('use_for','Gender ','required');
		// $this->form_validation->set_rules('lens_matrial','Lens Matrial','required');
		// $this->form_validation->set_rules('material','Material','required');
		// $this->form_validation->set_rules('shape','Shape','required');
		// $this->form_validation->set_rules('style','Style','required');
		// $this->form_validation->set_rules('product_color','Color','required');

		//  $this->form_validation->set_rules('product_price','MRP','required');
		
		//  $this->form_validation->set_rules('product_description','Product Description','required');
		//  //$this->form_validation->set_rules('warranty','Warranty','required');
		//  $this->form_validation->set_rules('discounted_price','Selling Price','required');

		//  $this->form_validation->set_rules('country_of_origin','country of origin','required');
		
		// $this->form_validation->set_rules('row_metrial_source_from','metrial source from','required');
	
		if($this->form_validation->run()==false)
		{

		}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');
		
		$config['upload_path'] = "./uploads/main_product_images/";
    	$config['allowed_types'] = 'gif|jpg|jpeg|png';  
    	$config['max_size'] = '';
    	$config['remove_spaces'] = TRUE;        
    	$config['encrypt_name'] = TRUE;  
    	$this->load->library('upload', $config);
    	$this->upload->do_upload('mainimg');

    	

if(in_array("", $_FILES['img']['name']))
{
$all_img = $this->input->post('relatedinsertedimg');
}
else
{
$countfiles = count($_FILES['img']['name']);
for($i=0;$i<$countfiles;$i++)
{
$image[$i]=uniqid().$_FILES['img']['name'][$i];
move_uploaded_file($_FILES['img']['tmp_name'][$i], 'uploads/product_images/'.$image[$i]);
$all_img = implode(",",$image);
}
}


if ($_FILES['mainimg']['name']) 
{
$mainimg=uniqid().$_FILES['mainimg']['name'];
move_uploaded_file($_FILES['mainimg']['tmp_name'], 'uploads/main_product_images/'.$mainimg);
}
else
{
$mainimg = $this->input->post('maininsertedimg');	
}



	 if($this->input->post('show_lens_list')==1){
            $warranty = implode(",",$this->input->post('warranty'));
            }
            else
            {
                $warranty = "";
            }

             $productcat = implode(",",$this->input->post('product_categories'));
		

		
			$products_data = array(
			'products_categories_id'=>$productcat,
			'show_lens_list'=>$this->input->post('show_lens_list'),
			 'lens_height'=>$this->input->post('lens_height'),

			'products_brand_id'=>$this->input->post('product_brand_name'),

			'product_model_name'=>$this->input->post('product_model_name'),
			'product_model_number'=>$this->input->post('product_model_number'),
			'product_color'=>$this->input->post('product_color'),
			'capacity'=>$this->input->post('capacity'),
			'lens_matrial'=>$this->input->post('lens_matrial'),
			'shape'=>$this->input->post('shape'),
			'style'=>$this->input->post('style'),
			'glasses_size'=>$this->input->post('size'),
			'country_of_origin'=>$this->input->post('country_of_origin'),
			'row_metrial_source_from'=>$this->input->post('row_metrial_source_from'),
			'dimensions'=>$this->input->post('dimensions'),
			'material'=>$this->input->post('material'),
			'warranty'=>$warranty,
			'product_description'=>$this->input->post('product_description'),
			'product_price'=>$this->input->post('product_price'),
			'discounted_price'=>$this->input->post('discounted_price'),
			'updated_on'=>$date,
			'image'=>$mainimg,
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
			'product_images'=>$all_img);

	
	  	$res1=$this->AdminModel->edit_products($productid,$products_data);
		if($res1==1)
		{
		$this->session->set_flashdata('editproducts','Products Updated Sucessfully.');
			redirect(base_url('admin/product-details'));
		}
		}
		}	
		$data1['id'] = $productid;
		$this->load->view('admin/edit_products',$data1);
		}
		//Admin Edit   Products End

		//Admin Can Delete Products Start
  		public function delete_products($id)
  		{
  		
		$this->AdminModel->delete_products($id);
		redirect(base_url('admin/product-details'));
  		}
  		//Admin Can Delete Products End

  		

  		

  		//all Testimonials Start
  		public function all_testimonial()
  		{
   		$this->load->view('admin/all_testimonial');
  		}
  		//all testimonials End


  		//Admin Add testimonials Start
		public function add_testimonial()
	 	{
		if($this->input->post('submit'))
		{
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('position','Position','required');
		$this->form_validation->set_rules('description','Description','required');
		if (empty($_FILES['img']['name']))
		{
		$this->form_validation->set_rules('img','Image','required');
		}
	
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');

		$config['upload_path'] = "./uploads/testimonials/";
    	$config['allowed_types'] = 'gif|jpg|jpeg|png';  
    	$config['max_size'] = '';
    	$config['remove_spaces'] = TRUE;        
    	$config['encrypt_name'] = TRUE;  
    	$this->load->library('upload', $config);
    	$this->upload->do_upload('img');
						
		$data = array(
		'name'=>$this->input->post('name'),
		'position'=>$this->input->post('position'),
		'description'=>$this->input->post('description'),
		'created_on'=>$date,
		'image'=>$this->upload->data('file_name'));

	  	$res1=$this->AdminModel->add_testimonial($data);
		if($res1==1)
		{
		$this->session->set_flashdata('addtestimonials','Testimonial Added Sucessfully.');
			redirect(base_url('admin/testimonials'));
		}
		}
		}	
		$this->load->view('admin/add_testimonial');
		}
		//Admin Add testimonials End

		//Admin Delete testimonials Start
	 	public function deletetestimonial($id)
	 	{
	 	$this->AdminModel->deletetestimonial($id);
	 	redirect(base_url('admin/testimonials'));
	 	}
	 	//Admin Delete testimonials End


	 	//all Teams Start
  		public function all_team()
  		{
   		$this->load->view('admin/all_team');
  		}
  		//all Teams End


  		//Admin Add Teams Start
		public function add_team_member()
	 	{
		if($this->input->post('submit'))
		{
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('position','Position','required');
		$this->form_validation->set_rules('description','Description','required');
		if (empty($_FILES['img']['name']))
		{
		$this->form_validation->set_rules('img','Image','required');
		}
	
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');

		$config['upload_path'] = "./uploads/teams/";
    	$config['allowed_types'] = 'gif|jpg|jpeg|png';  
    	$config['max_size'] = '';
    	$config['remove_spaces'] = TRUE;        
    	$config['encrypt_name'] = TRUE;  
    	$this->load->library('upload', $config);
    	$this->upload->do_upload('img');
						
		$data = array(
		'name'=>$this->input->post('name'),
		'position'=>$this->input->post('position'),
		'description'=>$this->input->post('description'),
		'facebook'=>$this->input->post('facebook'),
		'linkedin'=>$this->input->post('linkedin'),
		'instagram'=>$this->input->post('instagram'),
		'twitter'=>$this->input->post('twitter'),
		'created_on'=>$date,
		'image'=>$this->upload->data('file_name'));

	  	$res1=$this->AdminModel->add_team($data);
		if($res1==1)
		{
		$this->session->set_flashdata('addteams','Team Member Added Sucessfully.');
			redirect(base_url('admin/teams'));
		}
		}
		}	
		$this->load->view('admin/add_team');
		}
		//Admin Add Teams End

		//Admin Delete Teams Start
	 	public function deleteteam($id)
	 	{
	 	$this->AdminModel->deleteteams($id);
	 	redirect(base_url('admin/teams'));
	 	}
	 	//Admin Delete Teams End
  

  	
        
        //edit terms condition Start
     	 public function edit_terms_condition()
     	 {
		if($this->input->post('submit'))
		{
		$this->form_validation->set_rules('terms_condition','Terms And Condition','required');
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set('Asia/kolkata');
		$date = date('Y-m-d g:i A');
		$data = array(
		'terms_condition'=>$this->input->post('terms_condition'),
		'updated_on'=>$date);
		$res = $this->AdminModel->edit_terms_condition($data);
		if($res==1)
		{
			$this->session->set_flashdata('updatetermas','Terms And Condition Update Sucessfully');
			redirect(base_url('AdminController/edit_terms_condition'));
		}	
		}
		}
  		$this->load->view('admin/edit_terms_condition');
     	 }


     	 //registered - user start
     	 public function registered_user()
     	 {
     	 	$this->load->view('admin/registered_user');
     	 }

     	  //registered - user End

     	//Admin Delete registered - user Start
	 	public function deleteuser($id)
	 	{
	 	$this->AdminModel->deleteuser($id);
	 	redirect(base_url('admin/registered-users'));
	 	}
	 	//Admin Delete registered - user End

	 	 //enquiry - user start
     	 public function enquiry_user()
     	 {
     	 	$this->load->view('admin/enquiry_user');
     	 }

     	  //enquiry - user End

     	//Admin Delete enquiry - user Start
	 	public function delete_enquiry_user($id)
	 	{
	 	$this->AdminModel->delete_enquiry_user($id);
	 	redirect(base_url('admin/enquiry-users'));
	 	}
	 	//Admin Delete enquiry - user End

	 	// placed-order start
     	 public function placed_order()
     	 {
     	 	$this->load->view('admin/placed_order');
     	 }

     	  //placed-order  End

     	//Admin Delete placed-order Start
	 	public function delete_placed_order($id)
	 	{
	 	$this->AdminModel->delete_placed_order($id);
	 	redirect(base_url('admin/placed-order'));
	 	}
	 	//Admin Delete placed-order End

	 	// subscribe_email start
     	 public function subscribe_email()
     	 {
     	 	$this->load->view('admin/subscribe_email');
     	 }

     	  //subscribe_email  End

     	//Admin Delete subscribe_emailStart
	 	public function delete_subscribe_email($id)
	 	{
	 	$this->AdminModel->delete_subscribe_email($id);
	 	redirect(base_url('admin/subscribed-email'));
	 	}
	 	//Admin Delete subscribe_email End



     	 //Admin All branch  Start
  		public function all_branch()
  		{
   		$this->load->view('admin/all_branch');
  		}

  		public function branch_details()
  		{
   		$this->load->view('admin/branch_details');
  		}
  		//Admin All branch End

  		//Admin Can  Add  branch Start
		public function add_branch()
	 	{
		if($this->input->post('submit'))
		{
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('branch_name','Branch Name','required');
		$this->form_validation->set_rules('branch_code','Branch Code','required');
		$this->form_validation->set_rules('contact_person','Contact Person Name','required');
		$this->form_validation->set_rules('mobile','Mobile','required');
		$this->form_validation->set_rules('state','State Name','required');
		$this->form_validation->set_rules('district','District Name','required');
		$this->form_validation->set_rules('pincode','Pincode','required');
		$this->form_validation->set_rules('address','Address','required');
		if (empty($_FILES['img']['name']))
		{
		$this->form_validation->set_rules('img','Image','required');
		}
	
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');

		$config['upload_path'] = "./uploads/branchs/";
    	$config['allowed_types'] = 'gif|jpg|jpeg|png';  
    	$config['max_size'] = '';
    	$config['remove_spaces'] = TRUE;        
    	$config['encrypt_name'] = TRUE;  
    	$this->load->library('upload', $config);
    	$this->upload->do_upload('img');
						
		$branchdata = array(
			'branch_name'=>$this->input->post('branch_name'),
			'state'=>$this->input->post('state'),
			'district'=>$this->input->post('district'),
			'address'=>$this->input->post('address'),
			'pincode'=>$this->input->post('pincode'),
			'mobile'=>$this->input->post('mobile'),
			'email'=>$this->input->post('email'),
			'password'=>$this->input->post('password'),
			'branch_code'=>$this->input->post('branch_code'),
			'contact_person'=>$this->input->post('contact_person'),
			'created_on'=>$date,
			'updated_on'=>$date,
			'image'=>$this->upload->data('file_name'));

	  	$res1=$this->AdminModel->add_branch($branchdata);
		if($res1==0)
		{
		$this->session->set_flashdata('errbranchadd','Branch Email  Already Exist');

		}

		else if($res1==1)
		{
		$this->session->set_flashdata('addedbranch','Branch Added Sucessfully.');
			redirect(base_url('admin/branch-details'));
		}


		}
		}	
		$this->load->view('admin/add_branch');
		}
		//Admin Add  branch End

		//Admin Can Edit  branch Start
		public function edit_branch($branchid)
	 	{
		if($this->input->post('submit'))	
		{
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('branch_name','Branch Name','required');
		$this->form_validation->set_rules('branch_code','Branch Code','required');
		$this->form_validation->set_rules('contact_person','Contact Person Name','required');
		$this->form_validation->set_rules('mobile','Mobile','required');
		$this->form_validation->set_rules('state','State Name','required');
		$this->form_validation->set_rules('district','District Name','required');
		$this->form_validation->set_rules('pincode','Pincode','required');
		$this->form_validation->set_rules('address','Address','required');
		
	
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');

		$config['upload_path'] = "./uploads/branchs/";
    	$config['allowed_types'] = 'gif|jpg|jpeg|png';  
    	$config['max_size'] = '';
    	$config['remove_spaces'] = TRUE;        
    	$config['encrypt_name'] = TRUE;  
    	$this->load->library('upload', $config);


		if(!$this->upload->do_upload('img'))
   	 	{				
		$branchdata = array(
			'branch_name'=>$this->input->post('branch_name'),
			'state'=>$this->input->post('state'),
			'district'=>$this->input->post('district'),
			'address'=>$this->input->post('address'),
			'pincode'=>$this->input->post('pincode'),
			'mobile'=>$this->input->post('mobile'),
			'email'=>$this->input->post('email'),
			'password'=>$this->input->post('password'),
			'branch_code'=>$this->input->post('branch_code'),
			'contact_person'=>$this->input->post('contact_person'),
			'updated_on'=>$date);
		}
		else
		{
			$branchdata = array(
			'branch_name'=>$this->input->post('branch_name'),
			'state'=>$this->input->post('state'),
			'district'=>$this->input->post('district'),
			'address'=>$this->input->post('address'),
			'pincode'=>$this->input->post('pincode'),
			'mobile'=>$this->input->post('mobile'),
			'email'=>$this->input->post('email'),
			'password'=>$this->input->post('password'),
			'branch_code'=>$this->input->post('branch_code'),
			'contact_person'=>$this->input->post('contact_person'),
			'created_on'=>$date,
			'updated_on'=>$date,
			'image'=>$this->upload->data('file_name'));

		}
	  	$res1=$this->AdminModel->edit_branch($branchid,$branchdata);
		if($res1==1)
		{
		$this->session->set_flashdata('editbranch','Branch  Updated Sucessfully.');
			redirect(base_url('admin/branch-details'));
		}
		}
		}	
		$data1['id'] = $branchid;
		$this->load->view('admin/edit_branch',$data1);
		}
		//Admin Edit   branch End

		//Admin Can Delete branch Start
  		public function delete_branch($id)
  		{
		$this->AdminModel->delete_branch($id);
		redirect(base_url('admin/branch-details'));
  		}
  		//Admin Can Delete branch End


  		//Admin Can Active branch Start
  		public function active_branch($id)
  		{
		$this->AdminModel->active_branch($id);
		$this->session->set_flashdata('activebranch','Branch has been Activeted Sucessfully.');
		redirect(base_url('admin/branch-details'));
  		}
  		//Admin Can Active branch End

  		//Admin Can DEActive branch Start
  		public function deactive_branch($id)
  		{
		$this->AdminModel->deactive_branch($id);
		$this->session->set_flashdata('deactivebranch','Branch has been Deactiveted Sucessfully.');
		redirect(base_url('admin/branch-details'));
  		}
  		//Admin Can DEActive branch End

  		//Admin Can Active all branch pages Start
  		public function active_branch1($id)
  		{
		$this->AdminModel->active_branch($id);
		$this->session->set_flashdata('activebranch','Branch has been Activeted Sucessfully.');
		redirect(base_url('admin/branches'));
  		}
  		//Admin Can Active all branch pages End

  		//Admin Can DEActive branch for all branch pages Start
  		public function deactive_branch1($id)
  		{
		$this->AdminModel->deactive_branch($id);
		$this->session->set_flashdata('deactivebranch','Branch has been Deactiveted Sucessfully.');
		redirect(base_url('admin/branches'));
  		}
  		//Admin Can DEActive all branch pages End

  		public function printbill($id)
	 	{
	 	$data['id'] = $id;
		$this->load->view('admin/printbill',$data);
		}

		public function about()
		{
		if($this->input->post('submit'))	
		{
		$this->form_validation->set_rules('heading','Heading','required');
		
		// if (empty($_FILES['image']['name']))
		// {
		// $this->form_validation->set_rules('image','Image','required');
		// }
		$this->form_validation->set_rules('description','Description','required');
		
	
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');

		$config['upload_path'] = "./uploads/about/";
    	$config['allowed_types'] = 'gif|jpg|jpeg|png';  
    	$config['max_size'] = '';
    	$config['remove_spaces'] = TRUE;        
    	$config['encrypt_name'] = TRUE;  
    	$this->load->library('upload', $config);


		if(!$this->upload->do_upload('image'))
   	 	{				
		$data = array(
			'heading'=>$this->input->post('heading'),
			'description'=>$this->input->post('description'),
			'videos_link'=>$this->input->post('videos_link'),
			'created_on'=>$date);
		}
		else
		{
			$data = array(
			'heading'=>$this->input->post('heading'),
			'description'=>$this->input->post('description'),
			'videos_link'=>$this->input->post('videos_link'),
			'created_on'=>$date,
			'image'=>$this->upload->data('file_name'));

		}
	  	$res=$this->AdminModel->about($data);
		if($res==1)
		{
		$this->session->set_flashdata('about_contact','About  Updated Sucessfully.');
			redirect(base_url('admin/about'));
		}
		}
		}
		$data1['about']	= $this->db->get('about')->row_array();
		$this->load->view('admin/about',$data1);
		}

		//all lenses details
		public function lense_details()
		{
		$this->load->view('admin/all_lenses');	
		}
		
		// add product Subcategories
		public function add_lense()
		{
			// print_r($this->input->post());
			// exit;
		if($this->input->post('submit'))
		{

		$this->form_validation->set_rules('product_categories[]','Product Categories','required');
		$this->form_validation->set_rules('subcategories','Sub Categories','required');

	
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');

		 $productcat = implode(",",$this->input->post('product_categories'));

						
		$data = array(
			'products_categories_id'=>$productcat,
			'name'=>$this->input->post('subcategories'),
			//'status'=>1,
			'created_on'=>$date,
			'updated_on'=>$date);

	  	$res=$this->AdminModel->add_product_subcategories($data);
	
		if($res==1)
		{
		$this->session->set_flashdata('addedlense','Lens Added Sucessfully.');
			redirect(base_url('admin/lense-details'));
		}


		}
		}	
		$this->load->view('admin/add_lense');
		}

		//add lenses details
		// public function add_lense()
		// {
		// if($this->input->post('submit'))
		// {

		// $this->form_validation->set_rules('product_categories[]','Product Categories','required');
		// $this->form_validation->set_rules('power_type','Power Type','required');
		// $this->form_validation->set_rules('product_brand_name','Product Brand Name','required');
		// $this->form_validation->set_rules('heading','Lense Heading','required');
		// $this->form_validation->set_rules('price','Price','required');
		// $this->form_validation->set_rules('warranty_period','Warranty Period','required');
		// $this->form_validation->set_rules('thickness','Thickness','required');
		// $this->form_validation->set_rules('power_range','Power Range','required');
		// $this->form_validation->set_rules('blue_light_blocker','Blue Light Blocker','required');
		// $this->form_validation->set_rules('anti_scratch_coating','Anti Scratch Coating','required');
		// $this->form_validation->set_rules('both_side_anti_glare_coating','Both Side Anti Glare Coating','required');
		// $this->form_validation->set_rules('both_side_anti_reflective_coating','Both Side Anti Reflective Coating','required');
		// $this->form_validation->set_rules('uv_protection','UV Protection','required');
		// $this->form_validation->set_rules('water_and_dust_repellent','Water And Dust Repellent','required');
		// $this->form_validation->set_rules('breakage_and_crack_resistant','Breakage And Crack Resistant','required');

	
		// if($this->form_validation->run()==false)
		// {}
		// else 
		// {
		// date_default_timezone_set("Asia/Kolkata");
		// $date =  Date('Y-m-d h:i:s');

		//  $productcat = implode(",",$this->input->post('product_categories'));

						
		// $data = array(
		// 	'products_categories_id'=>$productcat,
		// 	'power_type'=>$this->input->post('power_type'),
		// 	'products_brand_id'=>$this->input->post('product_brand_name'),
		// 	'heading'=>$this->input->post('heading'),
		// 	'price'=>$this->input->post('price'),
		// 	'warranty_period'=>$this->input->post('warranty_period'),
		// 	'thickness'=>$this->input->post('thickness'),
		// 	'power_range'=>$this->input->post('power_range'),
		// 	'blue_light_blocker'=>$this->input->post('blue_light_blocker'),
		// 	'anti_scratch_coating'=>$this->input->post('anti_scratch_coating'),
		// 	'both_side_anti_glare_coating'=>$this->input->post('both_side_anti_glare_coating'),
		// 	'both_side_anti_reflective_coating'=>$this->input->post('both_side_anti_reflective_coating'),
		// 	'uv_protection'=>$this->input->post('uv_protection'),
		// 	'water_and_dust_repellent'=>$this->input->post('water_and_dust_repellent'),
		// 	'breakage_and_crack_resistant'=>$this->input->post('breakage_and_crack_resistant'),
		// 	'created_at'=>$date,
		// 	'updated_at'=>$date);

	 //  	$res=$this->AdminModel->add_lense($data);
	
		// if($res==1)
		// {
		// $this->session->set_flashdata('addedlense','Lens Added Sucessfully.');
		// 	redirect(base_url('admin/lense-details'));
		// }


		// }
		// }	
		// $this->load->view('admin/add_lense');
		// }
		//edit lenses details
		public function edit_lense_details($lid)
		{
		if($this->input->post('submit'))
		{

		$this->form_validation->set_rules('product_categories[]','Product Categories','required');
		$this->form_validation->set_rules('product_brand_name','Product Brand Name','required');
		$this->form_validation->set_rules('power_type','Power Type','required');
		$this->form_validation->set_rules('heading','Lense Heading','required');
		$this->form_validation->set_rules('price','Price','required');
		$this->form_validation->set_rules('warranty_period','Warranty Period','required');
		$this->form_validation->set_rules('thickness','Thickness','required');
		$this->form_validation->set_rules('power_range','Power Range','required');
		$this->form_validation->set_rules('blue_light_blocker','Blue Light Blocker','required');
		$this->form_validation->set_rules('anti_scratch_coating','Anti Scratch Coating','required');
		$this->form_validation->set_rules('both_side_anti_glare_coating','Both Side Anti Glare Coating','required');
		$this->form_validation->set_rules('both_side_anti_reflective_coating','Both Side Anti Reflective Coating','required');
		$this->form_validation->set_rules('uv_protection','UV Protection','required');
		$this->form_validation->set_rules('water_and_dust_repellent','Water And Dust Repellent','required');
		$this->form_validation->set_rules('breakage_and_crack_resistant','Breakage And Crack Resistant','required');

	
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');
			$productcat = implode(",",$this->input->post('product_categories'));
						
		$data = array(
			'products_categories_id'=>$productcat,
			'power_type'=>$this->input->post('power_type'),
			'products_brand_id'=>$this->input->post('product_brand_name'),
			'heading'=>$this->input->post('heading'),
			'price'=>$this->input->post('price'),
			'warranty_period'=>$this->input->post('warranty_period'),
			'thickness'=>$this->input->post('thickness'),
			'power_range'=>$this->input->post('power_range'),
			'blue_light_blocker'=>$this->input->post('blue_light_blocker'),
			'anti_scratch_coating'=>$this->input->post('anti_scratch_coating'),
			'both_side_anti_glare_coating'=>$this->input->post('both_side_anti_glare_coating'),
			'both_side_anti_reflective_coating'=>$this->input->post('both_side_anti_reflective_coating'),
			'uv_protection'=>$this->input->post('uv_protection'),
			'water_and_dust_repellent'=>$this->input->post('water_and_dust_repellent'),
			'breakage_and_crack_resistant'=>$this->input->post('breakage_and_crack_resistant'),
			'updated_at'=>$date);

	  	$res=$this->AdminModel->edit_lense($lid,$data);
	
		if($res==1)
		{
		$this->session->set_flashdata('editdlense','Lens Update Sucessfully.');
			redirect(base_url('admin/lense-details'));
		}


		}
		}
		$data1['lense'] = $this->db->get_where('lenses',array('id'=>$lid))->row_array();
		$this->load->view('admin/edit_lense_details',$data1);	
		
		}
		//delete lenses details
		public function delete_lense_details($id)
  		{
		$this->AdminModel->delete_lense_details($id);
		redirect(base_url('admin/lense-details'));
  		}

  		//admin lenses sixe guide
  		public function size_guide()
		{
		if($this->input->post('submit'))	
		{
		$this->form_validation->set_rules('heading','Heading','required');
		$this->form_validation->set_rules('description','Description','required');
		
	
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');
		
			$data = array(
			'heading'=>$this->input->post('heading'),
			'description'=>$this->input->post('description'),
			'created_on'=>$date);

		
	  	$res=$this->AdminModel->size_guide($data);
		if($res==1)
		{
		$this->session->set_flashdata('size_guide','Size-Guide Updated Sucessfully.');
			redirect(base_url('admin/size-guide'));
		}
		}
		}
		$data1['size_guide'] = $this->db->get('size_guide')->row_array();
		$this->load->view('admin/size_guide',$data1);
		}

		public function power_type()
      {
        $this->load->view('admin/all_power_type');
      }


      public function add_power_type()
      {
      	// print_r($this->input->post());
      	// exit;
      	if($this->input->post('submit'))
		{
		$this->form_validation->set_rules('material_type','Material Type','required');
		$this->form_validation->set_rules('live_price','Live Price','required');

	
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');
						
		$power_type = array(
		'material_type'=>$this->input->post('material_type'),
		'price'=>$this->input->post('live_price'),
		'created_on'=>$date,
		'updated_on'=>$date,
	);

	  	$res1=$this->AdminModel->add_power_type($power_type);
		if($res1==1)
		{
		$this->session->set_flashdata('addpower','power type Added Sucessfully.');
			redirect(base_url('admin/power-type'));
		}
		}
		}	
        $this->load->view('admin/add_power_type');
      }


      public function edit_power_type($id)
      {
      	if($this->input->post('submit'))
		{
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('uses','Power Type Uses','required');
		
		if($this->form_validation->run()==false)
		{
			
		}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');

		$config['upload_path'] = "./uploads/power_type/";
    	$config['allowed_types'] = 'gif|jpg|jpeg|png';  
    	$config['max_size'] = '';
    	$config['remove_spaces'] = TRUE;        
    	$config['encrypt_name'] = TRUE;  
    	$this->load->library('upload', $config);
    	
    	if(!$this->upload->do_upload('img'))
   	 	{

		$power_type = array(
		'name'=>$this->input->post('title'),
		'uses'=>$this->input->post('uses'));

		}
		else
		{
		$power_type = array(
		'name'=>$this->input->post('title'),
		'uses'=>$this->input->post('uses'),
		'image'=>$this->upload->data('file_name'));
		}

	  	$res1=$this->AdminModel->edit_power_type($power_type,$id);
		if($res1==1)
		{
		$this->session->set_flashdata('editpower','power type Updated Sucessfully.');
			redirect(base_url('admin/power-type'));
		}
		}
		}
		$data['power_type'] = $this->db->get_where('power_type',array('id'=>$id))->row();	
        $this->load->view('admin/edit_power_type',$data);
      }


      	public function deletepowertype($id)
	 	{
	 	$this->AdminModel->deletepowertype($id);
	 	redirect(base_url('admin/power-type'));
	 	}

	 	public function user_all_rating()
	 	{
	 		 $this->load->view('admin/all_user_rating');
	 	}

	 	public function reating_confirm($sid)
	 	{
			$this->AdminModel->reating_confirm($sid);
			redirect(base_url('admin/user-rating'));
	 	}


	 	public function reating_pending($sid)
	 	{
			$this->AdminModel->reating_pending($sid);
			redirect(base_url('admin/user-rating'));
	 	}

	 	public function reating_delete($sid)
	 	{
			$this->AdminModel->reating_delete($sid);
			redirect(base_url('admin/user-rating'));
	 	}

	 	public function franchise_contant()
		{
		if($this->input->post('submit'))	
		{
		$this->form_validation->set_rules('heading','Heading','required');
		
		// if (empty($_FILES['image']['name']))
		// {
		// $this->form_validation->set_rules('image','Image','required');
		// }
		$this->form_validation->set_rules('description','Description','required');
		
	
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');

		$config['upload_path'] = "./uploads/franchise/";
    	$config['allowed_types'] = 'gif|jpg|jpeg|png';  
    	$config['max_size'] = '';
    	$config['remove_spaces'] = TRUE;        
    	$config['encrypt_name'] = TRUE;  
    	$this->load->library('upload', $config);


		if(!$this->upload->do_upload('image'))
   	 	{				
		$data = array(
			'heading'=>$this->input->post('heading'),
			'description'=>$this->input->post('description'),
			'created_on'=>$date);
		}
		else
		{
			$data = array(
			'heading'=>$this->input->post('heading'),
			'description'=>$this->input->post('description'),
			'created_on'=>$date,
			'image'=>$this->upload->data('file_name'));

		}
	  	$res=$this->AdminModel->franchise_contant($data);
		if($res==1)
		{
		$this->session->set_flashdata('updated','Franchise Contant  Updated Sucessfully.');
			redirect(base_url('admin/franchise-contant'));
		}
		}
		}
		$data1['franchise']	= $this->db->get('franchise_contant')->row_array();
		$this->load->view('admin/franchise_contant',$data1);
		}

		public function franchise_enquiry()
		{
		$this->load->view('admin/franchise_enquiry');	
		}

		public function deleteFranchiseEnquiry($id)
	 	{
			$this->AdminModel->deleteFranchiseEnquiry($id);
			redirect(base_url('admin/franchise-enquiry'));
	 	}


	 	public function easyReturnPolicy()
	 	{
	 	if($this->input->post('submit'))	
		{
		$this->form_validation->set_rules('heading','Heading','required');
		$this->form_validation->set_rules('description','Description','required');
		
	
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');
		
			$data = array(
			'heading'=>$this->input->post('heading'),
			'description'=>$this->input->post('description'),
			'created_on'=>$date);

		
	  	$res=$this->AdminModel->easyReturnPolicy($data);
		if($res==1)
		{
		$this->session->set_flashdata('updated','Size-Guide Updated Sucessfully.');
			redirect(base_url('admin/easy-return-policy'));
		}
		}
		}
	 	$data['policy']	= $this->db->get('easy_return_policy')->row_array();
		$this->load->view('admin/easy_return_policy',$data);	
	 	}


	 	public function tryhome()
	 	{
		$this->load->view('admin/tryhome');	
	 	}

	 	public function deleteTryhome($id)
	 	{
			$this->AdminModel->deleteTryhome($id);
			redirect(base_url('admin/tryhome'));
	 	}
	 	
	 		public function blogs()
	 	{
	 	$data['blogs'] = $this->AdminModel->getBlogs();
	 	$this->load->view('admin/include/header');
	 	$this->load->view('admin/include/sidebar');
	 	$this->load->view('admin/blogs',$data);	
	 	$this->load->view('admin/include/footer');	
	 	}

	 	public function addBlog()
	 	{
	 		if($this->input->post('submit'))	
		{

		$this->form_validation->set_rules('heading','heading','required|is_unique[blogs.heading]',array('required' => 'The %s is required.', 'is_unique' => 'This %s already exists.'));
		$this->form_validation->set_rules('url','URL','required|is_unique[blogs.url]',array('required' => 'The %s is required.', 'is_unique' => 'This %s already exists.'));
		$this->form_validation->set_rules('seo_title','Seo Title','required');
		

		if (empty($_FILES['thumb']['name']))
		{
		$this->form_validation->set_rules('thumb','Image','required');
		}
		$this->form_validation->set_rules('description','Description','required');
		
	
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('d-m-Y');

		$config['upload_path'] = "./uploads/blogs/thumb/";
    	$config['allowed_types'] = 'gif|jpg|jpeg|png';  
    	$config['max_size'] = '';
    	$config['remove_spaces'] = TRUE;        
    	$config['encrypt_name'] = TRUE;  
    	$this->load->library('upload', $config);
    	$this->upload->do_upload('thumb');

			$data = array(
			'heading'=>$this->input->post('heading'),
			'description'=>$this->input->post('description'),
			'url'=>$this->input->post('url'),
			'seo_title'=>$this->input->post('seo_title'),
			'created_on'=>$date,
			'thumb'=>$this->upload->data('file_name'));
	  	$res=$this->AdminModel->addBlog($data);
		if($res==1)
		{
		$this->session->set_flashdata('added','Sucessfully.');
			redirect(base_url('admin/blogs'));
		}
		}
		}
		$this->load->view('admin/include/header');
	 	$this->load->view('admin/include/sidebar');
		$this->load->view('admin/addBlog');
	 	$this->load->view('admin/include/footer');	
	 	}


	 	public function editBlog($id)
	 	{
	 		if($this->input->post('submit'))	
		{

		$this->form_validation->set_rules('heading','heading','required');

		// if (empty($_FILES['thumb']['name']))
		// {
		// $this->form_validation->set_rules('thumb','Image','required');
		// }
		$this->form_validation->set_rules('description','Description','required');
		$this->form_validation->set_rules('seo_title','Seo Title','required');
		$this->form_validation->set_rules('url','URL','required');
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('d-m-Y');

		$config['upload_path'] = "./uploads/blogs/thumb/";
    	$config['allowed_types'] = 'gif|jpg|jpeg|png';  
    	$config['max_size'] = '';
    	$config['remove_spaces'] = TRUE;        
    	$config['encrypt_name'] = TRUE;  
    	$this->load->library('upload', $config);
    	$this->upload->do_upload('thumb');


    	if(!$this->upload->do_upload('thumb'))
    	{
    		$data = array(
			'heading'=>$this->input->post('heading'),
			'description'=>$this->input->post('description'),
			'url'=>$this->input->post('url'),
			'seo_title'=>$this->input->post('seo_title'),
			'created_on'=>$date);
    	}
    	else
    	{
    		$data = array(
			'heading'=>$this->input->post('heading'),
			'description'=>$this->input->post('description'),
			'created_on'=>$date,
			'url'=>$this->input->post('url'),
			'seo_title'=>$this->input->post('seo_title'),
			'thumb'=>$this->upload->data('file_name'));
    	}
			

	  	$res=$this->AdminModel->editBlog($id,$data);
		if($res==1)
		{
		$this->session->set_flashdata('updated','Sucessfully.');
			redirect(base_url('admin/blogs'));
		}
		}
		}
		$this->load->view('admin/include/header');
	 	$this->load->view('admin/include/sidebar');
	 	$data['blog'] = $this->AdminModel->getBlog($id);
		$this->load->view('admin/editBlog',$data);
	 	$this->load->view('admin/include/footer');	
		
	 	}

	 	public function deleteBlog($id)
	 	{
	 		$this->AdminModel->deleteBlog($id);
			redirect(base_url('admin/blogs'));
	 	}
	 	
	 	
	 	
	 	public function RefundPolicy()
	 	{
	 	if($this->input->post('submit'))	
		{
		$this->form_validation->set_rules('heading','Heading','required');
		$this->form_validation->set_rules('description','Description','required');
		
	
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');
		
			$data = array(
			'heading'=>$this->input->post('heading'),
			'description'=>$this->input->post('description'),
			'created_on'=>$date);

		
	  	$res=$this->AdminModel->RefundPolicy($data);
		if($res==1)
		{
		$this->session->set_flashdata('updated','Updated Sucessfully.');
			redirect(base_url('admin/RefundPolicy'));
		}
		}
		}
	 	$data['RefundPolicy']	= $this->db->get('refund_policy')->row_array();
		$this->load->view('admin/RefundPolicy',$data);	
	 	}
	 	
	 	
	 	 	
	 	
	 	
	 		public function TermsOfUse()
	 	{
	 	if($this->input->post('submit'))	
		{
		$this->form_validation->set_rules('heading','Heading','required');
		$this->form_validation->set_rules('description','Description','required');
		
	
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');
		
			$data = array(
			'heading'=>$this->input->post('heading'),
			'description'=>$this->input->post('description'),
			'created_on'=>$date);

		
	  	$res=$this->AdminModel->TermsOfUse($data);
		if($res==1)
		{
		$this->session->set_flashdata('updated','Updated Sucessfully.');
			redirect(base_url('admin/TermsOfUse'));
		}
		}
		}
	 	$data['TermsOfUse']	= $this->db->get('terms_of_uses')->row_array();
		$this->load->view('admin/TermsOfUse',$data);	
	 	}
	 	
	 	
	 	public function PrivacyPolicy()
	 	{
	 	if($this->input->post('submit'))	
		{
		$this->form_validation->set_rules('heading','Heading','required');
		$this->form_validation->set_rules('description','Description','required');
		
	
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');
		
			$data = array(
			'heading'=>$this->input->post('heading'),
			'description'=>$this->input->post('description'),
			'created_on'=>$date);

		
	  	$res=$this->AdminModel->PrivacyPolicy($data);
		if($res==1)
		{
		$this->session->set_flashdata('updated','Updated Sucessfully.');
			redirect(base_url('admin/PrivacyPolicy'));
		}
		}
		}
	 	$data['PrivacyPolicy']	= $this->db->get('privacy_policy')->row_array();
		$this->load->view('admin/PrivacyPolicy',$data);	
	 	}
	 	
	 	
	 	public function DeliveryShippingTerms()
	 	{
	 	if($this->input->post('submit'))	
		{
		$this->form_validation->set_rules('heading','Heading','required');
		$this->form_validation->set_rules('description','Description','required');
		
	
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');
		
			$data = array(
			'heading'=>$this->input->post('heading'),
			'description'=>$this->input->post('description'),
			'created_on'=>$date);

		
	  	$res=$this->AdminModel->DeliveryShippingTerms($data);
		if($res==1)
		{
		$this->session->set_flashdata('updated','Updated Sucessfully.');
			redirect(base_url('admin/PrivacyPolicy'));
		}
		}
		}
	 	$data['DeliveryShippingTerms']	= $this->db->get('delivery_shipping_terms')->row_array();
		$this->load->view('admin/DeliveryShippingTerms',$data);	
	 	}
	 	
	 	
	 	public function cancellation()
	 	{
	 	if($this->input->post('submit'))	
		{
		$this->form_validation->set_rules('heading','Heading','required');
		$this->form_validation->set_rules('description','Description','required');
		
	
		if($this->form_validation->run()==false)
		{}
		else 
		{
		date_default_timezone_set("Asia/Kolkata");
		$date =  Date('Y-m-d h:i:s');
		
			$data = array(
			'heading'=>$this->input->post('heading'),
			'description'=>$this->input->post('description'),
			'created_on'=>$date);

		
	  	$res=$this->AdminModel->cancellation($data);
		if($res==1)
		{
		$this->session->set_flashdata('updated','Updated Sucessfully.');
			redirect(base_url('admin/cancellation'));
		}
		}
		}
	 	$data['cancellation']	= $this->db->get('cancellation')->row_array();
		$this->load->view('admin/cancellation',$data);	
	 	}
	 	
	 	
	 	



        






  		//For Admin  Logout 
  		public function logout()
		{
		$this->session->unset_userdata('admin_login');	
		$this->session->sess_destroy();
		redirect(base_url('admin'));  
		}
}
?>