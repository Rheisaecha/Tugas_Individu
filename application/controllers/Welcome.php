<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->data['hasil'] = $this->model_crud->getUser('mahasiswa');
		$this->load->view('welcome_message', $this->data);
	}
	public function form_input(){
		$this->load->view('form-input');
	}
	public function insert(){
		$id = $_POST['NIM'];
		$nama = $_POST['Nama'];
		$nohp = $_POST['HP'];
		$ttl = $_POST['Tanggal_Lahir'];
		$alamat = $_POST['Alamat'];
		$data = array('NIM' => $id, 'Nama' => $nama, 'No_HP' => $nohp, 'Tanggal_Lahir' => $ttl, 'Alamat' => $alamat);
		$add = $this->model_crud->addData('mahasiswa',$data);
		if($add > 0){
			echo redirect('welcome/index');
		} else {
			echo 'Update Failed';
		}
	}

	public function delete($id){
		$hapus = $this->model_crud->deleteData('mahasiswa',$id);
		if($hapus > 0){
			echo redirect('welcome/index');
		} else {
			echo 'Update Failed';
		}
	}

	public function form_edit($id){
		$this->data['dataEdit'] = $this->model_crud->dataEdit('mahasiswa',$id);
		$this->load->view('form-edit',$this->data);
	}

	public function update($id){
		$id = $_POST['NIM'];
		$nama = $_POST['Nama'];
		$nohp = $_POST['HP'];
		$ttl = $_POST['Tanggal_Lahir'];
		$alamat = $_POST['Alamat'];
		$data = array('NIM' => $id, 'Nama' => $nama, 'No_HP' => $nohp, 'Tanggal_Lahir' => $ttl, 'Alamat' => $alamat);
		$edit = $this->model_crud->editData('mahasiswa',$data,$id);
		if($edit > 0){
			echo redirect('welcome/index');
		} else {
			echo 'Update Failed';
		}
	}
}
