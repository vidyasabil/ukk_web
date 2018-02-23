<?php 
/**
 * 
 */
 class Client extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('data_crud');
 	}

 	function index(){
 		$data['from'] = $this->data_crud->rutefrom()->result();
 		$data['to'] = $this->data_crud->ruteto()->result();
 		$data['kelas'] = $this->data_crud->kelas()->result();
 		$this->load->view("landing2",$data);
 	}

 	function search(){
 		$rute_from = $this->input->get('rute_from');
 		$rute_to = $this->input->get('rute_to');
 		$depart_at = $this->input->get('depart_at');
 		$class = $this->input->get('class');
 		$seat = $this->input->get('seat');

 		// menata tanggal
 		$posisitanggal = explode("/", $depart_at);
 		$depart_at = "$posisitanggal[2]-$posisitanggal[0]-$posisitanggal[1]";


 		$cari = array(
 			'rute_from' => $rute_from,
 			'rute_to' => $rute_to,
 			'depart_at' => $depart_at,
 			'class' => $class
 			);
 		$data['tb_rute'] =  $this->data_crud->search($cari)->result();
        $data['from'] = $this->data_crud->rutefrom()->result();
 		$data['to'] = $this->data_crud->ruteto()->result();
 		$data['kelas'] = $this->data_crud->kelas()->result();
        $this->load->view('v_hasil_pencarian',$data);
 	}
 } 
 ?>