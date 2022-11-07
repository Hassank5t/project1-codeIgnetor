<?php

class Usermodel extends CI_Model
{

//for register user purpose

    public function create_user()
    {
        $option = ['cost' => 12];
        $encrypted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $option);


        $data = array(

            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'active' => 'false',
            'username' => $this->input->post('username'),
            'password' => $encrypted_pass,
        );

        $insert_data = $this->db->insert('users', $data);
        return $insert_data;

    }

//for login purpose
    public function login_user($username, $password)
    {

        $this->db->where('username', $username);

        $results = $this->db->get('users');
        $db_password = $results->row(2)->password;

        if (password_verify($password, $db_password)) {

            return $results->row(0)->id;
        } else {

            return false;
        }

    }
   

}
