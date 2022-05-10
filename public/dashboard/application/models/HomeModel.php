<?php
class HomeModel extends CI_Model 
{

  public function user_registration($user_reg)
  {
    $username=$user_reg['email'];
   $usermobile=$user_reg['mobile'];
   
   $sql=$this->db->get_where('user',array('email'=>$username));
   $chk = $sql->num_rows();
    $sql2=$this->db->get_where('user',array('mobile'=>$usermobile));
    $chk2 = $sql2->num_rows();
  if($chk>0)
  {
    return 0;
  }
  elseif (($chk2>0)) 
  {
    return 1;
  }
  else
  {
  $this->db->insert('user',$user_reg);
    return 2;
  }
  }


  public function get_product_list($limit, $start){
        $query = $this->db->get('products', $limit, $start);
        return $query;
    }

  public function userlogin($username,$password)
  {
   
    $wherecond = "(((email ='".$username."' OR mobile='".$username."') AND (password='".$password."')))";

       $this->db->where($wherecond);
  
      $res = $this->db->get('user');
     if($res->num_rows() == 1)
     {
      return 1;
     }
      else
      {
        return 2;
      }
  }


// function search($searchdata)
//  {
//   if($searchdata != '')
//   {
//   return $this->db->select("*")->from("products")->like('product_model_name',$searchdata)->or_like('product_model_number', $searchdata)->or_like('product_description', $searchdata)->or_like('product_price', $searchdata)->order_by('products_id', 'DESC')->where('status',1)->get()->result();
//   }
//  }

  public function search($searchdata)
 {
  $this->db->select("*");
  $this->db->from("products");
  if($searchdata != '')
  {
   $this->db->like('product_model_name', $searchdata);
   $this->db->or_like('product_model_number', $searchdata);
   $this->db->or_like('product_description', $searchdata);
   $this->db->or_like('discounted_price', $searchdata);
   $this->db->or_like('use_for', $searchdata);
   $this->db->or_like('frame_width', $searchdata);
   $this->db->or_like('temple_length', $searchdata);
   $this->db->or_like('lens_height', $searchdata);
  }
  $this->db->group_by('product_url');
  $this->db->order_by('products_id', 'DESC');
  $this->db->where('status',1);
  //$this->db->join('product_categories',' products.products_categories_id = product_categories.products_categories_id','left');
  return $this->db->get()->result();
  //print_r($var); die();
 }


  public function enquiry($data)
  {
    $query = $this->db->insert('enquiry',$data);
    if($query)
    {
      return 1;
    }
    else
    {
      return 0;
    }
  }


  public function order_confirmation($order)
  {
    $query = $this->db->insert('placed_order',$order);
    if($query)
    {
      return 1;
    }
    else
    {
      return 0;
    }
  }


   public function subscribe_email($data)
  {
    $query = $this->db->insert('subscribe_email',$data);
    if($query)
    {
      return 1;
    }
    else
    {
      return 0;
    }
  }



  //User Account Activated By Email Start
   public function verifyemail($mobile,$emailget)
    {
    $this->db->select("id, email,mobile, status");
        $this->db->from('user');        
        $this->db->where('email',$emailget);
        $this->db->where('mobile',$mobile);
        $this->db->where('status',0);
        $query  = $this->db->get();
        if($query->num_rows()>0)
        {
         $ret['data'] = $query->row_array();
          $emailvalue =  $ret['data']['email'];
          $mobilevalue =  $ret['data']['mobile'];
          $statusvalue =  $ret['data']['status'];
          
         
             if($statusvalue==0)
             {
                 $datasend = array('status'=>1);
                 $this->db->where('email',$emailvalue);
                 $this->db->where('mobile',$mobilevalue);
                $datasendqry =$this->db->update("user",$datasend); 
             }

             return 1;  
          }

         else {

          return 2;
         }              

      }
      //User Account Activated By Email End

 

  //User Edit Update password Start
  public function update_password($userid,$passdata)
  {
    $this->db->where('userid',$userid);
    $query = $this->db->update('userregistration',$passdata);
    if ($query) 
    {
      return 1;
    }
    else
    {
      return 0;
    }
  }
  //User Can Update password End


