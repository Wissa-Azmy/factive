<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct() {
    }
    public function index(){
        $this->data['chart_index_page'] =  'asasdasdasdd';
        $this->data['page'] = "/admin/index";
        $this->load->view("/admin/layout", $this->data);
    }
    
    
    
    
    
    
    
    
}