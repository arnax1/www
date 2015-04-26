<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

		public function __construct()
        {
            parent::__construct();
            $this->load->model('akcijos_model');
        }

        public function view($shop=NULL)
        {
			if ($shop == NULL)
			{
				$shop = 'maxima';
			}
			$data['shops'] = $this->akcijos_model->get_shops();
			
			$data['akcijos'] = $this->akcijos_model->get_akcijas($shop);
			$data['shop_id'] = $shop;
		
			$this->load->view('templates/header', $data);
			$this->load->view('pages/index', $data);
			$this->load->view('templates/side_menu');
			$this->load->view('templates/footer');
        }
		
		 
}