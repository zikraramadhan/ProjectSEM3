<?php
class Pengaduan_model extends CI_Model
{

    function get()
    {
        $hasil = $this->db->query("SELECT * FROM pengaduan order by id_laporan DESC");
        return $hasil->result_array();
    }

    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->where('id_laporan', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insert($data)
    {
        $this->db->insert('pengaduan', $data);
        return $this->db->insert_id();
    }

    public function update($id, $data)
    {
        $this->db->where('id_laporan', $id);
        $this->db->update('pengaduan', $data);
        return $this->db->affected_rows();
    }



    public function delete($id)
    {
        $this->db->where('id_laporan', $id);
        $this->db->delete('pengaduan');
        return $this->db->affected_rows();
    }
}
