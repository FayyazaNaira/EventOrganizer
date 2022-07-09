<?php
class Daftar_model extends CI_Model {
    private $table = "daftar"; //karena tabe prodi blm ada
    
    public function getAll(){
            $query = $this->db->get($this->table);
            return $query->result();
        }
        //$this->db->get($this->daftar); bisa juga kayak gini
       
        //result dia akan menampilkan semua data dari database 



    public function findById($id){ //select * from daftar * where id;
        $this->db->where("id",$id); //where
        $query = $this->db->get($this->table);
        return $query->row();
        //row yang hanya mengambil 1 data dari database yang telah kita where sebelumnya atau telah kita pilih data tersebut
    } 

    public function create($data)
    {
        $sql = 'INSERT into daftar(id, tanggal_daftar, alasan, users_id, kegiatan_id, kategori_peserta_id, nosertifikat) VALUES (default,?,?,?,?,?,?)';
        $this->db->query($sql, $data);
    }

    public function update($data){
        // update
        $sql = "UPDATE daftar SET tanggal_daftar=?,alasan=?,users_id=?,kegiatan_id=?,kategori_peserta_id=?,nosertifikat=? WHERE id=?";
        $this->db->query($sql,$data);
    }

    public function delete($id){
        //delete from daftar where nim=$id;
        $sql = "DELETE from daftar where id=?";
        $this->db->query($sql,array($id));    
    }
    public function daftart($data){
        $sql = "INSERT INTO daftar (id,tanggal_daftar,alasan,users_id,kegiatan_id,kategori_peserta_id,nosertifikat)
        VALUES (default, now(), ?, ?, ?, ?, ?)";
        $this->db->query($sql,$data);
    }



}