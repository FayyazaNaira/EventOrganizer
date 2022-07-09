<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index(){
		$this->load->model('kegiatan_model','kegiatan');
    	$list_kegiatan = $this->kegiatan->getAll(); 

		$data['list_kegiatan'] = $list_kegiatan;
		$this->load->view('home/index',$data);
		
		
	}
	public function insert(){
		$this->load->model('daftar_model','daftar');
		$this->load->model('kategoripeserta_model','kategoripeserta');

		$list_kategoripeserta = $this->kategoripeserta->getAll(); 
		$data['list_kategoripeserta'] = $list_kategoripeserta;

		$list_daftar = $this->daftar->getAll(); 
		$data['list_daftar'] = $list_daftar;

        $this->load->view('home/daftart',$data);
    }

	
}