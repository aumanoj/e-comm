<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HomeController  extends CI_Controller 
{ 
  Public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form','url'));
    $this->load->library('table','form_validation','cart','pagination');
    $this->load->Model('HomeModel');

  }
  //Front  page
  public function index()
  {
     $this->load->view('front/index');
  }

  //Front  about
  public function about()
  {
   $data['about']  = $this->db->get('about')->row_array();
    $this->load->view('front/about',$data);
  }


  public function testing()
  {
     $this->load->view('front/eyeglassGender');
  }


  //product details basis of product id
  public function single_page($pid)
  {
      $data['products'] = $this->db->get_where('products',array('product_url'=>$pid))->row_array();
     $this->load->view('front/single_page_product',$data);
  }


  //gender start
   public function eyeglassGender($gender)
   {
      $data['gid'] = $this->db->get_where('use_for',array('url'=>$gender))->row()->id;
      $this->load->view('front/eyeglassGender',$data);
   }

   public function sunglassGender($gender)
   {
      $data['gid'] = $this->db->get_where('use_for',array('url'=>$gender))->row()->id;
      $this->load->view('front/sunglassGender',$data);
   }
    //gender end

    //brand start
    public function eyeglassBrand($url)
    {
      $data['id'] = $this->db->get_where('product_brands',array('url'=>$url))->row()->products_brand_id;
      $this->load->view('front/eyeglassBrand',$data);
    }

   public function sunglassBrand($url)
    {
      $data['id'] = $this->db->get_where('product_brands',array('url'=>$url))->row()->products_brand_id;
      $this->load->view('front/sunglassBrand',$data);
   }

   //shape start
    public function eyeglassShape($url)
    {
      $data['id'] = $this->db->get_where('shape',array('url'=>$url))->row()->id;
      $this->load->view('front/eyeglassShape',$data);
    }

    public function sunglassShape($url)
    {
      $data['id'] = $this->db->get_where('shape',array('url'=>$url))->row()->id;
      $this->load->view('front/sunglassShape',$data);
    }




  //GENDER URL 
  public function eyeglass_products($catname)
  {
    if($catname=='Men' || $catname=='men' || $catname=='MEN')
    {
      $genderid = 1;
    }
    else if($catname=='Women' || $catname=='women' || $catname=='WOMEN')
    {
      $genderid = 2;
    }
    else if($catname=='Kids' || $catname=='kids' || $catname=='Kids')
    {
      $genderid = 4;
    }

      $data['gid'] = $genderid;
     $this->load->view('front/products_eye',$data);
  }
  //EYE GLASSS BRAND NAME
  public function eyeglass_brand($brandname)
  {
    $db_brand  = str_replace('-',' ',$brandname);
    $brand = $this->db->get_where('product_brands',array('brand_name'=>$db_brand))->row_array();
  
      $data['brandid'] = $brand['products_brand_id'];
     $this->load->view('front/product_brands_eye',$data);
  }

  //EYE GLASSS frame shape NAME
  public function eyeglass_frame_shape_product($frameshapeproduct)
  {
    $db_fsahpe  = str_replace('-',' ',$frameshapeproduct);
    $frameshape = $this->db->get_where('shape',array('name'=>$db_fsahpe))->row_array();
  
      $data['frameshapeid'] = $frameshape['id'];
     $this->load->view('front/product_frame_shape_eye',$data);
  }
  //EYE GLASSS frame style NAME
  public function eyeglassStyle($style)
  {
   $db_fstyle  = str_replace('-',' ',$style);
     $framestyle = $this->db->get_where('style',array('name'=>$db_fstyle))->row_array();
      
      $data['framestyleid'] = $framestyle['id'];
     $this->load->view('front/eyeglassstyle',$data);
  }


  //GENDER URL for sun glasses 
  public function sunglass_products($catname)
  {
    if($catname=='Men' || $catname=='men' || $catname=='MEN')
    {
      $genderid = 1;
    }
    else if($catname=='Women' || $catname=='women' || $catname=='WOMEN')
    {
      $genderid = 2;
    }
    else if($catname=='Kids' || $catname=='kids' || $catname=='Kids')
    {
      $genderid = 4;
    }

      $data['gid'] = $genderid;
     $this->load->view('front/products_sun',$data);
  }
  //sun GLASSS BRAND NAME
  public function sunglass_brand($brandname)
  {
    $db_brand  = str_replace('-',' ',$brandname);
    $brand = $this->db->get_where('product_brands',array('brand_name'=>$db_brand))->row_array();
  
      $data['brandid'] = $brand['products_brand_id'];
     $this->load->view('front/product_brands_sun',$data);
  }

  //sun GLASSS frame shape NAME
  public function sunglass_frame_shape_product($frameshapeproduct)
  {
    $db_fsahpe  = str_replace('-',' ',$frameshapeproduct);
    $frameshape = $this->db->get_where('shape',array('name'=>$db_fsahpe))->row_array();
  
      $data['frameshapeid'] = $frameshape['id'];
     $this->load->view('front/product_frame_shape_sun',$data);
  }
  //EYE GLASSS frame style NAME
  public function sunglass_frame_style_product($framestyleproduct)
  {
   $db_fstyle  = str_replace('-',' ',$framestyleproduct);
     $framestyle = $this->db->get_where('style',array('name'=>$db_fstyle))->row_array();
      
      $data['framestyleid'] = $framestyle['id'];
     $this->load->view('front/product_frame_style_sun',$data);
  }

  //more collections
  public function collections($colectiontype)
  {
     $db_collection  = str_replace('-',' ',$colectiontype);
     $collection = $this->db->get_where('product_categories',array('name'=>$db_collection))->row_array();
      
      $data['collectionsid'] = $collection['products_categories_id'];
     $this->load->view('front/more_collection',$data);
  }

  //eyeglasses 
  public function eyeglasses()
  {
    $this->load->view('front/eyeglasses');
  }
   //sunglasses 
  public function sunglasses()
  {
    $this->load->view('front/sunglasses');
  }






  //all reviews stsrt
  public function reviews()
  {
    $this->load->view('front/all_reviews');
  }
  //all reviews end




  //rating Start
    public function review()
    {
    $this->form_validation->set_rules('message','Message','required');
    $this->form_validation->set_rules('name','Name','required');
    $this->form_validation->set_rules('stars[]','Rating','required');
      if($this->form_validation->run()==false)
      {}
      else
      {
      date_default_timezone_set("Asia/Kolkata");
      $date =  Date('Y-m-d h:i:s');     
      $data = array(
      'comments'=>$this->input->post('message'),
      'product_id'=>$this->input->post('productid'),
      'name'=>$this->input->post('name'),
      'email'=>$this->input->post('email'),
      'rating'=>implode(",",$this->input->post('stars')),
      'rating_date'=>$date);

      $res=$this->HomeModel->review($data);
    if($res==1)
    {
    $this->session->set_flashdata('ratting','Thank You For Given  Rating');
    redirect(base_url()); 
    }
    }
    }
    //rating  End


  //Front  cart
  public function cart()
  {
     $this->load->view('front/cart');
  }


  //Front  compare
  public function compare()
  {
     $this->load->view('front/compare');
  }

  //Front  wishlist
  public function wishlist()
  {
     $this->load->view('front/wishlist');
  }

  //Front  my-account
  public function my_account()
  {
     $this->load->view('front/my-account');
  }

  public function my_account_update()
  {

    $this->form_validation->set_rules('mobile','Mobile','required');
    $this->form_validation->set_rules('email','Email','required');
    if($this->form_validation->run()==false)
    {
       // echo "validation Error";
    }
    else
    {
     date_default_timezone_set("Asia/Kolkata");
      $date =  Date('Y-m-d h:i:s');
      
      $user_reg = array(
      'name'=>$this->input->post('name'),
      'address'=>$this->input->post('address'),
      'email'=>$this->input->post('email'),
      'updated_on'=>$date,
      'mobile'=>$this->input->post('mobile'),
      'alter_mobile'=>$this->input->post('alter_mobile'));
      $res=$this->HomeModel->my_account_update($user_reg);
        if($res==1)
        {
        $this->session->set_flashdata('success','Updated');
        redirect(base_url('my-account'));
        }
     }
   }

  //Front  checkout
  public function checkout()
  {
    if($this->input->post('submit'))
    {
   
    $this->form_validation->set_rules('billing_mobile','Mobile','required');

    if($this->form_validation->run()==false)
    {
    }
    else
    {
    //cart empty
    if($this->input->post('total_amount'))
    {
     date_default_timezone_set("Asia/Kolkata");
      $date =  Date('Y-m-d h:i:s');
      
      $pid = implode(",",$this->input->post('products_id'));
      $pqty = implode(",",$this->input->post('products_qty'));
      $pprice = implode(",",$this->input->post('products_price'));
      $pcc = implode(",",$this->input->post('coupon_code'));

      $lensid = implode(",",$this->input->post('lensid'));
      $lensprice = implode(",",$this->input->post('lensprice'));



      $config['upload_path'] = "./uploads/prescription/";
      $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';  
      $config['max_size'] = '';
      $config['remove_spaces'] = TRUE;        
      $config['encrypt_name'] = TRUE;  
      $this->load->library('upload', $config);
      $this->upload->do_upload('prescription');

      
      $data = array(
      'name'=>$this->input->post('billing_name'),
      'email'=>$this->input->post('billing_email'),
      'mobile'=>$this->input->post('billing_mobile'),
      'company_name'=>$this->input->post('billing_company_name'),
      'gstin_no'=>$this->input->post('billing_company_gst'),
      'address1'=>$this->input->post('billing_address_line1'),
      'address2'=>$this->input->post('billing_address_line2'),
      'country'=>$this->input->post('billing_country'),
      'state'=>$this->input->post('billing_state'),
      'city'=>$this->input->post('billing_city'),
      'pincode'=>$this->input->post('billing_pincode'),
      'product_id'=>$pid,
      'lensid'=>$lensid,
      'lensprice'=>$lensprice,
      'coupon_code'=>$pcc,
      'product_qty'=>$pqty,
      'product_qty'=>$pqty,
      'product_price'=>$pprice,
      'payment_method'=>$this->input->post('payment_method'),
      'total_amount'=>$this->input->post('total_amount'),
      'user_id'=>$this->session->userdata('user_login'),
      'prescription'=>$this->upload->data('file_name'),
      'created_at'=>$date);

      //print_r($data);
      $res=$this->HomeModel->billing_addrtess($data);
      if($res==0)
      {
        $this->session->set_flashdata('emailalready','Already Exit Email So  You Can Login Now');
      }

      else if($res==1)
      {
        $this->session->set_flashdata('mobilealready','Already Exit Mobile So  You Can Login Now');
      }

      else if($res==3)
      {
        $this->session->set_flashdata('othemobile','Already Exit Mobile So  You Can Use Other Mobile Number');
      }

      else if($res==4)
      {
        $this->session->set_flashdata('otheremail','Already Email Mobile So   You Can Use Other Email');
      }

      else if($res==2)
      {

      if($this->input->post('payment_method')=="online_payment")
      {
        $em = $this->input->post('billing_email');
        $mob = $this->input->post('billing_mobile');
        $nm = $this->input->post('billing_name');
        $tm = $this->input->post('total_amount');
        $this->session->set_flashdata('email',$em);
        $this->session->set_flashdata('mobile',$mob);
        $this->session->set_flashdata('name',$nm);
        $this->session->set_flashdata('amount',$tm);
        $this->session->set_flashdata('productid',$pid);
        redirect(base_url('online-payment')); 
      }
      else
      {

        //account Created Or Not
      if($this->input->post('create_account'))
      {
      $accountdata = array(
      'name'=>$this->input->post('billing_name'),
      'address'=>$this->input->post('billing_address_line1'),
      'email'=>$this->input->post('billing_email'),
      'password'=>$this->input->post('billing_mobile'),
      'created_on'=>$date,
      'mobile'=>$this->input->post('billing_mobile'));
       $this->HomeModel->create_account($accountdata);
      } 
      //shiping address
      if($this->input->post('shiping_address'))
      {
      $shipdata = array(
      'name'=>$this->input->post('shipping_name'),
      'email'=>$this->input->post('shipping_email'),
      'mobile'=>$this->input->post('shipping_mobile'),
      'company_name'=>$this->input->post('shipping_company_name'),
      'gstin_no'=>$this->input->post('shipping_company_gst'),
      'address1'=>$this->input->post('shipping_address_line1'),
      'address2'=>$this->input->post('shipping_address_line2'),
      'country'=>$this->input->post('shipping_country'),
      'state'=>$this->input->post('shipping_state'),
      'city'=>$this->input->post('shipping_city'),
      'pincode'=>$this->input->post('shipping_pincode'),
      'user_id'=>$this->session->userdata('user_login'),
      'created_at'=>$date);
      $this->HomeModel->shipping_address($shipdata);
      }
       //order id update
      $order_id =  Date('hisYmd');
      $oid = "AKC";
      $neworder_id = $oid."".$order_id;
      $orderiddata = array('order_id'=>$neworder_id,'txnid'=>'COD','payment_status'=>'COD');
      $shipiddata = array('order_id'=>$neworder_id);
      $orderemail = $this->input->post('billing_email');
      $ordermobile = $this->input->post('billing_mobile');
      $shipemail = $this->input->post('shipping_email');
      $shipmobile = $this->input->post('shipping_mobile');
      $this->HomeModel->cash_order($orderemail,$ordermobile,$orderiddata,$shipemail,$shipmobile,$shipiddata);
      //update stokke
      $stk =  $this->db->get_where('products',array('products_id'=>$pid))->row()->stokke;

      $cal =  $stk-$pqty;
    $this->db->where('products_id',$pid)->update('products',array('stokke'=>$cal));

        $this->session->set_flashdata('ordersuccess','Order Successfully');
        redirect(base_url('order/success'));
        }
      }
      }
      else
      {
        $this->session->set_flashdata('cartempty','Your Cart Is Empty');
        redirect(base_url('checkout'));
      }

     }
   }
     $this->load->view('front/checkout');
  }
  
  
