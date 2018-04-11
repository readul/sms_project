<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class teacher extends CI_Controller {

    public function index() {
        echo 'this is index. of user controller/class.';
    }

    public function add_teacher() {

        if ($_POST) {
            $data = array(
                't_name' => $this->input->post('t_name'),
                'p_add' => $this->input->post('p_add'),
                'pa_add' => $this->input->post('pa_add'),
                'tcr_birthday' => $this->input->post('tcr_birthday'),
                'tcr_age' => $this->input->post('tcr_age'),
                'tcr_email' => $this->input->post('tcr_email'),
                'tcr_gender' => $this->input->post('tcr_gender'),
                'tcr_blood' => $this->input->post('tcr_blood'),
                't_date' => $this->input->post('t_date'),
                'phone_number' => $this->input->post('phone_number'),
            );
            $this->db->insert('teachers', $data);
            redirect('teacher/tcr_list');
        } else {
            $this->load->view('header');
            $this->load->view('add_teacher');
            $this->load->view('footer');
        }
    }

    public function edit_teacher($teacher_id) {

        if ($_POST) {
            $data = array(
                't_name' => $this->input->post('t_name'),
                'p_add' => $this->input->post('p_add'),
                'pa_add' => $this->input->post('pa_add'),
                'tcr_birthday' => $this->input->post('tcr_birthday'),
                'tcr_age' => $this->input->post('tcr_age'),
                'tcr_email' => $this->input->post('tcr_email'),
                'tcr_gender' => $this->input->post('tcr_gender'),
                'tcr_blood' => $this->input->post('tcr_blood'),
                't_date' => $this->input->post('t_date'),
                'phone_number' => $this->input->post('phone_number'),
            );
            $this->db->update('teachers', $data, array('id' => $teacher_id));
            redirect('teacher/tcr_list');
        } else {
            $row = $this->db->get_where('teachers', array('id' => $teacher_id))->row();
            $this->load->view('header');
            $this->load->view('edit_teacher', array('row' => $row));
            $this->load->view('footer');
        }
    }

    public function teacher_delete($teacher_id) {
        $this->db->delete('teacher', array('id' => $teacher_id));
        redirect('teacher/tcr_list');
    }

    public function tcr_list() {

        $teacher_rows = $this->db->get('teachers')->result();
        $this->load->view('header');
        $this->load->view('tcr_list', array('rows' => $teacher_rows));
        $this->load->view('footer');
    }

}
