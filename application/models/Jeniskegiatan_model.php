<?php
class Jeniskegiatan_model extends CI_Model {
    private $table = 'jenis_kegiatan';

    public function getAll(){
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function create($data){
        $sql = "INSERT INTO jenis_kegiatan (id, nama) VALUES (default, ?)";
        $this->db->query($sql,$data);
    }

    public function update($data){
        $sql = "UPDATE jenis_kegiatan SET nama=? WHERE id=?";
        $this->db->query($sql,$data);
    }

    public function delete($id){
        $sql = "DELETE FROM jenis_kegiatan WHERE id=?";
        $this->db->query($sql,array($id));
    }
}