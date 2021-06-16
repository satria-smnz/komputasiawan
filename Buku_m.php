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
			'judul_buku' => $data['judul_buku'],
			'tgl_pinjam' => $data['tgl_pinjam'],
			'tgl_kembali' => $data['tgl_kembali'],
		);
		$this->db->insert('tb_peminjam', $param);
	}

	public function edit($data)
	{
		$param = array(
			'nama' => $data['nama'],
			'nim' => $data['nim'],
			'no_induk' => $data['no_induk'],
			'judul_buku' => $data['judul_buku'],
			'tgl_pinjam' => $data['tgl_pinjam'],
			'tgl_kembali' => $data['tgl_kembali'],
		);
		$this->db->set($param);
		$this->db->where('id_peminjam', $data['id']);
		$this->db->update('tb_peminjam');
	}

	public function del($id)
	{
		$this->db->where('id_peminjam', $id);
		$this->db->delete('tb_peminjam');
	}

}
