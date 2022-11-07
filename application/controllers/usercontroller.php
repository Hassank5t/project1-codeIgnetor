<?php

class Usercontroller extends CI_Controller
{

    public function register()
    {

        $this->form_validation->set_rules('first_name', 'first_name', 'trim|required|min_length[2]|max_length[12]');
        $this->form_validation->set_rules('last_name', 'last_name', 'trim|required|min_length[1]|max_length[12]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[6]|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');

        if ($this->form_validation->run() == false) {

            $data['main_view'] = 'users/registerview';
            $this->load->view('layout/main', $data);
        } else {

            if ($this->usermodel->create_user()) {

                $this->session->set_flashdata('User_registered', 'Successfully Register');
                redirect('homecontroller/index');
            } else {

            }

        }
    }

    public function login()
    {

        // // echo "successfully submitted";
        // // echo $_POST['username'];
        // $this->input->POST('username');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');

        if ($this->form_validation->run() == false) {

            $data = array(

                'errors' => validation_errors(),
            );
            $this->session->set_flashdata($data);
            redirect('homecontroller/index');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user_id = $this->usermodel->login_user($username, $password);

            if ($user_id) {

                $user_data = array(

                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => true,

                );
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('login_success', 'Successfully login');

                // $data['main_view'] = 'adminview';
                // $this->load->view('layout/main', $data);
                redirect('homecontroller/index');
            } else {
                redirect('homecontroller/index');
                $this->session->set_flashdata('login_failed', 'Login failed');

            }
        }

    }

    public function logout()
    {

        $this->session->sess_destroy();
        redirect('homecontroller/index');
    }

}
