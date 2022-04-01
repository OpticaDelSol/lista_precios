<?php
class Dashboard  extends CI_Controller{
    function index()
    {
        $data['view']='dashboard/layout';
        $this->load->view('layouts/main',$data);
    }
} 