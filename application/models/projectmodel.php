<?php

class Projectmodel extends CI_Model
{

    public function get_projects()
    {

        $query = $this->db->get('projects');
        return $query->result();
    }

    public function project_info($id)
    {

        $query = $this->db->get_where('projects', array('id' => $id));
        return $query->row();

    }

    public function create_project($data)
    {

        $query = $this->db->insert('projects', $data);
        return $query;
    }

    public function edit_project($id, $data)
    {

        $this->db->where('id', $id);
        $query = $this->db->update('projects', $data);

        return $query;

    }

    public function get_productinfo($id)
    {

        $this->db->where('id', $id);
        $get_data = $this->db->get('projects');

        return $get_data->row();

    }

    public function delete_project($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('projects');

        return $query;
    }

    public function get_all_projects($user_id)
    {
        $this->db->where('project_user_id', $user_id);
        $query = $this->db->get('projects');
        return $query->result();
    }
}