  //User Forgot Update password Start
  public function forget_password($regmobile,$passdata)
  {
    $this->db->where('usermobile',$regmobile);
    $query = $this->db->update('userregistration',$passdata);
    if ($query) 
    {
      return 1;
    }
    else
    {
      return 0;
    }
  }
  //User Can Forgot password End

  public function my_account_update($user_reg)
  {
    $this->db->where('id',$this->session->userdata('user_login'));
    $query = $this->db->update('user',$user_reg);
    if ($query) 
    {
      return 1;
    }
    else
    {
      return 0;
    }
  }

  //review Insert Start
  public function review($data)
  {
    $query = $this->db->insert('rating',$data);
    if($query)
    {
      return 1;
    }
    else
    {
      return 0;
    }
  }
  //review  Insert End


  //billing address Insert Start
  public function billing_addrtess($data)
  {

  $username=$data['email'];
$usermobile=$data['mobile'];
//user table
// if($username)
// {
//   $sql=$this->db->get_where('user',array('email'=>$username));
//    $chk = $sql->num_rows();
//   $sql3=$this->db->get_where('billing_address',array('email'=>$username));
//   $chk3 = $sql3->num_rows();
// }
// else if($usermobile)
// {
// $sql2=$this->db->get_where('user',array('mobile'=>$usermobile));
// $chk2 = $sql2->num_rows();
// $sql4=$this->db->get_where('billing_address',array('mobile'=>$usermobile));
// $chk4 = $sql4->num_rows();
// }



//billing address or place order table

// if($username)
// {


//   if($chk=1)
//   {
//     return 0;
//   }
//   elseif (($chk3=1)) 
//   {
//     return 3;
//   }
// }

  // if (($chk2>0)) 
  // {
  //   return 1;
  // }
  // elseif (($chk4>0)) 
  // {
  //   return 4;
  // }


  //else
  //{
  $this->db->insert('billing_address',$data);
  $userip_addr = $_SERVER['REMOTE_ADDR'];
  $this->db->where('user_ip',$userip_addr);
  $this->db->delete("cart");
  return 2;
  //}
  }
  //review  Insert End
  //cod order id update
  public function cash_order($orderemail,$ordermobile,$orderiddata,$shipemail,$shipmobile,$shipiddata)
  {
  $this->db->where('email',$orderemail)->where('mobile',$ordermobile);
  $this->db->update('billing_address',$orderiddata);
  if($shipemail && $shipmobile)
  {
  $this->db->where('email',$shipemail)->where('mobile',$shipmobile);
  $this->db->update('shiping_address',$shipiddata); 
  }
  }

  public function create_account($accountdata)
  {
    $query = $this->db->insert('user',$accountdata);
  }

   public function shipping_address($shipdata)
  {
    $query = $this->db->insert('shiping_address',$shipdata);
  }


  public function pay_succes($data,$email,$mobile,$orderiddata)
  {
    $query = $this->db->insert('payments',$data);
    $this->db->where('email',$email)->where('mobile',$mobile);
    $this->db->update('billing_address',$orderiddata);
    //after order cart clear
    if($userip_addr = $_SERVER['REMOTE_ADDR'])
    {
    $this->db->where('user_ip',$userip_addr);
    $this->db->delete("cart"); 
    }
    if($query)
    {
      return 1;
    }
    else
    {
      return 0;
    }
  }

  public function pay_unsucces($data,$email,$mobile,$orderiddata)
  {
    $query = $this->db->insert('payments',$data);
    $this->db->where('email',$email)->where('mobile',$mobile);
    $this->db->update('billing_address',$orderiddata);
    if($query)
    {
      return 1;
    }
    else
    {
      return 0;
    }
  }

  public function tryhome($data)
  {
    $query = $this->db->insert('tryhome',$data);
    if($query)
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
    return $this->db->get_where('blogs',array('url'=>$id))->row();
  }

  

}
?>
