<?php
class Grafik_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}


	public function get_pj($kodesupplier = 0)
	{
		if ($kodesupplier === 0)
		{
			$query = $this->db->get_where('supplier',array('status' => 1));
			return $query->result_array();
		}
		
		$query = $this->db->get_where('supplier', array('kodesupplier' => $kodesupplier));
		return $query->row_array();
	}
	public function tahunan()
	{
		$sql = "SELECT tahun, Count(tahun) as jumlah FROM nng_barang GROUP BY tahun";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function tahunanBK()
	{
		$sql = "SELECT tahun, Count(tahun) as jumlah FROM nng_barang WHERE `group` = 'BK' GROUP BY tahun";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function tahunanPK()
	{
		$sql = "SELECT tahun, Count(tahun) as jumlah FROM nng_barang  WHERE `group` = 'PK' GROUP BY tahun";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function get_grafik_pengunjung($kodesupplier = 0)
	{
		$sql = "
				SELECT y, m, Count(register.waktu) as jumlah
     FROM (
      SELECT y, m
      FROM
         (SELECT YEAR(CURDATE()) y UNION ALL SELECT YEAR(CURDATE())-1) years,
         (SELECT 1 m UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4
           UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8
           UNION ALL SELECT 9 UNION ALL SELECT 10 UNION ALL SELECT 11 UNION ALL SELECT 12) months) ym
       LEFT JOIN register
       ON ym.y = YEAR((register.waktu))
          AND ym.m = MONTH((register.waktu))
     WHERE
       (y=YEAR(CURDATE()) AND m<=MONTH(CURDATE()))
       OR
       (y<YEAR(CURDATE()) AND m>MONTH(CURDATE()))
     GROUP BY y, m;
				";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	public function manca($kodesupplier = 0)
	{
		$manca = $this->input->post('cari');
		$sql = "
				SELECT y, m, Count(register.waktu) as jumlah
     FROM (
      SELECT y, m
      FROM
         (SELECT YEAR(CURDATE()) y UNION ALL SELECT YEAR(CURDATE())-1) years,
         (SELECT 1 m UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4
           UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8
           UNION ALL SELECT 9 UNION ALL SELECT 10 UNION ALL SELECT 11 UNION ALL SELECT 12) months) ym
       LEFT JOIN register
       ON ym.y = YEAR((register.waktu))
          AND ym.m = MONTH((register.waktu)) 
		  AND 
		register.warganegara = '$manca' 
     WHERE
       (y=YEAR(CURDATE()) AND m<=MONTH(CURDATE()))
       OR
       (y<YEAR(CURDATE()) AND m>MONTH(CURDATE()))
     GROUP BY y, m;
				";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
		
	public function cek_pj_lama($cari)
	{
		$sql = "SELECT nama FROM pengunjung WHERE telpon = '$cari'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	public function set_pj($id = 0)
	{
		$this->load->helper('url');
		
		$data = array(
			'nama' => $this->input->post('nama'),
			'jkel' => $this->input->post('jkel'),
			'telpon' => $this->input->post('telpon'),
			'warganegara' => $this->input->post('warganegara'),
			'nokarcis' => $this->input->post('nokarcis'),
			'status' => 1
		);
		
		if ($id === 0) {
		
			$this->db->insert('pengunjung', $data);
			return $this->db->insert('register', $data);
		
		}
		else {
		
			$this->db->where('id', $id);
			return $this->db->update('todos', $data);
		
		}
		
		
	}
	public function set_pj_lama($id = 0)
	{
		$this->load->helper('url');
		
		$data = array(
			'nama' => $this->input->post('nama'),
			'telpon' => $this->input->post('telpon'),
			'status' => 1
		);
		
		if ($id === 0) {
		
			return $this->db->insert('register', $data);
		
		}
		else {
		
			$this->db->where('id', $id);
			return $this->db->update('todos', $data);
		
		}
		
		
	}
	
	public function set_rombong($id = 0)
	{
		$this->load->helper('url');
		
		$data = array(
			'nama' => $this->input->post('nama'),
			'jkel' => $this->input->post('jkel'),
			'telpon' => $this->input->post('telpon'),
			'warganegara' => $this->input->post('warganegara'),
			'nokarcis' => $this->input->post('nokarcis'),
			'nama_rombong' => $this->input->post('nama_rombongan'),
			'jumlah' => $this->input->post('jumlah'),
			'status' => 1
		);
		
		if ($id === 0) {
		
			$this->db->insert('pengunjung', $data);
			for($i=0;$i<$this->input->post('jumlah');$i++){
				$this->db->insert('register', $data);
			}
		}
		else {
		
			$this->db->where('id', $id);
			return $this->db->update('todos', $data);
		
		}
		
		
	}
	
	public function delete_row($id){
		
	  $this->db->where('kodesupplier', $id);
	  return $this->db->delete('sdf');
	}

	public function completed($id)
	{
		
		$data = array(
               'completed' => 1
            );

		$this->db->where('id', $id);
		$this->db->update('tsdfodos', $data); 
	
	}
	
	
	public function dt_koleksi(){
		$tahunskr = date('Y');
		$sql = "SELECT COUNT(*) as jumlah FROM nng_barang WHERE `group` = 'BK' ";
		$query = $this->db->query($sql);
		return $query->result();
		
	}
	
	public function dt_barangkantor(){
		$tahunskr = date('Y');
		$sql = "SELECT COUNT(*) as jumlah FROM nng_barang WHERE `group` = 'PK' ";
		$query = $this->db->query($sql);
		return $query->result();
		
	}
	
}