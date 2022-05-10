<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



if (! function_exists('edituploadmedia'))
{
    function edituploadmedia()
    {
          $ci =& get_instance();
           if(! $ci->session->userdata('artistid') ){
           return redirect('login');}
           $reguserid = $ci->session->userdata('artistid');
            $res = $ci->Commonmodel->user_reginfo_get($reguserid);
            
     $regid = $res['regusr_id'];
      $regusrcattype = $res['user_category'];
           
             if($ci->input->post('profimg_update')){

           $config['upload_path'] = 'assets/profile/artist_anchor/';
           $config['allowed_types'] = 'gif|jpg|jpeg|png';  
           $config['max_size'] = '200';
           $config['remove_spaces'] = TRUE;        
           $config['encrypt_name'] = TRUE;   
           $ci->load->library('upload', $config);
         
          if(!($ci->upload->do_upload('img')))
            {  
            $ci->form_validation->set_rules('img', 'Filetype Allow only jpg ,gif ,png and max size 200KB ', 'required');
            if($ci->form_validation->run()==false)
              {}
            }

            else {

               $ci->Commonmodel->usreg_update_profile2image($regid);
               $ci->session->set_flashdata('update_profile_image', 'Thank You, Profile Image has been Updated Succssfully!');
               return redirect('/Artist/uploadmedia');

               }



           }

     }


     

}


if ( ! function_exists('showcasemsgdiv'))
{
    function showcasemsgdiv()
    {
         
        $ci =& get_instance();
        if(! $ci->session->userdata('artistid') ){
           return redirect('login');}
        $reguserid = $ci->session->userdata('artistid');

        echo $showcasemsg = '<div class="custom_message_helper">You Have Across the Total Image Upload Limit.</div>';

    } 

 }


 if ( ! function_exists('audio_uploadmsgdiv'))
{
    function audio_uploadmsgdiv()
    {
         
        $ci =& get_instance();
        if(! $ci->session->userdata('artistid') ){
           return redirect('login');}
        $reguserid = $ci->session->userdata('artistid');

        echo $audio_uploadmsgdiv = '<div class="custom_message_helper">You have Across the Total Audio Upload Limit.</div>';

    } 

 }   



?>