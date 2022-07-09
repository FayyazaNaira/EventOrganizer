<?php
class Users_model extends CI_Model {
    private $table = "users"; //karena tabe prodi blm ada
    
    public function getAll(){
        $query = $this->db->get($this->table); //select * fro
        //$this->db->get($this->daftar); bisa juga kayak gini
        return $query->result();
        //result dia akan menampilkan semua data dari database 
    
    }
    public function findById($id){ //select * from daftar * where id;
        $this->db->where("id",$id); //where
        $query = $this->db->get($this->table);
        return $query->row();
        //row yang hanya mengambil 1 data dari database yang telah kita where sebelumnya atau telah kita pilih data tersebut
    } 

    public function create($data){
        $sql = "INSERT INTO users (id, username, password, email, created_at, last_login, status, role)
        VALUES (default, ?, MD5(?), ?, ?, ?, ?, ?)";
        $this->db->query($sql,$data);
    }

    public function update($data){
        $sql = "UPDATE users SET username=?, password=MD5(?), email=?, created_at=?, last_login=?, status=?, role=? WHERE id=?";
        $this->db->query($sql,$data);
    }

    
    public function delete($id){
        //delete from daftar where nim=$id;
        $sql = "delete from users where id=?";
        $this->db->query($sql,array($id));    
    }

    public function login($uname, $pass){
        $sql = "SELECT id, username, date(created_at) as created_at, role FROM users WHERE username=? and password=MD5(?)";
        $data = [$uname, $pass];
        $query = $this->db->query($sql, $data);
        return $query->row();
    }

    public function register($data){
        $sql = "INSERT INTO users (id, username, email, password, created_at, last_login, status, role)
        VALUES (default, ?, ?, MD5(?), now(), now(), 1, 'public')";
        $this->db->query($sql,$data);
    }

   
    

}