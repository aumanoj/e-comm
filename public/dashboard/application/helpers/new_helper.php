<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('artist_profile_image_call'))
{
    function artist_profile_image_call()
    {
    	    $ci =& get_instance();
           if(! $ci->session->userdata('userid') ){
           return redirect('login');}
           
           $reguserid = $ci->session->userdata('userid');
           return $res['data100'] = $ci->Commonmodel->usreg_profimg_get($reguserid);

           //$imgvalue = $res['data100']['image'];
           //print_r($res['data100']);
     }




}




?>