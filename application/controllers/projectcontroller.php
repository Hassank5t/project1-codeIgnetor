<?php

class Projectcontroller extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();

        if (!$this->session->userdata('logged_in')) {

            $this->session->set_flashdata('no_access', 'Sorry...Please login first');
            redirect('homecontroller/index');
        }
    }

    public function index()
    {

        $data['project'] = $this->projectmodel->get_projects();
        $data['main_view'] = "project/index";

        $this->load->view('layout/main', $data);
    }

    // public function display()
    // {
    //     $data['project'] = $this->projectmodel->get_projects();
    //     $data['main_view'] = "project/display";
    //     $this->load->view('layout/main', $data);
    // }

    public function projectinfo($id)
    {

        $data['project'] = $this->projectmodel->project_info($id);

        // print_r($data);

        $data['main_view'] = "project/display";
        $this->load->view('layout/main', $data);
    }

    public function projectcreate()
    {

        $this->form_validation->set_rules('project_name', 'project_name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('project_body', 'project_body', 'trim|required|min_length[6]');

        if ($this->form_validation->run() == false) {

            $data['main_view'] = 'project/createproject';
            $this->load->view('layout/main', $data);
        } else {

            $data = array(
                'project_user_id' => $this->session->userdata('user_id'),
                'project_name' => $this->input->post('project_name'),
                'project_body' => $this->input->post('project_body'),

            );
            if ($this->projectmodel->create_project($data)) {

                $this->session->set_flashdata('project_created', 'Project Created Successfully');
                // echo '<pre>';
                // echo $this->session->flashdata('project_created');
                // exit;
                redirect("projectcontroller/index");

            }
        }
    }

    public function projectedit($id)
    {

        $this->form_validation->set_rules('project_name', 'project_name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('project_body', 'project_body', 'trim|required|min_length[6]');

        if ($this->form_validation->run() == false) {

            $data['project_data'] = $this->projectmodel->get_productinfo($id);

            $data['main_view'] = 'project/edit';
            $this->load->view('layout/main', $data);
        } else {

            $data = array(
                'project_user_id' => $this->session->userdata('user_id'),
                'project_name' => $this->input->post('project_name'),
                'project_body' => $this->input->post('project_body'),

            );
            if ($this->projectmodel->edit_project($id, $data)) {

                $this->session->set_flashdata('project_updated', 'Project updated Successfully');
                redirect("projectcontroller/index");

            }
        }
    }

    public function projectdelete($id)
    {

        // $this->session->set_flashdata('item', 'value');
        $this->projectmodel->delete_project($id);
        $this->session->set_flashdata('project_deleted', 'Project deleted Successfully');
        redirect("projectcontroller/index");

    }

}
