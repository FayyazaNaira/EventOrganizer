<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Daftar extends CI_Controller {
    public function index(){
        $this->load->model('daftar_model','daftar');
        $list_daftar = $this->daftar->getAll();

        $data['list_daftar'] = $list_daftar;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('daftar/index',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $this->load->model('daftar_model','daftar');

        $_id_update = $this->input->post('idedit');
        $_tanggal_daftar = $this->input->post('tanggal_daftar');
        $_alasan = $this->input->post('alasan');
        $_users_id = $this->input->post('users_id');
        $_kegiatan_id = $this->input->post('kegiatan_id');
        $_kategori_peserta_id = $this->input->post('kategori_peserta_id');
        $_nosertifikat = $this->input->post('nosertifikat');

        $data_daftar[]=$_tanggal_daftar;
        $data_daftar[]=$_alasan;
        $data_daftar[]=$_users_id;
        $data_daftar[]=$_kegiatan_id;
        $data_daftar[]=$_kategori_peserta_id;
        $data_daftar[]=$_nosertifikat;

        if(isset($_id_update)){
            $data_daftar[] = $_id_update;
            $this->daftar->update($data_daftar);
        }else{
            $this->daftar->create($data_daftar);
        }

        redirect(base_url().'index.php/daftar/');
    }
    


        public function read(){
            $this->load->model('daftar_model','daftar');
            $list_daftar = $this->daftar->getAll();
            $_id = $this->input->get('id');

            $data['list_daftar'] = $list_daftar;
            $data['daftar']=$this->daftar->findById($_id);
    
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('daftar/read',$data);
            $this->load->view('layout/footer');
            
        }
    
        public function update(){
            $this->load->model('users_model','users');
            $list_users = $this->users->getAll();
            $data['list_users'] = $list_users;
    
            $this->load->model('kegiatan_model','kegiatan');
            $list_kegiatan = $this->kegiatan->getAll();
            $data['list_kegiatan'] = $list_kegiatan;

            $this->load->model('kategoripeserta_model','kategori');
            $list_kategori = $this->kategori->getAll();
            $data['list_kategoripeserta'] = $list_kategori;
    
            $_id = $this->input->get('id');
            $this->load->model('daftar_model','daftar');
            $daftar_update = $this->daftar->findById($_id);
    
            $data['daftar_update']= $daftar_update;
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('daftar/update',$data);
            $this->load->view('layout/footer');
        }
    
        public function delete(){
            $_id = $this->input->get('id');
            $this->load->model('daftar_model','daftar');
            $this->daftar->delete($_id);
            redirect(base_url('index.php/daftar/'));
        }
    
        public function daftart(){
            $this->load->model('daftar_model','daftar');
            $data = array(
               
                'alasan' => $this->input->post('alasan'),
                'users_id' => $this->input->post('users_id'),
                'kegiatan_id' => $this->input->post('kegiatan_id'),
                'kategori_peserta_id' => $this->input->post('kategori_peserta_id'),
                'nosertifikat' => $this->input->post('nosertifikat')
                );
    
            $this->daftar->daftart($data);
    
            redirect(base_url());
        }
    
    
        public function insert(){
            $this->load->model('users_model','users');
            $list_users = $this->users->getAll();
            $data['list_users'] = $list_users;
    
            $this->load->model('kegiatan_model','kegiatan');
            $list_kegiatan = $this->kegiatan->getAll();
            $data['list_kegiatan'] = $list_kegiatan;

            $this->load->model('kategoripeserta_model','kategoripeserta');
            $list_kategoripeserta = $this->kategoripeserta->getAll();
            $data['list_kategoripeserta'] = $list_kategoripeserta;

            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('daftar/create', $data);
            $this->load->view('layout/footer');
        }
    }
    