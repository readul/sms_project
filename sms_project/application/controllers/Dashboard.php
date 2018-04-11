<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index() {
        $data['total_students_count'] = $this->db->count_all_results('students');
        $data['total_teachers_count'] = $this->db->count_all_results('teachers');
        $data['total_class_count'] = $this->db->count_all_results('classs');
        $data['total_sections_count'] = $this->db->count_all_results('sections');
        $this->load->view('header');
        $this->load->view('dashboard', $data);
        $this->load->view('footer');
    }

}
