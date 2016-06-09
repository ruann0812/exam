<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shortening extends CI_Controller {

    public function index() 
    {
        $data=array(); 
        if($this->input->post('url'))
        {
            $this->load->model('short_url_model');
            $short_url=$this->short_url_model->store_long_url();
            if($short_url)
            {
                $data['short_url']=$short_url;
            }
            else 
            {
                $data['error']=validation_errors();
            }
        }

        $this->load->view('get_url', $data);

    }


    public function error_404() 
    {
        $data['error']='Ooops cannot find that URL!';
        $this->load->view('get_url', $data);
    }
}
