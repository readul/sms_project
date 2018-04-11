<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public function index() {
        echo 'this is index. of user controller/class.';
    }

    public function registration() {

        if ($_POST) {
            $data = array(
                'name' => $this->input->post('std_name'),
                'parent' => $this->input->post('prnt_name'),
                'class' => $this->input->post('cls'),
                'section' => $this->input->post('sec'),
                'roll' => $this->input->post('std_roll'),
                'birthday' => $this->input->post('std_birthday'),
                'gender' => $this->input->post('std_gender'),
                'address' => $this->input->post('std_address'),
                'phone' => $this->input->post('phone_number'),
                'email' => $this->input->post('std_email'),
                'password' => $this->input->post('std_pass'),
            );

            $this->db->insert('users', $data);

            redirect('user/login');
        } else {
            $this->load->view('header');
            $this->load->view('registration');
            $this->load->view('footer');
        }
    }

    public function login() {
        if ($_POST) {
            $data = array(
                'email' => $this->input->post('std_email'),
                'password' => $this->input->post('std_pass'),
            );

            $count = $this->db->where($data)->count_all_results('users');

            if ($count > 0) {
                echo 'login success';
                $this->session->set_userdata('user_email', $this->input->post('std_email'));
                redirect('dashboard');
            } else {
                echo 'login failed.';
            }
        } else {
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
        }
    }

    public function user_profile() {
        if (!$this->session->userdata('user_email')) {
            redirect('user/login');
        } else {
            $this->load->view('user_profile');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
    }

}
