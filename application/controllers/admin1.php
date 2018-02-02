 <?php 
/**
 * 
 */
 class Admin1 extends CI_Controller
 
 {
  
  function __construct()
  
  {
    
    parent::__construct();
    $this->load->model('datacrud_customer');
    $this->load->helper('url');
    
  }

  function index(){
  
  $this->load->view('v_admin1');

function hapus_customer($id){
    $where = array('id' => $id);
      $this->datacrud_customer->hapus_datacustomer($where,'tb_customer');
      redirect('admin1/customer');
  }

  function proses_tambah(){
      $name = $this->input->post('name');
      $address = $this->input->post('address');
      $phone = $this->input->post('phone');
      $gender = $this->input->post('gender');
 

      $data = array(
      'name' => $name,
      'address' => $address,
      'phone' => $phone,
      'gender' => $gender
      );

      $this->datacrud_customer->input_datacustomer($data,'tb_customer');
      redirect('admin1/customer');
  }

  function edit_customer($id){
      $where = array('id' => $id);
      $data['customer'] = $this->datacrud_customer->edit_datacustomer($where,'tb_customer')->result();
      $this->load->view('v_customer_edit',$data);
  }

  function update_customer(){
    $id = $this->input->post('id');
    $name = $this->input->post('name');
    $address = $this->input->post('address');
    $phone = $this->input->post('phone');
    $gender = $this->input->post('gender');  

    $data = array(
        'name' => $name,
        'address' => $address,
        'phone' => $phone,
        'gender' => $gender
    );

    $where = array(
        'id' => $id
    );

    $this->datacrud_customer->update_datacustomer($where,$data,'tb_customer');
    redirect('admin1/customer');

      }
  }
 }
  ?>
