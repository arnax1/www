<?php
class Akcijos_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_akcijas($shop)
		{	
			$sql = "SELECT shop_id FROM parduotuves WHERE shop_url = ?"; 
			$query = $this->db->query($sql, array($shop));
			$shop_id = $query->row_array();
			
			$query->free_result();
			
			$query = $this->db->get_where('prekes', array('prekes_parduotuve' => $shop_id['shop_id']));

			return $query->result_array();
		}
		
		
		public function get_shops()
		{
			$sql = "SELECT shop_name, shop_url FROM parduotuves";
			$query = $this->db->query($sql);
			
			return $query->result_array();
		}
}