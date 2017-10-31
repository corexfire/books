<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_books extends CI_Model {
    public function __construct() {
		parent::__construct();
    }
    
    function get_all_book(){
		$this->load->database('default',TRUE);
		$this->db->select('bk_book.*, bk_type.description');
        $this->db->from("bk_book");
        $this->db->join("bk_type","bk_type.id=bk_book.id_type","LEFT" );
		$data = $this->db->get();
		return $data->result();
		}
		
		function get_all_type(){
			$this->load->database('default',TRUE);
			$this->db->select('*');
					$this->db->from("bk_type");
			$data = $this->db->get();
			return $data->result();
		}
    
    function insert_all($data) {
		$this->load->database('default',TRUE);
		if(!$this->db->insert("bk_book",$data))
			return FALSE;
		$data["id"] = $this->db->insert_id();
		return (object)$data;
	}

    function update($data,$where){
		$this->load->database('default',TRUE);
		$this->db->where("id",$where);
		return $this->db->update("bk_book",$data); 
    }
    
    function delete($column,$where){
		$this->load->database('default',TRUE);
		$this->db->where($column,$where);
		return $this->db->delete("bk_book");
	}

	function select_where($where){
		$this->load->database('default',TRUE);
		$this->db->select('*');
		$this->db->from("bk_book");
		$this->db->where("id",$where);
		$data = $this->db->get();
		return $data;
	}

}