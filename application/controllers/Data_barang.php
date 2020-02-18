<?php 
class Data_barang extends CI_Controller {       
    
    public function __construct()     
    {         
        parent::__construct();         
        $this->load->model('data_barang_model');         
        $this->load->helper('url_helper');   
        $this->load->helper('form');         
        $this->load->library('form_validation');  
}   

public function index()     
{         
    $data['data_barang'] = $this->data_barang_model->get_data_barang();         
    $data['kode'] = 'data_barang archive';           
    $this->load->view('templates/header', $data);         
    $this->load->view('data_barang/index', $data);         
    $this->load->view('templates/footer');     
}   

public function view($harga = NULL)     
{         
    $data['data_barang_item'] = $this->data_barang_model->get_data_barang($harga);                  
    if (empty($data['data_barang_item']))         
    {             
        show_404();         
    } 

    $data['kode'] = $data['data_barang_item']['kode']; 
    $this->load->view('templates/header', $data);         
    $this->load->view('data_barang/view', $data);         
    $this->load->view('templates/footer');     
}   

public function create()     
{         
    $this->load->helper('form');         
    $this->load->library('form_validation');           
    $data['nama'] = 'Create a data_barang item';           
    $this->form_validation->set_rules('kode', 'kode', 'required');         
    $this->form_validation->set_rules('nama', 'nama', 'required');  
    $this->form_validation->set_rules('jumlah', 'jumlah', 'required');         
    $this->form_validation->set_rules('harga', 'harga', 'required');  
             
    if ($this->form_validation->run() === FALSE)         
    {             
        $this->load->view('templates/header', $data);             
        $this->load->view('data_barang/create');             
        $this->load->view('templates/footer');           
    } 

    else         
    {             
        $this->data_barang_model->set_data_barang();             
        $this->load->view('templates/header', $data);             
        $this->load->view('data_barang/success');             
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
          
    $data['kode'] = 'Edit a data_barang item';                 
    $data['data_barang_item'] = $this->data_barang_model->get_data_barang_by_id($id); 

    $this->form_validation->set_rules('kode', 'kode', 'required');         
    $this->form_validation->set_rules('jumlah', 'jumlah', 'required');           
    if ($this->form_validation->run() === FALSE)         
    {             
        $this->load->view('templates/header', $data);             
        $this->load->view('data_barang/edit', $data);             
        $this->load->view('templates/footer');           
    } 

    else         
    {             
        $this->data_barang_model->set_data_barang($id);             
        //$this->load->view('data_barang/success');             
        redirect( base_url() . 'index.php/data_barang');         
    }     
}          
    public function delete()     
    {         
        $id = $this->uri->segment(3);                  
        if (empty($id))         
        {             
            show_404();         
        }                          
        $data_barang_item = $this->data_barang_model->get_data_barang_by_id($id);
                          
        $this->data_barang_model->delete_data_barang($id);                 
        redirect( base_url() . 'index.php/data_barang');             
    }
    
    public function tambah(){
        $data['data_barang'] = $this->data_barang_model->get_data_barang();         
        $data['kode'] = 'data_barang archive';           
        $this->load->view('templates/header', $data);         
        $this->load->view('data_barang/create', $data);         
        $this->load->view('templates/footer');    
    }
} 