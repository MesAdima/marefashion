<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends MY_Controller {

	public function index()
    {
        $this->load->helper('form');
		$this->load->library('cart');
        $this->load->view('v_cart'); 
    }
	
	public function update(){
		$data = array(
			'row_id' => 'f0405bb2ad392b066c464c3a13e1854a',
			'qty' => '5',
		);
		$this->cart->update($data);
		echo "update() called";
	} 
	
	public function add_products(){
		$this->load->model('product_model');
		$product = $this->product_model->get($this->input->post('prod_id'));
		
		$insert = array(
			'id' => $this->input->post('prod_id')
			
		);
		
		$this->cart->insert($insert);
		
		
		
		
		
		$this->load->library('cart');
		$data = array(
					array(
                       'id'      => '1',
                       'qty'     => 1,
                       'price'   => 39.95,
                       'name'    => 'T-Shirt',
                       'options' => array('Size' => 'Large', 'Color' => 'Red')
                    )
               );
		$this->cart->insert($data);
		echo "add() called";
	}
	
	public function show_cart(){
		$cart = $this->cart->contents();
		echo "<pre>";print_r($cart);
		
	}
	
	public function total(){
		echo $this->cart->total();
	}
	
	public function remove(){
		$data = array(
			'row_id' => 'f0405bb2ad392b066c464c3a13e1854a',
			'qty' => '0',
		);
		$this->cart->update($data);
		echo "remove() called";
	}
	
	public function destroy(){
		$this->cart->destroy();
		echo "destroy() called";
		
	}
}