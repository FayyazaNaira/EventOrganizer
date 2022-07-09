<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kegiatan extends CI_Controller {
    public function index(){
        $this->load->model('kegiatan_model','kegiatan');
        $list_kegiatan = $this->kegiatan->getAll();

        $data['list_kegiatan'] = $list_kegiatan;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kegiatan/index',$data);
        $this->load->view('layout/footer');
    }
    
        public function create(){
            $config['upload_path']          = './dist/img';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;
    
            $this->load->library('upload', $config);
            $datainfo = array();
            $files = $_FILES;
            $cpt = count($_FILES['userfile']['name']);
            for($i=0; $i<$cpt; $i++)
            {
                $_FILES['userfile']['name']= $files['userfile']['name'][$i];
                $_FILES['userfile']['type']= $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error']= $files['userfile']['error'][$i];
                $_FILES['userfile']['size']= $files['userfile']['size'][$i];
    
                $this->upload->do_upload('userfile');
                $datainfo[] = $this->upload->data();
    
            }
    
            $data = array(
                'id' => 'default',
                'judul' => $this->input->post('judul'),
                'kapasitas' => $this->input->post('kapasitas'),
                'harga_tiket' => $this->input->post('harga_tiket'),
                'tanggal' => $this->input->post('tanggal'),
                'narasumber' => $this->input->post('narasumber'),
                'tempat' => $this->input->post('tempat'),
                'pic' => $this->input->post('pic'),
                'foto_flyer' => $datainfo[0]['file_name'],
                'jenis_id' => $this->input->post('jenis_id'),
                );
    
            $this->db->insert('kegiatan', $data);
    
            redirect(base_url().'index.php/kegiatan/');
        }

    
        public function read(){
            $this->load->model('kegiatan_model','kegiatan');
            $list_kegiatan = $this->kegiatan->getAll();
            $_id = $this->input->get('id');
    
            $data['list_kegiatan'] = $list_kegiatan;
            $data['kegiatan']=$this->kegiatan->findById($_id);
    
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('kegiatan/read',$data);
            $this->load->view('layout/footer');
        }


        public function update(){
            $config['upload_path']          = './dist/img';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;
    
            $this->load->library('upload', $config);
            $datainfo = array();
            $files = $_FILES;
            $cpt = count($_FILES['userfile']['name']);
            for($i=0; $i<$cpt; $i++)
            {
                $_FILES['userfile']['name']= $files['userfile']['name'][$i];
                $_FILES['userfile']['type']= $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error']= $files['userfile']['error'][$i];
                $_FILES['userfile']['size']= $files['userfile']['size'][$i];
    
                $this->upload->do_upload('userfile');
                $datainfo[] = $this->upload->data();
    
            }
    
            $_id_update = $this->input->post('idedit');
            $data = array(
                'judul' => $this->input->post('judul'),
                'kapasitas' => $this->input->post('kapasitas'),
                'harga_tiket' => $this->input->post('harga_tiket'),
                'tanggal' => $this->input->post('tanggal'),
                'narasumber' => $this->input->post('narasumber'),
                'tempat' => $this->input->post('tempat'),
                'pic' => $this->input->post('pic'),
                'foto_flyer' => $datainfo[0]['file_name'],
                'jenis_id' => $this->input->post('jenis_id'),
            );
            $this->db->where('id', $_id_update);
            $this->db->update('kegiatan', $data);
    
            redirect(base_url().'index.php/kegiatan/');
        }

        public function insert(){
            $this->load->model('jeniskegiatan_model','jeniskegiatan');
            $list_jeniskegiatan = $this->jeniskegiatan->getAll();
            $data['list_jeniskegiatan'] = $list_jeniskegiatan;
            
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('kegiatan/create', $data);
            $this->load->view('layout/footer');
        }
    
        public function edit(){
            $this->load->model('jeniskegiatan_model','jeniskegiatan');
            $list_jeniskegiatan = $this->jeniskegiatan->getAll();
            $data['list_jeniskegiatan'] = $list_jeniskegiatan;
    
            $_id = $this->input->get('id');
            $this->load->model('kegiatan_model','kegiatan');
            $kegiatan_update = $this->kegiatan->findById($_id);
    
            $data['kegiatan_update']= $kegiatan_update;
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('kegiatan/update',$data);
            $this->load->view('layout/footer');
        }
        public function delete(){
            $_id = $this->input->get('id');
            $this->load->model('kegiatan_model','kegiatan');
            $this->kegiatan->delete($_id);
            redirect(base_url('index.php/kegiatan/'));
        }


    }
    
       
      
