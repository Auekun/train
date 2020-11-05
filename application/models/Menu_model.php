<?php defined('BASEPATH') or exit('No direct script access allowed');
class Menu_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model', 'Menu');
    }
    
    function station($data){
        $this->db->insert('train',$data);
    }

    function Allbus(){
			$this->db->select('*');
			$result = $this->db->get('train');
			return $result;
		}
    

}
?>