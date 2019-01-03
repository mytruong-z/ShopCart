<?php
defined('BASEPATH') OR exit ('NO direct script access allowed');

class Products extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('product');
    }
    function index()
    {
        $data = array();
        $data['products'] = $this->product->getRows();
        $this->load->view('products/index',$data);
    }
    function addToCart($proID)
    {
        $product = $this->product->getRows($proID);
        $data = array(
            'id' => $product['id'],
            'qty' =>1,
            'price'=>$product['price'],
            'name'=>$product['name'],
            'image'=>$product['image']
        );
        $this->cart->insert($data);
        redirect('cart/');
    }
}