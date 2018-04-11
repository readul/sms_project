<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class students extends CI_Controller {

    public function index() {
        echo 'this is index. of user controller/class.';
    }

    public function add_student() {

        if ($_POST) {
            $data = array(
                's_name' => $this->input->post('s_name'),
                'f_name' => $this->input->post('f_name'),
                'm_name' => $this->input->post('m_name'),
                'p_add' => $this->input->post('p_add'),
                'pa_add' => $this->input->post('pa_add'),
                'std_birthday' => $this->input->post('std_birthday'),
                'std_id' => $this->input->post('std_id'),
                'class_id' => $this->input->post('std_class'),
                'section_id' => $this->input->post('std_section'),
                'std_gender' => $this->input->post('std_gender'),
                'std_blood' => $this->input->post('std_blood'),
                'phone_number' => $this->input->post('phone_number'),
            );
            $this->db->insert('students', $data);
            redirect('students/std_list');
        } else {
            $data['section_rows'] = $this->db->get('sections')->result();
            $data['class_rows'] = $this->db->get('classs')->result();
            $this->load->view('header');
            $this->load->view('add_student', $data);
            $this->load->view('footer');
        }
    }

    public function edit_student($student_id) {

        if ($_POST) {
            $data = array(
                's_name' => $this->input->post('s_name'),
                'f_name' => $this->input->post('f_name'),
                'm_name' => $this->input->post('m_name'),
                'p_add' => $this->input->post('p_add'),
                'pa_add' => $this->input->post('pa_add'),
                'std_birthday' => $this->input->post('std_birthday'),
                'std_id' => $this->input->post('std_id'),
                'class_id' => $this->input->post('std_class'),
                'section_id' => $this->input->post('std_section'),
                'std_gender' => $this->input->post('std_gender'),
                'std_blood' => $this->input->post('std_blood'),
                'phone_number' => $this->input->post('phone_number'),
            );
            $this->db->update('students', $data, array('id' => $student_id));
            redirect('students/std_list');
        } else {
            $data['row'] = $this->db->get_where('students', array('id' => $student_id))->row();
            $data['section_rows'] = $this->db->get('sections')->result();
            $data['class_rows'] = $this->db->get('classs')->result();
            $this->load->view('header');
            $this->load->view('edit_student', $data);
            $this->load->view('footer');
        }
    }

    public function student_delete($student_id) {
        $this->db->delete('students', array('id' => $student_id));
        redirect('students/std_list');
    }

    public function std_list() {

        $studetn_rows = $this->db->select('students.*, classs.cls_name, sections.sec_name')
                        ->join('classs', 'classs.id=students.class_id', 'left')
                        ->join('sections', 'sections.id=students.section_id', 'left')
                        ->get('students')->result();
        $this->load->view('header');
        $this->load->view('std_list', array('rows' => $studetn_rows));
        $this->load->view('footer');
    }

    public function class_list() {

        $class_rows = $this->db->get('classs')->result();
        $this->load->view('header');
        $this->load->view('class_list', array('rows' => $class_rows));
        $this->load->view('footer');
    }

    public function add_section() {

        if ($_POST) {
            $data = array(
                'sec_name' => $this->input->post('sec_name'),
            );
            $this->db->insert('sections', $data);
            redirect('students/section_list');
        } else {
            $this->load->view('header');
            $this->load->view('add_section');
            $this->load->view('footer');
        }
    }

    public function section_edit($section_id) {
        if ($_POST) {
            $data = array(
                'sec_name' => $this->input->post('sec_name'),
            );
            $this->db->update('sections', $data, array('id' => $section_id));
            redirect('students/section_list');
        } else {
            $row = $this->db->get_where('sections', array('id' => $section_id))->row();
            $this->load->view('header');
            $this->load->view('edit_section', array('row' => $row));
            $this->load->view('footer');
        }
    }

    public function section_delete($section_id) {
        $this->db->delete('sections', array('id' => $section_id));
        redirect('students/section_list');
    }

    public function section_list() {
        $section_rows = $this->db->get('sections')->result();
        $this->load->view('header');
        $this->load->view('section_list', array('rows' => $section_rows));
        $this->load->view('footer');
    }

    public function add_class() {

        if ($_POST) {
            $data = array(
                'cls_name' => $this->input->post('cls_name'),
            );
            $this->db->insert('classs', $data);
            redirect('students/class_list');
        } else {
            $this->load->view('header');
            $this->load->view('add_class');
            $this->load->view('footer');
        }
    }

    public function class_edit($class_id) {
        if ($_POST) {
            $data = array(
                'cls_name' => $this->input->post('cls_name'),
            );
            $this->db->update('classs', $data, array('id' => $class_id));
            redirect('students/class_list');
        } else {
            $row = $this->db->get_where('classs', array('id' => $class_id))->row();
            $this->load->view('header');
            $this->load->view('edit_class', array('row' => $row));
            $this->load->view('footer');
        }
    }

    public function class_delete() {
        $this->db->delete('classs', array('id' => $class_id));
        redirect('students/class_list');
    }

    public function take_attendence() {
        $students = array();
        $date = $this->input->get('date');
        $sec_id = $this->input->get('std_section');
        $cls_id = $this->input->get('std_class');
        $data['section_id'] = '';
        $data['class_id'] = '';
        $data['date'] = '';

        if ($date && $sec_id && $cls_id) {
            $students = $this->db->get_where('students', array('class_id' => $cls_id, 'section_id' => $sec_id))->result();
            $data['section_id'] = $sec_id;
            $data['class_id'] = $cls_id;
            $data['date'] = $date;
        }

        if ($_POST) {
            $data = array(
                'date' => $this->input->post('date'),
                'class_id' => $this->input->post('class_id'),
                'section_id' => $this->input->post('section_id'),
                'present_std_id' => json_encode($this->input->post('presents')),
            );
            $this->db->insert('student_attendence', $data);
            redirect('students/std_list');
        } else {
            $data['section_rows'] = $this->db->get('sections')->result();
            $data['class_rows'] = $this->db->get('classs')->result();
            $data['rows'] = $students;
            $this->load->view('header');
            $this->load->view('std_attendence_list', $data);
            $this->load->view('footer');
        }
    }

}
