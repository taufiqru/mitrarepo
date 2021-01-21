<?php
class ModelMitra extends CI_Model{

	function insertDataMitra($data){
		$res = $this->db->insert('mitra',$data);

		if($res){
			return $insert_id = $this->db->insert_id();	
		}else{
			return $res;
		}
	}

	function insertAlamatKantor($data){
		return $this->db->insert('kantor',$data);
	}

	function insertDataDirektur($data){
		return $this->db->insert('direktur',$data);
	}

	function insertDataNarahubung($data){
		return $this->db->insert('narahubung',$data);
	}

	function getMitra($id){
		$this->db->where('id_mitra',$id);
		return $this->db->get('mitra')->result();
	}

	function getKantor($id){
		$this->db->where('id_mitra',$id);
		return $this->db->get('kantor')->result();
	}

	function getWorkshop($id){
		$this->db->where('id_mitra',$id);
		return $this->db->get('workshop')->result();
	}
}

?>