<?php if(!defined('BASEPATH')) exit('No direct access script allowed');

class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url','file'));
        $this->load->library('form_validation');
        $this->load->library('session');
        //to protect the controller to be accessed only by registered users
        if(!$this->session->userdata('logged_in')){
            redirect('login','refresh');
        }
    }
    public function index()
    {
        $data['content'] = 'dashboard';
        $this->load->view('admin/base_view',$data);
    }
}