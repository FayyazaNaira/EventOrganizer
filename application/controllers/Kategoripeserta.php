<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kategoripeserta extends CI_Controller {
    public function index(){
        $this->load->model('kategoripeserta_model','kategoripeserta');
        $list_kategoripeserta = $this->kategoripeserta->getAll();

        $data['list_kategoripeserta'] = $list_kategoripeserta;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kategoripeserta/index', $data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $this->load->model('kategoripeserta_model','kategoripeserta');

        $_nama = $this->input->post('nama');
        $_id_update = $this->input->post('idedit');

        $data_kategoripeserta[] = $_nama;

        if(isset($_id_update)){
            $data_kategoripeserta[] = $_id_update;
            $this->kategoripeserta->update($data_kategoripeserta);  
        }else{
            $this->kategoripeserta->create($data_kategoripeserta);   
        }

        redirect(base_url().'index.php/kategoripeserta/', 'refresh');
    }

    public function update(){
        $_id = $this->input->get('id');
        $this->load->model('kategoripeserta_model','kategoripeserta');
        $katpeserta_update = $this->kategoripeserta->findById($_id);

        $data['katpeserta_update']= $katpeserta_update;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kategoripeserta/update', $data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model('kategoripeserta_model','kategoripeserta');
        $this->kategoripeserta->delete($_id);
        redirect(base_url('index.php/kategoripeserta/'));
    }
}