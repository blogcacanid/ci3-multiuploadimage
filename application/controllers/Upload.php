<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index(){
        $this->load->view('v_upload', array('error' => ' ' ));
    }

    function do_upload() {
        // setting konfigurasi upload
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']             = 1024;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('gambar');
        $result1 = $this->upload->data();
        // upload gambar 2
        $this->upload->do_upload('gambar2');
        $result2 = $this->upload->data();
        // upload gambar 1
        $this->upload->do_upload('gambar3');
        $result3 = $this->upload->data();
        // menyimpan hasil upload
        $result = array('gambar1'=>$result1,'gambar2'=>$result2,'gambar3'=>$result3);
        // menampilkan hasil upload
        echo "<pre>";
        print_r($result);
        echo "</pre>";
        // cara akses file name dari gambar 1
        echo  $result['gambar1']['file_name'];
        // cara akses file name dari gambar 1
        echo  $result['gambar2']['file_name'];
        // cara akses file name dari gambar 1
        echo  $result['gambar3']['file_name'];
    }    
	
}