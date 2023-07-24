<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Region extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Region_model');
    }

    public function index() {
        $data['provinces'] = $this->Region_model->get_provinces();
        $this->load->view('region_view', $data);
    }

    public function get_regencies() {
        $province_id = $this->input->post('province_id');
        $regencies = $this->Region_model->get_regencies_by_province($province_id);
        echo json_encode($regencies);
    }

    public function get_districts() {
        $regency_id = $this->input->post('city_id');
        $districts = $this->Region_model->get_districts_by_regency($regency_id);
        echo json_encode($districts);
    }
}
