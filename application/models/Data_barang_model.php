<?php
class data_barang_model extends CI_Model { 

    public function __construct() 
    {         
        $this->load->database();     
    }   

    public function get_data_barang($harga = FALSE) 
    {        
         if ($harga === FALSE)         
         {   
            $query = $this->db->get('databarang');             
            return $query->result_array();         
        }

        $query = $this->db->get_where('databarang', array('harga' => $harga));         
        return $query->row_array();     
    }   

    public function get_databarang_by_kode($kode = 0)     
    {         
        if ($kode === 0)         
        {             
            $query = $this->db->get('databarang');             
            return $query->result_array();         
    }   

    $query = $this->db->get_where('databarang', array('kode' => $kode));         
    return $query->row_array();     
}          
public function set_data_barang($kode = 0)     
{         
        $this->load->helper('url'); 

        $harga = $this->input->post('nama');         
        $data = array(             
            'nama' => $this->input->post('nama'),             
            'harga' => $harga,             
            'text' => $this->input->post('text')         
        );        

        if ($kode == 0) {  
            
            return $this->db->insert('databarang', $data);         
        } else {             
            $this->db->where('kode', $kode);             
            return $this->db->update('databarang', $data);         
        }     
        }   

        public function delete_databarang($kode)     
        {         
            $this->db->where('kode', $kode);         
            return $this->db->delete('databarang');     
        } 
    } 
 
            