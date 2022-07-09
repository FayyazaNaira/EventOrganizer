<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jeniskegiatan extends CI_Controller {
    public function index(){
        $this->load->model('jeniskegiatan_model','jeniskegiatan');
        $list_jeniskegiatan = $this->jeniskegiatan->getAll();

        $data['list_jeniskegiatan'] = $list_jeniskegiatan;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jeniskegiatan/index', $data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $this->load->model('jeniskegiatan_model','jeniskegiatan');

        $_nama = $this->input->post('nama');
        $_id_update = $this->input->post('idedit');

        $data_jeniskegiatan[] = $_nama;

        if(isset($_id_update)){
            $data_jeniskegiatan[] = $_id_update;
            $this->jeniskegiatan->update($data_jeniskegiatan);  
        }else{
            $this->jeniskegiatan->create($data_jeniskegiatan);   
        }

        redirect(base_url().'index.php/jeniskegiatan/', 'refresh');
    }

    public function update(){
        $_id = $this->input->get('id');
        $this->load->model('jeniskegiatan_model','jeniskegiatan');
        $jenkegiatan_update = $this->jeniskegiatan->findById($_id);

        $data['jenkegiatan_update']= $jenkegiatan_update;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jeniskegiatan/update', $data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model('jeniskegiatan_model','jeniskegiatan');
        $this->jeniskegiatan->delete($_id);
        redirect(base_url('index.php/jeniskegiatan/'));
    }
}