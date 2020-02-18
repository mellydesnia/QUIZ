<?php class Data_barang extends CI_Controller {       
    
    public function __construct()     
    {         
        parent::__construct();         
        $this->load->model('Data_barang_model');         
        $this->load->helper('url_helper');     
}   

public function index()     
{         
    $data['Data_barang'] = $this->Data_barang_model->get_Data_barang();         
    $data['kode_barang'] = 'Data_barang archive';           
    $this->load->view('templates/header', $data);         
    $this->load->view('Data_barang/index', $data);         
    $this->load->view('templates/footer');     
}   

public function view($slug = NULL)     
{         
    $data['Data_barang_item'] = $this->Data_barang_model->get_Data_barang($slug);                  
    if (empty($data['Data_barang_item']))         
    {             
        show_404();         
    } 

    $data['kode_barang'] = $data['Data_barang_item']['kode_barang']; 
    $this->load->view('templates/header', $data);         
    $this->load->view('Data_barang/view', $data);         
    $this->load->view('templates/footer');     
}   

public function create()     
{         
    $this->load->helper('form');         
    $this->load->library('form_validation');           
    $data['kode_barang'] = 'Create a Data_barang item';           
    $this->form_validation->set_rules('kode_barang', 'kode_barang', 'required');         
    $this->form_validation->set_rules('text', 'Text', 'required');           
    if ($this->form_validation->run() === FALSE)         
    {             
        $this->load->view('templates/header', $data);             
        $this->load->view('Data_barang/create');             
        $this->load->view('templates/footer');           
    } 

    else         
    {             
        $this->Data_barang_model->set_Data_barang();             
        $this->load->view('templates/header', $data);             
        $this->load->view('Data_barang/success');             
        $this->load->view('templates/footer');         
    }     
}   

public function edit()     
{         
    $id = $this->uri->segment(3);                  
    if (empty($id))         
    {             
        show_404();         
    }                  
    $this->load->helper('form');         
    $this->load->library('form_validation');
          
    $data['kode_barang'] = 'Edit a Data_barang item';                 
    $data['Data_barang_item'] = $this->Data_barang_model->get_Data_barang_by_id($id); 

    $this->form_validation->set_rules('kode_barang', 'kode_barang', 'required');         
    $this->form_validation->set_rules('text', 'Text', 'required');           
    if ($this->form_validation->run() === FALSE)         
    {             
        $this->load->view('templates/header', $data);             
        $this->load->view('Data_barang/edit', $data);             
        $this->load->view('templates/footer');           
    } 

    else         
    {             
        $this->Data_barang_model->set_Data_barang($id);             
        //$this->load->view('Data_barang/success');             
        redirect( base_url() . 'index.php/Data_barang');         
    }     
}          
    public function delete()     
    {         
        $id = $this->uri->segment(3);                  
        if (empty($id))         
        {             
            show_404();         
        }                          
        $Data_barang_item = $this->Data_barang_model->get_Data_barang_by_id($id);
                          
        $this->Data_barang_model->delete_Data_barang($id);                 
        redirect( base_url() . 'index.php/Data_barang');             
    } 

    public function tambah (){
               
    $data['Data_barang'] = $this->Data_barang_model->get_Data_barang();         
    $data['kode_barang'] = 'Data_barang archive';           
    $this->load->view('templates/header', $data);         
    $this->load->view('Data_barang/create', $data);         
    $this->load->view('templates/footer');  
    }
    
} 