public function orderSuccess()
{
    if($this->session->flashdata('ordersuccess')) { 
       $this->load->view('front/orderSuccess'); 
       } else {
      redirect(base_url());}
}

public function online_payment()
{
$MERCHANT_KEY = "TrLYFbLk";
$SALT = "TnOoIKdJnd";
// Merchant Key and Salt as provided by Payu.

//$PAYU_BASE_URL = "https://sandboxsecure.payu.in";   // For Sandbox Mode
$PAYU_BASE_URL = "https://secure.payu.in";      // For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) 
{
//print_r($_POST);
foreach($_POST as $key => $value) 
{    
$posted[$key] = $value; 

}
}
$posted['phone'] = $this->session->flashdata('mobile');
$posted['email'] = $this->session->flashdata('email');
$posted['firstname'] = $this->session->flashdata('name');
$posted['amount'] = $this->session->flashdata('amount');
$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
$posted['txnid'] = $txnid;
//$formError = 0;
$posted['key'] = $MERCHANT_KEY;
$posted['productinfo'] = $this->session->flashdata('productid');
$posted['surl'] =base_url().'payment-success';
$posted['furl'] =base_url().'payment-failure';


$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";

    $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';  
    foreach($hashVarsSeq as $hash_var) {
    $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
    $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
    $posted['hash'] = $hash;

    $this->load->view('front/payment/PayUMoney_form',['MERCHANT_KEY'=>$MERCHANT_KEY,'txnid'=>$txnid,'hash'=>$hash,'posted'=>$posted,'action'=>$action]);
  }


  public function payment_success()
  {

  $status=$_POST["status"];
  $firstname=$_POST["firstname"];
  $mobile=$_POST["phone"];
  $amount=$_POST["amount"];
  $txnid=$_POST["txnid"];
  $posted_hash=$_POST["hash"];
  $key=$_POST["key"];
  $productinfo=$_POST["productinfo"];
  $email=$_POST["email"];
  $salt="TnOoIKdJnd";

// Salt should be same Post Request 

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
     $hash = hash("sha512", $retHashSeq);
       if ($hash != $posted_hash) {
         echo "Invalid Transaction. Please try again";
       } else {

        $pay['paystatus'] = $status;
        $pay['paytnxid'] = $txnid;
        $pay['payamount'] = $amount;
        $this->load->view('front/payment/success',$pay);
       }
      date_default_timezone_set("Asia/Kolkata");
      $date =  Date('Y-m-d h:i:s');
      
       $data = array('email'=>$email,
        'name'=>$firstname,
        'payment_mobile'=>$mobile,
        'paid_amount'=>$amount,
        'txn_id'=>$txnid,
        'status'=>$status,
       'payment_date'=>$date);

//stoke Update
$stk =  $this->db->get_where('products',array('products_id'=>$productinfo))->row()->stokke;
$cal =  $stk-$pqty;
$this->db->where('products_id',$productinfo)->update('products',array('stokke'=>$cal));


      $order_id =  Date('hisYmd');
      $oid = "AKC";
      $neworder_id = $oid."".$order_id;

      $orderiddata = array('order_id'=>$neworder_id,'txnid'=>$txnid,'payment_status'=>$status);
      $this->HomeModel->pay_succes($data,$email,$mobile,$orderiddata);
  }

public function payment_failure()
{
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$amount=$_POST["amount"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="TnOoIKdJnd";

// Salt should be same Post Request 

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
     $hash = hash("sha512", $retHashSeq);
  
       if ($hash != $posted_hash) {
         echo "Invalid Transaction. Please try again";
       } else {
          $pay['paystatus'] = $status;
        $pay['paytnxid'] = $txnid;
        $pay['payamount'] = $amount;
        $this->load->view('front/payment/failure',$pay);
     } 

     date_default_timezone_set("Asia/Kolkata");
      $date =  Date('Y-m-d h:i:s');

     $data = array('email'=>$email,
        'name'=>$firstname,
        'payment_mobile'=>$mobile,
        'paid_amount'=>$amount,
        'txn_id'=>$txnid,
        'status'=>$status,
       'payment_date'=>$date);

      $order_id =  Date('hisYmd');
      $oid = "AKC";
      $neworder_id = $oid."".$order_id;

      $orderiddata = array('order_id'=>$neworder_id,'txnid'=>$txnid,'payment_status'=>$status);
       $this->HomeModel->pay_unsucces($data,$email,$mobile,$orderiddata);
  }
      



    public function contact()
    {
    if($this->input->post('submit'))  
    {
     $this->form_validation->set_rules('name','Name','required');
     $this->form_validation->set_rules('message','Message','required');
     $this->form_validation->set_rules('phone','Phone','required');
     $this->form_validation->set_rules('email','Email-Id','required');
     $this->form_validation->set_rules('subject','Subject','required');
    if($this->form_validation->run()==false)
    {}
    else 
    {
    date_default_timezone_set("Asia/Kolkata");
    $date =  Date('Y-m-d h:i:s');
    $data['name'] = $this->input->post('name');
    $data['message'] = $this->input->post('message');
    $data['email'] = $this->input->post('email');
    $data['subject'] = $this->input->post('subject');
    $data['mobile'] = $this->input->post('phone');
    $data['created_on'] = $date;
    $res=$this->HomeModel->enquiry($data);
    if($res==1)
    {
     $this->session->set_flashdata('sent','Query Sent Sucessfully');
    redirect(base_url('contact')); 
    }
    }
    } 
    $this->load->view('front/contact');
    }



  //Front product
  public function product()
  {
     $this->load->view('front/product');
  }

  //Front product_details
  public function product_details($id)
  {


    $data['id'] = $id;
     $this->load->view('front/product_details',$data);
  }
  //user login
  public function user_login()
  {
    if($this->input->post('submit'))
    {
    $this->form_validation->set_rules('email','Email/Mobile','required');
    $this->form_validation->set_rules('password','Password','required');
    if($this->form_validation->run()==false)
    {
    }
    else
    {
    $username=$this->input->post('email');
    $password=$this->input->post('password');
    $res = $this->HomeModel->userlogin($username,$password);
    if ($res==1) 
    {
    $ud = $this->db->get_where('user',array('email'=>$username))->row_array();
      $userid = $ud['id'];
      $this->session->set_userdata('user_login',$userid);
      $this->session->set_userdata('user_email',$username);
      $this->session->set_userdata('user_logged_in',TRUE);
      $this->session->set_flashdata('login','Welcome Back to Akku Ka Chasma');
      redirect(base_url(''));
    }
    else
    {
    $this->session->set_flashdata('msg','Invalid login Details');
        
    }
    }
      
    }
     $this->load->view('front/login');
  }


  public function user_logini()
  {
    
    $this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('password','Password','required');
    if($this->form_validation->run()==false)
    {
    }
    else
    {
    $username=$this->input->post('email');
    $password=$this->input->post('password');
    $res = $this->HomeModel->userlogin($username,$password);
    if($res)
    {
      $ud = $this->db->get_where('user',array('email'=>$username))->row_array();
      $userid = $ud['id'];
      $this->session->set_userdata('user_login',$userid);
      $this->session->set_userdata('user_email',$username);
      $this->session->set_userdata('user_logged_in',TRUE);
      $this->session->set_flashdata('login','Logid in');
      redirect(base_url('our-product'));
    }
    else
    {
    $this->session->set_flashdata('invalidlogin','Invalid login Details');
    redirect(base_url('home'));   
    }
    }
  }
  //user registration
   public function user_registration()
  {
     if($this->input->post('submit'))
    {
    $this->form_validation->set_rules('name','Name','required');
    $this->form_validation->set_rules('address','Address','required');
    $this->form_validation->set_rules('mobile','Mobile','required');
    //$this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('password','Password','required');
    
    if($this->form_validation->run()==false)
    {
       // echo "validation Error";
    }
    else
    {
     date_default_timezone_set("Asia/Kolkata");
      $date =  Date('Y-m-d h:i:s');
      $email = $this->input->post('email');
      $mobile = $this->input->post('mobile');
     
      $user_reg = array(
      'name'=>$this->input->post('name'),
      'address'=>$this->input->post('address'),
      'email'=>$this->input->post('email'),
      'password'=>$this->input->post('password'),
      'created_on'=>$date,
      'mobile'=>$this->input->post('mobile'));

        $res=$this->HomeModel->user_registration($user_reg);
        if($res==0)
        {
        $this->session->set_flashdata('already_email','This Email Already Registered'); 
        }
        else if($res==1)
        {
          $this->session->set_flashdata('already_mobile','This Mobile Already Registered'); 
        }
        else
        {
        $this->session->set_flashdata('regsuccess','Thank You for Registration');
        redirect(base_url('register'));  
        }
        }
        }   
    
     $this->load->view('front/register');
  }


  //User Account Active by Email
    public function verifyemail()
      {
                
                 $mobileget = $this->input->get('mobile');
                 $emailget = $this->input->get('email');


                $res = $this->HomeModel->verifyemail($mobileget,$emailget);

                if($res==1){

        $this->session->set_flashdata('account_activated', 'Congratulations!! You have successfully verified User for our website. So you can login now');
               redirect(base_url('my-account'));


                      }


                 else {
                       $this->session->set_flashdata('already_activated', 'Account Has been Already Activated.');
                redirect(base_url('my-account'));
                    }

           }
    //Verify Email End


  public function order_confirmation($pid)
  { 
    
    if($this->input->post('submit'))
    {
    $this->form_validation->set_rules('address','Address','required');
  

      if($this->form_validation->run()==false)
      {
        // echo  "jkjkjkj";
      }
      else
      {
        
      date_default_timezone_set("Asia/Kolkata");
      $date =  Date('Y-m-d h:i:s');
      $order_id =  Date('hisYmd');
      $oid = "RPT";
      $neworder_id = $oid."".$order_id;
      $order = array(
      'user_id'=>$this->session->userdata('user_login'),
      'delivery_address'=>$this->input->post('address'),
      'product_id'=>$pid,
      'order_id'=>$neworder_id,
      'created_on'=>$date);

      $res=$this->HomeModel->order_confirmation($order);
      if($res==1)
      {
      $this->session->set_flashdata('ordersuccess','Sucessfully');
      redirect(base_url('order-success'));  
      }
      }
      }
      $data['pid'] = $pid;
     $this->load->view('front/order_confirmation',$data);
  }




  public function placed_order()
  { 
  $this->load->view('front/order_placed');
  }

  //Add to cart
  function add_cart()
  {
    $p_id = $this->input->get('p_id');  
    $p_price = $this->input->get('p_price');
    $userip_addr = $_SERVER['REMOTE_ADDR'];

    $addedproduct = $this->db->get_where('cart',array('p_id'=>$p_id,'user_ip'=>$userip_addr))->row();
    if($addedproduct->p_id)
    {
      $oldpq = $addedproduct->qty;
      $newpq = 1;
      $updated_qty=$oldpq+$newpq;  
       $data = array('qty'=>$updated_qty);
      $this->db->where('p_id',$p_id)->where('user_ip',$userip_addr);
      $this->db->update('cart',$data);
      redirect('cart');
      
    }
    else
    {
       $data = array(
        'p_id'      => $p_id,
        'qty'     => 1,
        'price'   => $p_price,
        'user_ip'   => $userip_addr
        );
    $this->db->insert('cart',$data);
    $this->db->where('p_id',$p_id)->where('user_ip',$userip_addr);
    $this->db->delete("wishlist"); 
    redirect('cart');
    }
  }

    public function cart_itemremove(){
      $userip_addr = $_SERVER['REMOTE_ADDR'];
       $cartid = $this->input->get('cartid');
       $this->db->where('id',$cartid)->where('user_ip',$userip_addr);
      $this->db->delete("cart");
      redirect('cart');
       } 


    public function cart_upadte(){
    $userip_addr = $_SERVER['REMOTE_ADDR'];
    $cartid = $this->input->get('cartid');
    $cartqty = $this->input->get('cartqty');
    $q = $this->db->get_where('cart',array('id'=>$cartid,'user_ip'=>$userip_addr))->row_array();
    $qt =$q['qty'];
    $updated_qty=$qt+$cartqty;  


    $data2 = array(
        'qty' => $updated_qty,        
        );
    
    $this->db->where('id',$cartid)->where('user_ip',$userip_addr);;
    $this->db->update("cart",$data2);
      redirect('cart');
        }

    public function cart_upadte_remove(){
    $userip_addr = $_SERVER['REMOTE_ADDR'];
    $cartid = $this->input->get('cartid');
    $cartqty = $this->input->get('cartqty');
    $q = $this->db->get_where('cart',array('id'=>$cartid,'user_ip'=>$userip_addr))->row_array();
    $qt =$q['qty'];
    $updated_qty=$qt-$cartqty;  


    $data2 = array(
        'qty' => $updated_qty,        
        );
    
    $this->db->where('id',$cartid)->where('user_ip',$userip_addr);;
    $this->db->update("cart",$data2);
      redirect('cart');
        } 

    //product Compare
      public function add_compare()
      {
      $p_id = $this->input->get('p_id');  
       $p_price = $this->input->get('p_price');
      $userip_addr = $_SERVER['REMOTE_ADDR'];
      $data = array(
        'p_id'      => $p_id,
        'qty'     => 1,
        'price'   => $p_price,
        'user_ip'   => $userip_addr
        );
    $this->db->insert('compare',$data);  
      }

      public function compare_itemremove(){
      $userip_addr = $_SERVER['REMOTE_ADDR'];
       $compareid = $this->input->get('cartid');
       $this->db->where('id',$compareid)->where('user_ip',$userip_addr);
      $this->db->delete("compare");
      redirect('compare');
       } 


  //Add to wishlist
  function add_wishlist()
  {
    $p_id = $this->input->get('p_id');  
    $p_price = $this->input->get('p_price');
    $userip_addr = $_SERVER['REMOTE_ADDR'];
    $data = array(
        'p_id'      => $p_id,
        'qty'     => 1,
        'price'   => $p_price,
        'user_ip'   => $userip_addr
        );
    $this->db->insert('wishlist',$data);  
  }

      public function wishlist_itemremove(){
      $userip_addr = $_SERVER['REMOTE_ADDR'];
       $wishlistid = $this->input->get('wishlistid');
       $this->db->where('id',$wishlistid)->where('user_ip',$userip_addr);
      $this->db->delete("wishlist");
      redirect('wishlist');
       } 


    public function wishlist_upadte(){
    $userip_addr = $_SERVER['REMOTE_ADDR'];
    $wishlistid = $this->input->get('wishlistid');
    $wishlistqty = $this->input->get('wishlistqty');
    $q = $this->db->get_where('wishlist',array('id'=>$wishlistid,'user_ip'=>$userip_addr))->row_array();
    $qt =$q['qty'];
    $updated_qty=$qt+$wishlistqty;  


    $data2 = array(
        'qty' => $updated_qty,        
        );
    
    $this->db->where('id',$wishlistid)->where('user_ip',$userip_addr);;
    $this->db->update("wishlist",$data2);
      redirect('wishlist');
        }

    public function wishlist_upadte_remove(){
    $userip_addr = $_SERVER['REMOTE_ADDR'];
    $wishlistid = $this->input->get('wishlistid');
    $wishlistqty = $this->input->get('wishlistqty');
    $q = $this->db->get_where('wishlist',array('id'=>$wishlistid,'user_ip'=>$userip_addr))->row_array();
    $qt =$q['qty'];
    $updated_qty=$qt-$wishlistqty;  


    $data2 = array(
        'qty' => $updated_qty,        
        );
    
    $this->db->where('id',$wishlistid)->where('user_ip',$userip_addr);;
    $this->db->update("wishlist",$data2);
      redirect('wishlist');
        }


        //Add to cart inlenses
  function add_cart_of_lense()
  {
    $p_id = $this->input->get('p_id');
    $l_id = $this->input->get('l_id');  
    $p_price = $this->input->get('p_price');
    $l_price = $this->input->get('l_price');
    $userip_addr = $_SERVER['REMOTE_ADDR'];

       $data = array(
        'p_id'      => $l_id,
        'qty'     => 1,
        'price'   => $p_price,
        'l_id'   => $p_id,
        'l_price'   => $l_price,
        'user_ip'   => $userip_addr
        );
    $this->db->insert('cart',$data);
    redirect('cart');
    $this->db->where('p_id',$p_id)->where('user_ip',$userip_addr);
    $this->db->delete("wishlist"); 
    redirect('cart');
  }

      

      //Ajex using show state select on country
      public function show_billing_country()
      {
      $billing_countryid = $this->input->post('billing_country_id');
      $data=$this->db->get_where("state",array("country_id"=>$billing_countryid));
      $res = $data->result();
      //print_r($res);
      ?>
      <option  value="">Select State</option>
      <?php
      foreach($res as $row)
      {?>
          <option value="<?php echo $row->state_id;?>"> <?php echo $row->name; ?></option>      
      <?php
      }
      }

       public function show_shipping_country()
      {
      $shipping_countryid = $this->input->post('shipping_country_id');
      $data=$this->db->get_where("state",array("country_id"=>$shipping_countryid));
      $res = $data->result();
      //print_r($res);
      ?>
      <option  value="">Select State</option>
      <?php
      foreach($res as $row)
      {?>
          <option value="<?php echo $row->state_id;?>"> <?php echo $row->name; ?></option>      
      <?php
      }
      }

      //size guide
      public function size_guide()
      {
        $data['size_guide'] = $this->db->get('size_guide')->row_array();
        $this->load->view('front/size_guide',$data);
      }

      public function select_power_type($pid)
      {
        if($pid==TRUE)
        {
        $data['id'] = $pid;
        $this->load->view('front/select_power_type',$data);
        }
        else
        {
          redirect(base_url());
        }

      }

      public function select_your_lenses()
      {
        if($this->input->post('radio')==TRUE)
        {
      $data['selectedpowertype']= $this->input->post('radio');
      $data['selectedpoewrtypeproductid'] = $this->input->post('select_powertype_product');
        $this->load->view('front/select_your_lenses',$data);
      }
      else
      {
         redirect(base_url());
      }
      }


      // public function filter()
      // {
      // $selecfiltertype = $this->input->post('selecfiltertype');
      // if($selecfiltertype=="lowtohigh") 
      // {
      //   $this->load->view('front/shop_lowtohigh');
      // }   
      // }


      function filter()
    {
    $selecfilte = $this->input->get('selecfiltertype');
   if($selecfilte=="lowtohigh") 
    {
     //redirect(base_url());
        //$this->load->view('front/shop_lowtohigh');
    }  
    elseif ($selecfilte=="hightolow") {
     //$this->load->view('front/shop_lowtohigh');
    }
  
    }

    public function shop_hightolow()
    {
      $this->load->view('front/shop_hightolow');
    }

     public function shop_lowtohigh()
    {
      $this->load->view('front/shop_lowtohigh');
    }



  public function search()
  {
    $searchdata = $this->input->post('search');
    if ($searchdata) {
    $data['results'] = $this->HomeModel->search($searchdata);
    $this->load->view('front/search',$data);
    }
    else
    {
      redirect(base_url(''));
    }

  }


  public function tryhome()
    {
    if($this->input->post('submit'))  
    {
     $this->form_validation->set_rules('name','Name','required');
     $this->form_validation->set_rules('message','Message','required');
     $this->form_validation->set_rules('phone','Phone','required');
     $this->form_validation->set_rules('subject','Subject','required');
    if($this->form_validation->run()==false)
    {}
    else 
    {
    date_default_timezone_set("Asia/Kolkata");
    $date =  Date('Y-m-d h:i:s');
    $data['name'] = $this->input->post('name');
    $data['message'] = $this->input->post('message');
    $data['subject'] = $this->input->post('subject');
    $data['mobile'] = $this->input->post('phone');
    $data['created_on'] = $date;
    $res=$this->HomeModel->tryhome($data);
    if($res==1)
    {
     $this->session->set_flashdata('sent','Query Sent Sucessfully');
    redirect(base_url('tryhome')); 
    }
    }
    } 
    $this->load->view('front/tryhome');
    }

    public function other_products()
    {
      $this->load->view('front/other_products'); 
    }

    public function franchise_enquiry()
    {$this->load->view('front/franchise_enquiry');}

    public function easy_return()
    {
    //   $this->load->view('include/header');
        $this->load->view('front/easy_return'); 
       $this->load->view('include/footer');  

    }
    
    public function blogs()
    {
    //  $this->load->view('include/header');
     $data['blogs'] = $this->AdminModel->getBlogs();
      $this->load->view('front/blogs',$data); 
       
    }

    public function directurl($id)
    {
      $data['blogDetails'] = $this->HomeModel->getBlog($id);
      if($data['blogDetails'])
      {
     // $this->load->view('include/header');
      $this->load->view('front/blogDetails',$data);  
      }
      else if($id=='refund-policy')
      {
        $data['RefundPolicy'] = $this->db->get('refund_policy')->row_array();
        $this->load->view('front/refund_policy',$data); 
        $this->load->view('include/footer');    
      }
      else if($id=='terms-of-uses')
      {
       	$data['TermsOfUse']	= $this->db->get('terms_of_uses')->row_array();
        $this->load->view('front/TermsOfUse',$data); 
        $this->load->view('include/footer');    
      }
       else if($id=='privacy-policy')
      {
       		$data['PrivacyPolicy']	= $this->db->get('privacy_policy')->row_array();
        $this->load->view('front/PrivacyPolicy',$data); 
        $this->load->view('include/footer');    
      }
      
      else if($id=='delivery-and-shipping-terms')
      {
       		$data['DeliveryShippingTerms']	= $this->db->get('delivery_shipping_terms')->row_array();
        $this->load->view('front/DeliveryShippingTerms',$data); 
        $this->load->view('include/footer');    
      }
      
      else if($id=='cancellation')
      {
       		$data['cancellation']	= $this->db->get('cancellation')->row_array();
        $this->load->view('front/cancellation',$data); 
        $this->load->view('include/footer');    
      }
      
       else if($id=='admin')
      {
        $this->load->view('admin/login'); 
      }
      
       else
      {
        $this->load->view('front/error'); 
      }
      
      
      
     
      
    }

    public function discount_coupon($pid)
    {
$cc = $this->db->get_where('products',array('products_id'=>$pid))->row();
    if($cc->coupon_code==$this->input->post('coupon_code'))
    {
      $disp = $cc->discounted_price-$cc->coupon_amount;
       $userip_addr = $_SERVER['REMOTE_ADDR'];

      $data = array('coupon_code'=>$this->input->post('coupon_code'),'price'=>$disp);
      $this->db->where('p_id',$pid)->where('user_ip',$userip_addr)->update('cart',$data);
       $this->session->set_flashdata('validcoupon','Applied Discounted Coupon Code So You Can Checkout');
       redirect(base_url('cart'));  
    
    }
    else
    {
      $this->session->set_flashdata('invalidcoupon','Invalid Coupon Code');
     redirect(base_url('cart'));  
    }
  }
  
            public function featured_glasses()
            {
            $this->load->view('include/header');
            $this->load->view('front/all_featured_glasses.php');
            $this->load->view('include/footer'); 
            }

            public function  new_arrivles()
            {
            $this->load->view('include/header');
            $this->load->view('front/new_arrivles.php');
            $this->load->view('include/footer');     
            }

    //User Logout
    public function userlogout()
    {
    $this->session->unset_userdata('user_login'); 
    $this->session->sess_destroy();
    redirect(base_url());  
    }
  
    
}
?>