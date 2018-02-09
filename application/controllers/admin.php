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

    $this->data_crud->update_datarute($where,$data,'tb_reservation');
    redirect('admin/reservation');
    
  }

//done//


  function maskapai(){
    $data['maskapai'] = $this->data_crud->tampil_datamaskapai()->result();
    $this->load->view('v_maskapai',$data);
}
 }
  ?>