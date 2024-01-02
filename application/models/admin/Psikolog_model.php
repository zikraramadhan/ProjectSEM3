<?php
class psikolog_model extends CI_Model
{

    function get()
    {
        $hasil = $this->db->query("SELECT * FROM psikolog order by id_psikolog DESC");
        return $hasil->result_array();
    }

    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('psikolog');
        $this->db->where('id_psikolog', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insert($data)
    {
        $this->db->insert('psikolog', $data);
        return $this->db->insert_id();
    }

    public function update($where, $data)
    {
        $this->db->update('psikolog', $data, $where);
        return $this->db->affected_rows();
    }

    public function delete($id)
    {
        $this->db->where('id_psikolog', $id);
        $this->db->delete('psikolog');
        return $this->db->affected_rows();
    }
}
