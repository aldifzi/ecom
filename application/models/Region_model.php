<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Region_model extends CI_Model {
                        
    function get_provinsi()
    {
        $this->db->order_by('province_name', 'ASC');
        $query = $this->db->get('tb_ro_provinces');
        return $query->result();
    }

    function get_kabupaten($provinsi_id)
    {
        //ambil data kabupaten berdasarkan id provinsi yang dipilih
        $this->db->where('province_id', $provinsi_id);
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('tb_ro_cities');

        $output = '<option value="">-- Pilih Kabupaten --</option>';

        //looping data
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->name . '</option>';
        }
        //return data kabupaten
        return $output;
    }

    function get_kecamatan($kabupaten_id)
    {
        //ambil data kecamatan berdasarkan id kabupaten yang dipilih
        $this->db->where('regency_id', $kabupaten_id);
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('districts');

        $output = '<option value="">-- Pilih Kecamatan --</option>';

        //looping data
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->name . '</option>';
        }
        //return data kecamatan
        return $output;
    }

    function get_desa($kecamatan_id)
    {
        //ambil data desa berdasarkan id kecamatan yang dipilih
        $this->db->where('district_id', $kecamatan_id);
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('villages');

        $output = '<option value="">-- Pilih Desa --</option>';

        //looping data
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '" >' . $row->name . '</option>';
        }
        //return data desa
        return $output;
    }


         
}