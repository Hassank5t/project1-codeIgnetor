<?php

class Homecontroller extends CI_Controller
{

    public function index()
    {
        if ($this->session->userdata('logged_in')) {

            $user_id = $this->session->userdata('user_id');

            $data['projects'] = $this->projectmodel->get_all_projects($user_id);
        }
        $data['main_view'] = "homeview";
        $this->load->view('layout/main', $data);
    }

}
