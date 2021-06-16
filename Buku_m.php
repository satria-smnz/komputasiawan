<?php
class peminjam_m extends CI_Model {

	public function get($id = null)
	{
		// $query = $this->db->query("SELECT * FROM tb_peminjam");
		$this->db->select('*');
		$this->db->from('tb_peminjam');
		if($id != null) {
			$this->db->where('id_peminjam', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($data)
	{
		$param = array(
			'nama' => $data['nama'],
			'nim' => $data['nim'],
			'no_induk' => $data['no_induk'],
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
