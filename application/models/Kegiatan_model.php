<?php
class Kegiatan_model extends CI_Model{
    private $table = "kegiatan"; //karena tabe kegiatan blm ada

    public function getAll(){
    $this->db->select('kegiatan.id, kegiatan.judul, kegiatan.kapasitas, kegiatan.harga_tiket, kegiatan.tanggal, kegiatan.narasumber,kegiatan.tempat,kegiatan.pic,kegiatan.foto_flyer,jenis_kegiatan.nama as jenis_kegiatan');
    $this->db->from('kegiatan');
    $this->db->join('jenis_kegiatan', 'jenis_kegiatan.id = kegiatan.jenis_id');
    $query = $this->db->get();
    return $query->result();
}

    public function findById($id){
    $this->db->where('id',$id);
    $query = $this->db->get($this->table);
    return $query->row();
}

public function delete($data){
   $query = 'delete from kegiatan where id=?';
   $this->db->query($query,$data);
}

}


