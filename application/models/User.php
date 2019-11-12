<?php
class User extends CI_model
{
    public function select()
    {
        return $this->db->get('user');
    }
}
