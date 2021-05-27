<?php

class M_coment extends CI_Model
{
    public function getAllComent()
    {
        // LENGKAPI KODINGAN INI
        $query = $this->db->query("SELECT * FROM coment");
        return $query->result_array();
    }

    public function addComent($data)
    {
        $this->db->insert('coment', $data);
    }

    public function deleteComent($id)
    {
        return $this->db->delete('coment', ['id' => $id]);
    }

    public function Updatecoment($id, $data)
    {
        // LENGKAPI KODINGAN INI
        $this->db->where('id', $id);
        $this->db->update('coment', $data);
    }
}
