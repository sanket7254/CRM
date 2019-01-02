<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Excel_import extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('excel_import_model');
    $this->load->library('excel');
  }

  function index()
  {
    $this->load->view('excel_import');
  }

  function fetch()
  {
    $data = $this->excel_import_model->select();
    $output = '
    <h3 align="center">Total Data - '.$data->num_rows().'</h3>
    <table class="table table-striped table-bordered">
    <tr>
    <th>firstname</th>
    <th>lastname</th>
    <th>email</th>
    <th>Course Details</th>
    </tr>
    ';
    foreach($data->result() as $row)
    {
      $output .= '
      <tr>
      <td>'.$row->firstname.'</td>
      <td>'.$row->lastname.'</td>
      <td>'.$row->email.'</td>
      <td>'.$row->address.'</td>
      <td>'.$row->city.'</td>
      <td>'.$row->state.'</td>
      <td>'.$row->country.'</td>
      <td>'.$row->gender.'</td>
      <td>'.$row->birth_date.'</td>
      <td>'.$row->contact.'</td>
      </tr>
      ';
    }
    $output .= '</table>';
    echo $output;
  }

  function import()
  {
    $id=$this->session->userdata('adminid');
    $asso_id=$this->session->userdata('associateid');
    if(!($id == NULL))
    {
      if(isset($_FILES["file"]["name"]))
      {
        $path = $_FILES["file"]["tmp_name"];
        $object = PHPExcel_IOFactory::load($path);
        foreach($object->getWorksheetIterator() as $worksheet)
        {
          $highestRow = $worksheet->getHighestRow();
          $highestColumn = $worksheet->getHighestColumn();
          for($row=2; $row<=$highestRow; $row++)
          {
            $firstname = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
            $lastname = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
            $email = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
            $address = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
            $city = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
            $state = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
            $country = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
            $gender = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
            $birth_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCellByColumnAndRow(8, $row)->getValue()));
            $contact = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
            $user_image = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
            $created_at = date('Y-m-d h:m:s');
            $adminid = $this->session->userdata('adminid');
            $data[] = array(
            'firstname'  => $firstname,
            'lastname'   => $lastname,
            'email'    => $email,
            'address'  => $address,
            'city'  => $city,
            'state'  => $state,
            'country'  => $country,
            'gender'  => $gender,
            'birth_date'  => $birth_date,
            'contact'  => $contact,
            'created_at'  => $created_at,
            'user_image'  => $user_image,
            'sales_funnel_status' => "Awareness",
            'admin_id' => $adminid
            );
          }
        }
        $this->excel_import_model->insert($data);
        //echo 'Data Imported successfully';
      }
    }
    else
    {
      if(isset($_FILES["file"]["name"]))
      {
        $path = $_FILES["file"]["tmp_name"];
        $object = PHPExcel_IOFactory::load($path);
        foreach($object->getWorksheetIterator() as $worksheet)
        {
          $highestRow = $worksheet->getHighestRow();
          $highestColumn = $worksheet->getHighestColumn();
          for($row=2; $row<=$highestRow; $row++)
          {
            $firstname = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
            $lastname = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
            $email = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
            $address = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
            $city = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
            $state = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
            $country = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
            $gender = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
            $birth_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCellByColumnAndRow(8, $row)->getValue()));
            $contact = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
            $user_image = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
            $created_at = date('Y-m-d h:m:s');
            $associate_id = $this->session->userdata('associateid');
            $data[] = array(
            'firstname'  => $firstname,
            'lastname'   => $lastname,
            'email'    => $email,
            'address'  => $address,
            'city'  => $city,
            'state'  => $state,
            'country'  => $country,
            'gender'  => $gender,
            'birth_date'  => $birth_date,
            'contact'  => $contact,
            'created_at'  => $created_at,
            'sales_funnel_status' => "Awareness",
            'user_image'  => $user_image,
            'associate_id' => $associate_id
            );
          }
        }
        $this->excel_import_model->insert($data);
      }
    } 
  }
}

?>
