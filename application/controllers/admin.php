    <?php 
/**
 * 
 */
 class Admin extends CI_Controller
 
 {
  
  function __construct()
  
  {
    
    parent::__construct();
    $this->load->model('data_crud');
    $this->load->helper('url');
    
  }

  function index(){
  
  $this->load->view('v_admin');

  }
  function rute(){
    $data['rute'] = $this->data_crud->tampil_datarute()->result();
    $this->load->view('v_rute',$data);

  }


  function hapus_rute($id){
    $where = array('id' => $id);
      $this->data_crud->hapus_datarute($where,'tb_rute');
      redirect('admin/rute');
  }

  function proses_tambah(){
      $depart = $this->input->post('depart');
      $rute_from = $this->input->post('rutefrom');
      $rute_to = $this->input->post('ruteto');
      $price = $this->input->post('price');
 

      $data = array(
      'depart_at' => $depart,
      'rute_from' => $rute_from,
      'rute_to' => $rute_to,
      'price' => $price
      );

      $this->data_crud->input_datarute($data,'tb_rute');
      redirect('admin/rute');
  }

  function edit_rute($id){
      $where = array('id' => $id);
      $data['rute'] = $this->data_crud->edit_datarute($where,'tb_rute')->result();
      $this->load->view('v_rute_edit',$data);
  }

  function update_rute(){
    $id = $this->input->post('id');
    $depart = $this->input->post('depart');
    $rute_from = $this->input->post('rutefrom');
    $rute_to = $this->input->post('ruteto');
    $price = $this->input->post('price');  

    $data = array(
        'depart_at' => $depart,
        'rute_from' => $rute_from,
        'rute_to' => $rute_to,
        'price' => $price
    );

    $where = array(
        'id' => $id
    );

    $this->data_crud->update_datarute($where,$data,'tb_rute');
    redirect('admin/rute');
    
  }

  //reservation//

   function reservation(){
    $data['reservation'] = $this->data_crud->tampil_datareservation()->result();
    $this->load->view('v_reservation',$data);

  }
  

  function hapus_reservation($id){
    $where = array('id' => $id);
      $this->data_crud->hapus_datareservation($where,'tb_reservation');
      redirect('admin/reservation');
  }

  function proses_tambah_reservation(){
      $Reservation_code = $this->input->post('Reservationcode');
      $Reservation_at = $this->input->post('Reservationat');
      $Reservation_date = $this->input->post('Reservationdate');
      $Customer_id = $this->input->post('Customerid');
      $Seat_code = $this->input->post('Seatcode');
      $Rute_id = $this->input->post('Ruteid');
      $Depart_at = $this->input->post('Departat');
      $Price = $this->input->post('Price');
      $User_id = $this->input->post('User_id');
 

      $data = array(
      'Reservation_code' => $Reservation,
      'Reservation_at' => $Reservation_at,
      'Reservation_date' => $Reservation_date,
      'Customer_id' => $Customer_id,
      'Rute_id' => $Rute_id,
      'Depart_at' => $Depart_at,
      'Price' => $Price,
      'User_id' => $User_id,
      );

      $this->data_crud->input_datareservation($data,'tb_reservation');
      redirect('admin/reservation');
  }

  function edit_reservation($id){
      $where = array('id' => $id);
      $data['reservation'] = $this->data_crud->edit_datareservation($where,'tb_reservation')->result();
      $this->load->view('v_rute_reservation',$data);
  }

  function update_reservation(){
    $id = $this->input->post('id');
    $Reservation_code = $this->input->post('Reservationcode');
    $Reservation_date = $this->input->post('Reservationdate');
    $Customer_id = $this->input->post('Customerid');
    $Rute_id = $this->input->post('Ruteid');
    $Depart_at = $this->input->post('Departat');
    $Price = $this->input->post('Price');
    $Rute_id = $this->input->post('Ruteid');
    $User_id = $this->input->post('Userid');  

    $data = array(
       'Reservation_code' => $Reservation,
      'Reservation_at' => $Reservation_at,
      'Reservation_date' => $Reservation_date,
      'Customer_id' => $Customer_id,
      'Rute_id' => $Rute_id,
      'Depart_at' => $Depart_at,
      'Price' => $Price,
      'User_id' => $User_id,
    );

    $where = array(
        'id' => $id
    );

    $this->data_crud->update_datareservation($where,$data,'tb_reservation');
    redirect('admin/reservation');
    
  }

//done//

//maskapai//

    function maskapai(){
      $this->load->view('v_maskapai');
    }

  function maskapai_data(){
    $data['maskapai'] = $this->data_crud->tampil_data_maskapai()->result();
    $this->load->view('v_maskapai',$data);

     function hapus_maskapai($id){
    $where = array('id' => $id);
      $this->data_crud->hapus_data_maskapai($where,'tb_maskapai');
      redirect('admin/maskapai');
  }

  function proses_tambah_maskapai(){
      $id = $this->input->post('id');
      $kode = $this->input->post('kode');
      $nama = $this->input->post('nama');
      $sitqty = $this->input->post('sitqty');
 

      $data = array(
      'id' => $id,
      'kode' => $kode,
      'nama' => $nama,
      'sitqty' => $sitqty
      );

      $this->data_crud->input_data_maskapai($data,'tb_maskapai');
      redirect('admin/maskapai');
  }

  function edit_maskapai($id){
      $where = array('id' => $id);
      $data['maskapai'] = $this->data_crud->edit_data_maskapai($where,'tb_maskapai')->result();
      $this->load->view('v_maskapai_edit',$data);
  }

  function update_maskapai(){
    $id = $this->input->post('id');
    $kode = $this->input->post('kode');
    $nama = $this->input->post('nama');
    $sitqty = $this->input->post('sitqty');
  
    $data = array(
        'id' => $id,
        'kode' => $kode,
        'nama' => $nama,
        'sitqty' => $sitqty
    );

    $where = array(
        'id' => $id
    );

    $this->data_crud->update_data_maskapai($where,$data,'tb_maskapai');
    redirect('admin/maskapai');
    
//done//

//customer//

    function customer(){
      $this->load->view('v_customer');
    }

    function customer(){
    $data['customer'] = $this->data_crud->tampil_datacustomer()->result();
    $this->load->view('v_customer',$data);

  }


  function hapus_customer($id){
    $where = array('id' => $id);
      $this->data_crud->hapus_datacustomer($where,'tb_customer');
      redirect('admin/customer');
  }

  function proses_tambah_customer(){
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

      $this->data_crud->input_datacustomer($data,'tb_customer');
      redirect('admin/customer');
  }

  function edit_customer($id){
      $where = array('id' => $id);
      $data['customer'] = $this->data_crud->edit_datacustomer($where,'tb_customer')->result();
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

    $this->data_crud->update_datacustomer($where,$data,'tb_customer');
    redirect('admin/customer');
    
  }

//done//

//bandara//

  function bandara(){
    $data['bandara'] = $this->data_crud->tampil_databandara()->result();
    $this->load->view('v_bandara',$data);

  }


  function hapus_bandara($id){
    $where = array('id' => $id);
      $this->data_crud->hapus_databandara($where,'tb_rute');
      redirect('admin/bandara');
  }

  function proses_tambahbandara(){
      $kode = $this->input->post('kode');
      $nama = $this->input->post('nama');
      $city = $this->input->post('city');
 

      $data = array(
      'kode' => $kode,
      'nama' => $nama,
      'city' => $city
      );

      $this->data_crud->input_databandara($data,'tb_bandara');
      redirect('admin/bandara');
  }

  function edit_bandara($id){
      $where = array('id' => $id);
      $data['bandara'] = $this->data_crud->edit_databandara($where,'tb_bandara')->result();
      $this->load->view('v_bandara_edit',$data);
  }

  function update_bandara(){
    $id = $this->input->post('id');
    $kode = $this->input->post('kode');
    $nama = $this->input->post('nama');
    $city = $this->input->post('city');
   

    $data = array(
      'kode' => $kode,
      'nama' => $nama,
      'city' => $city
    );

    $where = array(
        'id' => $id
    );

    $this->data_crud->update_databandara($where,$data,'tb_bandara');
    redirect('admin/bandara');
    
  }

  //done//
  
  }

}

 }

  ?>