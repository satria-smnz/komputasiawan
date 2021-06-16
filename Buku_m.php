<?php
class Buku_m extends CI_Model {

	public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_buku");
		$this->db->select('*');
		$this->db->from('tb_buku');
		if($id != null) {
			$this->db->where('id_buku', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($data)
	{
		$param = array(
			'no_induk' => $data['no_induk'],
			'judul' => $data['judul'],
			'pengarang' => $data['pengarang'],
			'penerbit' => $data['penerbit'],
			'tahun_terbit' => $data['tahun'],
			'ISBN' => $data['ISBN'],
		);
		$this->db->insert('tb_buku', $param);
	}

	public function edit($data)
	{
		$param = array(
			'no_induk' => $data['no_induk'],
			'judul' => $data['judul'],
			'pengarang' => $data['pengarang'],
			'penerbit' => $data['penerbit'],
			'tahun_terbit' => $data['tahun'],
			'ISBN' => $data['ISBN'],
		);
		$this->db->set($param);
		$this->db->where('id_buku', $data['id']);
		$this->db->update('tb_buku');
	}

	public function del($id)
	{
		$this->db->where('id_buku', $id);
		$this->db->delete('tb_buku');
	}

}