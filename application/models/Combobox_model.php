<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Combobox_model extends CI_Model {
                        
    function getprov($searchTerm = "")
    {        
        $this->db->select('id, nama');
        $this->db->where("nama like '%" . $searchTerm . "%' ");
        $this->db->order_by('id', 'asc');
        $fetched_records = $this->db->get('provinsi');
        $dataprov = $fetched_records->result_array();

        $data = array();
        foreach ($dataprov as $prov) {
            $data[] = array("id" => $prov['id'], "text" => $prov['nama']);
        }
        return $data;
    }

    function getkab($id_prov, $searchTerm = "")
    {        
        $this->db->select('id, nama');
        $this->db->where('provinsi_id', $id_prov);
        $this->db->where("nama like '%" . $searchTerm . "%' ");    
        $this->db->order_by('id', 'asc');
        $fetched_records = $this->db->get('kabupaten');
        $datakab = $fetched_records->result_array();

        $data = array();
        foreach ($datakab as $kab) {
            $data[] = array("id" => $kab['id'], "text" => $kab['nama']);
        }
        return $data;
    }

    function getkec($id_kab, $searchTerm = "")
    {        
        $this->db->select('id, nama');
        $this->db->where('kabupaten_id', $id_kab);
        $this->db->where("nama like '%" . $searchTerm . "%' ");    
        $this->db->order_by('id', 'asc');
        $fetched_records = $this->db->get('kecamatan');
        $datakec = $fetched_records->result_array();

        $data = array();
        foreach ($datakec as $kec) {
            $data[] = array("id" => $kec['id'], "text" => $kec['nama']);
        }
        return $data;
    }

   
}
