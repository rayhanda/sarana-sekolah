<?php
class Items extends CI_model
{
    function select()
    {
        return $this->db->get('items')->result();
    }

    public function validation($mode)
    {
        $this->load->library('form_validation');

        if ($mode == "save")
            $this->form_validation->set_rules('item_code', 'Code', 'required|max_length[11]');

        $this->form_validation->set_rules('item_name', 'Name', 'required|max_length[50]');
        $this->form_validation->set_rules('qty', 'Qty', 'required');

        if ($this->form_validation->run())
            return true;
        else
            return false;
    }

    public function save()
    {
        $data = array(
            "item_code" => $this->input->post('item_code'),
            "item_name" => $this->input->post('item_name'),
            "qty" => $this->input->post('qty'),
        );

        $this->db->insert('items', $data);
    }

    public function edit($id)
    {
        $data = array(
            "item_code" => $this->input->post('item_code'),
            "item_name" => $this->input->post('item_name'),
            "qty" => $this->input->post('qty'),
        );

        $this->db->where('id', $id);
        $this->db->update('items', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('items');
    }
}
